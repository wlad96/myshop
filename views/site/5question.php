<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right">   
                <h3>Подбор ноутбука</h3>                                                     
                <?php
                    if( isset( $_POST['q5'] ) )
                    {
                        switch( $_POST['q5'] )
                        {
                            case 'one':
                                echo "Ваш выбор - универсальные ноутбуки без оптического привода!";                              
                                echo '<br/>';                              
                                echo '<a href = "http://myshop/category/6">Перейти к каталогу универсальных ноутбуков</a>';    
                                exit;
                                
                            case 'two':
                               case 'one':
                                echo "Ваш выбор - универсальные ноутбуки с оптическим приводом!";                              
                                echo '<br/>';                              
                                echo '<a href = "http://myshop/category/6">Перейти к каталогу универсальных ноутбуков</a>';
                               exit;                             
                        }
                    }
                    ?> 
 
                        <form method="post">
                            <h4>Вопрос 5. Вы будете смотреть фильмы с дисков?</h4>
                            <input type="radio" name="q5" value="one" /> Нет<br />
                            <input type="radio" name="q5" value="two" /> Да<br />
                            <input type="submit" value='Далее'/>
                        </form>       
            </div>
             <div class="col-sm-3"></div>  
        </div>
    </div>
    </section>
    <?php include ROOT . '/views/layouts/footer.php'; ?>    
    
</body>



