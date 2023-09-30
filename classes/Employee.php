<?php

class Employee
{

  public $id;
  public $name;
  public $email;
  public $phone;
  public $position;

  public $errors = [];



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
                FROM employees
                WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Employee');

        if ($stmt->execute()) {

            return $stmt->fetch();

        }
    }

    /**
     * Insert a new company with its current property values
     *
     * @param object $conn Connection to the database
     *
     * @return boolean True if the insert was successful, false otherwise
     */
    public function create($conn)
    {
        if ($this->validate()) {

            $sql = "INSERT INTO employees (name, email, phone, position)
                    VALUES (:name, :email, :phone, :position)";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindValue(':phone', $this->phone, PDO::PARAM_INT);
            $stmt->bindValue(':position', $this->position, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $this->id = $conn->lastInsertId();
                return true;
            }

        } else {
            return false;
        }
    }

    protected function validate()
    {
        if ($this->name == '') {
            $this->errors[] = 'Nazwa jest wymagana';
        }

        return empty($this->errors);
    }

    public function getId() {

      return $this->id;
      
    }


}
