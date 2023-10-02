<?php

require 'includes/init.php';

$conn = require 'includes/db.php';


require 'includes/header.php';

?>


<div class="container main-area">
  
  <a href="new-employee.php" class="link-body-emphasis text-decoration-none">
    <div class="col-lg-4 col-sm-12 btn btn-main">
      <h3>Dodaj Pracownika</h3>
    </div>
  </a>
   
  
    <a href="new-client.php" class="link-body-emphasis text-decoration-none">
    <div class="col-lg-4 col-sm-12 btn btn-main">
      <h3>Dodaj Klienta</h3>
    </div>
  </a>
   
  <a href="company-oriented-view.php" class="link-body-emphasis text-decoration-none">
    <div class="col-lg-4 col-sm-12 btn btn-main">
      <h3>Przeglądaj</h3>
    </div>
  </a>

</div>


<?php require 'includes/footer.php' ?>