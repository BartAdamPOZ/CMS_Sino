<?php

require 'includes/init.php';

$contactPerson = new ContactPerson();

$employee = new Employee();

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

  if(isset($_POST['name'])){

    $contactPerson -> name = $_POST['name'];
    $contactPerson -> email = $_POST['email'];
    $contactPerson -> phone = $_POST['phone'];
    $contactPerson -> company_id = $company -> getId();

    
    if ($contactPerson -> create($conn)) {

      Url::redirect("/company-site.php?id={$company -> id}");
    }
  } elseif (isset($_POST['supervisor'])){

    $company -> setSupervisor($conn, $_POST['supervisor']);

    Url::redirect("/company-site.php?id={$company -> id}");

  }

} 
 

$contactPersons = ContactPerson::getWithCompanyID($conn, $company -> id);

$employeesAll = Employee::getAll($conn);

$employees = Employee::getByCompanyID($conn, $company -> id);

$companyData = Company::getWithSupervisorsAndContactPersons($conn);


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
    <form method="post">
      <select name="supervisor" class="form-select" id="supervisor" required="">
        <option value="">Wybierz...</option>
          <?php foreach ($employeesAll as $employee) : ?>
        <option value="<?= $employee['id']?>" id="employee<?= $employee['id']?>">
          <?= htmlspecialchars($employee['name']) ?></option>
        <?php endforeach; ?>
      </select>

      <button class="btn btn-sm btn-primary">Dodaj</button>
    </form>
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
        <input class="form-control" name="email" type="email" id="contact-email">
      </div>

      <button class="w-100 btn btn-light btn-lg mt-3 " type="submit">Zapisz</button>

    </form>

  </div>

  <div class="contact-table table-responsive">
    <h5>Tabela z osobami do kontaktu</h5>

    <div>
      <?php if (empty($contactPersons)): ?>

      Nie odnaleziono osób kontaktowych.

      <?php else :?>

      <table id="contact-persons" class="display">
      <thead>
          <th>Imię i nazwisko</th>
          <th>Email</th>
          <th>Telefon</th>

        </thead>
        <tbody>
          <?php foreach ($contactPersons as $contactPerson): ?>
          <tr>
            <td>
              <?= htmlspecialchars($contactPerson['name']);?>
            </td>
            <td>
              <?= htmlspecialchars($contactPerson['email']);?>
            </td>
            <td>
              <?= htmlspecialchars($contactPerson['phone']);?>
            </td>
          </tr>
          <?php endforeach;?>


        </tbody>
      </table>

      
      <?php endif;?>
    </div>

  </div>

  <div class="supervisor-table table-responsive">
    <h5>Tabela z opiekunami</h5>

    <div>
      <?php if (empty($employees)): ?>

      Brak opiekunów.

      <?php else : ?>

      <table id="supervisors" class="display">
        <thead>
          <th>Imię i nazwisko</th>
          <th>Email</th>
          <th>Telefon</th>
          <th>Stanowisko</th>
        </thead>
        <tbody>
          <?php foreach ($employees as $employee): ?>
          <tr>
            <td>
              <?= htmlspecialchars($employee['name']);?>
            </td>
            <td>
              <?= htmlspecialchars($employee['email']);?>
            </td>
            <td>
              <?= htmlspecialchars($employee['phone']);?>
            </td>
            <td>
              <?= htmlspecialchars($employee['position']);?>
            </td>
          </tr>
          <?php endforeach;?>


        </tbody>
      </table>
      <?php endif;?>
    </div>
  </div>

</div>

<?php require 'includes/footer.php' ?>