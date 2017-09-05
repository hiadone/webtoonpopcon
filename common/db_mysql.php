<?php
/**
 * @file db_mysql.php
 * @brief SELECT, DELETE, UPDATE등에 대한 간편한 인터페이스 제공. dc_db_class에 기반
 */


/**
 * @brief select, delete, update등의 query를 간편하게 쓸 수 있도록 dc_db_class를 확장하여 정의함
 */
class DB_mysql extends dc_dbpdomysql {
    function DB_mysql($host, $user, $password)
    {
            
            $this->Dsn =  $host;
            $this->User  = $user;
            $this->Password = $password;
    }

    /**
    * @brief mysql select query 처리
    * @param $table select 대상 table
    * @param $field 선택할 컬럼
    * @param $cond where절에 대응하는 조건식.
    *
    * $cond는 문자열에 대한 배열 혹은 문자열이어야 한다. 만약 문자열의 배열인 경우
    * AND 조건으로 연결하여 where 절을 자동으로 생성한다.
    */
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
        
        $this->pquery($query);
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
            if (is_string($value))
                $value = "'" . mysql_real_escape_string($value) . "'";
            else if (!$value)
                $value = "''";
            $name_values[] = "$names[$i] = $value";
        }
        $name_values = implode(',', $name_values);
        $query = "UPDATE $table SET $name_values $where";
        echo $query."<br>";
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

?>
