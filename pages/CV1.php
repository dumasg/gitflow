<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV</title>
</head>
<body>

<?php include '../views/header.php' ?>

<div class="d-flex justify-content-center text-decoration-underline"><h1> Curricullum Vitae</h1></div>

<div class="d-flex justify-content-start"><h3>À propos de moi :</h3></div>

<div class="d-flex justify-content-center">
<span class="text-bg-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus eros
    felis, a laoreet turpis sollicitudin vitae. Proin aliquet venenatis mauris
    vitae hendrerit. Integer ligula dolor, fringilla quis massa hendrerit, lobortis
    ultricies urna. Aenean et risus massa. Cras imperdiet aliquam finibus.
    Sed ultrices odio sed molestie varius. Curabitur malesuada diam a elit ullamcorper
    venenatis. Maecenas et blandit nunc. In hac habitasse platea dictumst.
    Maecenas suscipit ultricies neque, pulvinar molestie arcu mollis quis.
    Duis rutrum rutrum accumsan. Nullam sed risus nunc. Aliquam nec consectetur urna,
    nec porttitor tortor.
</span>
</div>
<br>
<div class="d-flex flex-col justify-content-center justify-content-evenly">
    <div>
        <ul>
            <li> Compétence 1</li>
            <li> Compétence 2</li>
            <li> Compétence 3</li>
            <li> Compétence 4</li>
            <li> Compétence 5</li>

        </ul>
    </div>
    <div>
        <ul>
            <li> Poste 1</li>
            <li> Poste 2</li>
            <li> Poste 3</li>
            <li> Poste 4</li>
            <li> Poste 5</li>

        </ul>
    </div>

</div>

<div class="d-flex justify-content-center">
    <form action="contact.php" method="post">
        <input type="hidden" name="name" id="name" value="Loremman">

            <input type="submit" value="Contacter">
    </form>
</div>


<?php include '../views/footer.php' ?>
</body>
</html>