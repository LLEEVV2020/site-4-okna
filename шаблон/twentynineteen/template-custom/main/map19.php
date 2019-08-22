   <div class="map-wrapper">
            <div id="BX_YMAP_officemap" class="bx-yandex-map" style="height: 450px; width: 100%;">
                <!--<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                <script> ymapload(); </script>
                -->
                
                <script type="text/javascript" charset="utf-8" async src="<?php if(empty(get_option('karta_adressa')) ){
                                                          echo "https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaa79adbff6ced0cf42af767dee2ca88c5d15efa56e847bee29453066b4369072&width=100%&height=487&lang=ru_RU&scroll=true";
                                                      }
                                                      else{
                                                          echo get_option('karta_adressa'); 
                                                      } ?>"></script>
            
            </div>
        </div>