<?php

/**
 * Контроллер AdminController
 * Главная страница в админпанели
 */
class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }
    
     /**
     * Чиню баг call_user_func_array() expects parameter 1 to be a valid callback, class 'AdminController' does not have a method 'actionBrand' in C:\OpenServer\domains\myshop\components\Router.php on line 80
     */
//    public function actionBrand()
//    {
//        // Проверка доступа
//        self::checkAdmin();
//
//        // Подключаем вид
//        require_once(ROOT . '/views/admin_brand/index.php');
//        return true;
//    }

}
