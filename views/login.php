<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body class="bg-[#FFF5D5]">

<div class="grid justify-center gap-3">

    <div class="w-60 mx-auto pt-3">
        <img src="/assets/logo.jpg" alt="">
    </div>

    <div class="bg-[#FFFFFF] text-center py-5 w-96 shadow-md" >

    <div class="pb-5">
        <h2 class="font-medium text-gray-500">Bienvenido Ingresa con tu cuenta</h2>
    </div>

    <form action="/login" method="post">
    <div class="grid justify-center gap-4">
            
            <div>
                <label for="">
                    <input type="text" placeholder=" Email" name="correo" class="p-1 w-80 rounded-lg border" required>
                </label>
            </div>

            <div>
                <label for="">
                    <input type="text" placeholder=" Password" name="contrasena" class="p-1 w-80 rounded-lg border" required>
                </label>
            </div>

            <div class="grid justify-items-end">
            <button type="submit" class="bg-blue-500 text-white py-2 px-3 rounded-md">Ingresar</button>
            </div>

        </div>
        </form>


    </div>

    <div class="bg-[#FFFFFF] text-center w-52 shadow-md mx-auto border mt-5" >
    <div class="border p-2.5">
        <p class="text-gray-400">Informacion Acceso</p>
    </div>

    <div class="text-gray-500 text-start p-4 grid gap-3">
        <p class="text-bold text-lg">Admin</p>
        <p>user: admin@admin</p>
        <p>pass:admin</p>

        <p class="text-bold text-lg">Maestros</p>
        <p>user: maestro@maestro</p>
        <p>pass:maestro</p>

        <p class="text-bold text-lg">Alumnos</p>
        <p>user: alumno@alumno</p>
        <p>pass:alumno</p>

    </div>

    </div>
</div>

    
</body>
</html>