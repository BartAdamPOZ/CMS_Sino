<?php

require 'includes/init.php';

$conn = require 'includes/db.php';

require 'includes/header.php';

?>

<div class="container col-md-7 col-lg-8">

        <h4 class="mb-3">Wprowadź dane nowego pracownika</h4>

        <form class="needs-validation" novalidate="">

          <div class="row g-2">
            <div class="col-lg-6 col-sm-12">
              <label for="fullname_employee" class="form-label">Imię i Nazwisko</label>
              <input type="text" class="form-control" id="fullname_employee" placeholder="" value="" required="">
              <div class="invalid-feedback">
                To pole jest wymagane.
              </div>
            </div>

            <div class="col-lg-6 col-sm-12">
              <label for="position" class="form-label">Stanowisko</label>
              <select class="form-select" id="position" required="">
                <option value="">Wybierz...</option>
                <option>Team Leader</option>
                <option>Senior Customer Success Specialist</option>
                <option>Customer Success Specialist</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="row g-2">
            <div class="col-lg-6 col-sm-12">
              <label for="phone" class="form-label">Telefon <span class="text-body-secondary">(Opcjonalne)</span></label>
              <input type="tel" class="form-control" id="phone" placeholder="" value="" required="">
              <div class="invalid-feedback">
                To pole jest wymagane.
              </div>
            </div>

            <div class="col-lg-6 col-sm-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Opcjonalne)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Wprowadź poprawny adres email.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-50 btn btn-primary btn-lg" type="submit" method="post">Zapisz</button>
        </form>
      </div>



<?php require 'includes/footer.php' ?>