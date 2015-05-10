<?php

class DB extends \PDO
{

    public function __construct()
    {

        $db = array(
            /**
             * Хост
             */
            'host' => '127.0.0.1',
            /**
             * Порт
             */
            'port' => 3306,
            /**
             * Имя таблицы(схемы) с которой работаем
             */
            'db_name' => 'mysite',
            /**
             * Имя пользователя
             */
            'db_user' => 'root',
            /**
             * Пароль пользователя
             */
            'db_pass' => '',
            /**
             * Кодировка базы UTF-8
             */
            'options' => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            )
        );

        parent::__construct(
            'mysql:host=' . $db['host'] . ';port=' . $db['port'] . ';dbname=' . $db['db_name'],
            $db['db_user'],
            $db['db_pass'],
            $db['options']
        );

    }

    public function query($query)
    {
        $args = func_get_args();
        array_shift($args);
        $r = parent::prepare($query);
        $r->execute($args);
        return $r;
    }

    public function insecureQuery($query)
    {
        return parent::query($query);
    }

}