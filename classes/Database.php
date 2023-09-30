<?php
/**
 * Database
 * 
 * A connection to the database
 */
class Database {

/**
 * Get the database connection
 * 
 * @return PDO object Connection to he database server
 * 
 */
  public function getConn() {

    $db_host = "localhost";
    $db_name = "cms_sino";
    $db_user = "cms_sino_user";
    $db_pass = "8YoPgC1*bW0@MRfp";

    $dsn = 'mysql:host='. $db_host . ';dbname='. $db_name . ';charset=utf8';

    try {
      $db = new PDO($dsn, $db_user, $db_pass);

      $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $db;

    } catch (PDOException $e) {
      echo $e -> getMessage();
      exit();
    }
  }
}