<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= base_url('css/output.css') ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?= base_url('images/quiz.png') ?>">
</head>

<body>
    <header class="fixed w-full text-center bg-blue-600 top-0 z-10">
        <h1 class="text-2xl text-white font-bold py-3">Login</h1>
    </header>
    <main class="relative w-full h-full">
        <img src="<?= base_url('images/bg-login.jpg') ?>" alt="" srcset="" class="fixed z-0 w-full h-full">
        <div class="relative h-screen w-full content-center">
            <form action=""
                class="bg-slate-200 relative w-1/2 mx-auto h-3/4 rounded-2xl bg-opacity-60 flex flex-col justify-center items-center"
                method="post">
                <label for="username" class="text-2xl font-medium py-4">Username</label>
                <input type="text" name="username" class="form-input rounded-xl w-2/4 border-2" id="" placeholder="Masukkan Username">
                <label for="password" class="text-2xl font-medium py-4">Password</label>
                <input type="password" name="username" class="form-input rounded-xl w-2/4 border-2" id="" placeholder="Masukkan Password">
                <button type="submit" class="mt-10 w-2/5 py-2 rounded-lg bg-blue-500 text-white font-semibold hover:bg-blue-900">Login</button>
                <h6>Belum Punya Akun ?, <a href="<?= base_url('/register')?>" class="text-blue-950 text-lg underline mt-6"> Daftar disini </a> </h6>
            </form>
        </div>
    </main>
</body>

</html>