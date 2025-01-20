<?php snippet('layouts/default', slots: true) ?>

    <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
    <h1><?= $page->title() ?></h1>

    <div id="tournament-brackets"></div>

<?php endsnippet() ?>