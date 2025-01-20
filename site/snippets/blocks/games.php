<div class="games-block">
    <?php foreach ($games ?? [] as $game): ?>
        <div class="games-block__item">
            <?php if ($game->hasImages()): ?>
                <img src="<?= $game->image()?->thumb(['width' => 300])->url() ?>" alt="">
            <?php else: ?>
                <div class="games-block__placeholder"></div>
            <?php endif; ?>
            <p>
                <span><?= $game->title() ?></span><br>
                <?php if ($game->steamAppId()->isNotEmpty()): ?>
                    <a href="steam://launch/<?= $game->steamAppId() ?>">Spiel starten</a>
                <?php endif; ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>