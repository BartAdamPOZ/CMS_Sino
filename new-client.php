<?php

require 'includes/init.php';

$company = new Company();

$conn = require 'includes/db.php';


if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $company -> name = $_POST['name'];
  $company -> address = $_POST['address'];
  $company -> sector = $_POST['sector'];
  $company -> plan = $_POST['plan'];


  if ($company -> create($conn)) {

    Url::redirect("/company-site.php?id={$company -> id}");

  }

} 

?>


<?php  require 'includes/header.php'; ?>


<?php  require 'includes/new-client-form.php'; ?>


<?php  require 'includes/footer.php'; ?>



