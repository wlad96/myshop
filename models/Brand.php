<?php

/**
 * Класс Brand - модель для работы с производителями товаров (брендами)
 */
class Brand
{

    /**
     * Возвращает массив производителей для списка на сайте
     * @return array <p>Массив с производителями</p>
     */
    public static function getBrandsList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT id, name FROM brand ORDER BY name ASC');

        // Получение и возврат результатов
        $i = 0;
        $brandList = array();
        while ($row = $result->fetch()) {
            $brandList[$i]['id'] = $row['id'];
            $brandList[$i]['name'] = $row['name'];
            $i++;
        }
        return $brandList;
    }

    /**
     * Возвращает массив брендов для списка в админпанели <br/>
     * @return array <p>Массив брендов</p>
     */
    public static function getBrandsListAdmin()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT id, name FROM brand ORDER BY name ASC');

        // Получение и возврат результатов
        $brandList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $brandList[$i]['id'] = $row['id'];
            $brandList[$i]['name'] = $row['name'];
            $i++;
        }
        return $brandList;
    }

    /**
     * Удаляет бренд с заданным id
     * @param integer $id
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteBrandById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM brand WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактирование бренда с заданным id
     * @param integer $id <p>id бренда</p>
     * @param string $name <p>Название</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateBrandById($id, $name)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE brand
            SET 
                name = :name, 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Возвращает бренд с указанным id
     * @param integer $id <p>id бренда</p>
     * @return array <p>Массив с информацией о бренде</p>
     */
    public static function getBrandById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM brand WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }
    /**
     * Добавляет нового производителя
     * @param string $name <p>Название</p>
     * @return boolean <p>Результат добавления записи в таблицу</p>
     */
    public static function createBrand($name)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO brand (name) '
                . 'VALUES (:name)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        return $result->execute();
    }

}
