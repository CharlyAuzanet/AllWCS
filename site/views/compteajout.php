
<div class="row form">
    <div class="col l6 offset-l3 form2">
        <h2>Ajout d'un compte</h2>
        <form method="POST" action="index.php?action=traitementform">

            <?=$action;?>


            <p><input type="text" name="nom" placeholder="Saisissez votre nom" ></p>
            <p><input type="text" name="prenom" placeholder="Saisissez votre prenom" ></p>
            <p><input type="text" name="email" placeholder="Saisissez votre email" ></p>

            <p><button type="submit" class="btn red pulse succes button">Envoyer votre formulaire</button></p>
        </form>
    </div>
</div>