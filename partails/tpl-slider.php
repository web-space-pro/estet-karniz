<?php
    if ( function_exists('get_field') ) {
        $item  = get_sub_field('item');
    }
?>
<?php if( isset($item) && !empty($item)): ?>
<section class="relative h-[25rem] lg:h-[85vh]">
    <div class="swiper welcome h-full">
        <div class="swiper-wrapper">
            <?php foreach( $item as $i ): ?>
                <div class="swiper-slide">
                    <div style="background-image: url(<?= $i['image'];?>);" class="bg-cover bg-center bg-no-repeat h-full">
                        <div class="after:content[''] after:z-[1] after:bg-black-900/70 after:absolute after:top-0 after:w-full after:h-full h-full">
                            <div class="relative z-10 flex items-center h-full">
                                <div class="container uppercase">
                                    <h3 class="text-2xl sm:text-5xl font-light"><?= $i['title_2'] ;?></h3>
                                    <h2 class="text-5xl sm:text-8xl font-black">
                                        <?= $i['title'] ;?>
                                    </h2>
                                    <h4 class="text-2xl sm:text-3xl font-light"><?= $i['title3'] ;?></h4>
                                    <?php if(!empty($i['link']['url'])): ?>
                                        <a href="<?= $i['link']['url'] ;?>" class="mt-6 pt-3 lg:pt-3.5 pr-8 lg:pr-10 pb-3 lg:pb-3.5 pl-3.5 inline-flex items-center uppercase relative  rounded-[50px] transition ease-in-out duration-500 bg-bg-gradient hover:shadow-lg hover:text-white-900 btn">
                                               <span class="border-r pr-1.5 py-1.5 sm:pr-2.5 sm:py-2.5">
                                               <svg class="w-10 sm:w-full"  width="60" height="35" viewBox="0 0 60 35" fill="none">
                                                   <path d="M26.7268 2.18508C27.2405 2.04581 27.7397 1.78901 28.224 1.57104L30.4564 0.55284C30.8703 0.361103 31.2944 0.132036 31.735 0.010458C31.831 0.00236281 31.9319 -0.00917909 32.0271 0.0122583C32.144 0.0383429 39.0293 5.9681 39.2964 6.58154C39.461 6.95991 38.9083 8.19773 38.7813 8.57161L37.8185 11.4099C39.3694 14.019 40.3657 17.548 40.3798 20.5888C40.3888 22.5219 40.168 24.5132 40.1701 26.5318H56.6505L56.6501 23.1492C56.6481 22.6219 56.5922 22.0337 56.6511 21.5117C56.7481 20.6518 57.9916 20.7127 58.1384 21.5085C58.3498 22.6537 58.1547 25.2538 58.1799 26.5318C59.2504 26.5268 59.7442 26.3702 59.7894 27.6191C59.8324 28.8076 59.7929 30.0027 59.795 31.1919C59.7967 32.0701 60.1854 33.7211 59.0179 33.7944C58.309 33.8389 57.5777 33.8032 56.8664 33.8032L39.6883 33.8022C38.8995 34.8475 38.037 34.9849 36.7583 34.9846L35.2774 34.9817L10.6585 34.9826C9.31364 34.9826 7.84556 35.1021 6.53328 34.7858C2.96685 33.9263 0.479258 30.7187 0.481447 27.0719C0.482301 25.6597 1.00705 24.0725 1.31638 22.6807C3.10673 14.6246 3.96373 8.65931 11.926 3.85105C16.6347 1.00737 21.5884 0.907981 26.7268 2.18508ZM31.735 1.69127C30.7894 2.09078 29.6562 2.57875 28.7584 3.05561C31.1925 3.90606 34.3501 6.54886 35.9408 8.59095C36.2014 8.94924 36.4655 9.30513 36.7075 9.67647C37.0377 8.81222 37.2897 7.9192 37.6222 7.05946L33.7007 3.47941C33.1544 2.98875 32.2593 2.30876 31.8086 1.77867L31.762 1.7244C31.7529 1.71345 31.744 1.70221 31.735 1.69127ZM20.3525 2.93089C12.0851 3.71553 5.89327 9.09706 4.10355 17.3136H10.5432C11.661 11.3838 16.899 7.29182 23.0009 8.4334C28.838 9.52535 32.7131 15.2923 31.5749 21.1123C29.6382 31.0153 16.3367 32.8188 11.5349 23.7134C10.8096 22.2538 10.3938 20.5322 10.4518 18.8936H3.72186C3.35338 21.1293 2.07099 25.0325 2.06099 27.0643C2.04603 30.103 4.19178 32.8368 7.23662 33.3361C8.43051 33.5321 9.86172 33.4241 11.0883 33.4238L34.8043 33.4249C35.647 33.4249 36.4967 33.4441 37.3384 33.4061C39.0767 33.3279 38.6334 31.141 38.6322 29.8583L38.6289 25.5029C38.6322 23.8455 38.8419 22.1852 38.8161 20.535C38.6683 11.0798 29.9141 2.20696 20.3525 2.93089ZM20.5872 9.84137C15.4333 10.2371 11.5478 14.5669 12.0056 19.7915C12.4018 24.3117 17.066 28.8197 21.7007 28.0639C26.4566 28.0059 30.2932 23.5211 30.1975 18.8933C30.0959 13.9825 25.6035 9.24142 20.5872 9.84137ZM40.1701 28.0639L40.1155 28.1173C40.2391 29.4843 40.1721 30.8927 40.1701 32.2662H58.1799V29.3465V28.0639H56.2529C56.2706 29.5165 54.798 29.435 54.7319 28.0639H50.8501C50.7945 29.5652 49.3159 29.4381 49.2644 28.0639H45.1179C45.0614 29.4261 43.6085 29.5619 43.6089 28.0639C42.465 28.0634 41.313 28.033 40.1701 28.0639Z" fill="white" />
                                                   <path d="M21.6999 25.451C20.0134 25.5375 18.3547 25.0988 17.0276 24.0232C12.4029 20.2745 14.74 13.0725 20.5864 12.4998C22.019 12.2258 23.9324 12.9247 25.061 13.7898C29.7036 17.3492 27.7675 24.6746 21.6999 25.451ZM20.929 14.0378C14.4219 14.4933 14.5953 23.9513 21.4141 23.9126C28.0961 23.2498 27.171 13.8561 20.929 14.0378Z" fill="white" />
                                                   <path d="M34.7742 30.5199C33.4431 30.519 31.381 30.8818 31.0585 29.1059C30.7561 27.4404 30.6594 24.9303 32.7906 24.6245C34.1678 24.6173 36.0423 24.3189 36.3691 26.1062C36.6532 27.66 36.791 30.1997 34.7742 30.5199ZM32.5952 26.164V28.9824H34.888C34.8889 28.045 34.9138 27.1007 34.888 26.164H32.5952Z" fill="white" />
                                               </svg>
                                               </span>
                                        <p class="pl-2.5 sm:pl-5">
                                            <span class="block text-sm sm:text-base lg:text-xl">Оставить заявку</span>
                                            <span class="block text-xs sm:text-sm lg:text-base font-light">бесплатный замер</span>
                                        </p>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="container relative">
            <div class="swiper-button-next">
                <svg width="16" height="34" viewBox="0 0 16 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 2.77872L2.37961 0L15.3407 15.144C15.5497 15.3867 15.7155 15.6752 15.8286 15.9931C15.9418 16.3109 16 16.6518 16 16.9961C16 17.3403 15.9418 17.6812 15.8286 17.999C15.7155 18.3169 15.5497 18.6054 15.3407 18.8481L2.37961 34L0.00224304 31.2213L12.1672 17L0 2.77872Z" fill="white" />
                </svg>
            </div>
            <div class="swiper-button-prev">
                <svg width="16" height="34" viewBox="0 0 16 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 31.2213L13.6204 34L0.659269 18.856C0.450343 18.6133 0.284536 18.3248 0.171391 18.0069C0.0582468 17.6891 -1.51663e-06 17.3482 -1.48653e-06 17.0039C-1.45643e-06 16.6597 0.0582469 16.3188 0.171391 16.001C0.284536 15.6831 0.450343 15.3946 0.65927 15.1519L13.6204 1.19073e-06L15.9978 2.77872L3.83283 17L16 31.2213Z" fill="white" />
                </svg>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<?php endif; ?>

