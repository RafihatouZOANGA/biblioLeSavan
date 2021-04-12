<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/connexion.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Connexion</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class=" wordart slate"> <span class="word"> Bienvenue à la bibliothèque Le SAVAN
                </span></div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <div>
        <h4 class="ddeConnexion">Veuillez-vous connecter svp.</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <!-- Tabs Titles -->
                    <h2 class="active debut"> Connexion</h2>
                
                    <!-- Icon -->
                    <div class="fadeIn first">
                   
                    </div>

                    <!-- Login Form -->
                    <form action="{{route('login.store')}}" method="post">
                    @csrf
                    <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email">
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
                    <input type="submit" class=" fadeIn fourth" value="Se connecter">
                    </form>

                    <div>
                        <h6 class="ddeConnexion">Vous n'avez pas de compte?</h6>
                    </div>
                    <a href="inscription">
                        <h4 class="ddeConnexion">Veuillez-vous inscrire svp.</h4>
                        <h2 class="inactive underlineHover ">Inscription</h2>
                    </a>
                    <!-- Remind Passowrd 
                    <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>