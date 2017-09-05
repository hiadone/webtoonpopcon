<script>

			/*월요일*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid10?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#mon").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/

			/*화요일요일별리스트*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid11?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#tues").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*수요일요일별리스트*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid12?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#wed").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/

			/*목요일요일별리스트*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid13?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#thu").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/

			/*금요일요일별리스트*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid14?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#fri").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/

			/*토요일요일별리스트*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid15?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#sat").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/

			/*일요일요일별리스트*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid16?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#sun").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*하단광고영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid17?>&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#ad_03").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*하단 푸터 광고 영역
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=03vw&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#footer_ad").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/

</script>




<div class="wrap">

<!--월요일 영역 -->
<section>
  <h2>월요일</h2>
    <div class="list01" id="mon">
    </div>
</section>
<!-- -->

<!--화요일 영역 -->
<section>
  <h2> 화요일</h2>
  <div class="list01" id="tues" >
  </div>
</section>
<!-- -->

<!--수요일 영역 -->
<section>
  <h2> 수요일</h2>
  <div class="list01" id="wed">
  </div>
</section>
<!-- -->

<!--목요일 영역 -->
<section>
  <h2> 목요일</h2>
  <div class="list01" id="thu">
  </div>
</section>
<!-- -->

<!--금요일 영역 -->
<section>
  <h2> 금요일</h2>
  <div class="list01" id="fri">
  </div>
</section>
<!-- -->

<!--토요일 영역 -->
<section>
  <h2> 토요일</h2>
  <div class="list01" id="sat">
  </div>
</section>
<!-- -->

<!--일요일 영역 -->
<section>
  <h2> 일요일</h2>
  <div class="list01" id="sun">
  </div>
</section>
<!-- -->

<!--광고영역 -->
<section class="ad">
    <figure class="cont" id="ad_03"></figure>
</section>
<!-- -->

</div>