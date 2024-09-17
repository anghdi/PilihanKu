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
    <!-- <header class="top-0 fixed w-full bg-slate-200 content-end">
        <div class="py-2 flex flex-row-reverse mx-8">
            <a href=""
                class="btn-outline-light bg-slate-700 hover:bg-slate-800 font-semibold text-white px-4 py-2 rounded-xl">
                Register </a>
        </div>
    </header> -->
    <main class="w-full flex flex-row justify-between">
        <div class="w-4/6 h-screen flex justify-center items-center">
            <img src="<?= base_url('images/login.jpg') ?>" alt="" srcset="" class="h-full">
        </div>
        <div class="w-2/6 flex justify-center items-center h-screen bg-slate-200">
            <h1 class=" top-36 text-3xl font-bold absolute">
                Pilihanku
            </h1>
            <form action="" method="post" class="flex flex-col w-3/4">
                <span class="font-medium text-2xl">Username</span>
                <input type="text"
                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-blue-300 bg-slate-200 focus:ring-0 focus:border-blue"
                    placeholder="Masukkan Username">
                <span class="font-medium text-2xl mt-2">Password</span>
                <input type="password" name="username" id=""
                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-blue-300 bg-slate-200 focus:ring-0 focus:border-blue"
                    placeholder="Masukkan Password">
                <button type="submit"
                    class="border-2 bg-slate-600 rounded-md text-white font-semibold hover:bg-slate-900 py-2 mt-5">
                    Login
                </button>
                <span class="font-light mt-2"> Belum punya akun ? <a href="#" class="text-blue-500 font-medium"> Daftar
                        disini </a> </span>
            </form>
        </div>
    </main>
</body>

</html>