   <div class="contact-wrap template contact-wrap-balcon">
            <div class="container">
                <h2>РАБОТАЕМ <?php echo get_option('my_city_po'); ?>:</h2>
                
                <div class="flex-container vcard">
               

                        <div class="block-item">

                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/contact-tel2.png" alt="">
                        </div>
                        <div class="item item-main">
                        
                        <div><b style="font-weight: 700;">Звоните ежедневно</b> 
                        с 8:00 до 23:00</div>
                        
                            
                            <div class="tel"> <abbr class="value" title="<?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (917) 122-28-80";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?>"><?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (917) 122-28-80";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?></abbr>
                            </div>
                            <p class="email"><?php if(empty(get_option('my_mail')) ){
                                                          echo "avoshnikov@yandex.ru";
                                                      }
                                                      else{
                                                          echo get_option('my_mail'); 
                                                      } ?></p>
                        </div>
                        </div>
                        <div class="block-item">
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/ykazatel.png" alt="">
                        </div>
                        <div class="item">
                            <div class="head">Центральный офис</div>
                            <p class="workhours"><?php if(empty(get_option('my_adress_1')) ){
                                                          echo "Тольятти, Автозаводское шоссе 21, офис 404";
                                                      }
                                                      else{
                                                          echo get_option('my_adress_1'); 
                                                      } ?>  </p><br>
                        
                        </div>
                        </div>


                        <div class="block-item">
                        <div class="block-img">
                            <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/img/rekvizits.png" alt="">
                        </div>
                        <div class="item">
                            <div class="head">Реквизиты</div>
                            <p class="email">ООО “Пластиковые Окна Цены”<br>
                        
                        </div>
                        </div>

                    
                </div>


            </div>
        </div>