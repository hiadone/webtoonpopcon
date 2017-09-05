
<!-- 장르별 메뉴 스트립트 -->
<script>
$(document).ready(function(){
			/*로맨스영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid25?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#type01").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			
			/*액션영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid26?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#type02").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});

			/*광고1*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid27?>&lang=utf-8&out=json", 
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

			/*스포츠영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid28?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#type03").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			
			/*드라마영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid29?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#type04").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			
			/*광고2*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid30?>&lang=utf-8&out=json", 
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

			/*무협/판타지영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid31?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#type05").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			
			/*공포/스릴러 영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid32?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#type06").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			
			/*광고3*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid33?>&out=json", 
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

			$(".type_menu ul li").on("click",function(){
                $(".type_menu ul li").css('font-weight','normal').css('color','#000');
                $(this).css('color','#ff3d00');
                $(this).css('font-weight','bold');
                $('html, body').animate({scrollTop : ($("#"+$(this).data('id')).offset().top-($("#type01").offset().top+2 ))});
            });

            $('html, body').animate({scrollTop : 0});
            $(".type_menu ul li:nth-child(1)").css('font-weight','bold').css('color','#ff3d00');
});

</script>

<style>

.list01 .layout:nth-child(4)
	{
		margin-right: 2% !important; float: left !important;
	}
	.list01 .layout:nth-child(5)
	{
		float: left !important;
	}
	.list01 .layout:nth-child(6)
	{
		margin-right: 0% !important; float: left !important;
	}

</style>

<!-- 서브메뉴영역 -->
<nav class="type_menu">
    <ul>
        <li data-id="type01">로맨스</li>
        <li data-id="type02">액션</li>
        <li data-id="type03">스포츠</li>
        <li data-id="type04">드라마</li>
        <li data-id="type05">무협/판타지</li>
        <li data-id="type06">공포/스릴러</li>
    </ul>
</nav>

<div class="wrap_02">

<!-- 로맨스영역 -->
<section>
  <h2>로맨스</h2>
  <div id="type01" class="list01">
  </div>
</section>
<!-- -->

<!-- 액션 영역-->
<section>
  <h2>액션</h2>
  <div id="type02" class="list01">
  </div>
</section>
<!-- -->

<!-- 광고_01 영역 -->
<section class="ad">
    <figure id="ad_01"></figure>
</section>
<!-- --> 

<!-- 스포츠 영역-->
<section>
  <h2> 스포츠</h2>
  <div id="type03" class="list01">
  </div>
</section>
<!-- -->

<!-- 드라마 영역-->
<section>
  <h2> 드라마 </h2>
  <div id="type04" class="list01">
  </div>
</section>
<!-- -->

<!-- 광고_02 영역 -->
<section class="ad">
    <figure id="ad_02"></figure>
</section>
<!-- --> 

<!-- 판타지 영역-->
<section>
  <h2>무협/판타지 </h2>
  <div id="type05" class="list01">
  </div>
</section>
<!-- -->

<!-- 공포/스릴러영역 -->
<section>
  <h2> 공포/스릴러</h2>
  <div id="type06" class="list01">
  </div>
</section>

<!-- 광고영역 -->
<section class="ad">
    <figure id="ad_03"></figure>
</section>
<!-- -->
</div>
