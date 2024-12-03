<?php
if ( function_exists('get_field') ) {
    $tab_list  = get_sub_field('tab_list');
}
?>

<section class="relative mt-5 md:mt-16 pb-5 md:pb-10">
    <div class="container">
        <div class="row">
            <div class="w-full">
                <div class="tabsProduct flex flex-col sm:flex-row relative sm:space-x-36">
                    <div class="w-full sm:w-1/6 md:w-1/3 md:pt-11 relative">
                        <ul class="list-none p-0">
                            <?php foreach( $tab_list as $key => $item ): ?>
                                <li class="text-xl  md:text-3xl  xl:text-[2.5rem] mb-2.5 md:mb-5 md:mb-10  p-1.5 cursor-pointer uppercase font-extrabold text-white-900/10 <?=($key == '0') ? 'active' :''?>" rel="<?= $key; ?>">
                                    <?= $item['name']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="w-full sm:w-5/6 md:w-2/3 h-[500px]  relative py-5 sm:py-10 pl-5 sm:pl-10 md:pl-20 text-base text-justify border border-r-0 rounded-bl-[50px] rounded-tl-[50px] after:content[''] after:border after:border-l-0 sm:after:content after:z-[1]  after:absolute after:-top-[1px] after:-right-full after:w-full after:h-full" id="tab-container">
                        <div class="hidden md:block arrow absolute -left-[1.56rem] w-0 h-0 transition-all duration-500 ease-in-out "></div>
                        <?php foreach( $tab_list as $key => $item ): ?>
                            <div id="itemTabs<?= $key;?>" class="overflow-x-auto h-full tab-content *:mb-4">
                                <?= $item['description']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>