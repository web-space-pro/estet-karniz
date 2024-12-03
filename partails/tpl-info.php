<?php
    if ( function_exists('get_field') ) {
        $number  = get_sub_field('number');
        $title_top  = get_sub_field('title_top');
        $title_bottom  = get_sub_field('title_bottom');
    }
?>
<?php if(!empty($number) || !empty($title_top) || !empty($title_bottom) ): ?>
<section class="bg-bg-gradient pt-6 lg:pt-10 pb-6 lg:pb-10">
    <div class="container">
        <div class="flex flex-wrap items-center justify-center">
        <?php if(!empty($number)) : ?>
           <div><h3 class="uppercase font-black text-8xl xl:text-9xl leading-none"><?= $number;?></h3></div>
        <?php endif; ?>
        <?php if(!empty($title_top) || !empty($title_bottom)) : ?>
            <div class="sm:ml-5 uppercase font-light leading-normal">
                <?php if(!empty($title_top)) : ?>
                    <h2 class="text-2xl sm:text-3xl xl:text-5xl"><?= $title_top;?></h2>
                <?php endif; ?>
                <?php if(!empty($title_bottom)) : ?>
                    <h3 class="text-xl sm:text-2xl xl:text-[2rem]"><?= $title_bottom;?></h3>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>