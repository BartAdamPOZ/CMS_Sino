<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300&family=Noto+Serif:wght@400;700&family=Pacifico&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css">

  <title>Sino</title>
</head>

<body>

  <div class="container">
    <header class=" py-4 mb-4">
      <a href="/" class="mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <span href="index.php" class="fs-2 deco-text" ">Sino</span>
      </a>

      <button class="navbar-toggler collapsed text-decoration-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <ul class="nav nav-pills ">
        <li class="nav-item"><a href="/index.php" class="nav-link text-decoration-none" aria-current="page" style="color: black;">Strona Główna</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
            Dodaj
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/new-client.php" style="color: black;">Nowy Klient</a></li>
            <li><a class="dropdown-item" href="/new-employee.php" style="color: black;">Nowy Pracownik</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
            Widoki
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="company-oriented-view.php" style="color: black;" >Klienci</a></li>
            <li><a class="dropdown-item" href="employee-oriented-view.php" style="color: black;">Pracownicy</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="/plans.php" class="nav-link" style="color: black;">Subskrypcje</a></li>
      </ul>
    </header>
  </div>

  <main>