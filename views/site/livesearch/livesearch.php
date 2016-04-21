<!--pos.:    views/site/livesearch/livesearch.php обработчик-->
<?php  

define("DB_HOST","localhost");
define("DB_NAME","myshop"); //Имя базы
define("DB_USER","root"); //Пользователь
define("DB_PASSWORD",""); //Пароль
define("PREFIX",""); //Префикс если нужно

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");

if(!empty($_POST["referal"])){ //Принимаем данные

    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));

    $db_referal = $mysqli -> query("SELECT * from ".PREFIX."product WHERE name LIKE '%$referal%'")
    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');

    while ($row = $db_referal -> fetch_array()) {
        echo "\n<li><a href='http://myshop/product/".$row["id"]."'>".$row["name"]."</a></li>"; //$row["name"] - имя поля таблицы
    }

}

 ?>

