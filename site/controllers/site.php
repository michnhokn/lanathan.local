<?php

use Kirby\Cms\App;
use Kirby\Cms\Page;

return function () {
    $games = App::instance()->site()->children()->filter(function (Page $game) {
        return ($game->inventory()['template'] ?? '') === 'game';
    });

    $tournaments = App::instance()->site()
        ->children()
        ->filter(function (Page $game) {
            return ($game->inventory()['template'] ?? '') === 'tournament';
        })
        ->sortBy('dateTime', 'desc');

    return compact('games', 'tournaments');
};