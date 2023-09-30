<?php

require 'includes/init.php';

$conn = require 'includes/db.php';

require 'includes/header.php';

if (isset($_GET['id'])){

  $company = Company::getByID($conn, $_GET['id']);

  if (! $company) {
    die('Nie znaleziono klienta.');
  }
} else {
  die("Identyfikator klienta nie został wprowadzony.");
}



?>

  <div class="container company-site">
    <div class="item1">
      <?php if ($company): ?>
        <h4>O firmie:</h4>
        <h5>Nazwa: <?= htmlspecialchars($company -> name); ?></h5>
        <p>Adres: <?= htmlspecialchars($company -> address); ?></p>
        <p>Sektor: <?= htmlspecialchars($company -> sector); ?></p>
        <p>Pakiet: <?= htmlspecialchars($company -> subscription); ?></p>
      <?php else: ?>
        <p>Brak firmy w bazie danych.</p>
      <?php endif; ?>
    </div>

    <div class="item2">
      <h5>Dodaj opiekuna</h5>
    </div>

    <div class="item3">
      <h5>Dodaj nową osobę do kontaktu</h5>
    </div>

    <div class="contact-table">
      <h5>Tabela z osobami do kontaktu</h5>
    </div>

    <div class="supervisor-table">
      <h5>Tabela z opiekunami</h5>
    </div>









</div>

<?php require 'includes/footer.php' ?>