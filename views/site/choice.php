<?php include ROOT . '/views/layouts/header.php'; ?>
  <!--<link href="/template/css/main.css" rel="stylesheet">-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link href="/template/css/main.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  
<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right choice">   
                <h3>Подбор ноутбука</h3>                                                     
                     <div id='options'>
                        <h4>Цена:</h4>
                        <form method='post'>
                                <label for='price_less'>
                                От:     <input type="text" name="price_less" id="price_less" maxlength="10"> &#8381;
                                </label>
                                <label for='price_more'>
                                До:     <input type="text" name="price_more" id="price_more" maxlength="10"> &#8381;
                                </label>
                           <!--<input type="submit" name="submit" class="btn btn-default" value="Отправить" />-->
                        </form>
                        <div id="slider_price"></div>

                    </div>

                    

            <div class="col-sm-3"></div>   
        </div>
    </div>
    </section>
    
    <script>
            $(function($) {           
		$( "#slider_price" ).slider({
			range: true,
//			min: 16400,
//			max: 146000,
                        <?php $price_less = 16400;?>
                        <?php $price_more = 146000;?>
			min: <?php echo (int)$price_less?>,
			max: <?php echo (int)$price_more?>,
                        step: 100,
//			values: [ 1000, 146000 ],
			values: [ <?php echo (int)$price_less?>, <?php echo (int)$price_more?>],
			slide: function( event, ui ) {
				//Поле минимального значения
				$("#price_less").val(ui.values[ 0 ]);
				//Поле максимального значения
				$("#price_more").val(ui.values[ 1 ]);
                            }
		});
		//Записываем значения ползунков в момент загрузки страницы
		//То есть значения по умолчанию
		$("#price_less").val($("#slider_price").slider( "values", 0 ));
		$("#price_more").val($("#slider_price").slider( "values", 1 ));
	});
        
        $('#price_less').change(function() {
			var val1 = $(this).val();
			$('#slider_price').slider("values",0,val1);
		});
                
       $('#price_more').change(function() {
			var val2 = $(this).val();
			$('#slider_price').slider("values",1,val2);
		});         
</script>
        
    <?php include ROOT . '/views/layouts/footer.php'; ?> 
    
</body>
</html>