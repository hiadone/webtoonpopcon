<script>

			/*완결웹툰1*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid34?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#end01").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});

			/*광고1*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid35?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#ad_01").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});

            /*완결웹툰2*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid36?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#end02").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			
			/*하단광고영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid37?>&out=json", 
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
<!-- 완결웹툰1 -->
<section>
  <h2> 완결웹툰</h2>
  <div id="end01" class="list03">
  </div>
</section>
<!-- -->

<!-- 광고1 영역 -->
<section class="ad">
    <figure id="ad_01"></figure>
</section>
<!-- --> 

<!-- 완결웹툰 영역 2 -->
<section>
  <h2> 완결웹툰</h2>
  <div id="end02"  class="list03">
  </div>
</section>
<!-- -->

<!-- 광고영역 -->
<section class="ad">
    <figure id="ad_03"></figure>
</section>
<!-- -->
</div>