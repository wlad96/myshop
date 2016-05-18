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
                                <label for='price1'>
                                От:     <input type="text" name="price1" id="price1" maxlength="10"> &#8381;
                                </label>
                                <label for='price2'>
                                До:     <input type="text" name="price2" id="price2" maxlength="10"> &#8381;
                                </label>
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
			min: 16400,
			max: 146000,
                        step: 100,
			values: [ 1000, 146000 ],
			slide: function( event, ui ) {
				//Поле минимального значения
				$("#price1").val(ui.values[ 0 ]);
				//Поле максимального значения
				$("#price2").val(ui.values[ 1 ]);
                            }
		});
		//Записываем значения ползунков в момент загрузки страницы
		//То есть значения по умолчанию
		$("#price1").val($("#slider_price").slider( "values", 0 ));
		$("#price2").val($("#slider_price").slider( "values", 1 ));
	});
        
        $('#price1').change(function() {
			var val1 = $(this).val();
			$('#slider_price').slider("values",0,val1);
		});
                
       $('#price2').change(function() {
			var val2 = $(this).val();
			$('#slider_price').slider("values",1,val2);
		});         
</script>
        
    <?php include ROOT . '/views/layouts/footer.php'; ?> 
    
</body>
</html>