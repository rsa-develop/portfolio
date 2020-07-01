<div>
    <js-accordion>
        <?php if( $head != nil && $head != "" ) : ?>
            <div slot="head">
                <div style="padding: 10px; background-color:#e6e6fa; color: black;"><?= $head ?></div>
            </div>
        <?php endif; ?>
        <?php if( $info != nil && $info != "" ) : ?>
            <div slot="info">
                <p style="padding: 10px;"><?= $info ?></p>
            </div>
        <?php endif; ?>
        <div slot="title"><?= $title?></div>
        <div class="js-accordion--body" slot="body">
            <p style=""><?= $body ?></p>
        </div>
    </js-accordion>
</div>