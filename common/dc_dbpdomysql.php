<?php
/*

PDO mysql

*/



class dc_dbpdomysql {

  /* public: connection parameters */
  var $Dsn                  = "";
  var $User                 = "";
  var $Password         = "";
  

  /* public: configuration parameters */
  var $Auto_Free            = 0;            // Set to 1 for automatic mysql_free_result()
  var $Debug                = 0;            // Set to 1 for debugging messages.
  var $Halt_On_Error        = "yes";        // "yes" (halt with message), "no" (ignore errors quietly), "report" (ignore errror, but spit a warning)
  var $Seq_Table            = "db_sequence";

  /* public: result array and current row number */
  var $Record               = array();
  var $Row;

  /* public: current error number and error text */
  var $Errno                = 0;
  var $Error                    = "";

  /* public: this is an api revision, not a CVS revision. */
  var $type                 = "mysql";
  var $revision             = "1.2";

  /* private: link and query handles */
  var $WorkRes              = 0;
  var $Query_ID         = 0;


  var $aRows                = array();
  var $RowCount         = 0;
  var $SqlType;
  
  
  var $Pdo ;
  var $Stmt;
    var $param=array();
    var $curquery;

  /* public: constructor */
  function dc_db_class($query = "") {
      $this->query($query);
  }

  /* public: connection management */
  function connect() {
    try {
        $this->Pdo=new PDO($this->Dsn,$this->User,$this->Password);
        //$this->Pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->Pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
      }
        catch( PDOException $Exception ) {
            // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
            // String.
            echo $Exception->getMessage();
            echo $Exception->getCode() ;

        }
    return true;
  }
  
    function check(){
    try {
        $this->Pdo=new PDO($this->Dsn, $this->User, $this->Password, array(PDO::ATTR_PERSISTENT => true));
        $this->Pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
      }
        catch( PDOException $Exception ) {
            // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
            // String.
            echo $this->Dsn.":".$this->User.":".$this->Password;
            echo $Exception->getMessage( );
            echo $Exception->getCode( ) ;
        }
    return true;
    }

  function disconnect() {
      $this->Pdo = null;
  }

  /* public: discard the query result */
  function free() {
  }

    function queryTop($Query_String){
        $this->pquery($Query_String);
        $row = $this->fetchrow();
        return $row;
    }
    
    function queryTopColumn($Query_String,$str){
        $this->query($Query_String);
        $row = $this->fetchrow();
        return $row[$str];
    }

    function queryAll($Query_String){
        $i=0;
        $this->query($Query_String);
        while($row = $this->fetchrow()){
            $rows[$i++]=$row;
        }
        return $rows;
    }


    function bindParam($key,$val,$datatype=null,$length=0){
        $a['_key']=$key;
        $a['_val']=$val;
        $a['_datatype']=$datatype;
        $a['_length']=$length;
        $this->param[]=$a;
    }
    
    function clearParam(){
        $this->param=array();
    }
    
