<div class="b-derevo_calc-wrapper template">
        <div class="container container-abs">
            <div class="b-derevo_calc " style="background: url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/bg_2.jpg) center center no-repeat;">
                <div class="b-derevo_calc__ruch" style="background: url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/ruch_4.png) center center no-repeat;">

                </div><!-- b-derevo_calc__ruch -->
            </div> 
        </div>


    <div class="container">		    
        <div class="h2">Выберите свой цвет окна и фурнитуры</div>

        <div class="tsvet_ramy">
            <div class="head-top">Цвет рамы <span></span></div>

            <div class="flex-row">
                <div class="">
                    <div class="color-img"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/color1.png" alt="" class="color1 "></div> 

                    <span>Вишня</span>
                </div>
                <div class="">
                    <div class="color-img color-img-act"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/color2.png" alt="" class="color2 "></div> 

                    <span>Дуб</span>
                </div>
                <div class="" >
                    <div class="color-img"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/color3.png" alt="" class="color3 "></div> 
                    <span>Каштан</span>
                </div>
                <div class="">
                    <div class="color-img"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/color4.png" alt="" class="color4 "></div> 

                    <span>Сосна</span>
                </div>
                <div class="">
                    <div class="color-img"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/color5.png" alt="" class="color5 "></div> 

                    <span>Ольха</span>
                </div>
                <div class="">
                    <div class="color-img"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/color6.png" alt="" class="color6 "></div> 

                    <span>Клен</span>
                </div>
            </div>

        </div><!-- tsvet_ramy -->


        <div class="tsvet_ruch">
            <div class="head-top">ЦВЕТ ФУРНИТУРЫ <span></span></div>

            <div class="flex-row">
                <div class="">
                    <div class="color-img"> <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/f_color1.png" alt="" class="color1 "></div>
                    <span>Серебро</span>
                </div>
                <div class="">
                    <div class="color-img"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/f_color2.png" alt="" class="color2 "></div> 

                    <span>Золото</span>
                </div>
                <div class="">
                    <div class="color-img"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/f_color3.png" alt="" class="color3 "></div> 

                    <span>Бронза</span>
                </div>
                <div class="">
                    <div class="color-img color-img-act"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/f_color4.png" alt="" class="color4 "></div> 

                    <span>Титан</span>
                </div>
                <div class="">
                    <div class="color-img"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/f_color5.png" alt="" class="color5 "></div> 

                    <span>Белое золото</span></div>
                <div class="">
                    <div class="color-img"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/f_color6.png" alt="" class="color6 "></div> 

                    <span>Медь</span>
                </div>
            </div>

        </div><!-- tsvet_ruch -->


    </div><!-- container -->
    <script>
        $(document).ready(function() {
            $(".tsvet_ramy .color-img").click(function () { 
                $(".tsvet_ramy .color-img").removeClass("color-img-act");
                $(this).addClass("color-img-act");
            });
            $(".tsvet_ruch  .color-img").click(function () { 
                $(".tsvet_ruch  .color-img").removeClass("color-img-act");
                $(this).addClass("color-img-act");
            });

            $(".tsvet_ramy .color1").click(function () { 
                    $(".b-derevo_calc").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/bg_1.jpg) no-repeat center center");

            });

            $(".tsvet_ramy .color2").click(function () { 
                $(".b-derevo_calc").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/bg_2.jpg) no-repeat center center"); 

            });

            $(".tsvet_ramy .color3").click(function () { 
                $(".b-derevo_calc").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/bg_3.jpg) no-repeat center center"); 

            });

            $(".tsvet_ramy .color4").click(function () { 
                $(".b-derevo_calc").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/bg_4.jpg) no-repeat center center"); 

            });

            $(".tsvet_ramy .color5").click(function () { 
                $(".b-derevo_calc").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/bg_5.jpg) no-repeat center center"); 

            });

            $(".tsvet_ramy .color6").click(function () { 
                $(".b-derevo_calc").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/bg_6.jpg) no-repeat center center"); 

            });


            $(".tsvet_ruch .color1").click(function () { 
                $(".b-derevo_calc__ruch").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/ruch_1.png) no-repeat center center");

            });

            $(".tsvet_ruch .color2").click(function () { 
                $(".b-derevo_calc__ruch").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/ruch_2.png) no-repeat center center"); 

            });

            $(".tsvet_ruch .color3").click(function () { 
                $(".b-derevo_calc__ruch").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/ruch_3.png) no-repeat center center"); 

            });

            $(".tsvet_ruch .color4").click(function () { 
                $(".b-derevo_calc__ruch").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/ruch_4.png) no-repeat center center"); 

            });

            $(".tsvet_ruch .color5").click(function () { 
                $(".b-derevo_calc__ruch").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/ruch_5.png) no-repeat center center"); 

            });

            $(".tsvet_ruch .color6").click(function () { 
                $(".b-derevo_calc__ruch").css("background","url(//<?php echo $_SERVER['SERVER_NAME']; ?>/img/derevo/podbor/ruch_6.png) no-repeat center center"); 

            });    
        });

    </script>    
</div>
