<?php
    if ( function_exists('get_field') ) {
        $category  = get_sub_field('category');
    }
?>
<?php if(!empty($category)): ?>

<section id="gallery" class="pb-16 md:pb-32 relative ">
    <div class="pt-15">
        <p class="filter-categories pt-6 pb-6 sm:pt-12 sm:pb-12 text-xs sm:text-sm uppercase font-medium text-center">
            <?php foreach( $category as $key =>$c ):
                $c_name = "category_$key";
            ?>
            <span  data-filter="<?= $c_name;?>"><?= $c['name'];?></span>
            <?php endforeach;?>
        </p>
        <div class="swiper slider-product">
            <div class="swiper-wrapper">
                <?php foreach( $category as $key=> $slider ):
                    $c_name = "category_$key";
                 ?>
                        <?php foreach( $slider['images'] as $img ): ?>
                        <div class="swiper-slide bg-white-200 md:rounded-[3.5rem] overflow-hidden" data-filter="<?= $c_name;?>">
                            <figure>
                                <img class="h-full" src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                            </figure>
                        </div>
                        <?php endforeach;?>
                <?php endforeach;?>
            </div>
            <div class="swiper-button-next">
                <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.96771 2.05612L2.46456 0.308216L10.6175 9.8343C10.7489 9.98694 10.8532 10.1684 10.9244 10.3684C10.9956 10.5683 11.0322 10.7827 11.0322 10.9993C11.0322 11.2158 10.9956 11.4303 10.9244 11.6302C10.8532 11.8301 10.7489 12.0116 10.6175 12.1643L2.46456 21.6953L0.969121 19.9474L8.62125 11.0018L0.96771 2.05612Z" fill="white" />
                </svg>
            </div>
            <div class="swiper-button-prev">
                <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0323 19.9439L9.53544 21.6918L1.38248 12.1657C1.25105 12.0131 1.14676 11.8316 1.07558 11.6316C1.00441 11.4317 0.967772 11.2173 0.967773 11.0007C0.967773 10.7842 1.00441 10.5697 1.07558 10.3698C1.14676 10.1699 1.25105 9.98836 1.38248 9.83572L9.53544 0.304688L11.0309 2.05259L3.37875 10.9982L11.0323 19.9439Z" fill="white" />
                </svg>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>