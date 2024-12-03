<?php
if ( function_exists('get_field') ) {
    $content  = get_sub_field('simple_text');
    $title  = get_sub_field('simple_title');
}
?>

<section class="relative bg-black-800 pt-4 md:pt-8 mb-14 md:mb-28">
    <?php if(!empty($title)) :?>
        <div class="container-full">
        <div class="row">
            <div class="w-full text-center leading-tight text-xl sm:text-2xl bg-blue-200 px-4 py-2.5 mb-5 sm:mb-10">
                <h3><?=$title;?></h3>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="text-justify text-base *:mb-4">
                <?= $content; ?>
            </div>
        </div>
    </div>
</section>