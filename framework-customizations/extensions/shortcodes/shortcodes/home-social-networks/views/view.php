<?php if (!defined('FW')) {
    die('Forbidden');
} ?>

<section class="social">
    <div class="container">
        <h1> <?php echo $atts['title']; ?></h1>
        <?php $vk_link = fw_get_db_customizer_option('vk_link'); ?>
        <a href="<?php echo $vk_link; ?>">B</a>
        <?php $fb_link = fw_get_db_customizer_option('fb_link'); ?>
        <a href="<?php echo $fb_link; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <?php $ok_link = fw_get_db_customizer_option('ok_link'); ?>
        <a href="<?php echo $ok_link; ?>"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
        <?php $tw_link = fw_get_db_customizer_option('tw_link'); ?>
        <a href="<?php echo $tw_link; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <?php $gp_link = fw_get_db_customizer_option('gp_link'); ?>
        <a href="<?php echo $gp_link; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
    </div>
</section>

