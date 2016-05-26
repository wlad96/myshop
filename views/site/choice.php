<?php include ROOT . '/views/layouts/header.php'; ?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link href="/template/css/main.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  
<body>
    <section>
    <div class="container">
        <div class="row">
<!--            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right choice">   -->
                <h2>Подбор ноутбука</h2>                                                     
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
                            <!--<div class="col-sm-1"></div>-->
                            <div class="col-sm-4 choice">
                                <div class="price">
                                    <h4>Цена, руб:</h4>
                                        <label>От: </label><input type="text" name="price_start" placeholder="16400">
                                        <label>До: </label><input type="text" name="price_end" placeholder="194000">
                                </div>
                            
                                <div class="brand">
                                <h4>Производитель:</h4>
                                    <ul>
                                        <li><input id="b1" type="checkbox" name="brands[]" value="1" hidden /> <label for="b1">Acer</label></li>
                                        <li><input id="b2" type="checkbox" name="brands[]" value="2" hidden /> <label for="b2">Apple</label></li>
                                        <li><input id="b3" type="checkbox" name="brands[]" value="3" hidden /> <label for="b3">Asus</label></li>
                                        <li><input id="b4" type="checkbox" name="brands[]" value="4" hidden /> <label for="b4">Dell</label></li>
                                        <li><input id="b5" type="checkbox" name="brands[]" value="5" hidden /> <label for="b5">HP</label></li>
                                        <li><input id="b6" type="checkbox" name="brands[]" value="6" hidden /> <label for="b6">Lenovo</label></li>
                                        <li><input id="b7" type="checkbox" name="brands[]" value="7" hidden /> <label for="b7">MSI</label></li>
                                    </ul>	
                                 </div>
                             </div>
                            
                            <div class="col-sm-4 choice">
                                <div class="CPU">
                                    <h4>Частота процессора, Мгц:</h4>
                                        <label>От: </label><input type="text" name="cpu_start" placeholder="800">
                                        <label>До: </label><input type="text" name="cpu_end" placeholder="3100"> 
                                </div>

                                <div class="hard_disk">
                                    <h4>Объем жесткого диска, Гб:</h4>
                                        <label>От: </label><input type="text" name="hard_start" placeholder="32">
                                        <label>До: </label><input type="text" name="hard_end" placeholder="2000"> 
                                </div>

                                <div class="RAM">
                                    <h4>Объем оперативной памяти, Гб:</h4>
                                        <label>От: </label><input type="text" name="ram_start" placeholder="2">
                                        <label>До: </label><input type="text" name="ram_end" placeholder="16"> 
                                </div>
                            </div>

                            <div class="col-sm-4 choice">  
                                <div class="weight">
                                    <h4>Вес, кг:</h4>
                                        <label>От: </label><input type="text" name="weight_start" placeholder="1">
                                        <label>До: </label><input type="text" name="weight_end" placeholder="3.5"> 
                                </div>
                                <div class="battery_life">
                                    <h4>Время автономной работы, ч:</h4>
                                        <label>От: </label><input type="text" name="battery_start" placeholder="3">
                                        <label>До: </label><input type="text" name="battery_end" placeholder="12"> 
                                </div>
                              </div>  
                            <!--<div class="col-sm-1"></div>-->

                            
<!--                                <ul>
                                    <li><label><input type="checkbox" name="availability">В наличии</label></li>
                                    <li><label>Хит продаж</label><input type="checkbox" name="is_hit" value="2"></li>
                                </ul>-->

                            <div class="row">
                                <div class="col-sm-10 choice-btn center">       
                                    <input type="submit" name="filter" value="Подобрать" class="btn btn-default" />
                                </div>
                            </div>
                        </form>
                    </div>
            <!--<div class="col-sm-3"></div>-->   
        <!--</div>-->
    </div> <!--/row-->
    
    <div class="row">
       <div class="col-sm-1"></div>   
       <div class="col-sm-10 padding-right choice">
           <?php
           
            $hostname = 'localhost';
            $username = 'root';
            $passwordname = '';
            $basename = 'myshop';
            $conn = new mysqli($hostname, $username, $passwordname, $basename) or die ('Невозможно открыть базу');
   

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
              if ($_POST["cpu_start"]) $where = addWhere($where, "`CPU` >= '".htmlspecialchars($_POST["cpu_start"]))."'";
              if ($_POST["cpu_end"]) $where = addWhere($where, "`CPU` <= '".htmlspecialchars($_POST["cpu_end"]))."'";
              if ($_POST["hard_start"]) $where = addWhere($where, "`hard_disk` >= '".htmlspecialchars($_POST["hard_start"]))."'";
              if ($_POST["hard_end"]) $where = addWhere($where, "`hard_disk` <= '".htmlspecialchars($_POST["hard_end"]))."'";
              if ($_POST["ram_start"]) $where = addWhere($where, "`RAM` >= '".htmlspecialchars($_POST["ram_start"]))."'";
              if ($_POST["ram_end"]) $where = addWhere($where, "`RAM` <= '".htmlspecialchars($_POST["ram_end"]))."'";
              if ($_POST["battery_start"]) $where = addWhere($where, "`battery_life` >= '".htmlspecialchars($_POST["battery_start"]))."'";
              if ($_POST["battery_end"]) $where = addWhere($where, "`battery_life` <= '".htmlspecialchars($_POST["battery_end"]))."'";
              if ($_POST["brands"]) $where = addWhere($where, "`brand_id` IN (".htmlspecialchars(implode(",", $_POST["brands"])).")");
//              if ($_POST["availability"]) $where = addWhere($where, "`availability` = '1'");
              $sql = "SELECT * FROM `product`";
              
              //$res = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql); //показ ошибок

              if ($where) $sql .= " WHERE $where";
              //echo $sql; //показ sql-запроса

                $result = $conn->query($sql); 
                if (!$result) echo '<span class="red-msg">Ни один ноутбук не удовлетворяет условиям. Измените параметры подбора </span>';
                
              echo '<div class="space"></div>';  
              echo '<h3>Список подобранных ноутбуков</h3>';   
              echo '<table class="table-bordered table-striped table">';
             echo '<tr>';
                echo '<th>Модель</th>';
                echo '<th>Частота процессора</th>';
                echo '<th>Объем ОП</th>';
                echo '<th>Объем жесткого диска</th>';
                echo '<th>Вес</th>';
                echo '<th>Время работы</th>';
                echo '<th>Цена</th>';
                echo '</tr>';

                while ($data = $result->fetch_assoc())
                {
                   echo '<tr>';
                        echo '<td>'. '<a title="Перейти к описанию ноутбука" target="_blank"  href=/product/'. $data["id"] . '>'. $data["name"] . '</a>' . '</td>';
                        echo '<td>' . $data['CPU'] . '</td>';
                        echo '<td>' . $data['RAM'] . '</td>';
                        echo '<td>' . $data['hard_disk'] . '</td>';
                        echo '<td>' . $data['weight'] . '</td>';
                        echo '<td>' . $data['battery_life'] . '</td>';
                        echo '<td>' . $data['price'] . '</td>';
                  echo '</tr>';
                }
            echo '</table>';        
            }     
    ?>
           
       </div>   
       <div class="col-sm-1"></div>     
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
        
    
    
    

    <?php include ROOT . '/views/layouts/footer.php'; ?> 
    
</body>
</html>