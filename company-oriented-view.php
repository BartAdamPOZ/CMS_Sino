<?php

require 'includes/init.php';

$conn = require 'includes/db.php';

require 'includes/header.php';

?>

<?php $companiesData = Company::getWithSupervisorsAndContactPersons($conn); ?>

<div class="container table-responsive">

<?php if (empty($companiesData)): ?>

  Brak firm. 

<?php else :?>


<table id="company-oriented-table">
  <thead>

    <th>Nazwa</th>
    <th>Adres</th>
    <th>Opiekunowie</th>
    <th>Plan</th>
    <th>Osoby kontaktowe</th>
    <th>Branża</th>

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
        <?= htmlspecialchars($companyData['employees_info']);?>
      </td>
      <td>
        <?= htmlspecialchars($companyData['plan']);?>
      </td>
      <td>
        <?= htmlspecialchars($companyData['contact_person_info']);?>
      </td>
      <td>
        
        <?= htmlspecialchars($companyData['sector']);?>
      </td>
    </tr>
    <?php endforeach;?>

  </tbody>
</table>
<?php endif;?>
</div>




<?php require 'includes/footer.php' ?>