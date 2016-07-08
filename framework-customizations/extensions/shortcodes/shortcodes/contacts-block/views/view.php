<?php if (!defined('FW')) {
    die('Forbidden');
} ?>

<section class="contacts">

    <span class="separator"></span>

    <div class="container">
        <span class="separator__inner"></span>
        <div class="contacts__box">
            <?php foreach ($atts['contacts'] as $contact):?>
            <div class="contacts__section">
                <div class="contacts__section--img">
                    <img src="<?php echo $contact['image']['url']; ?>" alt="envelope">
                </div>

                <h3><?php echo $contact['title']; ?></h3>

                <a href="#" class="email"><?php echo $contact['link']; ?></a>
                <p><?php echo $contact['description']; ?></p>

            </div>
           <?php endforeach; ?>
            </div>

        </div>
        <span class="separator__inner"></span>
    </div>
    <span class="separator"></span>
</section>