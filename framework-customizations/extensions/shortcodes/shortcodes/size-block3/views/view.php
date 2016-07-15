<?php if (!defined('FW')) {
    die('Forbidden');
} ?>

<section class="conv">
    <div class="container">
        <div class="conv__title">
            <a class="conv__trigger" href="#" data-open="0">
                <h3><?php echo $atts['title']; ?></h3>
                <span class="chevron"></span>
            </a>
        </div>
        <?php echo $atts['table']; ?>
    </div>
</section>