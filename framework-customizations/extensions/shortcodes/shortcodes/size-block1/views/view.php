<?php if (!defined('FW')) {
    die('Forbidden');
} ?>

<section class="guide">
    <div class="container">
        <div class="guide__title">
            <a class="guide__trigger" href="#" data-open="0">
                <h1><?php echo $atts['title']; ?></h1>
                <span class="chevron"></span>
            </a>
        </div>
        <div class="guide__box">
            <div class="guide__img">
                <img src="<?php echo $atts['image']['url']; ?>" alt="measureguide">
            </div>
        </div>
    </div>