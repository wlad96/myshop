<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-6 padding-right contact-information">   
                <h4>Контактная информация</h4>
                <b>Единый справочный телефон:</b> +7 (495) 925-6473 <br/>
                <b>E-mail:</b> alaptopshop@gmail.com<br/>
                <b>Адрес магазина:</b> 127642, г.Москва, ул.Сухонская, д.7в<br/><br/>
                <b>График работы:</b><br/>
                понедельник-пятница с 10:00 до 21:00 <br/>
                суббота, воскресенье с 10:00 до 20:00 <br/> 
                
                <div class="contact-information-map">              
                <b>Как проехать</b><br/>
                <img src="../template/images/home/map.jpg" alt="схема проезда"> 
                </div>
            </div>

            <div class="col-sm-4 padding-right">

                <?php if ($result): ?>
                    <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Обратная связь</h2>
                        <h5>Есть вопрос? Напишите нам</h5>
                        <br/>
                        <form action="#" method="post">
                            <p>Ваша почта</p>
                            <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                            <p>Сообщение</p>
                            <input type="text" name="userText" placeholder="Сообщение" value="<?php echo $userText; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                        </form>
                    </div><!--/sign up form-->
                <?php endif; ?>


                <br/>
                <br/>
            </div>
            
<!--            <div class="col-sm-6 padding-right contact-information-map">              
                <b>Как проехать</b>
                <img src="../template/images/home/map.jpg" alt="схема проезда"> 
            </div>-->

            
          
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>