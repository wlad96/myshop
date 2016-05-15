<?php

/**
 * Контроллер AdminUserController
 * Управление пользователями в админпанели
 */
class AdminUserController extends AdminBase
{

    /**
     * Action для страницы "Управление пользователями"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список пользователей
        $usersList = User::getUsersList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/index.php');
        return true;
    } 
        
    /**
     * Action для страницы "Добавить пользователя"
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
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($name) || empty($name)) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем нового пользователя
                User::createUser($name, $email, $password, $role);

                // Перенаправляем пользователя на страницу управлениями категориями
                header("Location: /admin/user");
            }
        }

        require_once(ROOT . '/views/admin_user/create.php');
        return true;
    }
    

    /**
     * Action для страницы "Редактирование пользователя"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном заказе
        $user = User::getUserById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена   
            // Получаем данные из формы
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            // Сохраняем изменения
            User::updateUserByIdForAdmin($id, $name, $email, $password, $role);

            // Перенаправляем пользователя на страницу управлениями пользователями
            header("Location: /admin/user");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/update.php');
        return true;
    }
    
     /**
     * Action для страницы "Удалить пользователя"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем пользователя
            User::deleteUserById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/user");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/delete.php');
        return true;
    }

    /**
     * Action для страницы "Просмотр пользователя"
     */
    public function actionView($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном пользователе
        $user = User::getUserById($id);

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/view.php');
        return true;
    }

}
