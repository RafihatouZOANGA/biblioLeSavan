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
                <div class="bloc_gauche">
                    
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
                                    <div id="formContent" class="">
                                        <!-- Tabs Titles -->
                                        <h2 class="active debut">Modifier un livre</h2>
                                        <!-- <a href="connexion"><h2 class="inactive underlineHover"> Connexion</h2></a> -->
                                    
                                        <!-- Icon -->
                                        <div class="fadeIn first">
                                    
                                        </div>

                                        <!-- Login Form -->
                                        <form action="{{route('edit.livre', $livre->id)}}" method="get">

                                        {{ csrf_field() }}
                                        <!-- pas besoin d'un foreach pour la modification car on recupere juste une ligne -->
                                        <input type="text" class="fadeIn second" name="titre" value="{{$livre->titre}}">
                                        <input type="text" class="fadeIn second" name="nom_prenom_auteur" value="{{$livre->nom_prenom_auteur}}">
                                        <input type="date" class="fadeIn second" name="parution" value="{{$livre->parution}}">
                                        <input type="text" class="fadeIn second" name="type" value="{{$livre->type}}">
                                        <input type="text" class="fadeIn third" name="pays" value="{{$livre->pays}}">
                                        <input type="submit" class=" fadeIn fourth" value="Modifier">
                                        </form>
                                    </div>
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
        <a class="lien_liste" href="{{('liste')}}"><h4>Voir la liste des livres ajoutés.</h4></a>
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