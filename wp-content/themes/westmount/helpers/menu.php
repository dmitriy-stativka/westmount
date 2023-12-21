<?php

$build_folder = get_template_directory_uri() . '/assets/';
//$link         = get_field( 'link', 'options' );
$logo = get_field( 'logo', 'options' );
?>

<div class="custom-menu" style="background-image: url('<?php
echo $build_folder ?>/img/bg_menu.png');">
    <div class="container">
        <div class="custom-menu__inner">
            <div class="custom-menu__top">
                <a href="#" class="custom-menu__logo">
                    <img width="221" height="31" src="<?php
					echo $logo["sizes"]['1440'] ?>" alt="logo"/>
                </a>

                <button class="custom-menu__btn burger active">
                    <svg width="17" height="17">
                        <use href="<?php
						echo $build_folder ?>img/sprite/sprite.svg#open"></use>
                    </svg>
                </button>
            </div>

            <div class="custom-menu__content">
                <span class="events-label">
                    <svg width="11" height="11">
                        <use href="<?php
                        echo $build_folder ?>img/sprite/sprite.svg#label_icon"></use>
                    </svg>
                    Westmount West
                </span>

                <h3 class="custom-menu__title">
                    New Name, Familiar Faces.
                </h3>

                <p class="custom-menu__text">
                    Westmount Guarantee Services Inc., a member of the Navacord group of companies, is pleased to
                    announce the opening of Westmount West Services Inc., their Vancouver-based Managing General Agency
                    (MGA).
                    <br><br>
                    Tom Reeves, President of Westmount West, will continue to lead the established team of experts who
                    have been providing surety solutions to builders and developers across Western Canada since 2005.
                </p>

                <div class="action_btn">
                    <div class="action_btn_text">Learn more</div>
                    <div class="square">
                        <img src="<?php
						echo $build_folder ?>/img/arrow_btn.svg" alt="arrow"/>
                    </div>
                </div>

                <div class="custom-menu__content-bottom">

                    <ul class="social">
                        <li>
                            <a href="#">
                                <img src="<?php
		                        echo $build_folder ?>img/inlogo.svg" alt="logo in"/>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php
		                        echo $build_folder ?>img/instlogo.svg" alt="logo instagram"/>
                            </a>
                        </li>
                    </ul>

                    <ul class="contacts">
                        <li>
                            <a href="tel:647-499-8249">647-499-8249</a>
                        </li>
                        <li>
                            <a href="mailto:info@westmontguarantee.com">
                                info@westmontguarantee.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <nav class="custom-menu__nav">
                <div class="custom-menu__nav-inner">
                    <div data-menu="solutions" class="current-submenu">
                        <span class="current-submenu__title">
                            Solutions
                        </span>
                        <ul>
                            <li>
                                <a href="#">
                                    Tarion Bond
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Condominium Deposit Insurance
                                </a>
                            </li>
                            <li>
                                <a href="#" data-descr="(Freehold Deposit Insurance)">
                                    Westmount Protect
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Site & Subdivision Security
                                </a>
                            </li>
                            <li>
                                <a href="#" data-descr="(Condo Project Insurance)">
                                    Westmount Plus
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--                    <div data-menu="solutions2" class="current-submenu">-->
                    <!--                        <span class="current-submenu__title">-->
                    <!--                            Solutions2-->
                    <!--                        </span>-->
                    <!--                        <ul>-->
                    <!--                            <li>-->
                    <!--                                <a href="#">-->
                    <!--                                    Tarion Bond-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#">-->
                    <!--                                    Condominium Deposit Insurance-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#" data-descr="(Freehold Deposit Insurance)">-->
                    <!--                                    Westmount Protect-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#">-->
                    <!--                                    Site & Subdivision Security-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#" data-descr="(Condo Project Insurance)">-->
                    <!--                                    Westmount Plus-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                    <div data-menu="solutions3" class="current-submenu">-->
                    <!--                        <span class="current-submenu__title">-->
                    <!--                            Solutions3-->
                    <!--                        </span>-->
                    <!--                        <ul>-->
                    <!--                            <li>-->
                    <!--                                <a href="#">-->
                    <!--                                    Tarion Bond-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#">-->
                    <!--                                    Condominium Deposit Insurance-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#" data-descr="(Freehold Deposit Insurance)">-->
                    <!--                                    Westmount Protect-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#">-->
                    <!--                                    Site & Subdivision Security-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#" data-descr="(Condo Project Insurance)">-->
                    <!--                                    Westmount Plus-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                </div>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Our Company</a>
                    </li>
                    <li>
                        <a href="#">Our Team</a>
                    </li>
                    <li data-trigger="solutions">
                        <a href="#">Solutions</a>
                    </li>
                    <li data-trigger="solutions2">
                        <a href="#">Westmount West</a>
                    </li>
                    <li data-trigger="solutions3">
                        <a href="#">Affiliated Companies</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </nav>


        </div>
    </div>
</div>


<!--<div class="menu_open">-->
<!--	<div class="fiter_bg">-->
<!--		<div class="menu_col">-->
<!--			<div class="w1-3 menu_open_info_block">-->
<!--				<div class="menu_open_text_wrap">-->
<!--					<div class="menu_open_subtitle">-->
<!--						<div class="square"></div>-->
<!--						Westmount West-->
<!--					</div>-->
<!--					<div class="menu_open_title">New Name, Familiar Faces.</div>-->
<!--					<div class="menu_open_text">-->
<!--						<p>-->
<!--							Westmount Guarantee Services Inc., a member of the Navacord group of companies, is-->
<!--							pleased to-->
<!--							announce the opening of Westmount West Services Inc., their Vancouver-based Managing-->
<!--							General Agency-->
<!--							(MGA).-->
<!--						</p>-->
<!--						<p>-->
<!--							Tom Reeves, President of Westmount West, will continue to lead the established team of-->
<!--							experts who-->
<!--							have been providing surety solutions to builders and developers across Western Canada-->
<!--							since 2005.-->
<!--						</p>-->
<!--					</div>-->


<!--				</div>-->
<!--			</div>-->
<!--			<div class="w1-3 linear_gr"></div>-->

<!--		</div>-->
<!--	</div>-->
<!--</div>-->