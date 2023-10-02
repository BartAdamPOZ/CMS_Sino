<?php

require 'includes/init.php';

$conn = require 'includes/db.php';

require 'includes/header.php';

?>

<?php $companiesData = Company::getWithSupervisorsAndContactPersons($conn); ?>

<div class="container">
<table id="client-oriented-table" class="display">
  <thead>

    <th>Nazwa</th>
    <th>Adres</th>
    <th>Branża</th>
    <th>Plan</th>
    <th>Osoby kontaktowe</th>
    <th>Opiekunowie</th>

  </thead>
  <tbody>
    <?php foreach ($companiesData as $companyData):?>
    <tr>
      <td>
        <?= htmlspecialchars($companyData['name']);?>
      </td>
      <td>
        <?= htmlspecialchars($companyData['address']);?>
      </td>
      <td>
        <?= htmlspecialchars($companyData['sector']);?>
      </td>
      <td>
        <?= htmlspecialchars($companyData['plan']);?>
      </td>
      <td>
        <?= htmlspecialchars($companyData['contact_person_info']);?>
      </td>
      <td>
        <?= htmlspecialchars($companyData['employees_info']);?>
      </td>
    </tr>
    <?php endforeach;?>


  </tbody>
</table>
</div>




<?php require 'includes/footer.php' ?>