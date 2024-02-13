<?php include"../views/header.php"?>
<div class="d-flex justify-content-center align-content-center bg-danger">
    <form method="post" action="./contact.php">
        <h3>Vous souhaitez contacter<?= $_POST["developper"] ?></h3>
        <label>Nom :<br>
            <input type="text" name="name">
        </label>
        <label>Prénom :<br>
            <input type="text" name="name">
        </label>
        <br>
        <label class="d-flex align-center flex-row">email :<br>
            <input type="text" name="name">
        </label>
        <br>
        <label>Téléphone :<br>
            <input type="text" name="name">
        </label>
        <br>
    <button>Envoyer</button>
    </form>
</div>
<?php /*
 <form method="post" action=./contact.php">
 <hidden name="">
 <input type="submit" value="Envoyer">
 </form>
 */
include "../views/footer.php";