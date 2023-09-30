<?php
/**Subscription
 * 
 * Grouping for plans
 */

class Subscription {

  /**
   * Get all the plans
   * 
   * @param object $conn Connection to the database
   * 
   * @param array An associative array of all the subscription records
   * 
   */

   public static function getAll($conn) {

    $sql = "SELECT *
            FROM plans
            ORDER BY name;";

    $results = $conn -> query($sql);
  
    return $results -> fetchAll(PDO::FETCH_ASSOC);
  }


}