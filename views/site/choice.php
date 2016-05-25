<?php include ROOT . '/views/layouts/header.php'; ?>
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
                        <form name="form" method="post" class="choice">
                            <!--<div class="slider_price"> Декоративный слайдер!!!
                                <h4>Цена:</h4>
                                    <label for='price_start'>
                                    От:     <input type="text" name="price_start" id="price_start" maxlength="10"> &#8381;
                                    </label>
                                    <label for='price_end'>
                                    До:     <input type="text" name="price_end" id="price_end" maxlength="10"> &#8381;
                                    </label>
                                    <div id="slider_price"></div>
                             </div> -->
                            
                             
                                <div class="price">
                                    <h4>Цена:</h4>
                                    <ul>
                                         <li><label>От: </label><input type="text" name="price_start"> &#8381;</li> 
                                         <li><label>До: </label><input type="text" name="price_end"> &#8381;</li> 
                                     </ul>			
                                </div>
                            
                                <div class="brand">
                                <h4>Производитель:</h4>
                                    <ul>
                                          <li><label><input type="checkbox" name="brands[]" value="1">Acer</label></li>
                                          <li><label><input type="checkbox" name="brands[]" value="2">Apple</label></li>
                                          <li><label><input type="checkbox" name="brands[]" value="3">Asus</label></li>
                                          <li><label><input type="checkbox" name="brands[]" value="4">Dell</label></li>
                                          <li><label><input type="checkbox" name="brands[]" value="5">HP</label></li>
                                          <li><label><input type="checkbox" name="brands[]" value="6">Lenovo</label></li>
                                          <li><label><input type="checkbox" name="brands[]" value="7">MSI</label></li>
                                    </ul>	
                                 </div>
                                <ul>
                                    <li><label><input type="checkbox" name="availability">В наличии</label></li>
                                    <!--<li><label>Хит продаж</label><input type="checkbox" name="is_hit" value="2"></li>-->
                                </ul>
                                    
                            <input type="submit" name="filter" value="Подобрать" />
                        </form>
                    </div>
            <div class="col-sm-3"></div>   
        </div>
    </div>
    </section>
    
<!--    <script>
            $(function($) {           
		$( "#slider_price" ).slider({
			range: true,
//			min: 16400,
//			max: 146000,
                        <?php //$price_start = 16400;?>
                        <?php //$price_end = 146000;?>
			min: <?php //echo (int)$price_start?>,
			max: <?php //echo (int)$price_end?>,
                        step: 100,
//			values: [ 1000, 146000 ],
			values: [ <?php //echo (int)$price_start?>, <?php //echo (int)$price_end?>],
			slide: function( event, ui ) {
				//Поле минимального значения
				$("#price_start").val(ui.values[ 0 ]);
				//Поле максимального значения
				$("#price_end").val(ui.values[ 1 ]);
                            }
		});
		//Записываем значения ползунков в момент загрузки страницы
		//То есть значения по умолчанию
		$("#price_start").val($("#slider_price").slider( "values", 0 ));
		$("#price_end").val($("#slider_price").slider( "values", 1 ));
	});
        
        $('#price_start').change(function() {
			var val1 = $(this).val();
			$('#slider_price').slider("values",0,val1);
		});
                
       $('#price_end').change(function() {
			var val2 = $(this).val();
			$('#slider_price').slider("values",1,val2);
		});         
</script>-->
        
    <?php
            $db = Db::getConnection();
        
            function addWhere($where, $add, $and = true) {
              if ($where) {
                if ($and) $where .= " AND $add";
                else $where .= " OR $add";
              }
              else $where = $add;
              return $where;
            }
            if (!empty($_POST["filter"])) {
              $where = "";
              if ($_POST["price_start"]) $where = addWhere($where, "`price` >= '".htmlspecialchars($_POST["price_start"]))."'";
              if ($_POST["price_end"]) $where = addWhere($where, "`price` <= '".htmlspecialchars($_POST["price_end"]))."'";
              if ($_POST["brands"]) $where = addWhere($where, "`brand_id` IN (".htmlspecialchars(implode(",", $_POST["brands"])).")");
              if ($_POST["availability"]) $where = addWhere($where, "`availability` = '1'");
              $sql = "SELECT * FROM `product`";
              if ($where) $sql .= " WHERE $where";
              echo $sql;
            }
    ?>
    
    
    
    <?php include ROOT . '/views/layouts/footer.php'; ?> 
    
</body>
</html>