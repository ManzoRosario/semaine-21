<!DOCTYPE html>

<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Jarditou</title>

</head>

<body>
    <div class="container-fluid">
    </div>
    <header>
        <div class="row">
            <div class="col-7"><img src="../src/img/jarditou_logo.jpg" alt="Logo Jarditou" height="60px" width="160px"></div>
            <div class="col-5" style="font-size: 35px;">
                <div class="jumbotron text-left" style="font-size: 35px;">
                    <h1>La qualité depuis 70 ans</h1>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid">

                    <a class="navbar-brand" href="#">Jarditou</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Tableau.html">Tableau</a>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="Contact.php">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="votre promotion" aria-label="search">
                            <button class="btn btn-outline-success" type="submit">rechercher</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <div class="bandeau">
        <img class="promo" src="../src/img/promotion.jpg" width="100%" alt="">
    </div>
    <div class="container">

        <p>*Ces zones sont obligatoires</p>



        <h1>Vos Coordonnées</h1>
        <form>
            <fieldset>
                <legend></legend>
                <form method="POST" action="script.php">
                    <div class="form-group">
                        <label for="nom">Nom*</label>
                        <input type="text" class="form-control" id="nom" placeholder="Veuillez saisir votre nom" required>
                        <?php
                        if ( isset($_GET["erreur"]) && $_GET["erreur"] == "nom") 
                        {
                            echo"Le nom doit être renseigné.";  
                        }
                        ?>

                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom*:</label>
                        <input type="text" name="prenom" value="<?php if isset($_GET["erreur"]) && $_GET["erreur"] == "prenom") { echo $_GET["valeur"]; ?>" > 
                        <?php
                        if ( isset($_GET["erreur"]) && $_GET["erreur"] == "prénom") 
                        {
                            echo"Le prénom doit être renseigné.";  
                        }
                        ?>
                    </div>
                    </div>
                    <div class="form-group">
                        <p>Sexe*</p>
                        <input type="radio" name="sexe" id="Féminin" value="femme" class="form-check-input">Féminin
                        <input type="radio" name="sexe" id="Masculin" value="homme" class="form-check-input">Masculin
                        <input type="radio" name="sexe" id="neutre" value="neutre" class="form-check-input">neutre
                        <?php
                        if ( isset($_GET["erreur"]) && $_GET["erreur"] == "sexe") 
                        {
                            echo"Le sexe doit être renseigné.";  
                        }
                        ?>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="my-2">Date de naissance*:</label>
                        <input type="date" class="form-control" id="date" required>
                        <?php
                        if ( isset($_GET["erreur"]) && $_GET["erreur"] == "date de naissance") 
                        {
                            echo"La date de naissance doit être renseigné.";  
                        }
                        ?>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="codepostal">Code postal*:</label>
                        <input type="text" class="form-control" name="Codepostal" id="zip" required>
                        <?php
                        if ( isset($_GET["erreur"]) && $_GET["erreur"] == "Codepostal") 
                        {
                            echo"Le Codepostal doit être renseigné.";  
                        }
                        ?>
                    </div>
                    </div>
                    <div class="form-group">

                        <label for="adresse">Adresse:</label>
                        <input type="text" class="form-control" name="Adresse" id="adresse" required>
                        <?php
                        if ( isset($_GET["erreur"]) && $_GET["erreur"] == "adresse") 
                        {
                            echo"L/'adresse doit être renseigné.";  
                        }
                        ?>
                    </div>
                    </div>
                    <div class="form-group">

                        <label for="ville">Ville:</label>
                        <input type="text" class="form-control" name="Ville" id="ville" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" id="email" placeholder="email" required>
                        <?php
                        if ( isset($_GET["erreur"]) && $_GET["erreur"] == "email") 
                        {
                            echo"L/'email doit être renseigné.";  
                        }
                        ?>
                    </div>
                    </div>
                    <h1>Votre demande</h1>
                    <p>sujet*</p>
                    <div class="form-group">
                        <label for="sujet">Veuillez selectionner un sujet</label>
                        <select id='sujet' name="selection" class="form-control" required>
                  <option value="">Liste de choix...</option>
                  <optgroup label="Groupe d'options 1">
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                  </optgroup>
                  <optgroup label="Groupe d'options 2">
                    <option value="">Option 4</option>
                    <option value="">Option 5</option>
                  </optgroup>
                </select>
                        <span id="missSujet"></span>
                    </div>
                    <div class="form-group">
                        <label for="question">Votre question*:</label>
                        <textarea class="form-control" id="question" rows="3" required></textarea>
                        <span id='missQuestion'></span>
                    </div>
                    <div>
                        <input id="checkbox" type="checkbox" required> : J'accepte le traitement informatique de ce formulaire
                        <span id='missCheckbox'></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-dark" value="Envoyer" id="bouton_envoi">
                        <input type="reset" class="btn btn-dark" value="Annuler">
                    </div>
            </fieldset>
            </form>
    </div>
    <footer>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse" id="navbarText">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">mentions legales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Horaires</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="#">Plan du site</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </footer>
    </form>

    </p>
    <script src="Formulaire.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js " integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js " integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585Ac</H49TLBQObG " crossorigin="anonymous "></script>

</body>

</html>