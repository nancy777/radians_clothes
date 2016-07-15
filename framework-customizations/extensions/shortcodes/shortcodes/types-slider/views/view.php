<?php if (!defined('FW')) {
    die('Forbidden');
} ?>

<section class="type-slider">

    <span class="separator"></span>

    <div class="container">
        <span class="separator__inner"></span>
        <div class="type-slider__box">
<?php foreach ($atts['slides'] as $slide):?>
            <a href="<?php echo $slide['link']; ?>" class="type-slider__box--item">
                <div class="type-slider__box--img">
                    <img src="<?php echo $slide['image']['url']; ?>" alt="slide">
                </div>
                <h3 class="type-slider__box--title"><?php echo $slide['title']; ?></h3>
                <span class="separator__inner"></span>
                <div class="type-slider__box--descr">
                    <p><?php echo $slide['description']; ?></p>
                </div>
            </a>
<?php endforeach; ?>
        </div>
    </div>

    <span class="separator"></span>

</section>
<section class="go-top">
    <div class="container">
        <a href="#" class='Go_Top'><img alt="up" src="<?php bloginfo('template_directory'); ?>/img/top.png"></a>
    </div>
</section>