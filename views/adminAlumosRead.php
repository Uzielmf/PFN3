<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- div contenerdor -->
    <div class="grid grid-cols-6 h-screen">



        <!-- div contenedor del menu lateral de opciones -->
        <?php
        include "./views/menuAdmin.php"
        ?>



        <!-- div contenedor de la parte derecha del dashboard -->
        <div class="bg-[#F5F6FA] col-span-5">



            <!-- container del nav -->
            <div class="flex justify-between bg-[#ffffff] p-3 shadow">

                <!-- izquierda del nav -->
                <div>
                    <div class="flex">
                        <p class="mx-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>

                        </p>

                        <p>Home</p>

                    </div>
                </div>

                <!-- derecha del nav -->
                <div>
                    <p>Alumno</p>
                </div>

            </div>



            <!-- principal del dashboard -->
            <div>

                <!-- header del dashboard -->
                <div class="flex justify-between p-3">
                    <p class="text-xl">Lista de Alumnos</p>

                    <div class="items-center">
                        <p class="text-sm"> Home / Alumnos </p>
                    </div>
                </div>


                <!-- bienvenida al dashboard -->

                <div class="bg-[#ffffff] shadow w-1/2 p-3 m-4 text-gray-600">
                    <p>Aqui ira la lista de los Alumnos</p>
                    <p class="text-sm">aqui pondremos nuestros Alumnos</p>
                </div>

            </div>

        </div>
    </div>

</body>

</html>