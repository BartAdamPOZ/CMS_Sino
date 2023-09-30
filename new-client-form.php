<?php

require 'includes/init.php';

$conn = require 'includes/db.php';

require 'includes/header.php';

?>

<div class="container col-md-7 col-lg-8">

        <h4 class="mb-3">Wprowadź dane nowego klienta</h4>

        <form class="needs-validation" novalidate="">

        <div class="row g-2">
            <div class="col-lg-6 col-sm-12">
              <label for="company-name" class="form-label">Nazwa Firmy <span class="text-body-secondary">(Wymagane)</span></label>
              <input type="text" class="form-control" id="company-name" placeholder="" value="" required="">
              <div class="invalid-feedback">
                To pole jest wymagane.
              </div>
            </div>

            <div class="col-lg-6 col-sm-12">
              <label for="address" class="form-label">Adres <span class="text-body-secondary">(Opcjonalne)</span></label>
              <input type="text" class="form-control" id="address" placeholder="" value="" required="">
            </div>

            <div class="col-lg-6 col-sm-12">
              <label for="subscription" class="form-label">Plan <span class="text-body-secondary">(Wymagane)</span></label>
              <select class="form-select" id="subscription" required="">
                <option value="">Wybierz...</option>
                <option>Podstawowy</option>
                <option>Zaawansowany</option>
                <option>Premium</option>
              </select>
              <div class="invalid-feedback">
                Proszę wybrać plan.
              </div>
            </div>

            <div class="col-lg-6 col-sm-12">
              <label for="employee" class="form-label">Opiekun <span class="text-body-secondary">(Opcjonalne)</span></label>
              <select class="form-select" id="employee" required="">
                <option value="">Wybierz...</option>
                <!-- tutaj kod PHP wyświetlający z bazy danych dostępnych opiekunów -->
              </select>
            </div>

            <div class="col-lg-6 col-sm-12">
              <label for="sector" class="form-label">Branża <span class="text-body-secondary">(Opcjonalne)</span></label>
              <select class="form-select" id="sector" required="">
                <option value="">Wybierz...</option>
                <option>rolnictwo</option>
                <option>górnictwo</option>
                <option>produkcja</option>
                <option>dostarczanie energii</option>
                <option>gospodarka odpadami</option>
                <option>budownictwo</option>
                <option>handel, mechanika pojazdowa</option>
                <option>transport</option>
                <option>informatyka i komunikacja</option>
                <option>doradztwo finansowe</option>
                <option>nieruchomości</option>
                <option>nauka i technika</option>
                <option>administracja i usługi</option>
                <option>administracja publiczna</option>
                <option>edukacja</option>
                <option>zdrowie publiczne</option>
                <option>rozrywka i rekreacja</option>
                <option>gospodarstwo domowe</option>
                <option>organizacje eksterytorialne</option>
                <option>pozostałe</option>
              </select>
            </div>

          <hr class="my-4">

          <button class="w-50 btn btn-primary btn-lg" type="submit" method="post">Zapisz</button>
        </form>
      </div>



<?php require 'includes/footer.php' ?>