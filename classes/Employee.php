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

    /**
     * Get all the employees
     *
     * @param object $conn Connection to the database
     *
     * @return array An associative array of all the employee records
     */
    public static function getAll($conn)
    {
        $sql = "SELECT *
                FROM employees
                ORDER BY name;";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getByCompanyID($conn, $companyID)
    {
        $sql = "SELECT employees.*
                FROM companies
                JOIN com_empl
                ON companies.id = com_empl.company_id
                JOIN employees
                ON com_empl.employee_id = employees.id
                WHERE companies.id = $companyID;";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

}

