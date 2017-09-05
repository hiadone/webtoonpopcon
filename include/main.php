<script>
var js_data;
var weekPageId;
$(document).ready(function () {
	     js_data = '<?php echo json_encode($weekPageId); ?>';
            weekPageId = JSON.parse(js_data );
			/*상단 배너 (슬라이드영역)*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid1?>&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{    
                
				$("#bxslider").html(data.tag); 
				$('.bxslider').bxSlider({
                //work method
                mode: 'horizontal', // 'horizontal' : 좌,우 'vertical' : 상,하 'fade' : fade in, out
                speed: 1000, // m/s ex > 1000 = 1s
                easing: 'ease-in-out', // 동작 가속도 css와 동일
                slideMargin:0, // img와 img 사이 간격
                startSlide: 0, // 시작시 로드될 이미지 (0부터시작)
                preloadImages: 'visible', // "visible"은 보여질때 이미지를 로드, "all"로 설정하면 이미지가 모드 로드되야 작동.
                randomStart: false, //시작시 랜덤으로 이미지 로드 여부 (boolean)
                adaptiveHeight: false, //각 이미지의 높이에 따라 슬라이더 높이의 유동적 조절 여부
                adaptiveHeightSpeed: 300, //adaptiveHeight 동작속도
                video: true,//slide에 video 사용여부, 사용할 시에 plugins/jquery.fitvids.js include 필요
                captions:false, // img 태그에 title 속성값을 사용할시, 그부분의 출력여부 단, css .bx-wrapper .bx-caption 부분 조절 필요

                //responsive method
                responsive: true,//반응형 지원 여부

                touchEnabled: true,//터치스와이프 기능 사용여부
                swipeThreshold: 50,//터치하여 스와이프 할때 변환 효과에 소모되는 시간 설정
                oneToOneTouch: true, // fade 효과가 아닌 슬라이드는 손가락의 접지상태에 따라 슬라이드를 움직일수있다.
                preventDefaultSwipeX: true, // onoToOneTouch 에서 true일 경우, 손가락을따라 x축으로 움직일지에 대한 여부
                preventDefaultSwipeY:false , // onoToOneTouch 에서 true일 경우, 손가락을따라 y축으로 움직일지에 대한 여부

                //control method
                controls: true, // 좌,우 컨트롤 버튼 출력 여부

                auto: true, // 자동 재생 활성화
                autoControls:false, //자동재생 제어버튼 활성화  단, auto 모드가 활성화 되어있어야함.

                autoControlsCombine:false, // 재생시 중지버튼 활성화, 중지시 재생버튼 활성화
                pause:4000, // 자동 재생 시 각 슬라이드 별 노출 시간
                autoStart: true, // 페이지 로드가 되면, 슬라이드의 자동시작 여부
                autoDirection: 'next', // 자동 재생 시에 정순, 역순(prev) 방식 설정
                autoHover: true, // 슬라이드 오버시 재생 중단 여부 (false: 오버무시) 
                autoDelay:0, // 자동 재생 전 대기 시간 설정
                hideControlOnEnd: false, //첫번째 슬라이드 일경우 이전 버튼 삭제, 마지막 슬라이드 일 경우 다음 버튼 삭제 단, infiniteLoop: false 일 경우만 사용 가능.
                infiniteLoop: true,//마지막에 도달 했을시, 첫페이지로 갈 것인가 멈출것인가
			 });     	

			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*웹툰 순위영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid2?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#rank").append(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*요일별요일별리스트*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$weekPageId[date('w')]?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#daylist").html(data.tag); 
			  $("nav.day ul li:nth-child(<?=date('w')?>)").addClass('active');
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*광고1*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid4?>&lang=utf-8&out=json", 
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
			
			/*완결웹툰리스트*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid5?>&lang=utf-8&out=json",  
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#endlist").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*광고2*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid6?>&lang=utf-8&out=json", 
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
			
			/*성인웹툰영역*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid7?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#adult_toon").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*주간베스트*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid8?>&lang=utf-8&out=json", 
			url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
			cache: false, 
			dataType: "jsonp", 
			jsonp: "jquerycallback", 
			success: function(data) 
			{
			  $("#weekbest").html(data.tag); 
			},
			error: function(xhr, status, error) { ; } 
			});
			/**/
			
			/*광고3*/
			$.ajax({
			type: "GET", 
			async: true,
			data: "pageid=<?=$pageid9?>&out=json", 
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


            $("nav.day ul li").on("click",function(index){
                var week=$(this).data('week');
                var index=$(this).index()+1;
                $.ajax({
                    type: "GET", 
                    async: true,
                    data: "pageid="+weekPageId[week]+"&lang=utf-8&out=json",  //오늘날짜 기준으로 요일 키값을 불러옴
                    url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
                    cache: false, 
                    dataType: "jsonp", 
                    jsonp: "jquerycallback", 
                    success: function(data) 
                    {
                        $('#daylist').hide();
                        $("#daylist").html(data.tag).fadeIn("slow"); 
                        //해당 요일에 대한 css 활성화
                        $("nav.day ul li").removeClass('active');
                        $("nav.day ul li:nth-child("+index+")").addClass('active');
                    },
                    error: function(xhr, status, error) { ; } 
                });
            });

	});

</script>



<div class="wrap"> 
  <!-- 웹툰순위-->
  <section>
    <dl class="cont" id="rank">
      <dt class="slide"> 
        <ul class="bxslider" id="bxslider">
        </ul>
       <div class="newPager"></div>
       <div class="newAutoControl"></div>
       <span class="btn prev"></span>
       <span class="btn next"></span>    
      </dt>
	</dl>
  </section>
  <!-- --> 
  
  <!-- 요일별웹툰-->
  <section>
    <h2> 요일별웹툰</h2>
    <!-- 요일 영역 -->
    <nav class="day">
        <ul>
          <li data-week=1><a>월</a></li>
          <li data-week=2><a>화</a></li>
          <li data-week=3><a>수</a></li>
          <li data-week=4><a>목</a></li>
          <li data-week=5><a>금</a></li>
          <li data-week=6><a>토</a></li>
          <li data-week=0><a>일</a></li>
        </ul>
    </nav>
    <!-- 요일별 요일별 리스트 영역 -->
    <div class="list01" id="daylist">
    </div>
   </section>
  <!-- --> 
   

  <!-- 광고_01 영역 -->
  <section class="ad">
    <figure id="ad_01"></figure>
	</section>
  <!-- -->  
   
  <!-- 완결웹툰 영역 -->
  <section>
    <h2> 완결웹툰</h2>
    <div  class="list03" id="endlist">
    </div>
  </section>
  <!-- --> 
  
  <!-- 장르별 웹툰 영역 -->
  <section>
    <h2> 장르별 웹툰 </h2>
    <nav class="cont" id="toon_type">
      <ul>
        <li><a href="./index.php?MD=<?php echo $MD?>&ad=ca3" >로맨스</a></li>
        <li><a href="./index.php?MD=<?php echo $MD?>&ad=ca3">액션</a></li>
        <li><a href="./index.php?MD=<?php echo $MD?>&ad=ca3">스포츠</a></li>
        <li><a href="./index.php?MD=<?php echo $MD?>&ad=ca3">드라마</a></li>
        <li><a href="./index.php?MD=<?php echo $MD?>&ad=ca3">무협/판타지</a></li>
        <li><a href="./index.php?MD=<?php echo $MD?>&ad=ca3">공포/스릴러</a></li>
      </ul>
    </nav>
  </section>
  <!-- --> 
  
  <!-- 광고_02 영역 -->
  <section class="ad">
    <figure id="ad_02"></figure>
  </section>
  <!-- --> 
  
  <!-- 성인웹툰 영역 -->
  <section>
    <h2> 성인웹툰</h2>
    <div id="adult_toon" class="list03">
    </div>
  </section>
  <!-- --> 
  
  <!-- 주간베스트 영역 -->
  <section>
    <h2> 주간베스트</h2>
    <ul class="list02" id="weekbest">
    </ul>
  </section>
  <!-- --> 
  
  <!--광고_03 영역 -->
  <section class="ad">
        <figure id="ad_03"></figure>
  </section>
  <!-- --> 
</div>