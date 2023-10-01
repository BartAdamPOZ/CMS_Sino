<?php

require 'includes/init.php';

$employee = new Employee();

$conn = require 'includes/db.php';

$employees = Employee::getAll($conn);


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


<div class="container d-flex employee-table-area" style="flex-direction: column; align-items:center;">
  <div>
    <h3>Wszyscy pracownicy:</h3>
  </div>

  <div>
    <?php if (empty($employees)): ?>

    Nie odnaleziono pracowników.

    <?php else :?>

    <table id="employees" class="display">
      <thead>

        <th>Imię i nazwisko</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Stanowisko</th>

      </thead>
      <tbody>
        <?php foreach ($employees as $employee):?>
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


<?php  require 'includes/footer.php'; ?>