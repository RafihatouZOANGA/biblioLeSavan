<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/" type="image/x-icon">
    <link rel="stylesheet" href="/css/ajoulivre.css">
    <link rel="stylesheet"  href="/css/bootstrap.min.css">
    <title>Ajout de livre</title>
</head>
<body>
    <header>
        <!-- Image and text -->
        <nav class="navbar navbar-light bg-light fond_entete nav_centre">
            <div class="container">
                <div class="row">
                    <div class="">
                        <a class="font-weight-bold text-white" href="#"> <span class="top">LeSAVAN</span> </a>
                    </div>
                    <a class="navbar-brand" href="{{route('dashboard')}}">
                        <div>
                            <img src="images/Home_26px.png" weight="60px" height="40px" class="droite" alt="">
                            <h6>Accueil</h6>
                        </div>
                    </a>
                    <div>
                        <a href="{{route('logout')}}"> <button class="btn btn-light font-weight-bold deconnexion" type="submit">Déconnexion</button></a>
                    </div>
                    
                </div>
            </div>
                    
            
        </nav>
    </header>
    <!-- corps-->

        @if(Session::has('message'))
        <p class="alert yes_inscrit {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

    <div class="container-fluid">
        <div class="row">
        
            <div class="col-3">
                <div class="">
                    <div class="container">
                        <a href="">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 gauche_un">
                                    <h3 >Ajouter</h3>
                                    <img class="ml-2 imggauche_un" src="Images/blueBook_26px.png" width="40px" height="40px" alt="">
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 gauche_un">
                                    <h3 >Mes Livres</h3>
                                    <img class="ml-1 imggauche_un" src="Images/blueBook_26px.png" width="40px" height="40px" alt="">
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 gauche_un">
                                    <h3 >Mon Stock</h3>
                                    <img class="ml imggauche_un" src="Images/blueBook_26px.png" width="40px" height="40px" alt="">
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-8">
                <div class="container">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="bloc_droite">
                        <div class="container">
                            <div class="row">
                                <div class="wrapper fadeInDown">
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-0"></div>
        </div>
    </div>
    <div>
        <a class="lien_liste" href="{{('index.livre')}}"><h4>Voir la liste des livres ajoutés.</h4></a>
    </div>

   <footer> <!-- footer-->
        <div class="container-fluid p-0">
            <div class="navbar navbar-expand-lg navbar-light fond_footer footer">
                <img src="images/Copyright_26px.png" weight="12px" height="12px"  class="copyright">
                <div class="font-weight-bold text-white">Rafihatou 2021</div>
            </div>
        </div>
   </footer>
</body>
</html>