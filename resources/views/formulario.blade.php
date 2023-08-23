<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class=" p-5">
        <h1 class=" text-blue-800 font-bold mt-3">Registrar Usuario</h1>
        <form class="mt-3" action="api/registrar" method="POST">
            <input class="" type="text" name="firstName" placeholder="Nombre"></br>
            <input type="text" name="lastName" placeholder="apellido"></br>
            <input type="email" name="email" placeholder="Correo electrónico"></br>
            <input type="text" name="pwd" placeholder="Contraseña"></br>
            
            <button class="mt-3 w-[100px] bg-blue-800 text-white" type="submit">Enviar</button>
        </form> 
    </div>
   
</body>
</html>