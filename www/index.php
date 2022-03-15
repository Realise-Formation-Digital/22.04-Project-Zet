<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>ZET</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <!--script src='main.js'></script-->
</head>

<body>
  <header>
    <div class="container-fluid p-0">
      <div class="d-flex p-0 bd-highlight">


        <section id="Diogo">

          <!--  MENU HAUT DE PAGE  -->

          <nav class="navbar navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">ZET</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span style="color:white">MENU</span>
                <span class="navbar-toggler-icon"></span>
              </button>

<<<<<<< Updated upstream
=======
              <div class="mdl-bar"> 
              <!-- Modal Button Log In-->
              <button type="button" class="btn d-block btn-mdl" data-bs-toggle="modal" data-bs-target="#modalForm">
                  Log In
                </button>

                <!-- Modal Log In-->
                <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control" id="username" name="username"
                              placeholder="Username" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                              placeholder="Password" />
                          </div>
                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" />
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                          </div>
                          <div class="modal-footer d-block">
                            <button type="submit" class="btn btn-warning float-end">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- Modal Button Sign Up-->
                <button type="button" class="btn d-block btn-mdl" data-bs-toggle="modal" data-bs-target="#modalForm">
                  Sign Up
                </button>

                <!-- Modal Sign Up-->
                <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control" id="username" name="username"
                              placeholder="Username" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                              placeholder="Password" />
                          </div>
                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" />
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                          </div>
                          <div class="modal-footer d-block">
                            <button type="submit" class="btn btn-warning float-end">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


