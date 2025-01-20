<!DOCTYPE html>
<html lang="<?= $kirby->languageCode() ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= vite()->css('index.js') ?>
</head>
<body class="markdown-body">

<main class="<?= $page->template() ?>">
    <?= $slot ?>
</main>

<?= vite()->js('index.js') ?>
</body>
</html>