<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($title) ?></title>
    <link href="<?= base_url('css/output.css') ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?= base_url('images/vote.png') ?>">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?= $this->include('Layouts/navbar') ?>

    <section class=" h-screen relative">
        <div>
            <h1 class="text-3xl text-teal-600"> INI MAIN KONTENT </h1>
        </div>
    </section>

    <?= $this->include('Layouts/footer') ?>

</body>

</html>