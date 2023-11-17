
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gracias</title>
    <!-- Agregar referencia a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-3">
            <h1 class="display-4">¡Gracias por tu donación, {{$user->name}}!</h1>
            <p class="lead">Gracias por tu donación de $ {{$opc}} pesos, con tu ayuda podremos seguir ayudando a más animales en situación de calle.</p>
            <hr class="my-4">
            <p>Gracias,<br></p>
        </div>
    </div>
</body>
</html>
