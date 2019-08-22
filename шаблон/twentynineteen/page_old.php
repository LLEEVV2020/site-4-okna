<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
    
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php 
            
            /*
            ПУТИ
            rassrochka
            otzyvy-o-kompanii
            adresa-i-telefony
            akczii-i-skidki
            
            Разрабатывая, основу взял отсюда
            https://wp-kama.ru/function/get_pages
            https://wp-kama.ru/function/get_the_id
            */
            
            // Получаем  id текущей странницы
            $post_id = get_the_ID();
            // получаем ярлык пути, без доменного имени и слэшей
            $page_url =  get_page_uri( $post_id );
            

            
// Входные двери
if($page_url == "plastikovye-okna" ){
    ?>
    <div class="wrap-geo shar-t2">
        <?php
        get_template_part( 'template-custom/header' ); 
        get_template_part( 'template-custom/top-menu' ); 
        get_template_part( 'template-custom/okna/plastikovye-okna/okna-t2' );
        ?>
    </div>
    <?php

    get_template_part( 'template-custom/okna/main/es2_okna_2' ); /**ЛУЧШИЕ ЦЕНЫ НА ОКНА < */
    get_template_part( 'template-custom/okna/main/es3_okna_3' ); /**ПРОИЗВОДСТВО “ПЛАСТИКОВЫЕ ОКНА ЦЕНЫ” 100% ДЕШЕВЛЕ! */
    get_template_part( 'template-custom/okna/plastikovye-okna/as6' ); /**Быстрый расчет стоимости */
    get_template_part( 'template-custom/okna/plastikovye-okna/as7' ); /**КУПИТЕ ОКНА ПО СТАРОЙ ЦЕНЕ */
    get_template_part( 'template-custom/okna/plastikovye-okna/as8' ); /**УСТАНОВКА ОКОН 1 ДЕНЬ? ЭТО РЕАЛЬНО!*/
    get_template_part( 'template-custom/okna/plastikovye-okna/as9' ); /**ЛЮБЫЕ ФОРМЫ ОКОН ДЛЯ ДОМА*/
    get_template_part( 'template-custom/okna/plastikovye-okna/as10' ); /**РАССЧИТАЕМ ОКНА ПО ВАШИМ ЭСКИЗАМ*/
    get_template_part( 'template-custom/okna/plastikovye-okna/as11' ); /**ПЛАСТИКОВЫЕ ОКНА - ПОД ДЕРЕВО!s*/
    get_template_part( 'template-custom/okna/plastikovye-okna/as12' ); /**ПРИ ЗАКАЗЕ ВЫ ПОЛУЧАЕТЕ*/
    get_template_part( 'template-custom/okna/plastikovye-okna/as13' ); /**БЕСПЛАТНЫЙ ЗАМЕР & РАССРОЧКА 0%*/
    get_template_part( 'template-custom/okna/plastikovye-okna/as14' ); /**РАССЧИТЕМ ВАШИ ОКНА ЗА 5 min*/
    get_template_part( 'template-custom/okna/main/es6_okna' ); /**ЦЕНЫ НА ОКНА В ЛУЧШИХ КОМПАНИЯХ 2018 ГОДА */
    get_template_part( 'template-custom/okna/plastikovye-okna/as16' ); /**СРОК ИЗГОТОВЛЕНИЯ ОКОН ВСЕГО 5 ДНЕЙ!*/
    get_template_part( 'template-custom/okna/plastikovye-okna/as17' ); /**ОКНА БЕСПЛАТНО!*/
    get_template_part( 'template-custom/okna/plastikovye-okna/as18' ); /**КУПИТЕ ОКНА ИЗ НАДЕЖНОГО ПРОФИЛЯ*/
    get_template_part( 'template-custom/okna/main/es8_okna' ); /**смс скидка */
    get_template_part( 'template-custom/okna/plastikovye-okna/as20' ); /**ОКНА ДЛЯ ЗАГОРОДНОГО ДОМА*/
    get_template_part( 'template-custom/okna/plastikovye-okna/as21' ); /** после 'ОКНА ДЛЯ ЗАГОРОДНОГО ДОМА'*/
    get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
    get_template_part( 'template-custom/okna/main/es13_okna' ); /**УСТАНОВКА ОКОН “ДО” И “ПОСЛЕ” */
    get_template_part( 'template-custom/okna/main/es14_okna' ); /**НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ */
    get_template_part( 'template-custom/okna/main/es15_okna'); /*СЧЁТЧИК*/
    get_template_part( 'template-custom/okna/main/es16_okna'); /*ВЫГОДНОЕ ПРЕДЛОЖЕНИЕ! */
    get_template_part( 'template-custom/okna/main/es17_okna'); /*Мастер по замерам посоветует как сэкономить и все рассчитает за 20 минут*/
    get_template_part( 'template-custom/okna/main/es18_okna'); /*отзывы*/
    get_template_part( 'template-custom/okna/main/es19_okna');  /*Бесплатная консультация*/

    get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
    get_template_part( 'template-custom/footer-main' ); 

}


