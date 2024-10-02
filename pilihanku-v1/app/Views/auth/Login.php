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
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="absolute w-full top-0">
                            <div role="alert" class="alert alert-error w-full">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 shrink-0 stroke-current"
                                    fill="none"
                                    viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span class="font-medium text-white text-center"><?= session()->getFlashdata('error'); ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h1 class="text-5xl font-bold tracking-wide text-center py-4">PILIHANKU</h1>
                        <span class="text-center font-semibold">Login</span>
                        <div class="glass rounded-lg px-8">
                            <form action="" method="post" class="gap-6">
                                <div class="flex flex-row justify-center items-center py-4 gap-2">
                                    <span class="material-symbols-outlined">
                                        person
                                    </span>
                                    <div class="flex flex-col w-full">
                                        <input type="text" name="username" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-transparent focus:ring-0 focus:border-black" placeholder="Masukkan Username" required>
                                        <?php if (isset($validation)) : ?>
                                            <?php if (!empty($validation['username'])) : ?>
                                                <div class="flex">
                                                    <dotlottie-player src="https://lottie.host/8440ea33-26b8-4608-bad7-992589b572c6/4i0TNtuoB6.json" background="transparent" speed="1" style="width: 20px; height: 20px;" loop autoplay></dotlottie-player>
                                                    <span class="text-red-600 font-medium text-sm">Username Harus diisi !</span>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-center items-center py-4 gap-2">
                                    <span class="material-symbols-outlined">
                                        lock
                                    </span>
                                    <div class="flex flex-col w-full">
                                        <input type="password" name="password" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-transparent focus:ring-0 focus:border-black" placeholder="Masukkan Password" require>
                                        <?php if (isset($validation)) : ?>
                                            <?php if (!empty($validation['password'])) : ?>
                                                <div class="flex">
                                                    <dotlottie-player src="https://lottie.host/8440ea33-26b8-4608-bad7-992589b572c6/4i0TNtuoB6.json" background="transparent" speed="1" style="width: 20px; height: 20px;" loop autoplay></dotlottie-player>
                                                    <span class="text-red-600 font-medium text-sm">Password Harus diisi !</span>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
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
                                    <span class="text-center text-sm"> Belum punya akun ? <a href="/register" class="underline text-blue-500 text-center font-semibold"> Daftar disini </a> </span>
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