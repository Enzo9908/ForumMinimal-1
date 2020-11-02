<?php
include('../includes/utils.inc.php');

start_page('forum');
?>

<?php
include '../includes/navbar.php';
?>

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="rounded p-5 mt-5 bg-light w-75">
            <h1>Se connecter</h1>
            <form action="login.php" method="post">
            <div class="form-group col-md-8">
                <label for="email_connexion">Email</label>
                <input type="email" class="form-control" name="email_connexion" id="email_connexion" placeholder="email">
            </div>
            <div class="form-group col-md-8">
                <label for="password_connexion">Mot de passe</label>
                <input type="password" class="form-control" name="password_connexion" id="password_connexion" placeholder="mot de passe">
            </div>
            <div class="mt-3">
                <p>Mot de passe oublié ? <a href="#">Obtenir un nouveau mot de passe</a></p>
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-primary" name="connect" value="connexion">
            </div>
            </form>
        </div>
    </div>
    <p class="text-center">Vous n'avez pas de compte ?<a class="" data-toggle="collapse" href="#collapseSubscribe" role="button" aria-expanded="false" aria-controls="collapseSubscribe"> Inscrivez-vous ici</a></p>
    <div class="collapse mb-3" id="collapseSubscribe">
    <div class="card card-body p-5 bg-light">
        <h1>S'inscrire</h1>
        <form action="subscribe.php" method="post">
            <div class="form-group col-md-8">
                <label for="firstname">Nom</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="nom">
            </div>
            <div class="form-group col-md-8">
                <label for="name">Prénom</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="prénom">
            </div>
            <div class="form-group col-md-8">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="pseudo">
            </div>
            <div class="form-group col-md-8">
                <label for="email_subscribe">Email</label>
                <input type="email" class="form-control" name="email_subscribe" id="email_subscribe" placeholder="email">
            </div>
            <div class="form-group col-md-8">
                <label for="password_subscribe">Mot de passe</label>
                <input type="password" class="form-control" name="password_subscribe" id="password_subscribe" placeholder="mot de passe">
            </div>
            <div class="form-group col-md-8">
                <label for="confirm_password">Confirmation mot de passe</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="vérifier le mot de passe">
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-primary" name="subscribe" value="Inscription">
            </div>
        </form>
    </div>
    </div>
</div>

<?php
end_page();
?>