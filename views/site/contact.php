<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-6 padding-right contact-information">   
                <h3>Контактная информация</h3>
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
                <div class="green-msg">
                    <?php if ($result): ?>
                        </br><span><i class="fa fa-check" aria-hidden="true"></i> Сообщение отправлено! Мы ответим Вам на указанный email.</span>
                </div>    
                    <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h3>Обратная связь</h3>
                        <h4>Есть вопрос? Напишите нам</h4>
                        <br/>
                        <form action="#" method="post">
                            <p>Ваша почта</p>
                            <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                            <p>Сообщение</p>
                            <input type="text" name="userText" placeholder="Текст сообщения" value="<?php echo $userText; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                        </form>
                    </div><!--/sign up form-->
                <?php endif; ?>


                <br/>
                <br/>
            </div>          
          
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>