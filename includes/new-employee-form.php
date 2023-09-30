<?php if(! empty($employee -> errors)): ?>
<ul>
  <?php foreach ($employee -> errors as $error): ?>
  <li><?=$error ?></li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>

<div class="container col-md-7 col-lg-8">

        <h4 class="mb-3">Wprowadź dane nowego pracownika</h4>

        <form class="needs-validation" method="post">

          <div class="row g-2">
            <div class="col-lg-6 col-sm-12">
              <label for="fullname_employee" class="form-label">Imię i Nazwisko</label>
              <input name="name" type="text" class="form-control" id="fullname_employee" required>
              <div class="invalid-feedback">
                To pole jest wymagane.
              </div>
            </div>

            <div class="col-lg-6 col-sm-12">
              <label for="position" class="form-label">Stanowisko</label>
              <select name="position" class="form-select" id="position" >
                <option value="">Wybierz...</option>
                <option>Team Leader</option>
                <option>Senior Customer Success Specialist</option>
                <option>Customer Success Specialist</option>
              </select>
            </div>

            <div class="row g-2">
            <div class="col-lg-6 col-sm-12">
              <label for="phone" class="form-label">Telefon <span class="text-body-secondary">(Opcjonalne)</span></label>
              <input name="phone" type="tel" class="form-control" id="phone">
              <div class="invalid-feedback">
                To pole jest wymagane.
              </div>
            </div>

            <div class="col-lg-6 col-sm-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Opcjonalne)</span></label>
              <input name="email" type="email" class="form-control" id="email" placeholder="nazwa@gmail.com">
              <div class="invalid-feedback">
                Wprowadź poprawny adres email.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-50 btn btn-primary btn-lg" type="submit" method="post">Dodaj</button>
        </form>
      </div>


<?php require 'footer.php' ?>