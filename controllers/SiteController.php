<?php

/**
 * Контроллер CartController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
        
        // Список брендов для левого меню
        $brands = Brand::getBrandsList();

//        // Список последних товаров (заменила на список новых товаров)
//        $latestProducts = Product::getLatestProducts(6);
       // Список новых товаров
        $newProducts = Product::getNewProducts(6);

        // Список товаров для слайдера
        $sliderProducts = Product::getHitProducts();

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    /**
     * Action для страницы "Контакты"
     */
    public function actionContact()
    {

        // Переменные для формы
        $userEmail = false;
        $userText = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Отправляем письмо администратору 
                $adminEmail = 'alaptopshop@gmail.com';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/site/contact.php');
        return true;
    }
    
    /**
     * Action для страницы "О магазине"
     */
    public function actionAbout()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/about.php');
        return true;
    }
    
      /**
     * Action строки поиска 
     */
    public function actionSearch()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/search.php');
        return true;
    }
       
     /**
     * Action подбор ноутбука
     */
    public function actionChoice()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/choice.php');
        return true;
    }

    
      /**
     * Action подбор ноутбука
     */
    public function actionResult()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/result.php');
        return true;
    }
    
       /**
     * чиню баг actionIndexssite
     */
    public function actionIndexssite()
    {
        //echo "тут он орал про actionIndexssite";
        echo "<script>function();</script>";
        return true;
    }
    
    
    
       /**
     * чиню баг actionIndexcsite
     */
    public function actionIndexcsite()
    {
        echo "а тут он орал про actionIndexcsite";
        return true;
    }
    
        /**
     * чиню баг actionIndexrsite
     */
    public function actionIndexrsite()
    {
         echo "а тут он орал про actionIndexrsite";
        return true;
    }
    
       /**
     * Action Переход к вопросу1
     */
    public function actionIndex1site()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/1question.php');
        return true;
    }
    
       
        /**
     * Action Переход к вопросу3
     */
    public function actionIndex3site()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/3question.php');
        return true;
    }
    
        /**
     * Action Переход к вопросу4
     */
    public function actionIndex4site()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/4question.php');
        return true;
    }
    
       
        /**
     * Action Переход к вопросу5
     */
    public function actionIndex5site()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/5question.php');
        return true;
    }

       /**
     * Action Переход к вопросу2
     */
    public function actionIndexvsite()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/2question.php');
        return true;
    }
    
      /**
     * Action для Брендов actionIndexbsite 
     */
    public function actionIndexbsite()
    {
        // Подключаем вид
        require_once(ROOT . '/views/catalog/brand.php');
        return true;
    }
 
    
      /**
     * Action для менеджера actionIndexmsite 
     */
    public function actionIndexmsite()
    {
        // Подключаем вид
        require_once(ROOT . '/views/manager/index.php');
        return true;
    }
 
    
    
}

  