<?php

require 'includes/init.php';

$contactPerson = new ContactPerson();

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

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $contactPerson -> name = $_POST['name'];
  $contactPerson -> email = $_POST['email'];
  $contactPerson -> phone = $_POST['phone'];
  $contactPerson -> company_id = $company -> getId();

  if ($contactPerson -> create($conn)) {

    Url::redirect("/company-site.php?id={$company -> id}");
  }

} 

?>

  <div class="container company-site">
    <div class="item1">
      <?php if ($company): ?>
        <h4>O firmie:</h4>
        <h5>Nazwa: <?= htmlspecialchars($company -> name); ?></h5>
        <p>Adres: <?= htmlspecialchars($company -> address); ?></p>
        <p>Sektor: <?= htmlspecialchars($company -> sector); ?></p>
        <p>Pakiet: <?= htmlspecialchars($company -> plan); ?></p>
      <?php endif; ?>
    </div>

    <div class="item2">
      <h5>Dodaj opiekuna</h5>
    </div>

    <div class="item3 py-4">
      <h5>Dodaj nową osobę do kontaktu</h5>
        
      <form method="post">

        <div class="form-group">
          <label for="contact-name">Imię i Nazwisko: </label>
          <input class="form-control" name="name" type="text" id="contact-name" required>
        </div>

        <div class="form-group">
          <label for="contact-phone">Numer telefonu: </label>
          <input class="form-control" name="phone" type="tel" id="contact-phone">
        </div>

        <div class="form-group">
          <label for="contact-email">Email: </label>
          <input class="form-control" name="email" type="email" id="contact-email" >
        </div>
        
        <button class="w-100 btn btn-light btn-lg mt-3 " type="submit">Zapisz</button>

      </form>

    </div>

    <div class="contact-table">
      <h5>Tabela z osobami do kontaktu</h5>
    </div>

    <div class="supervisor-table">
      <h5>Tabela z opiekunami</h5>
    </div>









</div>

<?php require 'includes/footer.php' ?>