<?php

/**
 * Контроллер AdminBrandController
 * Управление брендами в админпанели
 */
class AdminBrandController extends AdminBase
{

    /**
     * Action для страницы "Управление брендами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

//        // Получаем список категорий
//        $categoriesList = Category::getCategoriesListAdmin();
        
        // Получаем список производителей
        $brandsList = Brand::getBrandsListAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin_brand/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить бренд"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($name) || empty($name)) {
                $errors[] = 'Заполните поля';
            }


            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый бренд
                Brand::createBrand($name);

                // Перенаправляем пользователя на страницу управлениями категориями
                header("Location: /admin/brand");
            }
        }

        require_once(ROOT . '/views/admin_brand/create.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать бренд"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном бренде
        $brand = Brand::getBrandById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена   
            // Получаем данные из формы
            $name = $_POST['name'];

            // Сохраняем изменения
            Brand::updateBrandById($id, $name);

            // Перенаправляем пользователя на страницу управлениями категориями
            header("Location: /admin/brand");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_brand/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить бренд"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем бренд
            Brand::deleteBrandById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/brand");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_brand/delete.php');
        return true;
    }

}
