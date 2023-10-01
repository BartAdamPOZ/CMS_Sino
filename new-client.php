<?php

require 'includes/init.php';

$company = new Company();

$conn = require 'includes/db.php';

$companies = Company::getAll($conn);


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

<div class="container companies-table">
  <h5>Wszyscy klienci</h5>

  <div>
    <?php if (empty($companies)): ?>

    Nie odnaleziono klientów.

    <?php else :?>

    <table id="companies-all" class="display">
      <thead>

        <th>Nazwa</th>
        <th>Adres</th>
        <th>Sektor</th>
        <th>Plan</th>


      </thead>
      <tbody>
        <?php foreach ($companies as $company): ?>
          <td>
            <a href="company-site.php?id=<?= $company['id']?>" style="text-decoration:none; color:black; "><?= htmlspecialchars($company['name']);?></a>
          </td>
          <td>
            <?= htmlspecialchars($company['address']);?>
          </td>
          <td>
            <?= htmlspecialchars($company['sector']);?>
          </td>
          <td>
            <?= htmlspecialchars($company['plan']);?>
          </td>
        </tr>
        <?php endforeach;?>


      </tbody>
    </table>
    <?php endif;?>
  </div>

</div>


<?php  require 'includes/footer.php'; ?>