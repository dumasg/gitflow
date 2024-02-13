<div class="d-flex justify-content-center align-content-center">
    <form method="post" action="./contact.php">
        <h3>Vous souhaitez contacter<?= $_POST["developper"] ?></h3>
        <label>Nom :
            <input type="text" name="name">
        </label>
        <label>Prénom :
            <input type="text" name="name">
        </label>
        <br>
        <label>email :
            <input type="text" name="name">
        </label>
        <br>
        <label>Téléphone :
            <input type="text" name="name">
        </label>
    <button>Envoyer</button>
    </form>
</div>
<?php /*
 <form method="post" action=./contact.php">
 <hidden name="">
 <input type="submit" value="Envoyer">
 </form>
 */