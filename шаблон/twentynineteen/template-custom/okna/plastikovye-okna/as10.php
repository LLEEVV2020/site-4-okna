<!--
            10 block
            РАССЧИТАЕМ ОКНА ПО ВАШИМ ЭСКИЗАМ
        -->
        <div class="es7_balcons template es7_balcons-t1">
            <div class="container">
                    <div class="h2">РАССЧИТАЕМ ОКНА ПО ВАШИМ ЭСКИЗАМ</div>
                    <p>Отправьте заявку и мы перезвоним вам через 3 минуты</p>
                
                <form action="//<?php echo $_SERVER['SERVER_NAME']; ?>/php/mail.php" method="POST">
                    <div class="b-sms_input b-sms_input_tel form-group">
                        <input type="text" class="phonemask input-phone" data-validation="required" placeholder="Ваш телефон" id="form_text_11" name="phone" value="" size="0">
                    </div>
                    <div class="b-sms_input b-sms_input_tel form-group">
                        <input type="text" class="" data-validation="required" placeholder="Ваше имя" id="form_text_11" name="phone" value="" size="0">
                    </div>
                    <div class="block-sketch-submit">
                        <div class="sketch" title="Прикрепить файл">
                        
                            <input  onchange="readURL(this);" size="0" type="file"><i class="sketch-text"><span>Загрузить</span>
                                эскизы</i> 
                        </div>
                        <button class="red-button" type="submit">РАССЧИТАТЬ</button>
    
                    </div>
                </form>
                <div class="text">Если у Вас нет эскизов, впишите номер телефона и менеджер перезвонит Вам для
                    выяснения размеров!</div>
                <p>Оставляя свои контактные данные, вы подтверждаете свое совершеннолетие,
                    соглашаетесь на обработку персональных данных в соответствии с <a style="color: #000;" href="#legal-info" class="legal-info" data-toggle="modal" data-target="#legal-info">Правовой информацией</a></p>
            </div>
        </div><!-- /.es13_14 -->