    function pquerydebug($Query_String){
        $this->pquery($Query_String,true);
    }
    function pquery($Query_String,$debug=false){
        try {
            if (!$this->connect()) {
              return 0; /* we already complained in connect() about that. */
            }
            $msg="";
            $debugquery="";
            $curparam=array();
            $debugtrace=debug_backtrace();  
            for($i=0;$i<count($debugtrace);$i++){
                if($i==0) $msg .="\n";
                $msg .="    ";
                $msg .= "$i : ".$debugtrace[$i]['file']." : ".$debugtrace[$i]['line']."\n";
            }
            $msg .= "\n\t".str_replace("\n","\n\t",$Query_String);
            if($debug) echo "<pre>".$msg."</pre>";
            if ($Query_String == ""){
                if($GLOBALS[GL_DB_DEBUG] || $debug) echo nl2br($msg);
                echo "no input query";
                //df_gc2log($msg, PEAR_LOG_ERR, "_DBERROR",'false', '','');
              return 0;
            } 

            
            $Query_String=$debugquery.$Query_String;
            $this->curquery=$Query_String;
            $mt1 = microtime();
            if(!$Stmt = $this->Pdo->prepare($Query_String)){
                echo $msg;
            }
            
            $this->Stmt=$Stmt;
            for($i=0;$i<count($this->param);$i++){
                $cpar = $this->param[$i];
                if(isset($curparam['_length'])) $this->Stmt->bindParam($cpar['_key'],$cpar['_val'],PDO::PARAM_STR,$cpar['_size']);
                else if(isset($curparam['_datatype'])) $this->Stmt->bindParam($cpar['_key'],$cpar['_val'],$curparam['_datatype']);
                else {
                    if($this->Debug) echo $cpar['_key'].":".$cpar['_val']."<br>\n";
                    $this->Stmt->bindParam($cpar['_key'],$cpar['_val']);
                }
            }
            
            if($result=$this->Stmt->execute()){
                //df_gc2log($msg, PEAR_LOG_ERR, "_DBERROR",'false', '','');
            }else {
                $myeCode = $this->Stmt->errorInfo();
                //df_gc2log("DB ERROR", PEAR_LOG_ERR, "_DBERROR",'false', '','');
                $myeCode['query']=$Query_String;
                for($i=0;$i<count($k);$i++){
                    $msg.= "$i : ".$k[$i]['file'].":".$k[$i]['line']."\n";
                }
                $msg .="\n";
                for($i=0;$i<count($this->param);$i++){
                    $cpar = $this->param[$i];
                    $msg.= $cpar[_key]." = ".$cpar[_val]."\n";
                }
                if($myeCode[0]=="HY093") {
                    $myeCode[1]="Invalid parameter number: number of bound variables does not match number of tokens ";
                }
                $msg.= " ERROR code : ".$myeCode[0]."\n";
                $msg.= " ERROR msg : ".$myeCode[1]."\n";
                $msg.= " ERROR msg : ".$myeCode[2]."\n";
                echo "<pre>".$msg."</pre>";
                //df_gc2log($msg, PEAR_LOG_ERR, "_DBERROR",'false', '','');
                    exit;
            }
            if(isset($GLOBALS['GL_DEBUG_LOG_SET'])){
                $mt2 = microtime();
                if(df_mctimediff($mt1,$mt2)>0.0001) $target="_DBERROR";
                else $target="_DB";
                df_gc2log(session_id().$msg, PEAR_LOG_NOTICE, $target,'false', '','');
                df_gc2log(df_mctimediff($mt1,$mt2)."\n\n", PEAR_LOG_NOTICE,$target, 'false', '','');
            }
            if (!$result || $debug) 
            {
                $myeCode = $this->Stmt->errorInfo();
                //df_gc2log("DB ERROR", PEAR_LOG_ERR, "_DBERROR",'false', '','');
                $myeCode[query]=$Query_String;
                for($i=0;$i<count($k);$i++){
                    $msg.= "$i : ".$k[$i]['file'].":".$k[$i]['line']."\n";
                }
                $msg .="\n";
                for($i=0;$i<count($this->param);$i++){
                    $cpar = $this->param[$i];
                    $msg.= $cpar[_key]." = ".$cpar[_val]."\n";
                }
                if($myeCode[0]=="HY093") {
                    $myeCode[1]="Invalid parameter number: number of bound variables does not match number of tokens ";
                }
                $msg.= " ERROR code : ".$myeCode[0]."\n";
                $msg.= " ERROR msg : ".$myeCode[1]."\n";
                $msg.= " ERROR msg : ".$myeCode[2]."\n";
                //df_gc2log($msg, PEAR_LOG_ERR, "_DBERROR",'false', '','');
                echo "<pre>".$msg."</pre>";
                exit;
            }
            $this->clearParam();
            $this->Row = 0;
            $this->SqlType = trim(substr(strtoupper(ltrim($Query_String)),0,6));
            if($this->SqlType == "SELECT")
                $this->RowCount = $this->Stmt->rowCount();
            else
                $this->RowCount = $this->Stmt->rowCount();
        
            /*
            if (!$this->Query_ID) {
                $this->Error = mysql_error();
                if ($this->Errno == 145) {
                    $err_tmp1 = explode(" ", $this->Error);
                    $err_tmp2 = preg_replace("/'/", "", $err_tmp1[1]);
                    $table_tmp = explode("/", $err_tmp2);
                    $table_name = $table_tmp[count($table_tmp) - 1];
                    $repair_query = "repair table $table_name";
                        mysql_query($repair_query, $this->Link_ID);
                }
                $this->Query_ID = @@mysql_query($Query_String,$this->Link_ID);
            
                if (!$this->Query_ID) {
                    if($GL_QUERY_DEBUG){
                        $this->halt($this->Error."<br><br>$SCRIPT_NAME query: <pre>".$Query_String."</pre>");
                    }else {
                        $this->halt($this->Error."<br><br>$SCRIPT_NAME query: query_error");
                    }
                    return 0;
                }
            }
            */
            return $this->Stmt;
      }
        catch( PDOException $e ) {
            // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
            // String.
            echo $e->getMessage( );
            echo $e->getCode( ) ;
            exit;
        }
    }
  /* public: perform a query */
  function query($Query_String) {
        $this->pquery($Query_String);
  }

