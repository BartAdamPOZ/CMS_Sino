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
    <table id="myTable" class="display">
      <thead>
        <tr>
          <th>Column 1</th>
          <th>Column 2</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Row 1 Data 1</td>
          <td>Row 1 Data 2</td>
        </tr>
        <tr>
          <td>Row 2 Data 1</td>
          <td>Row 2 Data 2</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<?php  require 'includes/footer.php'; ?>