>>>>>>> Stashed changes
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                 
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                  
                </div>
                <div id="liens-boite"class="list-group">
                    <a id="lien-menu"href="#Diogo" class="list-group-item list-group-item-action active" aria-current="true">
                      Menu
                    </a>
                    <a id="lien-service"href="#Sam" class="list-group-item list-group-item-action">Section Services</a>
                    <a id="lien-works"href="#Bruno" class="list-group-item list-group-item-action">Section Works</a>
                    <a id="lien-clients"href="#Yonathan" class="list-group-item list-group-item-action">Section Happy Clients</a>
                    <a id="lien-team"href="#professional-team"class="list-group-item list-group-item-action">Section Our Professional Team</a>
                    <a id="lien-pricing"href="#Yonat" class="list-group-item list-group-item-action">Section Pricing Table</a>
                    <a id="lien-contacte"href="#Lamine" class="list-group-item list-group-item-action">Section Contacte</a>
                  </div>
                
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>

                      <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                  </ul>

                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </div>

            </div>
          </nav>
          <h1 class="titre">Something Nothing</h1>
          <div class="text">
            <p>Enean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,eleifend ac</p>
            <p>ac, enim iam ultricies nisi eleifend tellus.</p>
            <a class="button" href="formules.html"><strong>LET'S TALK</strong></a>

          </div>

          <div class="center-con">


            <a id="BBV" href="#" class="round">
              <span class="fleche"></span>
              <span class="fleche"></span>
            </a>

          </div>
      </div>
    </div>

    </section>
    <section id="Sam">
      <!--Bas de header en Bootstrap-->
      <div class="container-fluid pb-5" style="background-color: rgb(245, 245, 245);">
        <div class="row">
          <div class="col-12 fw-bolder text-Dark text-center pt-5">
            <h1 class="fs-3">SERVICES</h1>
          </div>

          <div class="text-center">
            <p>Awan mripat gendhis angsal jawa Ipsum nangis rumput wilujeng</p>
          </div>

          <div class="text-center pb-4">
            <p>_____</p>
          </div>

          <div class="container text-fluid text-center">

            <div class="row">
              <div class="col Sphere">
                <div style="background-image: url(Images/sphere.png); height: 120px; width: 120px;">
                  <img src="Images/pc.png" style="padding-top: 34px;" class="img-fluid" alt="##">
                </div>

                <h5 class="pt-3">FULLY RESPONSIVE</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias recusandae reprehenderit molestiae
                  cumque, vero saepe corrupti quam?</p>

              </div>

              <div class="col Sphere">

                <div style="background-image: url(Images/sphere.png); height: 120px; width: 120px;">
                  <img src="Images/3barres.png" style="padding-top: 34px;" class="img-fluid" alt="##">
                </div>

                <h5 class="pt-3">EASY CUSTOMIZE</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque voluptas nobis commodi ratione
                  at, possimus minus.</p>

              </div>

              <div class="col Sphere">
                <div style="background-image: url(Images/sphere.png); height: 120px; width: 120px;">
                  <img src="Images/carte.png" style="padding-top: 34px;" class="img-fluid" alt="##">
                </div>

                <h5 class="pt-3">SEO READY</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem sint nam optio quam, ratione sed
                  tenetur quas!</p>

              </div>

              <div class="col Sphere">
                <div style="background-image: url(Images/sphere.png); height: 120px; width: 120px;">
                  <img src="Images/coeur.png" style="padding-top: 34px;" class="img-fluid" alt="##">
                </div>

                <h5 class="pt-3">MADE WITH LOVE</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere numquam molestias quaerat atque
                  soluta odio, quos beatae?</p>

              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
  </header>
  <section id="Bruno">
    <div class="works-title" style="margin-top: 6%;">
      <h3>WORKS</h3>
      <p>
        Awan mripat gendhis angsal jawa ipsim nangis rumput wilujeng<span class="underline">_____</span>
      </p>
    </div>
    <!----------------------------15 IMAGES CONTAINER---------------------->
    <!--------------------------------------------------------------------->

    <!--Used style="" to bypass bootstrap priority over the "container-fuild"-->

    <div id="Cont-f" class="container-fluid" style="padding-left: 0%;padding-right: 0%;">


      <!--Usage of id"" to avoid merge problems with someone else's code--->
      <!------------------------------------------------------------------->

      <div id="nopad" class="row g-0">
        <div id="img-col" class="col-md-1">
          <div class="hide">
            <p>BOOMING SHOP</p>
            <p>Website Development</p>
          </div>
          <a href="#">
            <img src="Images/SpecialUIforgirls.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/SEOSoftware.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/FreshMusic.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/AppScreen.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/PhoneAlerts.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/SomethingNothing.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/Fruits.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/Honesty.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/RugbyBot.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/PhoneTable.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/Robin.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/Satelite.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/coil.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/KickTheBoss.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
        <div id="img-col" class="col-md-1">
          <a href="#">
            <img src="Images/Automaty.png" class="w-100" alt="Responsive image" />
          </a>
        </div>
      </div>
    </div>

    <!-----------------END OF 15 IMAGES COINTAINER SECTION---------------->
    <!-------------------------------------------------------------------->
  </section>
  <section id="Yonathan"class="Yonat et Diogo">
    <!--  TITRE  -->
    <div class="testimonial-title">
      <h3 class="fw-bold">HAPPY CLIENTS</h3>
      <p class="text-muted">
        Awan mripat gendhis angsal jawa ipsum nangis rumput wilujeng<span class="underline fw-bold">_____</span></p>
    </div>

    <!--  CAROUSEL - SLIDE -->


    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!--  PREMIER SLIDE -->

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <div class="carousel-caption d-none d-md-block">
            <p class="mx-5 mb-4 text-center text-muted">Bebed pupu warni sansam ngundang ajang, gujeng sirah lair menda
              bebucal benang; lek-lekan?Madeg pedhet lenggah, "nanem dipetak dhuwung, dipun awis bokong ayam.genghis
              angsal jawa mamgis rumput wilujeng unyeng-unyeng;pados gujeng benter andhap lisa leres, lisah,ulem-ulem
              nedhi gesang manah cangkem: nem akem benter bebucal baita dangu</p>
            <div class="testimonial">
              <img id="quote" class="pt-0 mt-0" src="Images/quotes.png"></img>
              <img class="rounded-pill mx-auto d-block" src="Images/chovito.jpg" alt="Mr.CHAUVITO"></img>
              <p class="mb-0 text-lowercase fw-bold">Vasily Nganu</p>
              <p class="mt-0 text-lowercase fw-bold text-muted">Dropbox Senior Developer</p>
            </div>
          </div>
        </div>

        <!--  DEUXIEME SLIDE -->

        <div class="carousel-item" data-bs-interval="2000">
          <div class="carousel-caption d-none d-md-block">
            <p class="mx-5 mb-4 text-center text-muted">Bebed pupu warni sansam ngundang ajang, gujeng sirah lair menda
              bebucal benang; lek-lekan?Madeg pedhet lenggah, "nanem dipetak dhuwung, dipun awis bokong ayam.genghis
              angsal jawa mamgis rumput wilujeng unyeng-unyeng;pados gujeng benter andhap lisa leres, lisah,ulem-ulem
              nedhi gesang manah cangkem: nem akem benter bebucal baita dangu</p>
            <div class="testimonial">
              <img id="quote" class="pt-0 mt-0" src="Images/quotes.png"></img>
              <img class="rounded-pill mx-auto d-block" src="Images/diego.png" alt="Mr.CHAUVITO"></img>
              <p class="mb-0 text-lowercase fw-bold">Marquez Diego</p>
              <p class="mt-0 text-lowercase fw-bold text-muted">Explorateur d'extérieur</p>
            </div>
          </div>
        </div>

        <!--  TROISIEME SLIDE  -->

        <div class="carousel-item">
          <div class="carousel-caption d-none d-md-block">
            <p class="mx-5 mb-4 text-center text-muted">Bebed pupu warni sansam ngundang ajang, gujeng sirah lair menda
              bebucal benang; lek-lekan?Madeg pedhet lenggah, "nanem dipetak dhuwung, dipun awis bokong ayam.genghis
              angsal jawa mamgis rumput wilujeng unyeng-unyeng;pados gujeng benter andhap lisa leres, lisah,ulem-ulem
              nedhi gesang manah cangkem: nem akem benter bebucal baita dangu</p>
            <div class="testimonial">
              <img id="quote" class="pt-0 mt-0" src="Images/quotes.png"></img>
              <img class="rounded-pill mx-auto d-block" src="Images/telechargement.png" alt="Mr.CHAUVITO"></img>
              <p class="mb-0 text-lowercase fw-bold">Vasily Nganu</p>
              <p class="mt-0 text-lowercase fw-bold text-muted">Dropbox Senior Developer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="Cafe">


    <!--Diogo-->
    <!--titre et un texte-->

    <div id="professional-team"class="team">
      <p class="font-weight-bold">OUR PROFESSIONAL TEAM</p>
    </div>
    <div class="team-text">
      <p class="text-lowercase; ">Awan mripat gendhis angsal Jawa Ipsum nangis rumput wilujeng</p>

    </div>

    <!--les images de 4 personnes plus leurs noms et metier-->

    <div class="container d-flex justify-content-center">
      <div class="image-team">

        <div class="card-group" style="margin-top: 75px">
          <div class="card" id="carte">
            <img class="card-img-top" src="Images/seo.jpg" alt="Card image cap">
            <div class="card-body" style="background-color: rgb(201 201 201);">
              <h5 class="card-title">Salazar Slytherin</h5>
              <p class="card-text">CEO</p>
              <img src="Images/mini.png">
            </div>

          </div>
          <div class="card" id="carte">
            <img class="card-img-top" src="Images/lead.jpg" alt="Card image cap">
            <div class="card-body" style="background-color: rgb(201 201 201);">
              <h5 class="card-title">GodricT Gryffindor</h5>
              <p class="card-text">Lead Developer</p>
              <img src="Images/mini.png">
            </div>

          </div>
          <div class="card" id="carte">
            <img class="card-img-top" src="Images/lead_designer.jpg" alt="Card image cap">
            <div class="card-body" style="background-color: rgb(201 201 201);">
              <h5 class="card-title">Rowena Ravenciaw</h5>
              <p class="card-text">Lead Designer</p>
              <img src="Images/mini.png">
            </div>

          </div>
          <div class="card" id="carte">
            <img class="card-img-top" src="Images/miss_marketing.jpg" alt="Card image cap">
            <div class="card-body" style="background-color: rgb(201 201 201);">
              <h5 class="card-title">Helga Hufflepuff</h5>
              <p class="card-text">Marketing</p>
              <img src="Images/mini.png">
            </div>

          </div>



        </div>
      </div>

      <a class="button2" href="formules.html"><strong>MEET OUR FULL TEAM</strong></a>


    </div>
    <!--un autre bouton-->





  </section>
  <section>
    <!--lamine-->

    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <img src="Images/cocacola.ico">
        <img src="Images/dropbox.ico">
        <img src="Images/zendesk.ico">
        <img src="Images/nokia.ico">
      </div>
    </nav>
  </section>



  <section id="Yonat">

    <div class="container-fluid">
      <div class="container ps-0">
        <div class="row">
          <h1 class="text-center text-uppercase fw-bolder mt-5">pricing table</h1>
          <p class="text-center">Awan mripat gendhis angsal jawa ipsum nangis rumput wilujeng</p>
          <p class='text-center text-uppercase'><span>______</span></p>

          <!--  PREMIER PRIX  -->

          <div class="col-lg-4 col-md-3 mb-2 p-0 mb-1 ps-5 mt-5">
            <div class="card h-100">
              <div class="card-body mb-5 border border-1">
                <div class="text-center">

                  <br><br>
                  <h6 class="card-title text-uppercase fw-bold">Standard</h6>
                  <span class="h1 text-uppercase">$50</span>
                  <p><small class="fw-lighter text-uppercase">per month</small></p>
                  <br><br>
                </div>
              </div>

              <!--  DESCRIPTION 1  -->

              <span class="text-center">
                <p>exercitation ullaborum sed do</p>
                <p>eiusmod tempor incididunt ut quis</p>
                <p class="pb-5">nostrud exercitation ullamco laboris</p>
              </span>

              <!--  BOUTTON 1  -->

              <div class="card-body text-center">
                
                <button type="button" data-bs-toggle="modal" data-bs-target="#modal-50" class="btn btn-secondary btn-md text-uppercase fw-bolder rounded-pill px-5">Buy Now!</button>

                <div class="modal" id="modal-50">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="modal-header justify-content-center bg-secondary bg-opacity-25 mb-1">
                        <h4 class="modal-title">Resume</h4>
                      </div>

                      <div class="modal-body bg-secondary bg-opacity-25">

                        <section class="container-fluid justify-content-center">

                          <div class="row">
                            <h6 class="card-title text-uppercase fw-bold">Standard</h6>
                            <p class="h1 text-uppercase">$50</p>
                            <p><small class="fw-lighter text-uppercase">per month</small></p>
                          </div>

                          <form>

                            <div class="row mb-3">

                              <label for="options" class="form-label lead fw-bold mb-3"> Complete your pack</label>

                              <div class="row justify-content-center mb-4">
                                <select class="form-select-md col-8 p-1" id="select1" aria-label="Default select example">
                                  <option selected value="0">Merchandising</option>
                                  <option id="pin1" value="12">Pin (12$)</option>
                                  <option id="termo1" value="15">Termo (15$)</option>
                                  <option id="mousePad1" value="18">Mousepad (18$)</option>
                                </select>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="35">
                                <label class="form-check-label col-6" for="vpn">
                                  1 Year VPN <span class="text-danger">(35$)</span>
                                </label>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="99">
                                <label class="form-check-label col-6" for="support">
                                  Extend support 3 years <span class="text-danger">(99$)</span>
                                </label>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="30">
                                <label class="form-check-label col-6" for="access">
                                  Access to Pre-sell <span class="text-danger">(30$)</span>
                                </label>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="144">
                                <label class="form-check-label col-6" for="maps">
                                  Pack Google Maps <span class="text-danger">(144$)</span>
                                </label>
                              </div>

                              <div class="form-check mb-3 row justify-content-center">
                                <input class="form-check-input" type="checkbox" value="269">
                                <label class="form-check-label col-6" for="">
                                  Pack Skyscanner API <span class="text-danger">(269$)</span>
                                </label>
                              </div>
                            </div>

                            <div class="row mb-3 justify-content-center">

                              <div class="col-2">
                                <p class="fw-bold text-decoration-underline">
                                  Extras
                                </p>
                              </div>
                              <div class="col-5">
                                <input type="text" id="extraTotal1" class="form-control text-center fw-bold" disabled>
                              </div>

                              <div class="row justify-content-center">
                                <div class="col-2">
                                  <p class="fw-bold text-decoration-underline">
                                    Merch:
                                  </p>
                                </div>
                                <div class="col-5">
                                  <input type="text" id="merchTotal1" class="form-control text-center fw-bold" disabled>
                                </div>
                              </div>

                            </div>

                            <div class="row">

                              <div class="col-3 align-items-center">
                                <p class="fw-bold lead text-uppercase text-decoration-underline me-3">total:</p>
                              </div>

                              <div class="col-8 mb-3">
                                <input id="input1" type="text" class="form-control text-center fw-bold" disabled>
                              </div>
                            </div>

                            <input class="btn-lg btn-success" type="submit" value="Buy Now!">
                            
                          </form>
                        </section>
                      </div>

                      <div class="modal-footer bg-secondary bg-opacity-25">
                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--  DEUXIEME PRIX -->

          <div class="col-lg-4 col-md-3 mb-2 p-0">

            <div class="card h-100">

              <div class="card-body mb-5 border-top border-5 border-dark">

                <div class="text-center">
                  <br><br>
                  <h6 class="card-title text-uppercase fw-bold">Best Pack</h6>
                  <p class="h1 text-uppercase">$100</p>
                  <p><small class="fw-lighter text-uppercase">per month</small></p>
                  <br><br>
                </div>
              </div>

              <!--  DESCRIPTION 2  -->

              <span class="text-center mb-4 mt-3">
                <p>eiusmod tempor incididunt ut quis</p>
                <p>nostrud exercitation ullamco laboris</p>
                <p>minim aliqua labore dolore nostrud</p>
                <p>laboris ullamco incididunt quis</p>
              </span>
              <!--  BOUTTON 2  -->
              <div class="card-body text-center pt-2 pb-0">

                <button type="button" data-bs-toggle="modal" data-bs-target="#modal-100" class="btn btn-secondary btn-md text-uppercase fw-bolder rounded-pill px-5">Buy Now!</button>

                <div class="modal" id="modal-100">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="modal-header justify-content-center bg-secondary bg-opacity-25 mb-1">
                        <h4 class="modal-title">Resume</h4>
                      </div>

                      <div class="modal-body bg-secondary bg-opacity-25">

                        <section class="container-fluid justify-content-center">

                          <div class="row">
                            <h6 class="card-title text-uppercase fw-bold">Best Pack</h6>
                            <p class="h1 text-uppercase">$100</p>
                            <p><small class="fw-lighter text-uppercase">per month</small></p>
                          </div>

                          <form>

                            <div class="row mb-3">

                              <label for="options" class="form-label lead fw-bold mb-3"> Complete your pack</label>

                              <div class="row justify-content-center mb-4">
                                <select class="form-select-md col-8 p-1" aria-label="Default select example" id="select2">
                                  <option selected value="0">Merchandising</option>
                                  <option id="pin2" value="12">Pin (12$)</option>
                                  <option id="termo2" value="15">Termo (15$)</option>
                                  <option id="mousePad2" value="18">Mousepad (18$)</option>
                                </select>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="35">
                                <label class="form-check-label col-6" for="vpn">
                                  1 Year VPN <span class="text-danger">(35$)</span>
                                </label>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="99">
                                <label class="form-check-label col-6" for="support">
                                  Extend support 3 years <span class="text-danger">(99$)</span>
                                </label>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="30">
                                <label class="form-check-label col-6" for="access">
                                  Access to Pre-sell <span class="text-danger">(30$)</span>
                                </label>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="144">
                                <label class="form-check-label col-6" for="maps">
                                  Pack Google Maps <span class="text-danger">(144$)</span>
                                </label>
                              </div>

                              <div class="form-check mb-3 row justify-content-center">
                                <input class="form-check-input" type="checkbox" value="269">
                                <label class="form-check-label col-6" for="">
                                  Pack Skyscanner API <span class="text-danger">(269$)</span>
                                </label>
                              </div>
                            </div>

                            <div class="row mb-3 justify-content-center">

                              <div class="col-2">
                                <p class="fw-bold text-decoration-underline">
                                  Extras
                                </p>
                              </div>
                              <div class="col-5">
                                <input type="text" id="extraTotal2" class="form-control text-center fw-bold" disabled>
                              </div>

                              <div class="row justify-content-center">
                                <div class="col-2">
                                  <p class="fw-bold text-decoration-underline">
                                    Merch:
                                  </p>
                                </div>
                                <div class="col-5">
                                  <input type="text" id="merchTotal2" class="form-control text-center fw-bold" disabled>
                                </div>
                              </div>

                            </div>

                            <div class="row">

                              <div class="col-3 align-items-center">
                                <p class="fw-bold lead text-uppercase text-decoration-underline me-3">total:</p>
                              </div>

                              <div class="col-8 mb-3">
                                <input id="input2" type="text" class="form-control text-center fw-bold" disabled>
                              </div>
                            </div>

                            <input class="btn-lg btn-success" type="submit" value="Buy Now!">
                            
                          </form>
                        </section>
                      </div>

                      <div class="modal-footer bg-secondary bg-opacity-25">
                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--  TROISIEME PRIX  -->

          <div class="col-lg-4 col-md-3 mb-2 p-0 pe-5 mt-5">
            <div class="card h-100">
              <div class="card-body mb-5 border border-1">
                <div class="text-center">
                  <br><br>
                  <h6 class="card-title text-uppercase fw-bold">VIP Pack</h6>
                  <p class="h1 text-uppercase">$250</p>
                  <p><small class="fw-lighter text-uppercase">per month</small></p>
                  <br><br>
                </div>
              </div>

              <!--  DESCRIPTION 3  -->

              <span class="text-center">
                <p class="">incididunt ut labore et dolore magna</p>
                <p class="">aliqua Ut enim ad minim veniam quis nostrud</p>
                <p class="">exercitation ullaborum sed do</p>
                <p class="">nostrud exercitation ullamco laboris</p>
              </span>

              <!-- BOUTTON 3  -->

              <div class="card-body text-center">

                <button type="button" data-bs-toggle="modal" data-bs-target="#modal-250" class="btn btn-secondary btn-md text-uppercase fw-bolder rounded-pill px-5">Buy Now!</button>

                <div class="modal" id="modal-250">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="modal-header justify-content-center bg-secondary bg-opacity-25 mb-1">
                        <h4 class="modal-title">Resume</h4>
                      </div>

                      <div class="modal-body bg-secondary bg-opacity-25">

                        <section class="container-fluid justify-content-center">

                          <div class="row">
                            <h6 class="card-title text-uppercase fw-bold">VIP Pack</h6>
                            <p class="h1 text-uppercase">$250</p>
                            <p><small class="fw-lighter text-uppercase">per month</small></p>
                          </div>

                          <form>

                            <div class="row mb-3">

                              <label for="options" class="form-label lead fw-bold mb-3"> Complete your pack</label>

                              <div class="row justify-content-center mb-4">
                                <select class="form-select-md col-8 p-1" aria-label="Default select example" id="select3">
                                  <option selected value="0">Merchandising</option>
                                  <option id="pin3" value="12">Pin (12$)</option>
                                  <option id="termo3" value="15">Termo (15$)</option>
                                  <option id="mousePad3" value="18">Mousepad (18$)</option>
                                </select>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="35">
                                <label class="form-check-label col-6" for="vpn3">
                                  1 Year VPN <span class="text-danger">(35$)</span>
                                </label>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="99">
                                <label class="form-check-label col-6" for="support">
                                  Extend support 3 years <span class="text-danger">(99$)</span>
                                </label>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="30">
                                <label class="form-check-label col-6" for="access">
                                  Access to Pre-sell <span class="text-danger">(30$)</span>
                                </label>
                              </div>

                              <div class="form-check row justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" value="144">
                                <label class="form-check-label col-6" for="maps">
                                  Pack Google Maps <span class="text-danger">(144$)</span>
                                </label>
                              </div>

                              <div class="form-check mb-3 row justify-content-center">
                                <input class="form-check-input" type="checkbox" value="269">
                                <label class="form-check-label col-6" for="">
                                  Pack Skyscanner API <span class="text-danger">(269$)</span>
                                </label>
                              </div>
                            </div>

                            <div class="row mb-3 justify-content-center">

                              <div class="col-2">
                                <p class="fw-bold text-decoration-underline">
                                  Extras
                                </p>
                              </div>
                              <div class="col-5">
                                <input type="text" id="extraTotal3" class="form-control text-center fw-bold" disabled>
                              </div>

                              <div class="row justify-content-center">
                                <div class="col-2">
                                  <p class="fw-bold text-decoration-underline">
                                    Merch:
                                  </p>
                                </div>
                                <div class="col-5">
                                  <input type="text" id="merchTotal3" class="form-control text-center fw-bold" disabled>
                                </div>
                              </div>

                            </div>

                            <div class="row">

                              <div class="col-3 align-items-center">
                                <p class="fw-bold lead text-uppercase text-decoration-underline me-3">total:</p>
                              </div>

                              <div class="col-8 mb-3">
                                <input id="input3" type="text" class="form-control text-center fw-bold" disabled>
                              </div>
                            </div>

                            <input class="btn-lg btn-success" type="submit" value="Buy Now!">
                            
                          </form>
                        </section>
                      </div>

                      <div class="modal-footer bg-secondary bg-opacity-25">
                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
  <!--contact of our company:maps and form  -->
  <footer id="Lamine">
    <!--maps-->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="Images/maps.png" class="img-thumbnail" alt="maps picture">
        </div>
        <div class="col-md-6">
          <div style="background-image: url(Images/sofa.png); height: 100%; width: 100%;" class="img-thumbnail">
            <!--Form-->
            <article>
              <div class="row mb-3">
                <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input class="form-control transparent-input" type="Name" class="form-control" id="Name">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input class="form-control transparent-input" type="email" class="form-control" id="inputEmail">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputnumber" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                  <input class="form-control transparent-input" type="number" class="form-control" id="number">
                </div>
              </div>
              <div class="mb-3">
                <label for="Textarea" class="form-label">Message</label>
                <input class="form-control transparent-input" id="Textarea" rows="10" cols="30">
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <!--sponsor logo-->
    <section>
      <div class="container">
        <div class="col-12">
          <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <span class="Copyright">ZET <img src="Images/logo.ico"> </span>
              <div>
                <img src="Images/fb.ico">
                <img src="Images/twt.ico">
                <img src="Images/g.ico">
                <img src="Images/dribble.ico">
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>
  </footer>

  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src="/index.js"></script>
</body>

</html>