<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= base_url('css/output.css') ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?= base_url('images/vote.png') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        
    </style>
</head>

<body>
    <nav class="navbar top-0">
        <div class="navbar-center text-center mx-auto border-4 lg:px-96 px-20 py-3 rounded-2xl bg-slate-200">
            <h1 class="font-bold text-3xl sm:text-4xl tracking-wider">PILIHANKU</h1>
        </div>
    </nav>
    <main class="top-0 hero bg-base-200 h-screen">
        <div class="flex flex-col lg:flex-row lg:justify-between">
            <div class="glass mx-auto bg-yellow-500 rounded-2xl lg:w-5/12 ">
                <dotlottie-player src="https://lottie.host/95b7605f-e505-4b3f-8065-0472f2caca83/rbz3UfwIhx.json" background="transparent" speed="1" class="mx-auto" loop autoplay></dotlottie-player>
            </div>
            <form action="" method="post" class="mx-auto py-4 flex flex-col justify-center items-center gap-5 border-2 lg:w-2/6">
                <div class="flex justify-center items-center flex-row gap-2 lg:w-1/2">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                    <input type="text" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-base-200 focus:ring-0 border-black " placeholder="Masukkan Username">
                </div>
                <div class="flex justify-center items-center flex-row gap-2 lg:w-1/2">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-base-200 focus:ring-0 border-black" placeholder="Masukkan Password">
                </div>
                <button type="submit" class="btn btn-square btn-warning px-12 "> <span class="text-lg font-medium">Login</span></button>
            </form>
        </div>
    </main>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</body>

</html>