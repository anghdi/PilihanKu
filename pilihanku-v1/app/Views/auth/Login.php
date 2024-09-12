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
    <header class="top-0 fixed w-full bg-slate-200 content-end">
        <div class="py-2 flex flex-row-reverse mx-8">
            <a href="" class="btn-outline-light bg-slate-700 hover:bg-slate-800 font-semibold text-white px-4 py-2 rounded-xl"> Register </a>
        </div>
    </header>
    <main class="w-full flex flex-row justify-between">
        <div class="w-1/2 h-screen flex justify-center items-center">
            <img src="<?= base_url('images/login.jpg') ?>" alt="" srcset="" class="h-full">
        </div>
        <div class="w-1/2 flex justify-center items-center h-screen bg-slate-300">
            <div class="border-2 bg-slate-200 w-3/4 h-3/4 text-center rounded-xl justify-center items-center flex">
            <form action="" method="post" class="flex flex-col w-2/4">
                    <span class="font-medium text-2xl">Username</span>
                    <input type="text" name="username" id="" class="box-border rounded-xl h-fit border-4 my-4">
                    <span class="font-medium text-2xl">Password</span>
                    <input type="password" name="username" id="" class="box-border rounded-xl h-fit border-4 my-4">
                    <button type="submit" class="border-2 bg-slate-600 rounded-md text-white font-semibold hover:bg-slate-900 py-1"> Login </button>
                    <span class="font-light"> Belum punya akun ? <a href="#" class="text-blue-500 font-medium"> Daftar disini </a> </span>
            </form>
            </div>  
        </div>
    </main>
</body>

</html>