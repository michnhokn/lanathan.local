<?php

use Kirby\Cms\Page;
use Kirby\Toolkit\Str;

return function (Page $page) {
    $rounds = [];

    foreach ($page->rounds()->toStructure() as $round) {
        $rounds[] = ['name' => $round->name()->toString()];
    }

    $contestants = [];

    foreach ($page->contestants()->toStructure() as $contestant) {
        $name = $contestant->name()->toString();
        $contestants[Str::slug($name)] = [
            'players' => [
                [
                    'title' => $name,
                    'nationality' => $contestant->shorthand()->toString(),
                ]
            ]
        ];
    }

    $matches = [];

    foreach ($page->matches()->toStructure() as $match) {
        $sideOne = $match->sideOne()->toObject();
        $sideTwo = $match->sideTwo()->toObject();


        $matches[] = [
            'roundIndex' => $match->round()->toInt(),
            'order' => $match->order()->toInt(),
            'matchStatus' => $match->matchStatus()->toString(),
            'isLive' => $match->isLive()->toBool(),
            'isBronzeMatch' => $match->isBronzeMatch()->toBool(),
            'sides' => [
                [
                    'contestantId' => $sideOne->contestant()->toString(),
                    'currentScore' => $sideOne->currentScore()->toString(),
                    'isWinner' => $sideOne->isWinner()->toBool(),
                ],
                [
                    'contestantId' => $sideTwo->contestant()->toString(),
                    'currentScore' => $sideTwo->currentScore()->toString(),
                    'isWinner' => $sideTwo->isWinner()->toBool(),
                ]
            ]
        ];
    }

    return ['tournamentOptions' => compact('rounds', 'matches', 'contestants')];
};