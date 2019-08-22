<!--es6-->
<div class="template price_2018 ystan-nig-okon">

    <div class="container">
        <div class="h2">УСТАНОВКА ОКОН В ДОМАХ</div>
        <img style="max-width: 100%;" src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/ystan-nig-okon.png" alt="">
        <p>
            ПОЗВОНИТЕ ПРЯМО СЕЙЧАС
 <span><?php if(empty(get_option('my_phone')) ){
                                                          echo " 8 (917) 122-28-80";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?></span> <br>
МЫ ПОДСКАЖЕМ, ЧТО ЛУЧШЕ ДЛЯ ВАС!
        </p>
    </div> 
</div>


<style>
    .ystan-nig-okon{
        margin-bottom: 40px;
    }
    .ystan-nig-okon p{
        font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
text-align: center;
margin-top: 40px;
color: #000000;
    }
    .ystan-nig-okon span{
        color: #E21F69;
        font-weight: bold;
    }
</style>