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


<?php  require 'includes/footer.php'; ?>



