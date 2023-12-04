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
        include "./views/menus/menuAdmin.php"
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
                    <p>Administrador</p>
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

                <div class="bg-[#ffffff] shadow w-6/6 p-2 m-4 pl-5 text-gray-600">
                    <div class="flex justify-between border-b p-2">
                        <p>Informacion de Alumnos</p>

                        <form action="/alumnos/form/create" method="post">
                        <button class="bg-blue-500 p-2 text-white rounded-lg">Agregar Alumnos</button>
                        </form>
                    </div>

                    <div class="flex justify-between mt-4">
                        <div class="bg-slate-500 flex rounded-lg">
                            <p class="p-2 text-white">Copy</p>
                            <p class="p-2 text-white">Excel</p>
                            <p class="p-2 text-white">PDF</p>
                            <p class="p-2 text-white">Columm visibility</p>
                        </div>

                        <div>
                            <label for="">Search: </label>
                            <input class="w-32 border rounded-lg" type="text">
                        </div>
                    </div>

                    <div>
                        <table class="my-5">
                            <thead>
                                <tr class="">
                                    <th class="p-4 border  border-gray-300">#</th>
                                    <th class="border border-gray-300">DNI</th>
                                    <th class="border border-gray-300">Nombre</th>
                                    <th class="border border-gray-300">Correo</th>
                                    <th class="border border-gray-300">Direccion</th>
                                    <th class="px-3 border border-gray-300">Fec. de Nacimiento</th>
                                    <th class="border border-gray-300">Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                // $alumnos = $_SESSION["alumnos"];
                                foreach ($alumnosData as $alumno) {
                                    if ($alumno["id"] % 2 == 0) {
                                        $cambioColor = "bg-slate-50";
                                    } else {
                                        $cambioColor = "bg-gray-200";
                                    }

                                ?>
                                    <tr>
                                        <td class="border border-gray-300 p-5 <?= $cambioColor ?>"><?= $alumno["id"] ?></td>
                                        <td class="border border-gray-300 p-2 <?= $cambioColor ?>"><?= $alumno["dni"] ?></td>
                                        <td class="border border-gray-300 p-2 <?= $cambioColor ?>"><?= $alumno["nombre"] ?></td>
                                        <td class="border border-gray-300 p-2 <?= $cambioColor ?>"><?= $alumno["correo"] ?></td>
                                        <td class="border border-gray-300 p-2 <?= $cambioColor ?>"><?= $alumno["direccion"] ?></td>
                                        <td class="border border-gray-300 p-2 <?= $cambioColor ?>"><?= $alumno["fecha_nacimiento"] ?></td>
                                        <td class="border border-gray-300 py-5 flex <?= $cambioColor ?>">
                                            <a href="/alumnos/edit" class="px-2" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg> </a>
                                            <form action="/alumnos/delete" method="post" class="inline">
                                                <input type="number" hidden  value="<?= $alumno["id"] ?>" name="id">
                                                <button type="submit" class="px-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>




                </div>

            </div>

        </div>
    </div>

</body>

</html>