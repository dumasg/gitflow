<?php include"../views/header.php"?>
<div class="d-flex justify-content-center align-content-center bg-danger align-items-stretch">
    <form method="post" action="./contact.php">
        <h3>Vous souhaitez contacter<?= $_POST["developper"] ?></h3>
        <label>Nom :<br>
            <input type="text" name="last name">
        </label>
        <label>Prénom :<br>
            <input type="text" name="first name">
        </label>
        <br>
        <label class="d-flex align-center flex-column">Email :<br>
            <input type="email" name="email">
        </label>
        <br>
        <label>Téléphone :<br>
            <input type="number" name="phone">
        </label>
        <br>
        <div class="d-flex flex-row justify-content-center">
            <button>Envoyer</button>
        </div>

    </form>
</div>
<?php /*
 <form method="post" action=./contact.php">
 <hidden name="">
 <input type="submit" value="Envoyer">
 </form>
 */
include "../views/footer.php";