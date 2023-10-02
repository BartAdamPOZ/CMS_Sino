<?php

class Company
{

  public $id;
  public $name;
  public $address;
  public $sector;
  public $plan;

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
                FROM companies
                WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Company');

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

            $sql = "INSERT INTO companies (name, address, sector, plan)
                    VALUES (:name, :address, :sector, :plan)";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':address', $this->address, PDO::PARAM_STR);
            $stmt->bindValue(':sector', $this->sector, PDO::PARAM_STR);
            $stmt->bindValue(':plan', $this->plan, PDO::PARAM_STR);

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

    public static function getAll($conn)
    {
        $sql = "SELECT *
                FROM companies
                ORDER BY name;";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSupervisors($conn)
    {
        $sql = "SELECT name
                FROM employees
                JOIN com_empl
                ON employees.id = com_empl.employee_id
                WHERE company_id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setSupervisor($conn, $id)
    {
        $sql = "INSERT IGNORE INTO com_empl (company_id, employee_id)
                    VALUES (:company_id, :employee_id)";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':company_id', $this->id, PDO::PARAM_INT);
            $stmt->bindValue(':employee_id', $id, PDO::PARAM_INT);


            $stmt->execute();
                
        

    }



}