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

<body class="overflow-hidden">
    <nav class="navbar top-0 justify-center items-center bg-White-Custom">
        <div class="border-2 py-2 lg:px-40 px-10 bg-Grey-Custom rounded-full">
            <h1 class="text-center text-3xl lg:text-4xl font-bold text-white"> PILIHANKU </h1>
        </div>
    </nav>
    <main class="bg-Grey-Custom h-screen">
        <div class="hero lg:py-20">
            <div class="hero-content flex-col lg:flex-row-reverse glass lg:w-2/5 lg:my-12 my-6 rounded-xl top-0">
                <dotlottie-player src="https://lottie.host/d008f764-c7d5-4fb0-9ba2-b00b2bdea60b/4S5Q06eJOw.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                <form action="" method="post" class="flex flex-col gap-4 text-white">
                    <div class="flex flex-row justify-center items-center">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        <input type="text" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-transparent focus:ring-0 focus:border-black" placeholder="">
                    </div>
                    <div class="flex flex-row justify-center items-center">
                        <span class="material-symbols-outlined">
                            lock
                        </span>
                        <input type="password" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-transparent focus:ring-0 focus:border-black" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-square hover:bg-orange-700 bg-Orange-Custom mt-2 w-full text-lg text-white"> Login </button>
                </form>
            </div>
        </div>
    </main>
    <footer class="bg-Black-Custom text-white bottom-0 py-2 text-center absolute w-full">
        <p class="font-thin">KhunCode @2024 </p>
    </footer>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</body>

</html>