<?php

require 'includes/init.php';

$conn = require 'includes/db.php';

require 'includes/header.php';

?>

<?php $employeesData = Employee::getWithCompanies($conn); ?>

<div class="container table-responsive">

  <?php if (empty($employeesData)): ?>

  Brak firm.

  <?php else :?>

    <h3 class="my-3" >Nasi Pracownicy</h3>


  <table class="display" id="employee-oriented-table">
    <thead>

      <th>Imię i Nazwisko</th>
      <th>Email</th>
      <th>Telefon</th>
      <th>Stanowisko</th>
      <th>Przypisani Klienci</th>
      

    </thead>
    <tbody>
      <?php foreach ($employeesData as $employeeData):?>
      <tr>
        <td>
          <?= htmlspecialchars($employeeData['name']);?>
        </td>
        <td>
          <?= htmlspecialchars($employeeData['email']);?>
        </td>
        <td>
          <?= htmlspecialchars($employeeData['phone']);?>
        </td>
        <td>
          <?= htmlspecialchars($employeeData['position']);?>
        </td>
        <td>
          <?= htmlspecialchars($employeeData['companies_info']);?>
        </td>
      </tr>
      <?php endforeach;?>

    </tbody>
  </table>
  <?php endif;?>
</div>


<?php require 'includes/footer.php' ?>