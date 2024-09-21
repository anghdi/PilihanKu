<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= base_url('css/output.css') ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?= base_url('images/vote.png') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <main class="w-full flex flex-row justify-between">
        <div class="w-4/6 h-screen flex justify-center items-center">
            <img src="<?= base_url('images/login.jpg') ?>" alt="" srcset="" class="h-full">
        </div>
        <div class="w-2/6 flex justify-center items-center h-screen bg-slate-200">
            <?php if (isset($validation)): ?>
                <div class="absolute top-44 bg-red-400 rounded-md py-2 px-4 text-white font-medium">
                    <!-- Tampilkan semua pesan error -->
                    <?= implode('<br>', $validation) ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="absolute top-44 bg-red-400 rounded-md py-2 px-4 text-white font-medium flex flex-row justify-center items-center">
                    <span class="material-symbols-outlined px-2">
                        mood_bad
                    </span>
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <h1 class="top-20 text-6xl font-bold absolute">
                Pilihanku
            </h1>
            <form action="/login" method="post" class="flex flex-col w-3/4">
                <?= csrf_field() ?>
                <div class="flex flex-row justify-center items-center gap-2 ">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                    <input type="text"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-blue-300 bg-slate-200 focus:ring-0 focus:border-blue"
                        placeholder="Masukkan Username" name="username" value="<?= set_value('username') ?>" required>
                </div>
                <div class="flex flex-row justify-center items-center gap-2 py-10">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" name="password" id=""
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-blue-300 bg-slate-200 focus:ring-0 focus:border-blue"
                        placeholder="Masukkan Password" required>
                </div>
                <button type="submit"
                    class="border-2 bg-slate-600 rounded-md text-white font-semibold hover:bg-slate-900 py-2 mt-5">
                    Login
                </button>
                <span class="font-light mt-3"> Belum punya akun ? <a href="#" class="text-blue-500 font-medium"> Daftar
                        disini </a> </span>
            </form>
        </div>
    </main>
</body>

</html>