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

        <div class="row">
                <div class="col-lg-4 col-md-12 my-4">
                  <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <a href="Produkt.html"><img src="zdj/Myszka.png" class="akcesoriazdj" alt="myszka"></a>
                    </div>
                    <div class="col-lg-12 col-md-6 mt-5">
                        <p class="opisklasy">Myszki:<br></p>
                            <div class="accordion" id="Myszki">
                                <div class="card bg-dark">
                                    <div class="card-header" id="myszkaheading1">
                                      <p class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#myszkacollapse1" aria-expanded="false" aria-controls="myszkacollapse1" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                          Myszka1
                                        </button>
                                      </p>
                                    </div>
                                    <div id="myszkacollapse1" class="collapse" aria-labelledby="myszkaheading1" data-parent="#Myszki">
                                      <div class="card-body bg-secondary">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                      </div>
                                    </div>
                                  </div>
                                <div class="card bg-dark">
                                  <div class="card-header" id="myszkaheading2">
                                    <p class="mb-0">
                                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#myszkacollapse2" aria-expanded="false" aria-controls="myszkacollapse2" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                        Myszka2
                                      </button>
                                    </p>
                                  </div>
                                  <div id="myszkacollapse2" class="collapse" aria-labelledby="myszkaheading2" data-parent="#Myszki">
                                    <div class="card-body bg-secondary">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                    </div>
                                  </div>
                                </div>
                                <div class="card bg-dark">
                                  <div class="card-header" id="myszkaheading3">
                                    <p class="mb-0">
                                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#myszkacollapse3" aria-expanded="false" aria-controls="myszkacollapse3" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                        Myszka3
                                      </button>
                                    </p>
                                  </div>
                                  <div id="myszkacollapse3" class="collapse" aria-labelledby="myszkaheading3" data-parent="#Myszki">
                                    <div class="card-body bg-secondary">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                    </div>
                                  </div>
                                </div>
                                <div class="card bg-dark">
                                    <div class="card-header" id="myszkaheading4">
                                      <p class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#myszkacollapse4" aria-expanded="false" aria-controls="myszkacollapse4" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                          Myszka4
                                        </button>
                                      </p>
                                    </div>
                                    <div id="myszkacollapse4" class="collapse" aria-labelledby="myszkaheading4" data-parent="#Myszki">
                                      <div class="card-body bg-secondary">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card bg-dark">
                                    <div class="card-header" id="myszkaheading5">
                                      <p class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cmyszkacollapse5" aria-expanded="false" aria-controls="myszkacollapse5" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                          Myszka5
                                        </button>
                                      </p>
                                    </div>
                                    <div id="myszkacollapse5" class="collapse" aria-labelledby="myszkaheading5" data-parent="#Myszki">
                                      <div class="card-body bg-secondary">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card bg-dark">
                                    <div class="card-header" id="myszkaheading6">
                                      <p class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#myszkacollapse6" aria-expanded="false" aria-controls="myszkacollapse6" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                          Myszka6
                                        </button>
                                      </p>
                                    </div>
                                    <div id="myszkacollapse6" class="collapse" aria-labelledby="myszkaheading6" data-parent="#Myszki">
                                      <div class="card-body bg-secondary">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card bg-dark">
                                    <div class="card-header" id="myszkaheading7">
                                      <p class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#myszkacollapse7" aria-expanded="false" aria-controls="myszkacollapse7" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                          Myszka7
                                        </button>
                                      </p>
                                    </div>
                                    <div id="myszkacollapse7" class="collapse" aria-labelledby="myszkaheading7" data-parent="#Myszki">
                                      <div class="card-body bg-secondary">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                      </div>
                                    </div>
                                  </div>
                              </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 my-4">
                  <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <a href="Produkt.html"><img src="zdj/Klawiatura.png" class="akcesoriazdj" alt="Klawiatura"></a>
                    </div >
                    <div class="col-lg-12 col-md-6 mt-5">
                        <p class="opisklasy">Klawiatury:<br></p>
                        <div class="accordion" id="Klaiwatura">
                            <div class="card bg-dark">
                                <div class="card-header" id="klawiaturaheading1">
                                  <p class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#klawiaturacollapse1" aria-expanded="false" aria-controls="klawiaturacollapse1" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                      Klawiatura1
                                    </button>
                                  </p>
                                </div>
                                <div id="klawiaturacollapse1" class="collapse" aria-labelledby="klawiaturaheading1" data-parent="#Klaiwatura">
                                  <div class="card-body bg-secondary">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                  </div>
                                </div>
                              </div>
                            <div class="card bg-dark">
                              <div class="card-header" id="klawiaturaheading2">
                                <p class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#klawiaturacollapse2" aria-expanded="false" aria-controls="klawiaturacollapse2" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                    Klawiatura2
                                  </button>
                                </p>
                              </div>
                              <div id="klawiaturacollapse2" class="collapse" aria-labelledby="klawiaturaheading2" data-parent="#Klaiwatura">
                                <div class="card-body bg-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                </div>
                              </div>
                            </div>
                            <div class="card bg-dark">
                              <div class="card-header" id="klawiaturaheading3">
                                <p class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#klawiaturacollapse3" aria-expanded="false" aria-controls="klawiaturacollapse3" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                    Klawiatura3
                                  </button>
                                </p>
                              </div>
                              <div id="klawiaturacollapse3" class="collapse" aria-labelledby="klawiaturaheading3" data-parent="#Klaiwatura">
                                <div class="card-body bg-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                </div>
                              </div>
                            </div>
                            <div class="card bg-dark">
                                <div class="card-header" id="klawiaturaheading4">
                                  <p class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#klawiaturacollapse4" aria-expanded="false" aria-controls="klawiaturacollapse4" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                      Klawiatura4
                                    </button>
                                  </p>
                                </div>
                                <div id="klawiaturacollapse4" class="collapse" aria-labelledby="klawiaturaheading4" data-parent="#Klaiwatura">
                                  <div class="card-body bg-secondary">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                  </div>
                                </div>
                              </div>
                              <div class="card bg-dark">
                                <div class="card-header" id="klawiaturaheading5">
                                  <p class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cklawiaturacollapse5" aria-expanded="false" aria-controls="klawiaturacollapse5" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                      Klawiatura5
                                    </button>
                                  </p>
                                </div>
                                <div id="klawiaturacollapse5" class="collapse" aria-labelledby="klawiaturaheading5" data-parent="#Klaiwatura">
                                  <div class="card-body bg-secondary">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                  </div>
                                </div>
                              </div>
                              <div class="card bg-dark">
                                <div class="card-header" id="klawiaturaheading6">
                                  <p class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#klawiaturacollapse6" aria-expanded="false" aria-controls="klawiaturacollapse6" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                      Klawiatura6
                                    </button>
                                  </p>
                                </div>
                                <div id="klawiaturacollapse6" class="collapse" aria-labelledby="klawiaturaheading6" data-parent="#Klaiwatura">
                                  <div class="card-body bg-secondary">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                  </div>
                                </div>
                              </div>
                              <div class="card bg-dark">
                                <div class="card-header" id="klawiaturaheading7">
                                  <p class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#klawiaturacollapse7" aria-expanded="false" aria-controls="klawiaturacollapse7" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                      Klawiatura7
                                    </button>
                                  </p>
                                </div>
                                <div id="klawiaturacollapse7" class="collapse" aria-labelledby="klawiaturaheading7" data-parent="#Klaiwatura">
                                  <div class="card-body bg-secondary">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 my-4">
                  <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <a href="Produkt.html"><img src="zdj/Sluchawki.png" class="akcesoriazdj" alt="Sluchawki"></a>
                    </div>
                    <div class="col-lg-12 col-md-6 mt-5">
                        <p class="opisklasy">S??uchawki:<br></p>
                        <div class="accordion" id="S??uchawki">
                            <div class="card bg-dark">
                                <div class="card-header" id="S??uchawkiheading1">
                                  <p class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#S??uchawkicollapse1" aria-expanded="false" aria-controls="S??uchawkicollapse1" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                      S??uchawki1
                                    </button>
                                  </p>
                                </div>
                                <div id="S??uchawkicollapse1" class="collapse" aria-labelledby="S??uchawkiheading1" data-parent="#S??uchawki">
                                  <div class="card-body bg-secondary">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                  </div>
                                </div>
                              </div>
                            <div class="card bg-dark">
                              <div class="card-header" id="S??uchawkiheading2">
                                <p class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#S??uchawkicollapse2" aria-expanded="false" aria-controls="S??uchawkicollapse2" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                    S??uchawki2
                                  </button>
                                </p>
                              </div>
                              <div id="S??uchawkicollapse2" class="collapse" aria-labelledby="S??uchawkiheading2" data-parent="#S??uchawki">
                                <div class="card-body bg-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                </div>
                              </div>
                            </div>
                            <div class="card bg-dark">
                              <div class="card-header" id="S??uchawkiheading3">
                                <p class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#S??uchawkicollapse3" aria-expanded="false" aria-controls="S??uchawkicollapse3" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                    S??uchawki3
                                  </button>
                                </p>
                              </div>
                              <div id="S??uchawkicollapse3" class="collapse" aria-labelledby="S??uchawkiheading3" data-parent="#S??uchawki">
                                <div class="card-body bg-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                </div>
                              </div>
                            </div>
                            <div class="card bg-dark">
                                <div class="card-header" id="S??uchawkiheading4">
                                  <p class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#S??uchawkicollapse4" aria-expanded="false" aria-controls="S??uchawkicollapse4" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                      S??uchawki4
                                    </button>
                                  </p>
                                </div>
                                <div id="S??uchawkicollapse4" class="collapse" aria-labelledby="S??uchawkiheading4" data-parent="#S??uchawki">
                                  <div class="card-body bg-secondary">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                  </div>
                                </div>
                              </div>
                              <div class="card bg-dark">
                                <div class="card-header" id="S??uchawkiheading5">
                                  <p class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#S??uchawkicollapse5" aria-expanded="false" aria-controls="S??uchawkicollapse5" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                      S??uchawki5
                                    </button>
                                  </p>
                                </div>
                                <div id="S??uchawkicollapse5" class="collapse" aria-labelledby="S??uchawkiheading5" data-parent="#S??uchawki">
                                  <div class="card-body bg-secondary">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                  </div>
                                </div>
                              </div>
                              <div class="card bg-dark">
                                <div class="card-header" id="S??uchawkiheading6">
                                  <p class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#S??uchawkicollapse6" aria-expanded="false" aria-controls="S??uchawkicollapse6" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                      S??uchawki6
                                    </button>
                                  </p>
                                </div>
                                <div id="S??uchawkicollapse6" class="collapse" aria-labelledby="S??uchawkiheading6" data-parent="#S??uchawki">
                                  <div class="card-body bg-secondary">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                  </div>
                                </div>
                              </div>
                              <div class="card bg-dark">
                                <div class="card-header" id="S??uchawkiheading7">
                                  <p class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#S??uchawkicollapse7" aria-expanded="false" aria-controls="S??uchawkicollapse7" style="font-family: Arial; font-style: normal; font-weight: 400; font-size: 0.9vw; color: rgba(0,192,220,1);">
                                      S??uchawki7
                                    </button>
                                  </p>
                                </div>
                                <div id="S??uchawkicollapse7" class="collapse" aria-labelledby="S??uchawkiheading7" data-parent="#S??uchawki">
                                  <div class="card-body bg-secondary">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit euismod justo ac ornare. Nullam egestas, mi blandit consequat efficitur, lectus magna dictum tellus, et tincidunt urna quam ac dui. Vestibulum elementum erat massa, eget eleifend nisl placerat eu. Curabitur nulla enim, lobortis in accumsan ac, ultricies nec erat.
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div>
                  </div>
                </div> 
        </div>
      </div>
<br><br><br><br><br><br><br><br><br><br>
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