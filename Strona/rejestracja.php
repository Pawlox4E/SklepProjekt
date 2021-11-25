<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		//Sprawdź poprawność nickname'a
		$login = $_POST['login'];
		
		//Sprawdzenie długości nicka
		if ((strlen($login)<3) || (strlen($login)>32))
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="login musi posiadać od 3 do 32 znaków!";
		}
		
		if (ctype_alnum($login)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Login może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		$imie = $_POST['imie'];
		
		//Sprawdzenie imie
		if ((strlen($imie)<1) || (strlen($imie)>48))
		{
			$wszystko_OK=false;
			$_SESSION['e_imie']="Imie musi posiadać od 2 do 48 znaków!";
		}
		$nazwisko = $_POST['nazwisko'];
		
		//Sprawdzenie nazwisko
		if ((strlen($nazwisko)<1) || (strlen($nazwisko)>48))
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwisko']="Nazwisko musi posiadać od 2 do 48 znaków!";
		}
		
		// Sprawdź poprawność adresu email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		//Sprawdź poprawność hasła
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<8) || (strlen($haslo1)>32))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 32 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	

		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

		$miejscowosc = $_POST['miejscowosc'];
		
		//Sprawdzenie miejscowosci
		if ((strlen($miejscowosc)<1) || (strlen($miejscowosc)>48))
		{
			$wszystko_OK=false;
			$_SESSION['e_miejscowosc']="Podaj poprawną miejscowosc";
		}

        $ulica = $_POST['ulica'];
		
		//Sprawdzenie ulicy
		if ((strlen($ulica)<1) || (strlen($ulica)>48))
		{
			$wszystko_OK=false;
			$_SESSION['e_ulica']="Podaj poprawną miejscowosc!";
		}
        $nrdomu = $_POST['nrdomu'];
		
		//Sprawdzenie nr domu
		if ((strlen($nrdomu)<1) || (strlen($nrdomu)>6))
		{
			$wszystko_OK=false;
			$_SESSION['e_nrdomu']="Podaj poprawny numer domu!";
		}
        

        $nrtelefonu = $_POST['nrtelefonu'];

        //Sprawdzenie nr tlefonu
		if ((strlen($nrtelefonu)<9) || (strlen($nrtelefonu)>12))
		{
			$wszystko_OK=false;
			$_SESSION['e_nrtelefonu']="Podaj poprawny numer telefonu!";
		}
        if (ctype_digit($nrtelefonu)==false){
            $wszystko_OK=false;
			$_SESSION['e_nrtelefonu']="Nr telefonu musi sie skladac z numerów!";
        }
		
		//Czy zaakceptowano regulamin?
		if (!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
		}				
		
		//Zapamiętaj wprowadzone dane
		$_SESSION['fr_login'] = $login;
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_haslo1'] = $haslo1;
		$_SESSION['fr_haslo2'] = $haslo2;
		$_SESSION['fr_imie'] = $imie;
		$_SESSION['fr_nazwisko'] = $nazwisko;
		$_SESSION['fr_miejscowosc'] = $miejscowosc;
		$_SESSION['fr_ulica'] = $ulica;
		$_SESSION['fr_nrdomu'] = $nrdomu;
		$_SESSION['fr_nrtelefonu'] = $nrtelefonu;
		if (isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownik WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}		

				//Czy nick jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownik WHERE user='$login'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_uzytkownikow = $rezultat->num_rows;
				if($ile_takich_uzytkownikow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_login']="Istnieje już uzytkwonik o takim loginie!";
				}
				
				if ($wszystko_OK==true)
				{
					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
					
					if ($polaczenie->query("INSERT INTO uzytkownik VALUES (NULL, '$login', '$haslo_hash', '$imie', '$nazwisko', '$miejscowosc', '$ulica', '$nrdomu', '$nrtelefonu', NUll, '$email', NULL, NULL)"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: zarejestrowano.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
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
	
      	<form method="post">
	
		Login: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_login']))
			{
				echo $_SESSION['fr_login'];
				unset($_SESSION['fr_login']);
			}
		?>" name="login" /><br />
		
		<?php
			if (isset($_SESSION['e_login']))
			{
				echo '<div class="error">'.$_SESSION['e_login'].'</div>';
				unset($_SESSION['e_login']);
			}
		?>
		
		E-mail: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_email']))
			{
				echo $_SESSION['fr_email'];
				unset($_SESSION['fr_email']);
			}
		?>" name="email" /><br />
		
		<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
		
		Twoje hasło: <br /> <input type="password"  value="<?php
			if (isset($_SESSION['fr_haslo1']))
			{
				echo $_SESSION['fr_haslo1'];
				unset($_SESSION['fr_haslo1']);
			}
		?>" name="haslo1" /><br />
		
		<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>		
		
		Powtórz hasło: <br /> <input type="password" value="<?php
			if (isset($_SESSION['fr_haslo2']))
			{
				echo $_SESSION['fr_haslo2'];
				unset($_SESSION['fr_haslo2']);
			}
		?>" name="haslo2" /><br />

		Imie: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_imie']))
			{
				echo $_SESSION['fr_imie'];
				unset($_SESSION['fr_imie']);
			}
		?>" name="imie" /><br />
		
		<?php
			if (isset($_SESSION['e_imie']))
			{
				echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
				unset($_SESSION['e_imie']);
			}
		?>
		Nazwisko: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_nazwisko']))
			{
				echo $_SESSION['fr_nazwisko'];
				unset($_SESSION['fr_nazwisko']);
			}
		?>" name="nazwisko" /><br />
		
		<?php
			if (isset($_SESSION['e_nazwisko']))
			{
				echo '<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
				unset($_SESSION['e_nazwisko']);
			}
		?>

		Miejscowość: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_miejscowosc']))
			{
				echo $_SESSION['fr_miejscowosc'];
				unset($_SESSION['fr_miejscowosc']);
			}
		?>" name="miejscowosc" /><br />
		
		<?php
			if (isset($_SESSION['e_miejscowosc']))
			{
				echo '<div class="error">'.$_SESSION['e_miejscowosc'].'</div>';
				unset($_SESSION['e_miejscowosc']);
			}
		?>
		Ulica: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_ulica']))
			{
				echo $_SESSION['fr_ulica'];
				unset($_SESSION['fr_ulica']);
			}
		?>" name="ulica" /><br />
		
		<?php
			if (isset($_SESSION['e_ulica']))
			{
				echo '<div class="error">'.$_SESSION['e_ulica'].'</div>';
				unset($_SESSION['e_ulica']);
			}
		?>

		Nr Domu: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_nrdomu']))
			{
				echo $_SESSION['fr_nrdomu'];
				unset($_SESSION['fr_nrdomu']);
			}
		?>" name="nrdomu" /><br />
		
		<?php
			if (isset($_SESSION['e_nrdomu']))
			{
				echo '<div class="error">'.$_SESSION['e_nrdomu'].'</div>';
				unset($_SESSION['e_nrdomu']);
			}
		?>

		Nr telefonu: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_nrtelefonu']))
			{
				echo $_SESSION['fr_nrtelefonu'];
				unset($_SESSION['fr_nrtelefonu']);
			}
		?>" name="nrtelefonu" /><br />
		
		<?php
			if (isset($_SESSION['e_nrtelefonu']))
			{
				echo '<div class="error">'.$_SESSION['e_nrtelefonu'].'</div>';
				unset($_SESSION['e_nrtelefonu']);
			}
		?>
		
		<label>
			<input type="checkbox" name="regulamin" <?php
			if (isset($_SESSION['fr_regulamin']))
			{
				echo "checked";
				unset($_SESSION['fr_regulamin']);
			}
				?>/> Akceptuję regulamin
		</label>
		
		<?php
			if (isset($_SESSION['e_regulamin']))
			{
				echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
				unset($_SESSION['e_regulamin']);
			}
		?>	
			
		
		<br />
		
		<input type="submit" value="Zarejestruj się" />
		
	</form>
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