<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right choice">   
                <h3>Подбор ноутбука</h3>                                                     
                <?php
                    if( isset( $_POST['q4'] ) )
                    {
                        switch( $_POST['q4'] )
                        {
                            case 'one':                             
                                echo 'Ваш выбор - ноутбуки "всегда с собой"!';                              
                                echo '<br/><br/>';  
                                echo "<p>Хорошая производительность ультрапортативных ноутбуков выгодно отличает их от нетбуков, которые "
                                        . "обладают схожими размерами и весом, но все-таки не способны справится с требовательными компьютерными "
                                        . "задачами. Не стоит отказываться от полноценного компьютера, если вы вы часто путешествуете или "
                                        . "просто ведете подвижный образ жизни - ноутбуки этой категории решат ваши проблемы.</p>";                           
                                echo '<a href = "http://myshop/category/3">Перейти к каталогу ноутбуков "всегда с собой"</a>';
           
                                //echo '<script>window.location.href = "http://myshop/category/1";</script>'; //переход на страницу каталога
                                exit;
                            case 'two':                           
                                echo 'Ваш выбор - ультрабуки!';                              
                                echo '<br/><br/>';  
                                echo "<p>Ультрабуки (Ultrabook) - это ноутбуки еще более тонкие (ультратонкие), чем субноутбуки, но при этом обладающие"
                                        . " возможностями и мощью полноценных рабочих ноутбуков. Долгое время автономной работы, представительный дизайн и новейшие"
                                        . " технологии  - отличительные особенности этого типа маленьких ноутбуков. "
                                        . "Ультрабук-трансформер - гибридное устройство с сенсорным экраном, объединяющее в себе ноутбук и планшет.</p>";                               
                                echo '<a href = "http://myshop/category/4">Перейти к каталогу ультрабуков</a>';
                               exit;   
                        }
                    }
                    ?> 
 
                        <form method="post">
                            <h4>Вы собираетесь работать от батареи более 6 часов?</h4>
                            <label><input type="radio" name="q4" value="one" /> Нет</label><br />
                            <label><input type="radio" name="q4" value="two" /> Да</label><br />                           
                            <button type="submit" class="btn btn-primary">Далее</button>
                        </form>          
            </div>
            <div class="col-sm-3"></div>   
        </div>
    </div>
    </section>
    <?php include ROOT . '/views/layouts/footer.php'; ?>
    
</body>
</html>