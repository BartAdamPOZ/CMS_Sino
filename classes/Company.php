<?php

class Company {

  public $id;
  public $name;
  public $address;
  public $sector;
  public $subscriptions = [];

  public $errors =[];



  /**
     * Get the company record based on the ID
     *
     * @param object $conn Connection to the database
     * @param integer $id the company ID
     * @param string $columns Optional list of columns for the select, defaults to *
     *
     * @return mixed An object of this class, or null if not found
     */
    public static function getByID($conn, $id, $columns = '*')
    {
        $sql = "SELECT $columns
                FROM companies
                WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Company');

        if ($stmt->execute()) {

            return $stmt->fetch();

        }
    }


}

