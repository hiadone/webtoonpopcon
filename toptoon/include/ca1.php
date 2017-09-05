<script>
			/*투믹스독점작*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid18?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#only").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*pd강력추천작*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid19?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#pd").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*광고01*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid20?>&lang=utf-8&out=json", 
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
			/**/
			
			/*정주행추천작*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid21?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#recom01").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/

			/*광고2*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid22?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#ad_02").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/

			/*당신의 판타지를 이뤄줄 그녀들 영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid23?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#she").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*하단광고영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid24?>&out=json", 
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

<!-- 투믹스 독점작 영역 -->
<section>
  <h2>투믹스 독점작</h2>
  <div class="list03" id="only" >
  </div>
</section>
<!-- -->

<!--PD강력추천작 영역 -->
<section>
  <h2>PD 강력 추천작<span><a href="http://www.popapp.co.kr">더보기></a></span> </h2>
  <ul class="list02" id="pd">
  </ul>
</section>
<!-- -->

<!-- 광고_01 영역 -->
<section class="ad">
    <figure id="ad_01"></figure>
</section>
<!-- --> 

<!--정주행추천작 영역 -->
<section>
  <h2>정주행 추천작<span><a href="http://www.popapp.co.kr">더보기></a></span> </h2>
  <div id="recom01" class="list01">
  </div>
</section>
<!-- -->

<!-- 광고_02 영역 -->
<section class="ad">
    <figure id="ad_02"></figure>
</section>
<!-- -->

<!--당신의 판타지를 이뤄줄 그녀들  -->
<section>
  <h2>당신의 판타지를 이뤄줄 그녀들<span><a href="http://www.popapp.co.kr">더보기></a></span> </h2>
  <div id="she" class="list01">
  </div>
</section>
<!-- -->

<!--광고영역 -->
<section class="ad">
    <figure id="ad_03"></figure>
</section>
<!-- -->

</div>
