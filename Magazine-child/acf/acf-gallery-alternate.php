<?php 

$images = get_field('image_gallery');

if( $images ): ?>

<h3 class="photo-gallery" style="text-align:center;"></h3>

    <ul class="clearing-thumbs small-block-grid-2 medium-block-grid-3 large-block-grid-7" data-clearing>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img data-caption="<?php echo $image['caption']; ?>"  src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