  function getInsertID()
  {
        return $this->Pdo->lastInsertId();
  }

  function fetchrow() {
      if($this->Record = $this->Stmt->fetch(PDO::FETCH_ASSOC)) return $this->Record;
      else return False;
  }

    function fetcharray() {
        if($this->Record = $this->Stmt->fetch(PDO::FETCH_NUM)) return $this->Record;
        else return False;
    }


  function find($pkey, $pval) {
     $stat = False;
     $this->seek(0);
     while($this->fetchrow()) {
       if($this->Record[$pkey] == $pval) {
          $stat = True;
          break;
       }
     }
     return $stat;
  }

  /* public: table locking */
  function lock($table, $mode="write") {
        if (!$this->connect()) {
          return 0;
        };
  }
  
    function debug($query){
        echo "<pre>";
        echo $query;
    for($i=0;$i<count($this->param);$i++){
            $cpar = $this->param[$i];
            $msg.= $cpar[_key]." = ".$cpar[_val]."\n";
        }
        echo $msg;
        echo "</pre>";
    }   


  /* public: evaluate the result (size, width) */
  function affected_rows() {
        return $this->RowCount;
  }

  function num_rows() {
        return $this->RowCount;
  }

  function num_fields() {
        //return @@mysql_num_fields($this->Query_ID);
  }

  /* public: shorthand notation */
  function nf() {
        return $this->num_rows();
  }

  function np() {
        print $this->num_rows();
  }

  function f($Name) {
        return $this->Record[$Name];
  }

  function p($Name) {
        print $this->Record[$Name];
  }

  /* public: sequence numbers */
  function nextid($seq_name) {
  }

  /* private: error handling */
  function halt($msg) {
        $this->Error = $this->Stmt->errorInfo();
        $this->Errno = $this->Stmt->errorCode();
        if ($this->Halt_On_Error == "no")
          return;
    
        $this->haltmsg($msg);
    
        if ($this->Halt_On_Error != "report")
          die("Session halted.");
  }

