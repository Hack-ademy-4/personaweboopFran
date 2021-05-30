<?php
require("Persona.php");
session_start();
if (isset($_POST['nombre']) && 
    isset($_POST['apellido']) && 
    isset($_POST['edad'])){

$nuevaPersona = new Persona($_POST['nombre'],$_POST['apellido'],$_POST['edad']);
$_SESSION['personas'][]= $nuevaPersona;
header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>CaraLibro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Personas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4">
                <form action="newuser.php" method="POST">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp"
                            name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="inputLastname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="inputLastname" aria-describedby="lastnameHelp"
                            name="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="inputAge" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="inputAge" aria-describedby="ageHelp"
                            name="edad">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</body>

</html>