<?php
/** @var \Flyo\Model\ConfigResponse $config */
?>
<html>
    <head>
        <title>{{ $title ?? 'Flyo Nitro Zoo Example' }}</title>
    </head>
    <body>

        <div>
            <?php foreach($config->getNav()->getItems() as $nav): ?>
                <a href="<?= $nav->getHref(); ?>"><?= $nav->getLabel(); ?></a>
            <?php endforeach; ?>
        </div>

        <div class="container" style="max-width:800px; margin:0px auto;">
            <hr/>
            {{ $slot }}
        </div>
    </body>
</html>
