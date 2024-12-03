<?php
if ( function_exists('get_field') ) {
    $category  = get_sub_field('itemslider');
}
?>

<section class="pt-5 md:mt-10 pb-8 md:pb-16">
    <div class="container">
        <div class="row">
            <div class="categorySwiper relative">
                <div class="swiper-wrapper categoryList">
                    <?php foreach( $category as $key => $i ): ?>
                        <div class="swiper-slide !w-auto">
                            <div class="text-center font-extrabold text-base sm:text-xl md:text-3xl xl:text-4xl uppercase text-white-900/10 inline-block cursor-pointer select-none   category-button <?=($key == '0') ? 'active' :''?>" data-key="<?= $key; ?>">
                                <?= $i['info']['name']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="cursor-pointer border border-blue-100 hover:shadow-lg rounded-[10px]  p-2 md:p-5 w-14 h-14   flex items-center justify-center absolute top-8 md:top-16  left-0 slider-button slider-prev">
                    <svg width="52" height="16" viewBox="0 0 52 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292893 7.29289C-0.0976295 7.68341 -0.0976296 8.31658 0.292892 8.7071L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31945 8.07107 0.928928C7.68054 0.538404 7.04738 0.538404 6.65685 0.928928L0.292893 7.29289ZM52 7L1 7L1 9L52 9L52 7Z" fill="white" />
                    </svg>
                </div>
                <div class="cursor-pointer border border-blue-100 hover:shadow-lg rounded-[10px]  p-2 md:p-5 w-14 h-14   flex items-center justify-center absolute top-8 md:top-16  right-0  slider-button slider-next">
                    <svg width="52" height="16" viewBox="0 0 52 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M51.7071 8.70711C52.0976 8.31658 52.0976 7.68342 51.7071 7.29289L45.3431 0.928932C44.9526 0.538408 44.3195 0.538408 43.9289 0.928932C43.5384 1.31946 43.5384 1.95262 43.9289 2.34315L49.5858 8L43.9289 13.6569C43.5384 14.0474 43.5384 14.6805 43.9289 15.0711C44.3195 15.4616 44.9526 15.4616 45.3431 15.0711L51.7071 8.70711ZM0 9H51V7H0V9Z" fill="white" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="w-ful pt-20  md:pt-28">
                <?php foreach( $category as $key => $item ): ?>
                    <div class="hidden data-text <?=($key == '0') ? 'active' :''?>" id="tab<?= $key; ?>">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-14">
                            <div>
                                <figure class="h-full h-[260px] xs:h-[280px] md:h-[360px] md:max-h-[360px] xl:h-[440px] xl:max-h-[440px] rounded-[50px] overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="<?= $item['info']['foto']['url'];?>" alt="<?= the_title();?>">
                                </figure>
                            </div>
                            <div class="text-base pt-2 text-justify leading-tight font-normal *:mb-4">
                                <?= $item['kontent']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class=" hidden relative">
                <div class="cursor-pointer border border-blue-100 hover:shadow-lg rounded-[10px] xl:rounded-[20px] p-5 w-9 md:w-14 md:h-14 min-[1439px]:w-24 2xl:w-24 min-[1439px]:h-48 2xl:h-48 flex items-center justify-center absolute top-11 min-[1439px]:top-[200px] 2xl:top-[200px]  left-auto right-[80px] min-[1439px]-right-auto 2xl:right-auto min-[1439px]-left-[10%] 2xl:-left-[10%] slider-button slider-prev">
                    <svg width="52" height="16" viewBox="0 0 52 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292893 7.29289C-0.0976295 7.68341 -0.0976296 8.31658 0.292892 8.7071L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31945 8.07107 0.928928C7.68054 0.538404 7.04738 0.538404 6.65685 0.928928L0.292893 7.29289ZM52 7L1 7L1 9L52 9L52 7Z" fill="white" />
                    </svg>
                </div>
                <div class="cursor-pointer border border-blue-100 hover:shadow-lg rounded-[10px] xl:rounded-[20px] p-5 h-9 md:w-14 md:h-14 min-[1439px]:w-24 2xl:w-24  min-[1439px]:h-48 2xl:h-48 flex items-center justify-center absolute top-11 min-[1439px]:top-[200px] 2xl:top-[200px] right-0 min-[1439px]-right-[10%] 2xl:-right-[10%] slider-button slider-next">
                    <svg width="52" height="16" viewBox="0 0 52 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M51.7071 8.70711C52.0976 8.31658 52.0976 7.68342 51.7071 7.29289L45.3431 0.928932C44.9526 0.538408 44.3195 0.538408 43.9289 0.928932C43.5384 1.31946 43.5384 1.95262 43.9289 2.34315L49.5858 8L43.9289 13.6569C43.5384 14.0474 43.5384 14.6805 43.9289 15.0711C44.3195 15.4616 44.9526 15.4616 45.3431 15.0711L51.7071 8.70711ZM0 9H51V7H0V9Z" fill="white" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>