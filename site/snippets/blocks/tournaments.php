<div class="tournaments-block">
    <?php foreach ($tournaments ?? [] as $tournament): ?>
        <div class="tournaments-block__item">
            <p>
                <strong><?= $tournament->title() ?></strong><br>
                <i><?= $tournament->dateTime()->toDate('d.m.Y H:i') ?></i>
            </p>
            <a href="<?= $tournament->url() ?>">Zum Turnier</a>
        </div>
    <?php endforeach; ?>
</div>