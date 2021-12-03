<?php
	session_start();
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: logowanie.php');
		exit();
	}
	//else if(isset($_SESSION['zalogowany']) && $_SESSION['login']<=>'admin')
	//{
	//	header('Location: karta.php');
	//	exit();
	//}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Panel administratora</title>
	<?php
		require_once "connect.php";
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);	
	?>
	

				  

</head>

<?php
	echo "<p><b>Witaj </b>".$_SESSION['imie']." ".$_SESSION['nazwisko']."</p>";
?>
<br />

<form action="dodajpotrawe.php" method="post">
	
		<input type="submit" value="Dodaj" />
</form>
<body>
<form id="admintable">
	<br>
	<p><b>Producenci</b></p>
<table >
			<thead>
				<td>Id</td>
				<td>Nazwa</td>
                <td>email</td>
				<td>telefon</td>
                <td>miejscowosc</td>
				<td>ulica</td>
                <td>numer</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_producent, producent, email, telefon, miejscowosc, ulica, numer FROM producenci");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				while ($wynik = @mysqli_fetch_array($wybierz,  MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td class="nr"><?php echo $wynik['id_producent']?></td>
                    <td><?php echo $wynik['producent']?></td>
					<td><?php echo $wynik['email']?></td>
					<td><?php echo $wynik['telefon']?></td>
                    <td><?php echo $wynik['miejscowosc']?></td>
					<td><?php echo $wynik['ulica']?></td>
					<td><?php echo $wynik['numer']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				} 
				?>
			</tbody>
		</table>
		<br><br>
		<p><b>Kolory</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Kolor</td>
				<td>Wartość Hex</td>
				<td>Wyglad</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_kolor, kolor, hex FROM Kolory;");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_kolor']?></td>
                    <td><?php echo $wynik['kolor']?></td>
					<td><?php echo $wynik['hex']?></td>
					<?php
						$color = $wynik['hex'];
						echo "<td style="."background-color:$color;"."></td>"		
					?>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
		<br><br>
		<p><b>Kategorie</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Kategoria</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_kategoria, nazwa FROM kategorie");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_kategoria']?></td>
					<td><?php echo $wynik['nazwa']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
		<br><br>
		<p><b>Telefony</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Kategoria</td>
				<td>Producent</td>
				<td>Nazwa</td>
                <td>Kolor</td>
				<td>Cena</td>
				<td>Rozmiar Ekrarnu</td>
				<td>Rozdzielczosc ekranu</td>
                <td>Pamiec flash</td>
				<td>Pamiec ram</td>
				<td>ilosc</td>
				<td>opis</td>
                <td>zdjecie</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT telefony.id_telefonu, kategorie.nazwa AS kategoria, producenci.producent, telefony.nazwa, kolory.kolor,  telefony.cena,  telefony.rozmiar_ekranu,  telefony.rozdzielczosc_ekranu,  telefony.pamiec_flash,  telefony.pamiec_ram,  telefony.ilosc,  telefony.opis,  telefony.zdjecie FROM (((telefony INNER JOIN kategorie ON kategorie.id_kategoria = telefony.id_kategoria) INNER JOIN producenci ON producenci.id_producent = telefony.id_producent) INNER JOIN kolory ON kolory.id_kolor = telefony.id_kolor);");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_telefonu']?></td>
                    <td><?php echo $wynik['kategoria']?></td>
					<td><?php echo $wynik['producent']?></td>
					<td><?php echo $wynik['nazwa']?></td>
                    <td><?php echo $wynik['kolor']?></td>
					<td><?php echo $wynik['cena']?></td>
					<td><?php echo $wynik['rozmiar_ekranu']?></td>
                    <td><?php echo $wynik['rozdzielczosc_ekranu']?></td>
					<td><?php echo $wynik['pamiec_flash']?></td>
					<td><?php echo $wynik['pamiec_ram']?></td>
                    <td><?php echo $wynik['ilosc']?></td>
					<td><?php echo $wynik['opis']?></td>
                    <td><?php echo $wynik['zdjecie']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
		<p><b>Komputery</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Nazwa</td>
				<td>Kategoria</td>
				<td>Procesor</td>
                <td>Ram</td>
				<td>Płyta główna</td>
				<td>Karta Graficzna</td>
				<td>Dysk</td>
                <td>Zasilacz</td>
				<td>Obudowa</td>
				<td>Cena</td>
				<td>opis</td>
                <td>Dodatki</td>
				<td>Ilosc</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_komputer, komputery.nazwa, kategorie.nazwa AS kategoria, cpu.nazwa AS cpu, gpu.nazwa AS gpu, ram.nazwa AS ram, mobo.nazwa AS mobo, zasilacz.nazwa AS zasilacz, dysk.nazwa AS dysk, obudowa.nazwa AS obudowa, komputery.cena, komputery.opis, komputery.dodatki, komputery.ilosc FROM ((((((((komputery INNER JOIN kategorie ON kategorie.id_kategoria = komputery.id_kategoria) INNER JOIN cpu ON cpu.id_cpu = komputery.id_cpu) INNER JOIN gpu ON gpu.id_gpu = komputery.id_gpu) INNER JOIN ram ON ram.id_ram = komputery.id_ram) INNER JOIN mobo ON mobo.id_mobo = komputery.id_mobo) INNER JOIN zasilacz ON zasilacz.id_zasilacz = komputery.id_zasilacz) INNER JOIN dysk ON dysk.id_dysk = komputery.id_dysk) INNER JOIN obudowa ON obudowa.id_obudowa = komputery.id_obudowa);");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_komputer']?></td>
                    <td><?php echo $wynik['nazwa']?></td>
					<td><?php echo $wynik['kategoria']?></td>
					<td><?php echo $wynik['cpu']?></td>
                    <td><?php echo $wynik['ram']?></td>
					<td><?php echo $wynik['mobo']?></td>
					<td><?php echo $wynik['gpu']?></td>
                    <td><?php echo $wynik['dysk']?></td>
					<td><?php echo $wynik['zasilacz']?></td>
					<td><?php echo $wynik['obudowa']?></td>
                    <td><?php echo $wynik['cena']?></td>
					<td><?php echo $wynik['opis']?></td>
                    <td><?php echo $wynik['dodatki']?></td>
					<td><?php echo $wynik['ilosc']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
		<p><b>Ram</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Kategoria</td>
				<td>Producent</td>
				<td>Nazwa</td>
                <td>Pojemność</td>
				<td>Moduły</td>
				<td>Typ</td>
                <td>Taktowanie</td>
				<td>Cena</td>
				<td>ilosc</td>
				<td>opis</td>
                <td>zdjecie</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_ram, kategorie.nazwa AS kategoria, producenci.producent AS producent, ram.nazwa, cena, pojemnosc, moduły, typ, taktowanie, zdjecie, opis, ilosc FROM ((ram INNER JOIN kategorie ON kategorie.id_kategoria = ram.id_kategoria) INNER JOIN producenci ON producenci.id_producent = ram.id_producent);");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_ram']?></td>
                    <td><?php echo $wynik['kategoria']?></td>
					<td><?php echo $wynik['producent']?></td>
					<td><?php echo $wynik['nazwa']?></td>
                    <td><?php echo $wynik['pojemnosc']?></td>
					<td><?php echo $wynik['moduły']?></td>
                    <td><?php echo $wynik['typ']?></td>
					<td><?php echo $wynik['taktowanie']?></td>
					<td><?php echo $wynik['cena']?></td>
                    <td><?php echo $wynik['ilosc']?></td>
					<td><?php echo $wynik['opis']?></td>
                    <td><?php echo $wynik['zdjecie']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
		<p><b>Dyski</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Kategoria</td>
				<td>Producent</td>
				<td>Nazwa</td>
                <td>Pojemność</td>
				<td>Interfejs</td>
				<td>Typ</td>
                <td>Format</td>
				<td>Cena</td>
				<td>ilosc</td>
				<td>opis</td>
                <td>zdjecie</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_dysk, kategorie.nazwa AS kategoria, producenci.producent AS producent, dysk.nazwa, cena, pojemnosc, interfejs, typ, format, zdjecie, opis, ilosc FROM ((dysk INNER JOIN kategorie ON kategorie.id_kategoria = dysk.id_kategoria) INNER JOIN producenci ON producenci.id_producent = dysk.id_producent);");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_dysk']?></td>
                    <td><?php echo $wynik['kategoria']?></td>
					<td><?php echo $wynik['producent']?></td>
					<td><?php echo $wynik['nazwa']?></td>
                    <td><?php echo $wynik['pojemnosc']?></td>
					<td><?php echo $wynik['interfejs']?></td>
                    <td><?php echo $wynik['typ']?></td>
					<td><?php echo $wynik['format']?></td>
					<td><?php echo $wynik['cena']?></td>
                    <td><?php echo $wynik['ilosc']?></td>
					<td><?php echo $wynik['opis']?></td>
                    <td><?php echo $wynik['zdjecie']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
		<p><b>Karty Graficzne</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Kategoria</td>
				<td>Producent</td>
				<td>Nazwa</td>
                <td>Seria</td>
				<td>Model</td>
				<td>Cena</td>
				<td>ilosc</td>
				<td>opis</td>
                <td>zdjecie</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_gpu, kategorie.nazwa AS kategoria, producenci.producent AS producent, gpu.nazwa, cena, seria, model, zdjecie, opis, ilosc FROM ((gpu INNER JOIN kategorie ON kategorie.id_kategoria = gpu.id_kategoria) INNER JOIN producenci ON producenci.id_producent = gpu.id_producent);");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_gpu']?></td>
                    <td><?php echo $wynik['kategoria']?></td>
					<td><?php echo $wynik['producent']?></td>
					<td><?php echo $wynik['nazwa']?></td>
                    <td><?php echo $wynik['seria']?></td>
					<td><?php echo $wynik['model']?></td>
					<td><?php echo $wynik['cena']?></td>
                    <td><?php echo $wynik['ilosc']?></td>
					<td><?php echo $wynik['opis']?></td>
                    <td><?php echo $wynik['zdjecie']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
		<p><b>Obudowy</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Kategoria</td>
				<td>Producent</td>
				<td>Nazwa</td>
                <td>Kolor</td>
				<td>Rozmiar</td>
				<td>Cena</td>
				<td>ilosc</td>
				<td>opis</td>
                <td>zdjecie</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_obudowa, kategorie.nazwa AS kategoria, producenci.producent AS producent, kolory.kolor, obudowa.nazwa, cena, rozmiar, zdjecie, opis, ilosc FROM (((obudowa INNER JOIN kategorie ON kategorie.id_kategoria = obudowa.id_kategoria) INNER JOIN producenci ON producenci.id_producent = obudowa.id_producent) INNER JOIN kolory ON kolory.id_kolor = obudowa.id_kolor);");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_obudowa']?></td>
                    <td><?php echo $wynik['kategoria']?></td>
					<td><?php echo $wynik['producent']?></td>
					<td><?php echo $wynik['nazwa']?></td>
                    <td><?php echo $wynik['kolor']?></td>
					<td><?php echo $wynik['rozmiar']?></td>
					<td><?php echo $wynik['cena']?></td>
                    <td><?php echo $wynik['ilosc']?></td>
					<td><?php echo $wynik['opis']?></td>
                    <td><?php echo $wynik['zdjecie']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
		<p><b>Procesory</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Kategoria</td>
				<td>Producent</td>
				<td>Nazwa</td>
                <td>Taktowanie</td>
				<td>Rdzenie</td>
				<td>Cena</td>
				<td>ilosc</td>
				<td>opis</td>
                <td>zdjecie</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_cpu, kategorie.nazwa AS kategoria, producenci.producent AS producent, cpu.nazwa, cena, taktowanie, rdzenie, zdjecie, opis, ilosc FROM ((cpu INNER JOIN kategorie ON kategorie.id_kategoria = cpu.id_kategoria) INNER JOIN producenci ON producenci.id_producent = cpu.id_producent);");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_cpu']?></td>
                    <td><?php echo $wynik['kategoria']?></td>
					<td><?php echo $wynik['producent']?></td>
					<td><?php echo $wynik['nazwa']?></td>
                    <td><?php echo $wynik['taktowanie']?></td>
					<td><?php echo $wynik['rdzenie']?></td>
					<td><?php echo $wynik['cena']?></td>
                    <td><?php echo $wynik['ilosc']?></td>
					<td><?php echo $wynik['opis']?></td>
                    <td><?php echo $wynik['zdjecie']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
		<p><b>Płyty główne</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Kategoria</td>
				<td>Producent</td>
				<td>Nazwa</td>
                <td>Kolor</td>
				<td>Rozmiar</td>
				<td>Kompatyblinosc</td>
				<td>chipset</td>
				<td>Cena</td>
				<td>ilosc</td>
				<td>opis</td>
                <td>zdjecie</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_mobo, kategorie.nazwa AS kategoria, producenci.producent AS producent, kolory.kolor, mobo.nazwa, cena, rozmiar, kompatybilnosc, chipset, zdjecie, opis, ilosc FROM (((mobo INNER JOIN kategorie ON kategorie.id_kategoria = mobo.id_kategoria) INNER JOIN producenci ON producenci.id_producent = mobo.id_producent) INNER JOIN kolory ON kolory.id_kolor = mobo.id_kolor);");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_mobo']?></td>
                    <td><?php echo $wynik['kategoria']?></td>
					<td><?php echo $wynik['producent']?></td>
					<td><?php echo $wynik['nazwa']?></td>
                    <td><?php echo $wynik['kolor']?></td>
					<td><?php echo $wynik['rozmiar']?></td>
					<td><?php echo $wynik['kompatybilnosc']?></td>
					<td><?php echo $wynik['chipset']?></td>
					<td><?php echo $wynik['cena']?></td>
                    <td><?php echo $wynik['ilosc']?></td>
					<td><?php echo $wynik['opis']?></td>
                    <td><?php echo $wynik['zdjecie']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
		<p><b>Zasilacze</b></p>
		<table >
			<thead>
				<td>Id</td>
				<td>Kategoria</td>
				<td>Producent</td>
				<td>Nazwa</td>
				<td>Kolor</td>
                <td>Moc</td>
				<td>wWdajnosc</td>
				<td>Cena</td>
				<td>ilosc</td>
				<td>opis</td>
                <td>zdjecie</td>
			</thead>
			<tbody>
				<?php
				$wybierz = mysqli_query($polaczenie, "SELECT id_zasilacz, kategorie.nazwa AS kategoria, producenci.producent AS producent, zasilacz.nazwa, kolory.kolor, cena, moc, wydajnosc, zdjecie, opis, ilosc FROM (((zasilacz INNER JOIN kategorie ON kategorie.id_kategoria = zasilacz.id_kategoria) INNER JOIN producenci ON producenci.id_producent = zasilacz.id_producent) INNER JOIN kolory ON kolory.id_kolor = zasilacz.id_kolor);");
				$liczba_rekordow = mysqli_num_rows($wybierz);
				
				
				while ($wynik = @mysqli_fetch_array($wybierz, MYSQLI_ASSOC)) {
				?>
				<tr>
                    <td><?php echo $wynik['id_zasilacz']?></td>
                    <td><?php echo $wynik['kategoria']?></td>
					<td><?php echo $wynik['producent']?></td>
					<td><?php echo $wynik['nazwa']?></td>
					<td><?php echo $wynik['kolor']?></td>
                    <td><?php echo $wynik['moc']?></td>
					<td><?php echo $wynik['wydajnosc']?></td>
					<td><?php echo $wynik['cena']?></td>
                    <td><?php echo $wynik['ilosc']?></td>
					<td><?php echo $wynik['opis']?></td>
                    <td><?php echo $wynik['zdjecie']?></td>
					<td><input type="button" class="edytuj" value="edytuj" ></td>
					<td><input type="button" class="usun" value="usun" ></td>
                </tr>
				
				<?php
				}
					
				?>
			</tbody>
		</table>
</form>

<input type="button" id="odswiez" value="Odśwież" >

<script src="js/jquery-3.4.1.js"></script>
<script src="js/AJAX.js"></script>

<script src="js/tabela.js"></script>
</body>
</html>