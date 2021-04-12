<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/inscription.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Inscription</title>
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
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <!-- Tabs Titles -->
                    <h2 class="active debut">Inscription /</h2>
                    <a href="connexion"><h2 class="inactive underlineHover"> Connexion</h2></a>
                
                    <!-- Icon -->
                    <div class="fadeIn first">
                   
                    </div>

                    <!-- Login Form -->
                    <form action="/inscription" method="post">

                    {{ csrf_field() }}

                    <input type="text" id="login" class="fadeIn second" name="username" placeholder="Nom d'utilisateur">
                    <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email">
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
                    <input type="password" id="password" class="fadeIn third" name="password_confirmation" placeholder="Confirmez votre mot de passe">
                    <input type="submit" class=" fadeIn fourth" value="S'inscrire">
                    </form>

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