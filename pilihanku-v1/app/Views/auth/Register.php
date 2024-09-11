<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="<?= base_url('css/output.css') ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?= base_url('images/quiz.png') ?>">
</head>

<body>
    <header class="fixed w-full text-center bg-blue-600 top-0 z-10">
        <h1 class="text-2xl text-white font-bold py-3">Register</h1>
    </header>
    <main class="relative w-full h-full">
        <img src="<?= base_url('images/bg-register.jpg') ?>" alt="" srcset="" class="fixed z-0 w-full h-full">
        <div class="relative h-screen w-full content-center">
            <form action="<?= site_url('register/create') ?>"
                class="bg-slate-200 relative w-1/2 mx-auto h-3/4 rounded-2xl bg-opacity-60 flex flex-col justify-center items-center"
                method="post">
                <label for="username" class="text-2xl font-medium py-4">Nama Sekolah</label>
                <input type="text" name="namasekolah" class="form-input rounded-xl w-2/4 border-2" id="" placeholder="Masukkan Nama Sekolah">
                <label for="username" class="text-2xl font-medium py-4">Alamat</label>
                <input type="text" name="alamat" class="form-input rounded-xl w-2/4 border-2" id="" placeholder="Masukkan Alamat">
                <label for="username" class="text-2xl font-medium py-4">Email</label>
                <input type="email" name="email" class="form-input rounded-xl w-2/4 border-2" id="" placeholder="Masukkan Email">
                <button type="submit" class="mt-10 w-2/5 py-2 rounded-lg bg-blue-500 text-white font-semibold hover:bg-blue-900">Register</button>
                <h6>Sudah Punya Akun ?, <a href="<?= base_url('/')?>" class="text-blue-950 text-lg underline mt-6"> Login disini </a> </h6>
            </form>
        </div>
    </main>
</body>

</html>