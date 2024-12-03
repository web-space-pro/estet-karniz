<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estet-karniz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-black-800'); ?>>


        <?php if ( have_rows('production_cpt' )  ) :
            while( have_rows('production_cpt') )
            {
                the_row();
                $layout = get_row_layout();
                $inclusion = get_stylesheet_directory() . DIRECTORY_SEPARATOR . "CPT" . DIRECTORY_SEPARATOR ."tpl-{$layout}.php";
                if( file_exists( $inclusion ) )
                {
                    include( $inclusion );
                }
            }
        else: ?>
            <section class="componentInfo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="componentInfo__box">
                                <p>Вы не создали не одного блока! Перейдите в редактор страницы для добавление нового блока!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


    <section class="hidden relative bg-black-800">
        <div class="absolute w-full h-full top-0">
            <div class="swiper productSlider h-[440px] after:content[''] sm:after:content after:z-[1] after:bg-black-900/70 after:absolute after:top-0 after:w-full after:h-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>
                            <img src="/wp-content/uploads/2024/11/premium-apartment-moscow-city-real-estate-blind.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img src="/wp-content/uploads/2024/11/093f69a7e4f7ff0dafe194154495b8c1-1-1-scaled.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="z-10 relative pt-24">
            <div class="container">
                <div class="flex w-full flex-col-reverse lg:flex-row lg:space-x-10 ">
                    <div class="w-full lg:w-7/12">
                        <h3 class="text-4xl sm:text-5xl uppercase font-light">стильные</h3>
                        <h1 class="text-5xl sm:text-8xl uppercase font-black ">Маркизы</h1>
                        <h4 class="text-2xl sm:text-3xl uppercase font-light">в москве</h4>
                        <div class="relative mt-10 mr-10 bg-black-800 py-10 pr-16 rounded-br-[50px] rounded-tr-[50px]">
                            <div class="text-base text-justify after:content[''] sm:after:content after:z-[1] after:bg-black-800 after:absolute after:top-0 after:-left-full after:w-full after:h-full">
                                <p>Это практичная солнцезащитная система, подходящая для ресторанов, отелей, владельцев торгово-офисных зданий и домовладельцев. Для создания маркиз используется полотно из акрила испанского производства Sauleda, которое хорошо пропускает воздух и обеспечивает оптимальную вентиляцию. Материал обладает водостойкими свойствами, не теряет яркости цвета даже под прямыми лучами солнца. Маркизы из качественных европейских комплектующих, создают тень в жаркий солнечный день, защищают от дождя в непогоду, дополняют и украшают фасад здания.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12">
                        <figure class="max-w-[440px] w-full max-h-[440px] ml-auto h-full rounded-[50px] overflow-hidden">
                            <img class="w-full h-full object-cover object-center" src="/wp-content/uploads/2024/11/premium-apartment-moscow-city-real-estate-blind.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="hidden mt-10 pb-16">
        <div class="container">
            <div class="row">
                <div class="wrapp">
                    <div class="categorySwiper">
                        <div class="swiper-wrapper categoryList">
                            <div class="swiper-slide">
                                <div class="category-button active" data-id="data0">
                                    ПВХ
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-button" data-id="1">
                                    2 Алюминиевые
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-button" data-id="2">
                                    3  жалюзи
                                </div>
                            </div>

                        </div>
                        <div class="slider-button slider-prev">
                            <svg width="52" height="16" viewBox="0 0 52 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.292893 7.29289C-0.0976295 7.68341 -0.0976296 8.31658 0.292892 8.7071L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31945 8.07107 0.928928C7.68054 0.538404 7.04738 0.538404 6.65685 0.928928L0.292893 7.29289ZM52 7L1 7L1 9L52 9L52 7Z" fill="white" />
                            </svg>
                        </div>
                        <div class="slider-button slider-next">
                            <svg width="52" height="16" viewBox="0 0 52 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M51.7071 8.70711C52.0976 8.31658 52.0976 7.68342 51.7071 7.29289L45.3431 0.928932C44.9526 0.538408 44.3195 0.538408 43.9289 0.928932C43.5384 1.31946 43.5384 1.95262 43.9289 2.34315L49.5858 8L43.9289 13.6569C43.5384 14.0474 43.5384 14.6805 43.9289 15.0711C44.3195 15.4616 44.9526 15.4616 45.3431 15.0711L51.7071 8.70711ZM0 9H51V7H0V9Z" fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-[700px]">
            <div class="row">
                <div class="w-full mt-14">
                    <div class="data-text active" id="0">
                        <div class="grid grid-cols-2 gap-14">
                            <div>
                                <figure class="h-full min-h-[440px] rounded-[50px] overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="/wp-content/uploads/2024/11/premium-apartment-moscow-city-real-estate-blind.jpg" alt="">
                                </figure>
                            </div>
                            <div class="text-base pt-2 text-justify leading-tight font-normal *:mb-4">
                                Касетные 1
                                <p>Для управления маркизами предусмотрена специальная автоматика от ведущих мировых производителей – Somfy, Nice, Dooya. По желанию заказчика, управление маркизы может быть реализовано посредством настенной проводной кнопки, либо от системы «умный дом». Также, контролировать и настраивать работу маркизы можно с помощью пульта или мобильного устройства, например, планшета либо смартфона. Дополнительные преимущества – интегрированное LED-освещение и оснащение климатическими датчиками, реагирующими на ветер, дождь и солнечное излучение. При множестве опций и при всех своих преимуществах, у нас, вы можете купить маркизы для террасы по максимально низкой цене.</p>
                                <p>Купить маркизы с моторизацией или на ручном управлении, подобрать подходящие параметры конструкции, вам помогут наши компетентные сотрудники. Менеджер ответит на все вопросы, рассчитает итоговую стоимость. Выездной специалист - предоставит локальную консультацию и подберет модель маркизы, максимально соответствующую вашему запросу.</p>
                            </div>
                        </div>
                    </div>
                    <div class="data-text" id="1">
                        <div class="grid grid-cols-2 gap-14">
                            <div>
                                <figure class="h-full min-h-[440px] rounded-[50px] overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="/wp-content/uploads/2024/11/093f69a7e4f7ff0dafe194154495b8c1-1-1-scaled.jpg" alt="">
                                </figure>
                            </div>
                            <div class="text-base pt-2 text-justify leading-tight font-normal *:mb-4">
                                Полукассетные 2
                                <p>Для управления маркизами предусмотрена специальная автоматика от ведущих мировых производителей – Somfy, Nice, Dooya. По желанию заказчика, управление маркизы может быть реализовано посредством настенной проводной кнопки, либо от системы «умный дом». Также, контролировать и настраивать работу маркизы можно с помощью пульта или мобильного устройства, например, планшета либо смартфона. Дополнительные преимущества – интегрированное LED-освещение и оснащение климатическими датчиками, реагирующими на ветер, дождь и солнечное излучение. При множестве опций и при всех своих преимуществах, у нас, вы можете купить маркизы для террасы по максимально низкой цене.</p>
                                <p>Купить маркизы с моторизацией или на ручном управлении, подобрать подходящие параметры конструкции, вам помогут наши компетентные сотрудники. Менеджер ответит на все вопросы, рассчитает итоговую стоимость. Выездной специалист - предоставит локальную консультацию и подберет модель маркизы, максимально соответствующую вашему запросу.</p>
                            </div>
                        </div>
                    </div>
                    <div class="data-text" id="2">
                        <div class="grid grid-cols-2 gap-14">
                            <div>
                                <figure class="h-full min-h-[440px] rounded-[50px] overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="/wp-content/uploads/2024/11/premium-apartment-moscow-city-real-estate-blind.jpg" alt="">
                                </figure>
                            </div>
                            <div class="text-base pt-2 text-justify leading-tight font-normal *:mb-4">
                                Полукассетные 3
                                <p>Для управления маркизами предусмотрена специальная автоматика от ведущих мировых производителей – Somfy, Nice, Dooya. По желанию заказчика, управление маркизы может быть реализовано посредством настенной проводной кнопки, либо от системы «умный дом». Также, контролировать и настраивать работу маркизы можно с помощью пульта или мобильного устройства, например, планшета либо смартфона. Дополнительные преимущества – интегрированное LED-освещение и оснащение климатическими датчиками, реагирующими на ветер, дождь и солнечное излучение. При множестве опций и при всех своих преимуществах, у нас, вы можете купить маркизы для террасы по максимально низкой цене.</p>
                                <p>Купить маркизы с моторизацией или на ручном управлении, подобрать подходящие параметры конструкции, вам помогут наши компетентные сотрудники. Менеджер ответит на все вопросы, рассчитает итоговую стоимость. Выездной специалист - предоставит локальную консультацию и подберет модель маркизы, максимально соответствующую вашему запросу.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hidden relative mt-16 pb-10">
        <div class="container">
            <div class="row">
                <div class="w-full">
                    <div class="tabsProduct flex  flex-row relative space-x-36">
                        <div class="w-1/3 pt-11 relative">
                            <ul>
                                <li class="text-[2.5rem] mb-10 cursor-pointer uppercase font-extrabold text-white-900/10 active" rel="tab1">Характеристики</li>
                                <li class="text-[2.5rem] mb-10 cursor-pointer uppercase font-extrabold text-white-900/10" rel="tab2">Особенности</li>
                                <li class="text-[2.5rem] mb-10 cursor-pointer uppercase font-extrabold text-white-900/10" rel="tab3">Комплектация</li>
                            </ul>
                        </div>
                        <div class="w-2/3 h-[500px]  relative py-10 pl-20 text-base text-justify border border-r-0 rounded-bl-[50px] rounded-tl-[50px] after:content[''] after:border after:border-l-0 sm:after:content after:z-[1]  after:absolute after:-top-[1px] after:-right-full after:w-full after:h-full" id="tab-container">
                            <div class="arrow absolute -left-[1.56rem] w-0 h-0 transition-all duration-500 ease-in-out "></div>
                            <div id="tab1" class="overflow-x-auto h-full tab-content">
                                Для управления маркизами предусмотрена специальная автоматика от ведущих мировых производителей – Somfy, Nice, Dooya. По желанию заказчика, управление маркизы может быть реализовано посредством настенной проводной кнопки, либо от системы «умный дом». Также, контролировать
                            </div>
                            <div id="tab2" class="overflow-x-auto h-full tab-content">
                                <div class="">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, consectetur deserunt dolorum laboriosam magni, maxime minus nulla obcaecati odio sequi tempore totam veritatis voluptatum. Blanditiis id itaque non tempore, vel voluptas! Ad alias amet at deserunt dicta distinctio eius eligendi eos exercitationem, fugiat itaque labore magnam maiores molestias necessitatibus nobis odio omnis quae quasi repellendus sunt ut vel voluptatum. Accusamus, blanditiis consectetur corporis debitis dolor eligendi, est eveniet fugiat fugit laboriosam modi, necessitatibus nobis officiis quam similique velit voluptatem! Architecto consequatur eos eum fuga illo itaque laborum maiores rem veniam voluptate. Cumque illum labore laboriosam possimus quibusdam. Aliquid excepturi minus nesciunt non omnis repellat repellendus similique, tempore. Aliquid doloribus earum enim et eveniet ex exercitationem impedit necessitatibus, officia, omnis perferendis praesentium, quae quasi rem rerum unde veritatis. Ab deserunt dolorem doloremque esse, eveniet facere fuga nesciunt omnis perferendis quos. Aut error magnam nihil officiis ratione. Ad alias aut blanditiis commodi consequuntur cupiditate debitis delectus dolore dolorem eaque esse ex facere facilis fugiat illum impedit iste, itaque laboriosam magni minima nemo odit omnis perspiciatis porro quaerat quam quibusdam quod ratione repellat reprehenderit sed sequi sint tempora tempore unde voluptatem voluptatum. Culpa, deserunt dolor dolorum ipsa labore nostrum porro? Ab animi dolor nobis numquam omnis reiciendis saepe tempora voluptate! Aliquid consectetur enim non pariatur praesentium voluptatem! Amet dignissimos exercitationem expedita incidunt laudantium minus placeat quisquam ratione, reiciendis repellat. Beatae dignissimos earum maxime nobis temporibus? Assumenda dignissimos hic, iure minus odit omnis perspiciatis provident quae quos repudiandae sit, voluptas. Adipisci, et incidunt maiores possimus sunt suscipit voluptas. Aspernatur atque consequuntur debitis dicta dignissimos dolorem doloremque earum est eveniet id incidunt ipsum laudantium mollitia nesciunt nisi odio omnis pariatur quas quisquam quod repellendus, repudiandae sed sint, sit sunt veniam, vero voluptate? Delectus dignissimos distinctio eaque explicabo minima minus rem repellat sint! At eveniet iusto sed velit. Illum laborum possimus voluptates. Amet aspernatur blanditiis consectetur culpa cumque, cupiditate debitis dolorum eaque eligendi ex explicabo maiores molestiae molestias nemo nihil nisi non obcaecati omnis pariatur possimus quas quia, quos tempore totam veniam. A adipisci, aliquam aliquid consequuntur dolor dolorem doloremque ea eum fugit harum id incidunt labore nemo nihil, nobis possimus, qui quibusdam recusandae sapiente ut. Assumenda commodi cum deserunt ipsum soluta velit veniam. Alias aspernatur blanditiis consectetur consequuntur cumque debitis deleniti, eius fugit inventore iure maiores, minus modi molestias mollitia nemo nostrum nulla, pariatur possimus quisquam reprehenderit sed sint suscipit tempora. A, alias architecto corporis cumque distinctio doloribus exercitationem impedit itaque nostrum pariatur quaerat quam quo, quos? Asperiores at, beatae corporis dolorem esse excepturi facilis, illo laudantium modi nisi officia possimus quam quasi quod rem soluta tenetur, veniam? Architecto commodi eaque iusto labore nesciunt nisi pariatur quam quas totam voluptates? Ab alias aliquid assumenda aut consectetur cum cumque delectus dignissimos doloremque doloribus ex, excepturi ipsum laborum libero magnam molestias nulla numquam obcaecati odit perferendis perspiciatis placeat porro quis rem reprehenderit, sapiente temporibus vero. Ab amet eligendi facere fugiat maxime nam quibusdam sunt, totam ut veniam? Aut dolorum illum iure maxime officiis omnis repellendus reprehenderit sed!
                                    Для управления маркизами предусмотрена специальная автоматика от ведущих мировых производителей – Somfy, Nice, Dooya. По желанию заказчика, управление маркизы может быть реализовано посредством настенной проводной кнопки, либо от системы «умный дом». Также, контролировать
                                    ления маркизами предусмотрена специальная автоматика от ведущих мировых производителей – Somfy, Nice, Dooya. По желанию заказчика, управление маркизы может быть реализовано посредством настенной проводной кнопки, либо от системы «умный дом». Также, контролировать

                                </div>
                            </div>
                            <div id="tab3" class="overflow-x-auto h-full tab-content">
                                Для управления маркизами предусмотрена специальная автоматика от ведущих мировых производителей – Somfy, Nice, Dooya. По желанию заказчика, управление маркизы может быть реализовано посредством настенной проводной кнопки, либо от системы «умный дом». Также, контролировать
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hidden pb-16 md:pb-32 mt-10 relative ">
        <div class="container">
            <div class="row">
                <div class="mb-16 lg:mb-24 text-4xl uppercase text-center font-bold">
                    <h2>Способы применения</h2>
                </div>
            </div>
        </div>
        <div class="pt-15">

            <div class="swiper slider-produktsiya">
                <div class="swiper-wrapper">

                    <div class="swiper-slide bg-white-200 md:rounded-[3.5rem] overflow-hidden">
                        <figure>
                            <img class="w-full h-full object-cover object-center" src="/wp-content/uploads/2024/11/premium-apartment-moscow-city-real-estate-blind.jpg" alt="">
                        </figure>
                    </div>
                    <div class="swiper-slide bg-white-200 md:rounded-[3.5rem] overflow-hidden">
                        <figure class="relative">
                            <img class="w-full h-full object-cover object-center" src="/wp-content/uploads/2024/11/premium-apartment-moscow-city-real-estate-blind.jpg" alt="">
                            <div class="absolute bottom-0 left-0 bg-blue-100 text-white-900 uppercase font-medium px-9 py-2 mb-20 rounded-br-[50px] rounded-tr-[50px]">Маркизы для ресторана</div>
                        </figure>

                    </div>
                    <div class="swiper-slide bg-white-200 md:rounded-[3.5rem] overflow-hidden">
                        <figure class="relative">
                            <img class="w-full h-full object-cover object-center" src="/wp-content/uploads/2024/11/premium-apartment-moscow-city-real-estate-blind.jpg" alt="">
                            <div class="absolute bottom-0 left-0 bg-blue-100 text-white-900 uppercase font-medium px-9 py-2 mb-20 rounded-br-[50px] rounded-tr-[50px]">Маркизы для ресторана</div>
                        </figure>
                    </div>
                    <div class="swiper-slide bg-white-200 md:rounded-[3.5rem] overflow-hidden">
                        <figure class="relative">
                            <img class="w-full h-full object-cover object-center" src="/wp-content/uploads/2024/11/premium-apartment-moscow-city-real-estate-blind.jpg" alt="">
                            <div class="absolute bottom-0 left-0 bg-blue-100 text-white-900 uppercase font-medium px-9 py-2 mb-20 rounded-br-[50px] rounded-tr-[50px]">Маркизы для ресторана</div>
                        </figure>
                    </div>
                    <div class="swiper-slide bg-white-200 md:rounded-[3.5rem] overflow-hidden">
                        <figure class="relative">
                            <img class="w-full h-full object-cover object-center" src="/wp-content/uploads/2024/11/premium-apartment-moscow-city-real-estate-blind.jpg" alt="">
                            <div class="absolute bottom-0 left-0 bg-blue-100 text-white-900 uppercase font-medium px-9 py-2 mb-20 rounded-br-[50px] rounded-tr-[50px]">Маркизы для ресторана</div>
                        </figure>
                    </div>
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


    <section id="contact" class="pt-16 relative">
        <div class="mb-5 py-4 sm:py-6 px-5 sm:px-14 xl:pr-[8.5rem] z-10 relative bg-white-900 w-[90%] sm:w-[55%] text-black-800 uppercase font-black text-right text-2xl sm:text-4xl xl:text-5xl rounded-br-[106px] rounded-tr-[106px]">
            <h2>Оставьте заявку</h2>
        </div>
        <div class="container">
            <div class="flex w-full flex-row space-x-10">
                <div class="w-full sm:w-4/5 md:w-1/2 relative z-10">
                    <h3 class="text-3xl sm:text-[40px] font-extralight uppercase leading-none">и получите скидку</h3>
                    <p class="font-medium text-2xl sm:text-[32px] uppercase leading-normal">15% до конца месяца!</p>
                    <div class="sm:w-4/5 mt-10 mb-10">

                        <div class="wpcf7 js" id="wpcf7-f29-p21-o1" lang="ru-RU" dir="ltr" data-wpcf7-id="29">
                            <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                            <form action="/#wpcf7-f29-p21-o1" method="post" class="wpcf7-form init" aria-label="Контактная форма" novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="29">
                                    <input type="hidden" name="_wpcf7_version" value="6.0">
                                    <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f29-p21-o1">
                                    <input type="hidden" name="_wpcf7_container_post" value="21">
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                </div>
                                <div class="form-row">
                                    <p class="form-control"><span class="wpcf7-form-control-wrap" data-name="user-name"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="Имя" type="text" name="user-name"></span>
                                    </p>
                                    <p class="form-control"><span class="wpcf7-form-control-wrap" data-name="user-phone"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-tel wpcf7-text wpcf7-validates-as-tel" autocomplete="name" aria-invalid="false" value="Телефон" type="tel" name="user-phone"></span>
                                    </p>
                                </div>
                                <p><span class="wpcf7-form-control-wrap" data-name="acceptance-845"><span class="wpcf7-form-control wpcf7-acceptance optional"><span class="wpcf7-list-item"><label><input type="checkbox" name="acceptance-845" value="1" aria-invalid="false"><span class="wpcf7-list-item-label">Ознакомлен с пользовательским соглашением</span></label></span></span></span>
                                </p>
                                <p><input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Отправить"><span class="wpcf7-spinner"></span>
                                </p><div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <figure class="w-4/5 sm:w-1/2  rounded-tl-[3.5rem] rounded-bl-[3.5rem] overflow-hidden absolute right-0 top-0 bottom-0 after:content[''] sm:after:content after:z-[1] after:bg-black-900/30 after:absolute after:top-0 after:w-full after:h-full">
                    <img class="h-full object-cover" src="http://dev-estet-karniz.test/wp-content/uploads/2024/11/093f69a7e4f7ff0dafe194154495b8c1-1-1-scaled.jpg" alt="Estet karniz">
                </figure>
            </div>
        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->
