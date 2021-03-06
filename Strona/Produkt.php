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
        <div class="col-12">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="galeria">
                <div class="galeria-duza">
                    <h1>Samochodzik1</h1>
                    <img src="zdj/Myszka.png" alt="myszka1" class="rounded mx-auto my-auto d-block"/>
                </div>
                <ul class="galeria-mala">
                    <li><a href="zdj/Myszka.png" title="Myszka1"><img src="zdj/Myszka.png" alt="myszka1" class="rounded mx-auto my-auto d-block"/></a></li>
                    <li><a href="zdj/Myszka2.png" title="Myszka2"><img src="zdj/Myszka2.png" alt="myszka2" class="rounded mx-auto my-auto d-block"/></a></li>
                    <li><a href="zdj/Myszka3.png" title="Myszka3"><img src="zdj/Myszka3.png" alt="myszka3" class="rounded mx-auto my-auto d-block"/></a></li>
                    <li><a href="zdj/Myszka4.png" title="Myszka4"><img src="zdj/Myszka4.png" alt="myszka4" class="rounded mx-auto my-auto d-block"/></a></li>
                </ul>
            </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <p class="produktopis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque accumsan luctus tempor. Nulla semper dui nec pretium pharetra. Integer eget est at ante suscipit faucibus ullamcorper eu odio. Mauris feugiat facilisis neque, fringilla maximus tellus hendrerit non. Sed congue maximus lorem, et lobortis dolor ultrices id. Morbi nec blandit tellus. Aliquam mi lectus, cursus sit amet imperdiet ac, hendrerit nec ligula. Donec interdum elementum vehicula. Cras sit amet lectus eu nulla feugiat euismod. Morbi facilisis libero eget justo tempor eleifend. Nunc tempus, purus a tempus iaculis, nibh orci posuere ligula, eu semper purus ante nec ex.</p>
              <div class="accordion mt-4" id="Specyfikacja">
                <div class="card bg-dark">
                    <div class="card-header" id="Specyfikacjaheading1">
                      <p class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#Specyfikacjacollapse1" aria-expanded="false" aria-controls="Specyfikacjacollapse1" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                          Specyfikacja
                        </button>
                      </p>
                    </div>
                    <div id="Specyfikacjacollapse1" class="collapse" aria-labelledby="Specyfikacjaheading1" data-parent="#Specyfikacja">
                      <div class="card-body bg-secondary produktopis">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                        Sed accumsan orci at metus gravida lobortis.<br>
                        Morbi quis dolor ut libero tincidunt elementum non non magna.<br>
                        Pellentesque eget mauris molestie, suscipit urna a, volutpat lorem.<br>
                        Pellentesque convallis odio at laoreet dignissim.<br>
                        Aliquam semper metus ut auctor facilisis.<br>
                        Morbi quis risus sit amet massa aliquam congue in et odio.<br>
                        Curabitur vitae sem id arcu rutrum consectetur quis placerat massa.<br>
                        Sed porta odio tincidunt elementum finibus.<br>
                        Nulla elementum massa quis tortor ultrices cursus.<br>
                        Morbi ultrices augue id odio condimentum tincidunt.<br>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="row d-flex align-self-end mx-auto mt-4">
              <div class="col-6 align-self-end" style="border-color: black; border-radius: 6px; border-style: solid;">
                <p style="text-align: center; vertical-align: middle; font-size: 1.5vw; font-family: Arial; font-style: normal; font-weight: 500;">Cena</p>
              </div>
              <div class="col-6 align-self-end" style="background-color: black; border-radius: 6px; border-style: solid; border-color: black;">
                <p style="text-align: center; vertical-align: middle; font-size: 1.5vw; font-family: Arial; font-style: normal; font-weight: 500; color: rgba(0,192,220,1);">Do Koszyka</p>
              </div>
            </div>
            </div>
          </div>
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