if($page_url == "gotovye-okna" ){

    ?>
    <div class="wrap-geo shar-t3">
        <?php
        get_template_part( 'template-custom/header' ); 
        get_template_part( 'template-custom/top-menu' ); 
        get_template_part( 'template-custom/okna/gotovye-okna/okna-t3' );
        ?>
    </div>
    <?php
    get_template_part( 'template-custom/okna/main/es14_okna' ); /**НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ */
    get_template_part( 'template-custom/okna/gotovye-okna/bs5' ); /**ГОТОВЫЕ ОКНА ПО НИЗКИМ ЦЕНАМ  */
    get_template_part( 'template-custom/okna/main/es8_okna' ); /**смс скидка */
    get_template_part( 'template-custom/okna/main/es6_okna' ); /**ЦЕНЫ НА ОКНА В ЛУЧШИХ КОМПАНИЯХ 2018 ГОДА */
    get_template_part( 'template-custom/okna/plastikovye-okna/as13' ); /**БЕСПЛАТНЫЙ ЗАМЕР & РАССРОЧКА 0%*/
    get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
    ?>
    <div style="margin-top: -40px;"></div>
    <?php
    get_template_part( 'template-custom/okna/main/es16_okna'); /*ВЫГОДНОЕ ПРЕДЛОЖЕНИЕ! */
    get_template_part( 'template-custom/okna/main/es18_okna'); /*отзывы*/
    get_template_part( 'template-custom/okna/main/es19_okna');  /*Бесплатная консультация*/

    get_template_part( 'template-custom/footer-main' ); 

}
if($page_url == "czena-na-okna" ){

    ?>
    <div class="logo-black ">
        <?php
        get_template_part( 'template-custom/header' ); 
        get_template_part( 'template-custom/top-menu' ); 
        ?>
    </div>
    <?php

    get_template_part( 'template-custom/okna/czeny-na-balkony/calc_top' );
    get_template_part( 'template-custom/okna/plastikovye-okna/as10' ); /**РАССЧИТАЕМ ОКНА ПО ВАШИМ ЭСКИЗАМ*/
    get_template_part( 'template-custom/okna/main/es5_okna' ); /**ОКНА СЕЙЧАС - ДЕНЬГИ ПОТОМ */
    get_template_part( 'template-custom/okna/main/es6_okna' ); /**ЦЕНЫ НА ОКНА В ЛУЧШИХ КОМПАНИЯХ 2018 ГОДА */
    get_template_part( 'template-custom/okna/main/es3_okna_3' ); /**ПРОИЗВОДСТВО “ПЛАСТИКОВЫЕ ОКНА ЦЕНЫ” 100% ДЕШЕВЛЕ! */
    get_template_part( 'template-custom/okna/main/es8_okna' ); /**смс скидка */
    get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
    ?>
    <div style="margin-top: -20px;"></div>
    <?php
    get_template_part( 'template-custom/okna/czeny-na-balkony/cena-na-okna-text' ); /*ЦЕНЫ НА ОКНА В ДОМ*/
    get_template_part( 'template-custom/okna/main/es14_okna' ); /**НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ */
    get_template_part( 'template-custom/okna/main/es15_okna'); /*СЧЁТЧИК*/
    ?>
    <div style="margin-top: 40px;"></div>
    <?php
    get_template_part( 'template-custom/okna/main/es3_okna_3' ); /**ПРОИЗВОДСТВО “ПЛАСТИКОВЫЕ ОКНА ЦЕНЫ” 100% ДЕШЕВЛЕ! */
    get_template_part( 'template-custom/okna/main/es18_okna'); /*отзывы*/
    get_template_part( 'template-custom/okna/main/es19_okna');  /*Бесплатная консультация*/

    get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
    get_template_part( 'template-custom/footer-main' ); 
    

}
if($page_url == "remont-okon" ){
     ?>
    <div class="wrap-geo shar-t4">
        <?php
        get_template_part( 'template-custom/header' ); 
        get_template_part( 'template-custom/top-menu' ); 
        get_template_part( 'template-custom/okna/remont-okon/okna-t4' );
            
        ?>
    </div>
    <?php
        get_template_part( 'template-custom/okna/remont-okon/ls2' );
        get_template_part( 'template-custom/okna/remont-okon/ls3' );
        get_template_part( 'template-custom/okna/remont-okon/ls4' );
        get_template_part( 'template-custom/okna/remont-okon/ls5' );
        get_template_part( 'template-custom/main/es10_repairs_balcony__10' );
        get_template_part( 'template-custom/okna/remont-okon/ls7' );
        get_template_part( 'template-custom/okna/remont-okon/ls8' );
        get_template_part( 'template-custom/okna/remont-okon/ls9' );
        get_template_part( 'template-custom/okna/remont-okon/ls10' );
        get_template_part( 'template-custom/okna/remont-okon/ls11' );
        get_template_part( 'template-custom/okna/remont-okon/ls12' );
        get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
        get_template_part( 'template-custom/okna/main/es14_okna' ); /**НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ */
        get_template_part( 'template-custom/okna/main/es15_okna'); /*СЧЁТЧИК*/
        get_template_part( 'template-custom/okna/plastikovye-okna/as13' ); /**БЕСПЛАТНЫЙ ЗАМЕР & РАССРОЧКА 0%*/
        get_template_part( 'template-custom/okna/main/es6_okna' ); /**ЦЕНЫ НА ОКНА В ЛУЧШИХ КОМПАНИЯХ 2018 ГОДА */
    
        get_template_part( 'template-custom/okna/remont-okon/ls13' ); 
        get_template_part( 'template-custom/okna/main/es18_okna'); /*отзывы*/
        get_template_part( 'template-custom/okna/main/es8_okna' ); /**смс скидка */
        get_template_part( 'template-custom/okna/main/es19_okna');  /*Бесплатная консультация*/
        get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
        get_template_part( 'template-custom/footer-main' ); 
    
}