  function haltmsg($msg) {
       global $GL_WEBMASTEREMAIL, $GL_PRINTCOPYRIGHT, $GL_SITENAME;
       echo ("
       -오류발생 : ".$msg.$this->Error."<br>
       ".$this->curquery."<br>
     ");

        if($msg == 'Connection failed') {
           $msg = _("Database Connection Error");
        }
        exit;
  }

  function table_names() {
    $this->query("SHOW TABLES");
    $i=0;
    while ($info=mysql_fetch_row($this->Query_ID))
     {
      $return[$i]["table_name"]= $info[0];
      $return[$i]["tablespace_name"]=$this->Database;
      $return[$i]["database"]=$this->Database;
      $i++;
     }
   return $return;
  }




    
    
    
    
        function select($table, $field = "*", $cond = "", $orderby = "", $limit = "", $cond_2 = "")
    {
        if (is_array($table))
            $table = implode(",", $table);
        if (is_array($field))
            $field = implode(",", $field);      
        if (empty($cond) || is_null($cond))
            $where = "";
        else if (is_array($cond)) {
            if (count($cond) > 0)
                $where = "WHERE " . implode(" AND ", $cond);
            else
                $where = "";
        }
        else
            $where = "WHERE $cond";
        
        if (empty($orderby))
            $orderby = "";
        else
            $orderby = "ORDER BY $orderby";
        if (empty($limit))
            $limit = "";
        else
            $limit = "limit $limit";
        
        if (is_array($table)){
            $query = "SELECT " . $field_data1 . " FROM " . $table_data1 . " $where"
                . " UNION ALL "
                . "SELECT " . $field_data2 . " FROM " . $table_data2 . " $where_2 $orderby $limit";
        }
        else
            $query = "SELECT $field FROM " . $table . " $where $orderby $limit";
        
        //if($_SERVER['REMOTE_ADDR']=="192.168.12.138") echo $query;
        $this->query($query);
    }
    
    function select_count($table, $cond = "")
    {
        $this->select($table, '*', $cond);
        return $this->RowCount;
    }

    /**
     * @brief mysql update query 처리
     * @param $table update 대상 table
     * @param $name_values 설정할 필드 이름과 값
     * @param $cond where절에 대응하는 조건식
     *
     * $cond는 문자열에 대한 배열 혹은 문자열이어야 한다. 만약 문자열의 배열인 경우
     * AND 조건으로 연결하여 where 절을 자동으로 생성한다.
     */
    function update($table, $name_values, $cond = "")
     {
        if (empty($cond))
            $where = "";
        else if (is_array($cond)) {
            if (count($cond) > 0)
                $where = "WHERE " . implode(" AND ", $cond);
            else
                $where = "";
        }
        else
            $where = "WHERE $cond";
        
        if (is_array($name_values)) {
            $name_values = implode(',', $name_values);
        }
        $query = "UPDATE $table SET $name_values $where";
        $this->query($query);
    }

    function update2($table, $names, $values, $conds)
     {
        if (empty($conds))
            $where = "";
        else if (is_array($conds)) {
            if (count($conds) > 0)
                $where = "WHERE " . implode(" AND ", $conds);
            else
                $where = "";
        }
        else
            $where = "WHERE $conds";
        
        if (!is_array($names))
            $names = explode(',', $names);
        if (!is_array($values))
            $values = explode(',', $values);
        $name_values = array();
        for ($i = 0; $i < count($names); $i++) {
            $value = $values[$i];
            $name_values[] = "$names[$i] = :$names[$i] ";
            $this->bindParam(':'.$names[$i],$value,PDO::PARAM_STR);
        }
        $name_values = implode(',', $name_values);
        $query = "UPDATE $table SET $name_values $where";
        $this->query($query);
    }

    /**
     * @brief mysql insert query 처리
     * @param $table insert 대상 table
     * @param $names 추가시 설정할 필드 이름, comma로 구분되는 문자열
     * @param $values 설정할 값, comma로 구분되는 문자열
     */
    function insert($table, $names, $values)
    {
        if (is_array($names))
            $names = implode(',', $names);
        if (is_array($values)) {
            $values_esc = array();
            foreach ($values as $value) {
                if (is_string($value))
                    $value = "'" . mysql_real_escape_string($value) . "'";
                else if (!$value)
                    $value = "''";
                $values_esc[] = $value;
            }
            $values = implode(',', $values_esc);
        }
        $query = "INSERT INTO $table ($names) values ($values)";
        $this->query($query);
    }
    
    /**
     * @brief mysql replace query 처리
     * @param $table replace 대상 table
     * @param $names 추가시 설정할 필드 이름, comma로 구분되는 문자열
     * @param $values 설정할 값, comma로 구분되는 문자열
     */
    function replace($table, $names, $values)
    {
        if (is_array($names))
            $names = implode(',', $names);
        if (is_array($values)) {
            $values_esc = array();
            foreach ($values as $value) {
                if (is_string($value))
                    $value = "'" . mysql_real_escape_string($value) . "'";
                else if (!$value)
                    $value = "''";
                $values_esc[] = $value;
            }
            $values = implode(',', $values_esc);
        }

        $query = "REPLACE INTO $table ($names) values ($values)";
        $this->query($query);
    }
    
    /**
     * @brief mysql delete query 처리
     * @param $table delete 대상 table
     * @param $cond where절에 대응하는 조건식.  배열 혹은 조건을 나타내는 문자
     *
     * $cond는 문자열에 대한 배열 혹은 문자열이어야 한다. 만약 문자열의 배열인 경우
     * AND 조건으로 연결하여 where 절을 자동으로 생성한다.
     */
    function delete($table, $cond = null)
    {
        if (is_array($cond))
            $cond = implode(" AND ", $cond);

        if ($cond)
            $cond_str = "WHERE $cond";
        else
            $cond_str = "";
        $query = "delete from $table $cond_str";
        $this->query($query);
    }

    /**
     * @brief
     */
    function delete2($table, $conds, $using_tables = "")
    {
        if (is_array($conds))
            $conds = implode(" AND ", $conds);
        if ($using_tables) {
            if (is_array($using_tables))
                $using_tables = implode(", ", $using_tables);
            $using_tables_str = "\nUSING $using_tables";
        }
        else
            $using_tables_str = "";
        $query = "DELETE FROM $table $using_tables_str WHERE $conds";
        $this->query($query);
    }
}



    class dc_pdo extends dc_dbpdomysql {
        var $datefmt = "YYYY/MM/DD";
        function dc_pdo()
        {
            global  $GL_DB_USER, $GL_DB_PASSWORD,$GL_DB_NAME,$GL_DSN;
            $this->Dsn = $GL_DSN;
            $this->User  = $GL_DB_USER;
            $this->Password = $GL_DB_PASSWORD;
        }
    }

    class dc_db extends dc_dbpdomysql {
        var $datefmt = "YYYY/MM/DD";
        var $DbName = "ENDB";

        function dc_db()
        {
            global  $GL_DB_USER, $GL_DB_PASSWORD,$GL_DB_NAME,$GL_DSN;
            $this->Dsn = $GL_DSN;
            $this->User  = $GL_DB_USER;
            $this->Password = $GL_DB_PASSWORD;
        }
    }
        
    
