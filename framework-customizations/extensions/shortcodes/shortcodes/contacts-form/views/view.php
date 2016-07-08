<?php if (!defined('FW')) {
    die('Forbidden');
} ?>




<section class="to-send">

    <div class="container">

            <h1><?php echo $atts['title']; ?></h1>
            <p><?php echo $atts['desc']; ?></p>
            <form class="to-send__form" action="" method="post">
                <input type="text" placeholder="Name" class="js-form-name">
                <input type="text" placeholder="E-mail" class="js-form-email">
                <span>Message</span>
                <textarea  cols="30" rows="10" class="js-form-mess"></textarea>
                <a href="#" class="js-send-form">
                    send
                </a>
            </form>
    </div>
</section>