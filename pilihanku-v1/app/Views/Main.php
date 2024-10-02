<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($title) ?></title>
    <link href="<?= base_url('css/output.css') ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?= base_url('images/vote.png') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <header class="drawer bg-White-Custom">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <nav class="navbar bg-White-Custom">
                <div class="flex-none">
                    <label for="my-drawer" class="btn btn-square btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1">
                    <a class="btn btn-ghost text-xl">daisyUI</a>
                </div>
            </nav>
        </div>
        <div class="drawer-side">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-White-Custom text-base-content min-h-full w-80 p-4">
                <h1 class="text-3xl font-bold mx-auto text-center">MENU</h1>
                <div class="pt-4 font-medium lg:text-lg text-sm">
                    <!-- Sidebar content here -->
                    <li>
                        <div class="flex flex-row">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                            <a>Dashboard</a>
                        </div>
                    </li>
                    <li><div class="flex flex-row">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                            <a>Logout</a>
                        </div></li>
                </div>
            </ul>
        </div>
    </header>

    <section>
        <div>
            <h1 class="text-3xl text-teal-600"> INI MAIN KONTENT </h1>
        </div>
    </section>

</body>

</html>