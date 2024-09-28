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
    <main class="top-0 left-0 overflow-hidden">
        <div class="hero bg-White-Custom h-screen">
            <div class="hero-content">
                <div class="card bg-white shadow-xl lg:min-w-96">
                    <div class="card-body">
                        <h1 class="text-5xl font-bold tracking-wide text-center py-4">PILIHANKU</h1>
                        <span class="text-center font-semibold">Login Form</span>
                        <div class="glass rounded-lg px-8">
                            <form action="" method="post" class="gap-6">
                                <div class="flex flex-row justify-center items-center py-4">
                                    <span class="material-symbols-outlined">
                                        person
                                    </span>
                                    <input type="text" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-transparent focus:ring-0 focus:border-black" placeholder="Masukkan Username">
                                </div>
                                <div class="flex flex-row justify-center items-center py-4">
                                    <span class="material-symbols-outlined">
                                        lock
                                    </span>
                                    <input type="password" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-transparent focus:ring-0 focus:border-black" placeholder="Masukkan Password">
                                </div>
                                <div class="form-control">
                                    <label class="label cursor-pointer">
                                        <span class="label-text font-semibold">Ingat Saya</span>
                                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
                                    </label>
                                </div>
                                <div class="flex flex-row justify-center items-center py-2">
                                    <button type="submit" class="btn btn-sm btn-warning w-full text-center text-white"> <span class="ml-8">Login</span> 
                                    <dotlottie-player src="https://lottie.host/7ee33801-af2a-4338-94f1-44f9a2e3995d/uGHB8ts0ke.json" background="transparent" speed="1" style="width: 28px; height: 28px;" loop autoplay></dotlottie-player> </button>
                                </div>
                                <div class="pb-6 mx-auto">
                                    <span class="text-center text-sm"> Belum punya akun ? <a href="" class="underline text-blue-500 text-center font-semibold"> Daftar disini </a> </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</body>

</html>