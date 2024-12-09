<?php
    if ( function_exists('get_field') ) {
        $step  = get_sub_field('step');
    }
?>
<?php if(!empty($step) ): ?>
<section class="mt-8 sm:mt-16 pb-8 sm:pb-16">
    <div class="max-w-full lg:max-w-[54rem] m-auto">
        <div class="flex w-full flex-wrap sm:flex-nowrap flex-row justify-center sm:space-x-8 lg:space-x-20">
        <?php foreach( $step as $i ): ?>
            <div class="w-1/2 mb-5 sm:mb-0 sm:w-auto text-center animate-icon">
                <figure class="mb-2.5 w-20 sm:w-28 m-auto ">
                    <img src="<?= $i['icon'];?>" alt="<?php bloginfo('name'); ?>">
                </figure>
                <div class="uppercase font-base font-light"><?= $i['title'] ;?></div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>