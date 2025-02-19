<?php use Kirby\Data\Json;

snippet('layouts/default', slots: true) ?>

    <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
    <h1><?= $page->title() ?></h1>

    <div id="tournament-brackets"
         data-tournament-options='<?= Json::encode($tournamentOptions ?? []) ?>'></div>

<?php endsnippet() ?>