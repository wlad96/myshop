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
                $adminEmail = 'php.start@mail.ru';
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
     * чиню баг actionIndexssite
     */
    public function actionIndexssite()
    {
        echo "тут он орал про actionIndexssite";
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
}
