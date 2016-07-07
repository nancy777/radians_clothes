<?php if (!defined('FW')) {
    die('Forbidden');
} ?>

<!--slider-->
<section class="slider">

    <span class="separator"></span>

    <div class="container">
        <span class="separator__inner"></span>
        <div class="slider__box">
            <?php foreach ($atts['slides'] as $slide):
                // fw_print($slide);
                ?>
                <a href="<?php echo $slide['link']; ?>" class="slider__box--item">
                    <img src="<?php echo $slide['image']['url']; ?>" alt="slide">
                    <h3 class="slider__box--title" id="hs_3"><?php echo $slide['title']; ?><br>
                        <span><?php echo $slide['description']; ?></span></h3>
                </a>
            <?php endforeach; ?>
        </div>
        <span class="separator__inner"></span>
    </div>
    <span class="separator"></span>
</section>
<!--close slider-->
