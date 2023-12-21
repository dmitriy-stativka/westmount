<?php

$build_folder = get_template_directory_uri() . '/assets/';

?>

<section class="events-page">
    <div class="events-hero">
        <div class="events-hero__bg" style="">
            <img class="left-bg" src="<?php
			echo $build_folder ?>img/new/bg_word.svg" alt="">
            <img class="right-bg" src="<?php
			echo $build_folder ?>img/new/bg_events.png" alt="">
        </div>
        <div class="container">
            <div class="events-hero__inner">
                <div class="main-top">
                <span class="main-top__label">
                    <svg width="11" height="11">
                        <use href="<?php
                        echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                    </svg>
	                Our Company
                </span>
                    <h2 class="main-top__title">Events</h2>
                </div>

                <div class="current-events">
                    <div class="current-events__image">
                        <img width="695" height="429" src="<?php
						echo $build_folder ?>/img/new/events.png" alt="">
                    </div>
                    <div class="current-events__info">
                    <span class="events-label">
                        <svg width="11" height="11">
                            <use href="<?php
                            echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                        </svg>
                        Our Company
                    </span>

                        <span class="current-events__name">
                            "A Journey through Space and Time"
                        </span>

                        <div class="current-events__bottom">
                        <span class="current-events__date">
                            06
                            <i>June 2019</i>
                        </span>

                            <a href="#" class="article-link blue">
                                <svg width="14" height="11">
                                    <use href="<?php
									echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="events-box">
        <div class="container">
            <div class="events-box__inner">
                <div class="events-box__filter">
                    <span class="events-label">
                        <svg width="11" height="11">
                            <use href="<?php
                            echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                        </svg>
                        more events
                    </span>

                    <div class="select" data-select>
                        <div class="select__header">
                            <input
                                    type="hidden"
                                    class="select__input input-select"
                                    name="#"
                                    value="1"
                            />
                            <span class="select__current" data-id="1">All events</span>
                            <svg width="5" height="11">
                                <use href="<?php
								echo $build_folder ?>img/sprite/sprite.svg#arrow-bottom"></use>
                            </svg>
                        </div>
                        <div class="select__body">
                            <ul class="select__list">
                                <li class="select__option" data-id="1" data-type="option">
                                    <!--<a href="#">Ccылка на отрисовку всех собыытий</a>-->
                                    All events
                                </li>
                                <li class="select__option" data-id="2" data-type="option">All2 events</li>
                                <li class="select__option" data-id="3" data-type="option">All3 events</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <ul class="events-box__list">
                    <li class="events-box__item">
                        <div class="event-card">
                            <div class="event-card__coll">
                                <span class="event-card__date">
                                    18
                                    <i>Oct. 2018</i>
                                </span>
                                <div class="event-card__image">
                                    <img width="445" height="256" src="<?php
									echo $build_folder ?>/img/new/event.png" alt="">
                                </div>
                            </div>

                            <div class="event-card__info">
                                <span class="event-card__title">
                                    "Great Gatsby"
                                </span>

                                <div class="event-card__bottom">
                                     <span class="events-label">
                                        <svg width="11" height="11">
                                            <use href="<?php
                                            echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                                        </svg>
                                        Location – THE BROADVIEW HOTEL
                                    </span>

                                    <a href="#" class="article-link">
                                        <svg width="14" height="11">
                                            <use href="<?php
											echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="events-box__item">
                        <div class="event-card">
                            <div class="event-card__coll">
                                <span class="event-card__date">
                                    18
                                    <i>Oct. 2018</i>
                                </span>
                                <div class="event-card__image">
                                    <img width="445" height="256" src="<?php
									echo $build_folder ?>/img/new/event2.png" alt="">
                                </div>
                            </div>

                            <div class="event-card__info">
                                <span class="event-card__title">
                                    "Grown in the Dark"
                                </span>

                                <div class="event-card__bottom">
                                     <span class="events-label">
                                        <svg width="11" height="11">
                                            <use href="<?php
                                            echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                                        </svg>
                                        Location – DISTRICT 28
                                    </span>

                                    <a href="#" class="article-link">
                                        <svg width="14" height="11">
                                            <use href="<?php
											echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="events-box__item">
                        <div class="event-card">
                            <div class="event-card__coll">
                                <span class="event-card__date">
                                    28
                                    <i>Oct. 2018</i>
                                </span>
                                <div class="event-card__image">
                                    <img width="445" height="256" src="<?php
									echo $build_folder ?>/img/new/event3.png" alt="">
                                </div>
                            </div>

                            <div class="event-card__info">
                                <span class="event-card__title">
                                    "Risk Free Business"
                                </span>

                                <div class="event-card__bottom">
                                     <span class="events-label">
                                        <svg width="11" height="11">
                                            <use href="<?php
                                            echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                                        </svg>
                                        Location – THOMPSON LANDRY GALLERY
                                    </span>

                                    <a href="#" class="article-link">
                                        <svg width="14" height="11">
                                            <use href="<?php
											echo $build_folder ?>img/sprite/sprite.svg#arrow-r"></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>
