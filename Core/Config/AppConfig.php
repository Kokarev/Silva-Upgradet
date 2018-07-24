<?php
namespace Core\Config;

class AppConfig {

  /**
   *  Пути к файлам
   */
  static $tplLayoutWeb = '/layouts/app';
  static $baseDir = __DIR__ . '/../..';
  static $tplDir = __DIR__ . '/../../resources/view';

  static $AppName = 'Мой фотосайт ';
  static $AppCopy = '&copy 2018 ITStep B2 ';

  /**
   *  Настройки базы данных
   */
  static $DB_HOST = 'localhost';
  static $DB_PORT = '3306';
  static $DB_USER = 'c28db';
  static $DB_PSWD = 'R2-D2BackendMMXXVIII';
  static $DB_NAME = 'c28db';
}
