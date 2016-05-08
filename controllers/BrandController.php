<?php

/**
 * Контроллер BrandController
 * Бренды
 */
class BrandController
{

    /**
     * Action для страницы "Каталог товаров"
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
        
        // Список брендов для левого меню
        $brands = Brand::getBrandsList();

        /* // Список последних товаров (заменила на список всех товаров)
        $latestProducts = Product::getLatestProducts(12);
        */
         
//        // Список всех товаров ВСЕ ТОВАРЫ
//        $allProducts = Product::getAllProducts(100);

        // Подключаем вид
        require_once(ROOT . '/views/catalog/brand.php');
        return true;
    }

    /**
     * Action для страницы "Категория товаров"
     */
//    public function actionCategory($categoryId, $page = 1)
//    {
//        // Список категорий для левого меню
//        $categories = Category::getCategoriesList();
//
//        // Список товаров в категории
//        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
//       
//
//        // Общее количетсво товаров (необходимо для постраничной навигации)
//        $total = Product::getTotalProductsInCategory($categoryId);
//
//        // Создаем объект Pagination - постраничная навигация
//        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
//
//        // Подключаем вид
//        require_once(ROOT . '/views/catalog/category.php');
//        return true;
//    }
//    
     /**
     * Action Для брендов
     */
    public function actionBrand($brandId, $page = 1)
    {
        // Список категорий для левого меню
        $brands = Brand::getBrandsList();

        // Список товаров в бренде
        $brandProducts = Product::getProductsListByBrand($brandId, $page);

        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = Product::getTotalProductsInBrand($brandId);

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');       
        
        // Подключаем вид
        require_once(ROOT . '/views/catalog/brand.php');
        return true;
    }

}
