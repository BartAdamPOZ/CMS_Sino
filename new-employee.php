<?php

require 'includes/init.php';

$employee = new Employee();

$conn = require 'includes/db.php';


if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $employee -> name = $_POST['name'];
  $employee -> email = $_POST['email'];
  $employee -> phone = $_POST['phone'];
  $employee -> position = $_POST['position'];


  if ($employee -> create($conn)) {



    Url::redirect("/new-employee.php");

  }

} 

?>


<?php  require 'includes/header.php'; ?>


<?php  require 'includes/new-employee-form.php'; ?>


<div class="container d-flex employee-table-area" style="flex-direction: column;">
  <div>
    <h3>Wszyscy pracownicy:</h3>
  </div>

  <div>
    <table id="employees" class="display">
      <thead>
        
          <th>Column 1</th>
          <th>Column 2</th>
          <th>Column 3</th>
        
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
</div>


<?php  require 'includes/footer.php'; ?>