<?php

	session_start();

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownik WHERE user='%s'",
		mysqli_real_escape_string($polaczenie,$login))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();
				
				if (password_verify($haslo, $wiersz['pass']))
				{
					$_SESSION['zalogowany'] = true;
					$_SESSION['id_uzytkownik'] = $wiersz['id_uzytkownik'];
					$_SESSION['login'] = $wiersz['login'];
          $_SESSION['imie'] = $wiersz['imie'];
          $_SESSION['nazwisko'] = $wiersz['nazwisko'];
					$_SESSION['miejscowosc'] = $wiersz['miejscowosc'];
					$_SESSION['ulica'] = $wiersz['ulica'];
					$_SESSION['numer_domu'] = $wiersz['numer_domu'];
					$_SESSION['nr_telefonu'] = $wiersz['nr_telefonu'];
					$_SESSION['email'] = $wiersz['email'];
					
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: udanelogowanie.php');
				}
				else 
				{
					$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					header('Location: logowanie.php');
				}
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: logowanie.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
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
	      <br /><br />
	
      	<form action="logowanie.php" method="post">
	
	    	Login: <br /> <input type="text" name="login" /> <br />
	    	Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
	  	 <input type="submit" value="Zaloguj się" />
	
    	</form>
	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
<a href="rejestracja.php"><button type="button" class="btn btn-danger">Zarejestruj się</button></a>
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