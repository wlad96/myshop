<!--pos.:    views/site/choice    -->
<?php include ROOT . '/views/layouts/header.php'; ?>
           
    <section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-6 padding-right contact-information">   
                <h4>Подбор ноутбука</h4>
                
<!--                <form action="test.php" style="text-align:center" method="post">
                  <button> <? echo "Начать"  ?></button>
              </form>-->

                <form action="/views/site/result.php" method="POST">
                <!--<form action="result.php" method="POST">-->
                    <div>
                        <p>Сколько будет 2 + 2?</p>
                        <label><input name="q1" type="radio" value="a">4</label>
                        <label><input name="q1" type="radio" value="b">2</label>
                        <label><input name="q1" type="radio" value="c">1</label>
                    </div>
                    <div>
                        <p>Сколько будет 5 - 2?</p>
                        <label><input name="q2" type="radio" value="a">3</label> 
                        <label><input name="q2" type="radio" value="b">2</label>
                        <label><input name="q2" type="radio" value="c">1</label>
                    </div>
                    <button type="submit">Результат</button>
                </form>
                    
            </div>

            <div class="col-sm-4 padding-right">



                <br/>
                <br/>
            </div>          
          
        </div>
    </div>
</section>



<?php include ROOT . '/views/layouts/footer.php'; ?>
