<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja']))
	{
		header('Location: logowanie.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
	//Usuwanie zmiennych pamiętających wartości wpisane do formularza
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
  if (isset($_SESSION['fr_imie'])) unset($_SESSION['fr_imie']);
  if (isset($_SESSION['fr_nazwisko'])) unset($_SESSION['fr_nazwisko']);
  if (isset($_SESSION['fr_miejscowosc'])) unset($_SESSION['fr_miejscowosc']);
  if (isset($_SESSION['fr_ulica'])) unset($_SESSION['fr_ulica']);
  if (isset($_SESSION['fr_nrdomu'])) unset($_SESSION['fr_nrdomu']);
  if (isset($_SESSION['fr_nrtelefonu'])) unset($_SESSION['fr_nrtelefonu']);
	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
	//Usuwanie błędów rejestracji
	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
  if (isset($_SESSION['e_imie'])) unset($_SESSION['e_imie']);
  if (isset($_SESSION['e_nazwisko'])) unset($_SESSION['e_nazwisko']);
  if (isset($_SESSION['e_miejscowosc'])) unset($_SESSION['e_miejscowosc']);
  if (isset($_SESSION['e_ulica'])) unset($_SESSION['e_ulica']);
  if (isset($_SESSION['e_nrdomu'])) unset($_SESSION['e_nrdomu']);
  if (isset($_SESSION['e_nrtelefonu'])) unset($_SESSION['e_nrtelefonu']);
	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Blizzard</title>
    <link rel="shortcut icon" href="zdj/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Strona.css">
    <link rel="stylesheet" href="css/Strona2.css">
</head>
<body>
    <div class="col-12">  
    <nav class="navbar navbar-expand-lg navbar fixed-top menu" style="text-align: center; background-color: black;">
         
         <a class="navbar-brand" href="index.php">
           <img src="zdj/logo.png" class="zjdlogo" alt="Logo">
         </a>
 
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
 
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav">
             <li class="nav-item active">
               <a style="font-weight: bold;" class="nav-link textnaglowek" href="index.php">Digital Blizzard<span class="sr-only"></span></a>
             </li>
             <li class="nav-item mx-md-auto mx-lg-5">
               <a class="nav-link textnaglowek" href="Kompuery.php">Komputery</a>
             </li>
             <li class="nav-item mx-md-auto mx-lg-5">
               <a class="nav-link textnaglowek" href="Stacje_robocze.php">Stacje robocze</a>
             </li>
             <li class="nav-item mx-md-auto mx-lg-5">
               <a class="nav-link textnaglowek" href="Produkt.php">Oferta specjalna</a>
             </li>
             <li class="nav-item mx-md-auto mx-lg-5">
               <a class="nav-link textnaglowek" href="Akcesoria.php">Akcesoria</a>
             </li>
             <li class="nav-item mx-md-auto mx-lg-5">
               <a class="nav-link textnaglowek" href="wsparcie.php">Wsparcie</a>
             </li>
             <li class="nav-item mx-md-auto mx-lg-5">
               <a class="nav-link textnaglowek" href="Koszyk.php"><img src="zdj/Koszyk.png" class="navbarzdj" alt="koszyk"></a>
             </li>
             <li class="nav-item mx-md-auto mx-lg-5">
             <a class="nav-link textnaglowek" href="logowanie.php"><img src="zdj/Logowanie.png" class="navbarzdj" alt="logowanie"></a>
             </li>
             <li class="nav-item mx-md-auto mx-lg-5">
             <form class="form-inline">
               <input class="form-control mr-md-2 szukanie" type="search" placeholder="Wyszukiwanie" aria-label="Wyszukiwanie">
               <button class="btn my-2 my-md-0 szukanie" type="submit">Szukaj</button>
             </form>
           </li>
           </ul>
         </div>
       </nav>
        <br><br><br><br>
        <div>
        Dziękujemy za rejestrację w serwisie! Możesz już zalogować się na swoje konto!<br /><br />
	
	<a href="logowanie.php">Zaloguj się na swoje konto!</a>
</div>

        <br><br><br><br>

        <br><br>

      </div>
    </div>
      <br><br><br><br>

      <footer class="footer mt-auto py-3 bg-dark">
        <div class="row" style="text-align: center">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="row">
                <div class="col-md-12 textnaglowek"><p>Kontakt <br>telefon - 0796124032<br>email - email@poczta.com</p></div>
              </div>
            </div>
            <div class="col-2"></div>
          </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/Strona2.js"></script>
</body>
</html>