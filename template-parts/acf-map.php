<?php
$address_title = get_field('address_title', 28);
$address_body = get_field('address_body', 28);
$parking_body = get_field('parking_body', 28);
$phone_title = get_field('phone_title', 28);
$phone_body = get_field('phone_body', 28);

?>

?>

<section id="contactMap">
    <div class="container">
        <div class="row">
            <div class="address-info col-3 offset-7 my-5 p-4 d-none d-md-block">
                <h4><?php echo $address_title; ?></h4>
                <p class="text-muted"><?php echo $address_body; ?></p>
                <h4><?php echo $parking_title; ?></h4>
                <p class="text-muted"><?php echo $parking_body; ?></p>
                <h4><?php echo $phone_title; ?></h4>
                <p class="text-muted"><?php echo $phone_body; ?></p>
            </div>
        </div>
    </div>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25934.42144293058!2d139.74822190205074!3d35.65723285675448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z64-E7L-EIO2DgOybjA!5e0!3m2!1sko!2sjp!4v1661829879774!5m2!1sko!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>