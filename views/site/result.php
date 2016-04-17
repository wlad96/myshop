<!--pos.:    views/site/result    -->
<?php include ROOT . '/views/layouts/header.php'; ?>
           
<section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-6 padding-right contact-information">   
                <h4>Результат</h4>
                
                <?php
                    $ot = 0;
                    $not = 0;
                       if ($_POST[q1] == a){$ot++;} else {$not++;}
                       if ($_POST[q2] == a){$ot++;} else {$not++;}
                 ?>
                
                    <p>Правильных ответов: <?php echo $ot; ?></p>
                    <p>Неправильных ответов: <?php echo $not; ?></p>

            <div class="col-sm-4 padding-right">



                <br/>
                <br/>
            </div>          
          
            </div>
        </div>
    </div>
</section>



<?php include ROOT . '/views/layouts/footer.php'; ?>
