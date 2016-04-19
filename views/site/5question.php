<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right choice">   
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
                            <label><input type="radio" name="q5" value="one" /> Нет</label><br />
                            <label><input type="radio" name="q5" value="two" /> Да</label><br />
                            <button type="submit" class="btn btn-success">Далее</button>
                        </form>       
            </div>
             <div class="col-sm-3"></div>  
        </div>
    </div>
    </section>
    <?php include ROOT . '/views/layouts/footer.php'; ?>    
    
</body>



