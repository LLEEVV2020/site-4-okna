 <!-- Сложный блок, скрипты -->
 <div class="template es9_correct_balcony">
        <div class="container">
            <div class="h2">ПОПУЛЯРНЫЕ ВИДЫ ОСТЕКЛЕНИЯ БЕСЕДОК, ВЕРАНД И ТЕРРАС </div>
    
            
    
            <div class="calc_outside_balkon-filtr">
    
                    <div class="calc_outside_hot calc_outside_balkon__li">ХОЛОДНОЕ ОСТЕКЛЕНИЕ</div>
                    <div class="hidden-sm hidden-xs calc_outside_flex">
                        <div class="calc_outside_img_hot"></div>
                        <div class="calc_outside_img_cold"></div>
                    </div>
                    <div class="calc_outside_cold calc_outside_balkon__li calc_outside_balkon__li_noact">ТЕПЛОЕ ОСТЕКЛЕНИЕ</div>
    
            </div><!-- /.calc_outside_balkon-filtr -->
    
            <div class="calc_outside_balkon">
    
                <div class="hot_right">
                    <div class="redzag">
                        РАЗДВИЖНЫЕ СТВОРКИ</div>
                    
                    <div class="textmaxecon">максимальная<br>экономия тепла</div>
    
                    <div class="yellowzag red-button">ВЫБЕРИТЕ ЦВЕТ ПРОФИЛЯ</div>
    
                    <div class="calc_outside_ico">
                        <div class="calc_outside_ico1 calc_outside_ico1_act"></div>
                        <div class="calc_outside_ico2"></div>
                        <div class="calc_outside_ico3"></div>
                        <div class="calc_outside_ico4"></div>
                    </div><!-- /.calc_outside_ico -->
    
    
                </div><!-- /.hot_right -->
    
                <div class="cold_right">
                    <div class="redzag">РАСПАШНЫЕ СТВОРКИ</div>
                        
                    <div class="textmaxecon">максимальная<br>экономия пространства!</div>
    
                    <div class="yellowzag red-button">ВЫБЕРИТЕ ЦВЕТ ПРОФИЛЯ</div>
                    <div class="calc_outside_ico">
                        <div class="calc_outside_ico1 calc_outside_ico1_act"></div>
                        <div class="calc_outside_ico2"></div>
                        <div class="calc_outside_ico3"></div>
                        <div class="calc_outside_ico4"></div>
                    </div><!-- /.calc_outside_ico -->
    
    
                </div><!-- /.cold_right -->
    
                <div class="hotcold">
    
                    <div class="hot"><div class="temperatyra"></div></div>
    
                    <div class="cold cold_noact"><div></div></div>
    
                </div><!-- /.hotcold -->
    
            </div><!-- /.calc_outside_balkon -->
    
    
    
           
        </div>
              <script>
              $(document).ready(function() {
    
    
                  $('.calc_outside_cold').click(function() {
                      $('.cold').removeClass('cold_noact');			  			  	
                      $('.hot').addClass('hot_noact');
                      $('.cold_right').css("display","block");
                      $('.hot_right').css("display","none");	
                      $('.calc_outside_hot').addClass('calc_outside_balkon__li_noact');
                      $('.calc_outside_cold').removeClass('calc_outside_balkon__li_noact');
                      $('.calc_outside_img_hot').css("display","none");
                      $('.calc_outside_img_cold').css("display","inline-block");	
                  });
    
                  $('.calc_outside_img_hot').click(function() {
                      $('.cold').removeClass('cold_noact');
                      $('.hot').addClass('hot_noact');
                      $('.cold_right').css("display","block");
                      $('.hot_right').css("display","none");
                      $('.calc_outside_hot').addClass('calc_outside_balkon__li_noact');
                      $('.calc_outside_cold').removeClass('calc_outside_balkon__li_noact');
                      $('.calc_outside_img_hot').css("display","none");
                      $('.calc_outside_img_cold').css("display","inline-block");
                  });
    
                  $('.calc_outside_hot').click(function() {
                      $('.cold').addClass('cold_noact');
                      $('.hot').removeClass('hot_noact');
                      $('.cold_right').css("display","none");
                      $('.hot_right').css("display","block");
                      $('.calc_outside_hot').removeClass('calc_outside_balkon__li_noact');
                      $('.calc_outside_cold').addClass('calc_outside_balkon__li_noact');
                      $('.calc_outside_img_hot').css("display","inline-block");
                      $('.calc_outside_img_cold').css("display","none");
                  });
    
                  $('.calc_outside_img_cold').click(function() {
                      $('.cold').addClass('cold_noact');
                      $('.hot').removeClass('hot_noact');
                      $('.cold_right').css("display","none");
                      $('.hot_right').css("display","block");
                      $('.calc_outside_hot').removeClass('calc_outside_balkon__li_noact');
                      $('.calc_outside_cold').addClass('calc_outside_balkon__li_noact');
                      $('.calc_outside_img_hot').css("display","inline-block");
                      $('.calc_outside_img_cold').css("display","none");
                  });
    
    
    
                  $('.calc_outside_ico1').click(function() {
                      $('.calc_outside_ico1').addClass('calc_outside_ico1_act');
                      $('.calc_outside_ico2').removeClass('calc_outside_ico2_act');
                      $('.calc_outside_ico3').removeClass('calc_outside_ico3_act');
                      $('.calc_outside_ico4').removeClass('calc_outside_ico4_act');
                      //$('.hot').css("background","url(img/hot_1.jpg)");/*1 - ая картинка*/
                      //$('.cold').css("background","url(img/cold_1.jpg)");/*1 - ая картинка*/
                      $('.hot').css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/popul-vid-ostekl.png)");/*1 - ая картинка*/
                      $('.cold').css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/popul-vid-ostekl.png)");/*1 - ая картинка*/
                        $('.hot').css("background-size","cover");
                        $('.cold').css("background-size","cover");
                  });
    
                  $('.calc_outside_ico2').click(function() {
                      $('.calc_outside_ico1').removeClass('calc_outside_ico1_act');
                      $('.calc_outside_ico2').addClass('calc_outside_ico2_act');
                      $('.calc_outside_ico3').removeClass('calc_outside_ico3_act');
                      $('.calc_outside_ico4').removeClass('calc_outside_ico4_act');
                      //$('.hot').css("background","url(img/hot_2.jpg)");  /*2 - ая картинка*/
                      //$('.cold').css("background","url(img/cold_2.jpg)");/*2 - ая картинка*/
                      $('.hot').css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/popul-vid-ostekl.png)");  /*2 - ая картинка*/
                      $('.cold').css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/popul-vid-ostekl.png)");/*2 - ая картинка*/
                        $('.hot').css("background-size","cover");
                        $('.cold').css("background-size","cover");
                  });
    
                  $('.calc_outside_ico3').click(function() {
                      $('.calc_outside_ico1').removeClass('calc_outside_ico1_act');
                      $('.calc_outside_ico2').removeClass('calc_outside_ico2_act');
                      $('.calc_outside_ico3').addClass('calc_outside_ico3_act');
                      $('.calc_outside_ico4').removeClass('calc_outside_ico4_act');
                      //$('.hot').css("background","url(img/hot_3.jpg)"); /*3 - ая картинка*/
                      //$('.cold').css("background","url(img/cold_3.jpg)");/*3 - ая картинка*/
                        $('.hot').css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/popul-vid-ostekl.png)"); /*3 - ая картинка*/
                      $('.cold').css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/popul-vid-ostekl.png)");/*3 - ая картинка*/
                        $('.hot').css("background-size","cover");
                        $('.cold').css("background-size","cover");
                  });
    
                  $('.calc_outside_ico4').click(function() {
                      $('.calc_outside_ico1').removeClass('calc_outside_ico1_act');
                      $('.calc_outside_ico2').removeClass('calc_outside_ico2_act');
                      $('.calc_outside_ico3').removeClass('calc_outside_ico3_act');
                      $('.calc_outside_ico4').addClass('calc_outside_ico4_act');
                      //$('.hot').css("background","url(img/hot_4.jpg)"); /*4 - ая картинка*/
                     // $('.cold').css("background","url(img/cold_4.jpg)"); /*4 - ая картинка*/
                      $('.hot').css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/popul-vid-ostekl.png)"); /*4 - ая картинка*/
                      $('.cold').css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/popul-vid-ostekl.png)"); /*4 - ая картинка*/
                        $('.hot').css("background-size","cover");
                        $('.cold').css("background-size","cover");
                  });
    
              });
          </script>
            <style>
                /** site-4-okna\src\style\site\balcons\main*/
            </style>
    </div>