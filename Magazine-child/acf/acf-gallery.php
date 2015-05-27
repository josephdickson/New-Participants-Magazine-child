<?php 

$images = get_field('image_gallery');

if( $images ): ?>

<h3 class="photo-gallery">Photo Gallery</h3>

    <ul class="clearing-thumbs small-block-grid-2 medium-block-grid-6 large-block-grid-9" data-clearing>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img data-caption="<?php echo $image['caption']; ?>"  src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

<p>To view more photos visit: <a href="http://camsanders.zenfolio.com/pitzer2015" target="_blank">Cam Sanders Photography</a> and enter the password <strong>Pitzer2015</strong></p>
<?php endif; ?>
