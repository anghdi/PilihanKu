<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                    <div class="absolute w-full top-0">
                        <?php if (isset($number)) : ?>
                            <?php if ($number == 0) : ?>
                                <div role="alert" class="alert alert-success">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 shrink-0 stroke-current"
                                        fill="none"
                                        viewBox="0 0 24 24">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="font-medium text-white"> <?php echo ($message) ?> </span>
                                </div>
                            <?php else : ?>
                                <div role="alert" class="alert alert-error">
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
                                    <span class="font-medium text-white"><?php echo ("Terjadi kesalahan: " . $message) ?></span>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <h1 class="text-5xl font-bold tracking-wide text-center py-6">PILIHANKU</h1>
                        <span class="text-center font-semibold">Register</span>
                        <div class="glass rounded-lg px-8">
                            <form action="/insertRegister" method="post" class="gap-6">
                                <div class="flex flex-row justify-center items-center py-4 gap-2">
                                    <span class="material-symbols-outlined">
                                        person
                                    </span>
                                    <div class="flex flex-col w-full">
                                        <input type="text" name="username" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-transparent focus:ring-0 focus:border-black" placeholder="Masukkan Username" value="<?= set_value('username') ?>">
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
                                        mail
                                    </span>
                                    <div class="flex flex-col w-full">
                                        <input type="email" name="email" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-transparent focus:ring-0 focus:border-black" placeholder="Masukkan Email" value="<?= set_value('email') ?>">
                                        <?php if (isset($validation)) : ?>
                                            <?php if (!empty($validation['email'])) : ?>
                                                <div class="flex">
                                                    <dotlottie-player src="https://lottie.host/8440ea33-26b8-4608-bad7-992589b572c6/4i0TNtuoB6.json" background="transparent" speed="1" style="width: 20px; height: 20px;" loop autoplay></dotlottie-player>
                                                    <span class="text-red-600 font-medium text-sm">Email Harus diisi !</span>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-center items-center py-4 gap-2">
                                    <span class="material-symbols-outlined">
                                        home
                                    </span>
                                    <div class="flex flex-col w-full">
                                        <input type="text" name="alamat" class="mt-0 block w-full px-0.5 border-0 border-b-2 bg-transparent focus:ring-0 focus:border-black" placeholder="Masukkan Alamat" value="<?= set_value('alamat') ?>">
                                        <?php if (isset($validation)) : ?>
                                            <?php if (!empty($validation['alamat'])) : ?>
                                                <div class="flex">
                                                    <dotlottie-player src="https://lottie.host/8440ea33-26b8-4608-bad7-992589b572c6/4i0TNtuoB6.json" background="transparent" speed="1" style="width: 20px; height: 20px;" loop autoplay></dotlottie-player>
                                                    <span class="text-red-600 font-medium text-sm">Alamat Harus diisi !</span>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-center items-center py-2">
                                    <button type="submit" class="btn btn-sm btn-warning w-full text-center text-white"> <span class="ml-8">Register</span>
                                        <dotlottie-player src="https://lottie.host/7ee33801-af2a-4338-94f1-44f9a2e3995d/uGHB8ts0ke.json" background="transparent" speed="1" style="width: 28px; height: 28px;" loop autoplay></dotlottie-player> </button>
                                </div>
                                <div class="pb-6 mx-auto">
                                    <span class="text-center text-sm"> Sudah punya akun ? <a href="/" class="underline text-blue-500 text-center font-semibold"> Login disini </a> </span>
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