if($page_url == "okna-v-dom" ){
  ?>
    <div class="wrap-geo shar-t4"> 
        <?php
        get_template_part( 'template-custom/header' ); 
        get_template_part( 'template-custom/top-menu' ); 
        get_template_part( 'template-custom/okna/remont-okon/okna-t4' );
      /* 1 +++++++++++++++++++++!!!!!!!!!!!!!!*/
        /*
        shar-t5
        get_template_part( 'template-custom/okna/okna-v-dom/okna-t5' );
      */

        ?>
    </div>
    <?php
        get_template_part( 'template-custom/okna/okna-v-dom/ms2' );
        get_template_part( 'template-custom/okna/plastikovye-okna/as7' ); /**КУПИТЕ ОКНА ПО СТАРОЙ ЦЕНЕ */
        get_template_part( 'template-custom/okna/plastikovye-okna/as10' ); /**РАССЧИТАЕМ ОКНА ПО ВАШИМ ЭСКИЗАМ*/
        get_template_part( 'template-custom/okna/plastikovye-okna/as9' ); /**ЛЮБЫЕ ФОРМЫ ОКОН ДЛЯ ДОМА*/
        /* 2 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /*БЕСЕДКИ, ВЕРАНДЫ, ТЕРРАСЫ*/
        get_template_part( 'template-custom/okna/plastikovye-okna/as17' ); /**ОКНА БЕСПЛАТНО!*/
        get_template_part( 'template-custom/okna/main/es11_okna' ); /**КУПИТЕ ОКНА ИЗ НАДЕЖНОГО ПРОФИЛЯ */
        get_template_part( 'template-custom/okna/plastikovye-okna/as11' ); /**ПЛАСТИКОВЫЕ ОКНА - ПОД ДЕРЕВО!s*/
        get_template_part( 'template-custom/okna/main/es5_okna' ); /**ОКНА СЕЙЧАС - ДЕНЬГИ ПОТОМ */
        /* 3 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /*УСТАНОВКА ОКОН В ДОМАХ*/
        get_template_part( 'template-custom/okna/main/es8_okna' ); /**смс скидка */
        get_template_part( 'template-custom/okna/plastikovye-okna/as20' ); /**ОКНА ДЛЯ ЗАГОРОДНОГО ДОМА*/
        get_template_part( 'template-custom/okna/plastikovye-okna/as21' ); /** после 'ОКНА ДЛЯ ЗАГОРОДНОГО ДОМА'*/
        ?>
        <div style="margin-top: -40px;"></div>
        <?php
        get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
        ?><div style="background-color: #EDEDED"><?php 
        get_template_part( 'template-custom/dveri/main/es12_bg_9' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
        ?></div><?php 
        get_template_part( 'template-custom/okna/main/es15_okna'); /*СЧЁТЧИК*/
        get_template_part( 'template-custom/okna/main/es16_okna'); /*ВЫГОДНОЕ ПРЕДЛОЖЕНИЕ! */
        get_template_part( 'template-custom/okna/main/es17_okna'); /*Мастер по замерам посоветует как сэкономить и все рассчитает за 20 минут*/
    
        get_template_part( 'template-custom/okna/main/es18_okna'); /*отзывы*/
        get_template_part( 'template-custom/okna/main/es19_okna');  /*Бесплатная консультация*/
        get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
        get_template_part( 'template-custom/footer-main' ); 
    
}      
if($page_url == "osteklenie-verandy" ){
  ?>
    <div class="wrap-geo shar-t4"> 
        <?php
        get_template_part( 'template-custom/header' ); 
        get_template_part( 'template-custom/top-menu' ); 
        get_template_part( 'template-custom/okna/remont-okon/okna-t4' );
      /* 4 +++++++++++++++++++++!!!!!!!!!!!!!!*/
        /*
        shar-t6
        get_template_part( 'template-custom/okna/osteklenie-verandy/okna-t6' );
      */

        ?>
    </div>
    <?php
        get_template_part( 'template-custom/okna/osteklenie-verandy/qs2' ); /*ЛУЧШИЕ ЦЕНЫ НА ОСТЕКЛЕНИЕ ВЕРАНДЫ!*/
        /* 5 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /*БЫСТРЫЙ РАСЧЕТ ОСТЕКЛЕНИЯ ВЕРАНДЫ*/
        /* 6 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /*ШКАФЫ НА БАЛКОН ПО НИЗКИМ ЦЕНАМ*/
        get_template_part( 'template-custom/okna/main/es8_okna' ); /**смс скидка */
        get_template_part( 'template-custom/okna/plastikovye-okna/as14' ); /**РАССЧИТЕМ ВАШИ ОКНА ЗА 5 min*/
        get_template_part( 'template-custom/okna/main/es6_okna' ); /**ЦЕНЫ НА ОКНА В ЛУЧШИХ КОМПАНИЯХ 2018 ГОДА */
        /* 7 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /*ОТПРАВЬТЕ ЗАЯВКУ СЕЙЧАС И ПОЛУЧИТЕ СКИДКУ ДО 67%*/
        /* 8 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /*ПОПУЛЯРНЫЕ ВИДЫ ОСТЕКЛЕНИЯ БЕСЕДОК, ВЕРАНД И ТЕРРАС*/
        get_template_part( 'template-custom/main/es3_13' ); /**НАШЛИ ЕЩЁ ДЕШЕВЛЕ? */
        get_template_part( 'template-custom/okna/main/es5_okna' ); /**ОКНА СЕЙЧАС - ДЕНЬГИ ПОТОМ */
        /* 9 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /*ЧТО ЕЩЕ МОЖНО ОСТЕКЛИТЬ?*/
        /* 10 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /* ОСТЕКЛЕНИЕ БАНИ*/
        /* 11 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /* ОСТЕКЛЕНИЕ БАССЕЙНА*/
        /* 12 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /* ЛЮБЫЕ ЦВЕТОВЫЕ РЕШЕНИЯ*/
        get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
        get_template_part( 'template-custom/okna/main/es15_okna'); /*СЧЁТЧИК*/
        /* 7 +++++++++++++++++++++!!!!!!!!!!!!!!*/ /*ОТПРАВЬТЕ ЗАЯВКУ СЕЙЧАС И ПОЛУЧИТЕ СКИДКУ ДО 67%*/
        get_template_part( 'template-custom/okna/main/es17_okna'); /*Мастер по замерам посоветует как сэкономить и все рассчитает за 20 минут*/
        get_template_part( 'template-custom/okna/main/es18_okna'); /*отзывы*/
    
        get_template_part( 'template-custom/okna/main/es19_okna');  /*Бесплатная консультация*/
        get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
        get_template_part( 'template-custom/footer-main' ); 
    
}     
if($page_url == "okna-v-derevyannyj-dom" ){  
    echo "жесть <br>";
    echo "окна деревянные в дом"
    //get_template_part( 'template-custom/okna/main/es2_okna_2' ); /**ЛУЧШИЕ ЦЕНЫ НА ОКНА < */
    //get_template_part( 'template-custom/okna/main/es3_okna_3' ); /**ПРОИЗВОДСТВО “ПЛАСТИКОВЫЕ ОКНА ЦЕНЫ” 100% ДЕШЕВЛЕ! */
   // get_template_part( 'template-custom/okna/main/es4_okna' ); /**Нашли ещё дешевле? */
    //get_template_part( 'template-custom/okna/main/es5_okna' ); /**ОКНА СЕЙЧАС - ДЕНЬГИ ПОТОМ */
   // get_template_part( 'template-custom/okna/main/es6_okna' ); /**ЦЕНЫ НА ОКНА В ЛУЧШИХ КОМПАНИЯХ 2018 ГОДА */
  //  get_template_part( 'template-custom/okna/main/es7_okna' ); /**ПОЧЕМУ ЗАКАЗЫВАТЬ В КОМПАНИИ «КУПИТЬ ШКАФ» ВСЕГДА ЛУЧШЕ? */
   // get_template_part( 'template-custom/okna/main/es8_okna' ); /**смс скидка */
    //( 'template-custom/okna/main/es9_okna' ); /**ПОЛУЧИТЕ СВОИ 1000 РУБЛЕЙ ЗА ПЕРВЫЙ ЗАКАЗ! */
    //get_template_part( 'template-custom/okna/main/es10_okna' ); /**УСТАНОВКА ОКОН 1 ДЕНЬ?
   // ЭТО РЕАЛЬНО! */
   // get_template_part( 'template-custom/okna/main/es11_okna' ); /**КУПИТЕ ОКНА ИЗ НАДЕЖНОГО ПРОФИЛЯ */
  //  get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
//get_template_part( 'template-custom/okna/main/es13_okna' ); /**УСТАНОВКА ОКОН “ДО” И “ПОСЛЕ” */
  //  get_template_part( 'template-custom/okna/main/es14_okna' ); /**НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ */
  //  get_template_part( 'template-custom/okna/main/es15_okna'); /*СЧЁТЧИК*/
 //   get_template_part( 'template-custom/okna/main/es16_okna'); /*ВЫГОДНОЕ ПРЕДЛОЖЕНИЕ! */
  //  get_template_part( 'template-custom/okna/main/es17_okna'); /*Мастер по замерам посоветует как сэкономить и все рассчитает за 20 минут*/
  //  get_template_part( 'template-custom/okna/main/es18_okna'); /*отзывы*/
 //   get_template_part( 'template-custom/okna/main/es19_okna');  /*Бесплатная консультация*/

 //   get_template_part( 'template-custom/okna/main/es12_okna' ); /** Нижнее меню */
  //  get_template_part( 'template-custom/footer-main' ); 
    
}
            

            // Входные двери
            if($page_url == "vkhodnye-dveri" || $page_url ==  "vhodnye-dveri"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/es1_vhodnie_dveri_1' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/finishing_balconies_calc_2' );
                get_template_part( 'template-custom/dveri/main/sms-discount_5' ); /*смс-скидка*/
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/vhodie-dveri_5' ); /*Список дверей*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/quick-calculation_7' );
                get_template_part( 'template-custom/dveri/main/es7_padding_8' );
                get_template_part( 'template-custom/dveri/main/form-group-wrapper_7' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/price_2018_10' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/otpravit_zaiavky_11' );
                
                
                ?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/dveri/main/es12_bg_9' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
                ?></div><?php 
                get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/vhodnie_dveri_slider_15'); 
                get_template_part( 'template-custom/main/giving__13' );  /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/dveri/main/map-wrapper_14');
                get_template_part( 'template-custom/dveri/main/es16_bg_15');
                
                get_template_part( 'template-custom/main/es20_balcony__17' );  /*Бесплатная консультация*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/
                get_template_part( 'template-custom/footer-main' ); 
                
            }
            // РАЗДВИЖНЫЕ ДВЕРИ
            if($page_url == "razdvizhnye-dveri"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' );
                                
                get_template_part( 'template-custom/dveri/razdviznie-okna/razdviznie-okna_1' );
                
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/finishing_balconies_calc_2' );
                get_template_part( 'template-custom/dveri/main/sms-discount_5' ); /*смс-скидка*/
                get_template_part( 'template-custom/dveri/razdviznie-okna/vhodie-dveri_5_2' ); /*РАЗДВИЖНЫЕ ДВЕРИ*/
                
                
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/quick-calculation_7' );
                get_template_part( 'template-custom/dveri/main/es7_padding_8' );
                get_template_part( 'template-custom/dveri/main/form-group-wrapper_7' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/price_2018_10' );
                get_template_part( 'template-custom/dveri/vkhodnye-dveri/otpravit_zaiavky_11' );
                
                
                ?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/dveri/main/es12_bg_9' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
                ?></div><?php 
                get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
               // get_template_part( 'template-custom/dveri/vkhodnye-dveri/vhodnie_dveri_slider_15'); /** Слайлдер дверей сложный */
                get_template_part( 'template-custom/main/giving__13' );  /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/dveri/main/map-wrapper_14');
                get_template_part( 'template-custom/dveri/main/es16_bg_15');
                
                get_template_part( 'template-custom/main/es20_balcony__17' );  /*Бесплатная консультация*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/
                get_template_part( 'template-custom/footer-main' );
            }
            /*контакты*/
            if($page_url == "adresa-i-telefony" || $page_url == "kontakty"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 

                get_template_part( 'template-custom/gde_kupit_shkafy_3/accii_temp' ); 
                get_template_part( 'template-custom/main/map19' ); 
                get_template_part( 'template-custom/gde_kupit_shkafy_3/b_contact' ); 
                get_template_part( 'template-custom/gde_kupit_shkafy_3/b_radar' ); 
                get_template_part( 'template-custom/gde_kupit_shkafy_3/b_contact_ceo_bg' ); /*письмо директору*/
                get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
                get_template_part( 'template-custom/dveri/main/slider_doors_wrapper_11');
                get_template_part( 'template-custom/main/giving__13' );  /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                
                get_template_part( 'template-custom/main/map19' );
                get_template_part( 'template-custom/dveri/main/es16_bg_15'); /*РЕМОНТЫ, ВЫПОЛНЕННЫЕ В 2019 ГОДУ*/
                

                get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/

                get_template_part( 'template-custom/footer-main' ); /*footer*/

            }   
            
            
            
            // РАССОЧКА
            if($page_url == "rassrochka"){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 

                get_template_part( 'template-custom/rassrochki_na_shkafy_1/rassr_balcons' ); 
                get_template_part( 'template-custom/rassrochki_na_shkafy_1/rast_windownow_bg_gerl__2' ); 
                get_template_part( 'template-custom/rassrochki_na_shkafy_1/b_rassr' ); /*УСЛОВИЯ ПО РАССРОЧКЕ И КРЕДИТУ */

                get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
                
                get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                get_template_part( 'template-custom/main/map19' );  /*карта*/
                
                get_template_part( 'template-custom/dveri/main/es16_bg_15'); /*РЕМОНТЫ, ВЫПОЛНЕННЫЕ В 2019 ГОДУ*/
                
                
                get_template_part( 'template-custom/main/es17_bg21' ); 
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/

                get_template_part( 'template-custom/footer-main' ); 

            }
            // ОТЗЫВЫ О КОМПАНИИ 
            if($page_url == "otzyvy-o-kompanii" || $page_url == "otzyvy" ){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 


                get_template_part( 'template-custom/shkafy_otzyvy_2/es1_otzivy_bg' ); /*Развёрнутые отзывы*/
                get_template_part( 'template-custom/shkafy_otzyvy_2/d_otziv_form' ); /*Форма оставить отзыв*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/

?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/dveri/main/es12_bg_9' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
                ?></div><?php 
               get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
                get_template_part( 'template-custom/main/map19' );  /*карта*/

                get_template_part( 'template-custom/dveri/main/es16_bg_15'); /*РЕМОНТЫ, ВЫПОЛНЕННЫЕ В 2019 ГОДУ*/

                get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/



                get_template_part( 'template-custom/footer-main' ); /*footer*/

            }   
            
            /*Скидки*/
            if($page_url == "akczii-i-skidki" || $page_url == "akczii-i-skidki" ){
                get_template_part( 'template-custom/header' ); 
                get_template_part( 'template-custom/top-menu' ); 


                get_template_part( 'template-custom/dveri/akczii-i-skidki/akczii-i-skidki' ); 
            
            ?><div style="margin-top: -6px;"><?php
                get_template_part( 'template-custom/main/es3_balcons__3' ); /*СМС СКИДКА*/
            ?></div>
                <?php            
                
                get_template_part( 'template-custom/dveri/akczii-i-skidki/aktsii-wrap' );
                get_template_part( 'template-custom/dveri/main/form-group-wrapper_7' );
                get_template_part( 'template-custom/dveri/main/es7_padding_8' );
                get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/

                ?><div style="background-color: #EDEDED"><?php 
                get_template_part( 'template-custom/dveri/main/es12_bg_9' ); /*НЕ НУЖНО ПЕРЕПЛАЧИВАТЬ*/
                ?></div><?php 
                
                get_template_part( 'template-custom/dveri/main/es13_bg_10'); /*СЧЁТЧИК*/
                get_template_part( 'template-custom/dveri/main/slider_doors_wrapper_11'); /*Слайдер дверей не сложный*/
                get_template_part( 'template-custom/main/giving__13' );  /*ЗАКАЗЧИКИ САМОЕ ЦЕННОЕ – МЫ ЭТО ПОНИМАЕМ!*/
                get_template_part( 'template-custom/main/es14__14' ); /*отзывы*/
                
                
                get_template_part( 'template-custom/main/map19' );
                 get_template_part( 'template-custom/dveri/main/es16_bg_15'); /*РЕМОНТЫ, ВЫПОЛНЕННЫЕ В 2019 ГОДУ*/


                get_template_part( 'template-custom/main/es17_bg21' ); /*БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ*/
                 get_template_part( 'template-custom/dveri/main/center-menu-wrapper_6' ); /*маленькое меню из трех элементов*/



                get_template_part( 'template-custom/footer-main' ); /*footer*/
            }

            

            if($page_url == "none"){

                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }

                endwhile; // End of the loop.
            }

            ?>
            
			

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
