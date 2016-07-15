<?php if (!defined('FW')) {
    die('Forbidden');
} ?>

    <section class="meas">
        <div class="container">
            <div class="meas__title">
                <a class="meas__trigger" href="#" data-open="0">
                    <h3><?php echo $atts['title']; ?></h3>
                    <span class="chevron"></span>
                </a>
            </div>
            <div class="meas__box">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#us" data-toggle="tab">US</a></li>
                    <li><a href="#metric" data-toggle="tab">metric</a></li>
                </ul>

                <!-- Tab panes -->
                <?php echo $atts['table']; ?>

            </div>
        </div>
    </section>