<?php

class ContactPerson {

  public $id;
  public $name;
  public $email;
  public $phone;
  public $company_id;


  /**
     * Insert a new contact person with its current property values
     *
     * @param object $conn Connection to the database
     *
     * @return boolean True if the insert was successful, false otherwise
     */
    public function create($conn)
    {
        if ($this->validate()) {

            $sql = "INSERT INTO contact_persons (name, email, phone, company_id)
                    VALUES (:name, :email, :phone, :company_id)";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindValue(':phone', $this->phone, PDO::PARAM_INT);
            $stmt->bindValue(':company_id', $this->company_id, PDO::PARAM_INT);

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


    public static function getWithCompanyID($conn, $company)
    {
        $sql = "SELECT *
                FROM contact_persons
                WHERE company_id = $company";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }


}