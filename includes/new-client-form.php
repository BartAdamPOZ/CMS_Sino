<?php if(! empty($company -> errors)): ?>
<ul>
  <?php foreach ($company -> errors as $error): ?>
  <li><?=$error ?></li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>


<div class="container col-md-7 col-lg-8">

  <h4 class="mb-3">Wprowadź dane nowego klienta</h4>

  <form method="post" id="formArticle">

  <div class="row g-2"> 
    <div class="col-lg-6 col-sm-12 form-group">
      <label for="name" class="form-label">Nazwa Firmy <span class="text-body-secondary">(Wymagane)</span></label>
      <input name="name" type="text" class="form-control" id="name" placeholder=""
        value="" required="">
      <div class="invalid-feedback">
        To pole jest wymagane.
      </div>
    </div>

    <div class="col-lg-6 col-sm-12 form-group">
      <label for="address" class="form-label">Adres <span class="text-body-secondary">(Opcjonalne)</span></label>
      <input name="address" type="text" class="form-control" id="address" placeholder=""
        value="">
    </div>

    <div class="col-lg-6 col-sm-12 form-group">
      <label for="plan" class="form-label">Plan <span class="text-body-secondary">(Wymagane)</span></label>
      <select name="plan" class="form-select" id="plan" required="">
        <option value="">Wybierz...</option>
        <option>Podstawowy</option>
        <option>Zaawansowany</option>
        <option>Premium</option>
      </select>
      <div class="invalid-feedback">
        Proszę wybrać plan.
      </div>
    </div>

    <div class="col-lg-6 col-sm-12 form-group">
      <label for="sector" class="form-label">Branża <span class="text-body-secondary">(Opcjonalne)</span></label>
      <select name="sector" class="form-select" id="sector">
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

    

    <button class="btn btn-primary btn-lg" style="align-items: center;" type="submit">Zapisz</button>

    <hr class="my-4">
  </form>
</div>