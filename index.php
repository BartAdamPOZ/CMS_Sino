<?php

require 'includes/init.php';

$conn = require 'includes/db.php';

require 'includes/header.php';

?>


<div class="container main-area">
  
    <div class="col-lg-4 col-sm-12 btn btn-main">
      <h3><a href="new-employee-form.php" class="link-body-emphasis text-decoration-none">Dodaj Pracownika</a></h3>
    </div>
   
  
    <div class="col-lg-4 col-sm-12 btn btn-main">
      <h3><a href="new-client-form.php" class="link-body-emphasis text-decoration-none">Dodaj Klienta</a></h3>
    </div>
   
  
    <div class="col-lg-4 col-sm-12 btn btn-main">
      <h3><a href="client-view.php" class="link-body-emphasis text-decoration-none">Przeglądaj</a></h3>
    </div>
  
</div>


<?php require 'includes/footer.php' ?>