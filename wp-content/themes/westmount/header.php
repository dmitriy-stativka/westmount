<?php 

$link = get_field('link', 'options');
$logo = get_field('logo', 'options');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head( ) ?>
</head>
<body>
    <header>
        
        <div class="menu_open">
            <div class="fiter_bg">
                <div class="menu_col">
                <div class="w1-3 menu_open_info_block">
                    <div class="menu_open_text_wrap">
                    <div class="menu_open_subtitle">
                        <div class="square"></div>
                        Westmount West
                    </div>
                    <div class="menu_open_title">New Name, Familiar Faces.</div>
                    <div class="menu_open_text">
                        <p>
                        Westmount Guarantee Services Inc., a member of the Navacord group of companies, is pleased to
                        announce the opening of Westmount West Services Inc., their Vancouver-based Managing General Agency
                        (MGA).
                        </p>
                        <p>
                        Tom Reeves, President of Westmount West, will continue to lead the established team of experts who
                        have been providing surety solutions to builders and developers across Western Canada since 2005.
                        </p>
                    </div>
                    <div class="action_btn">
                        <div class="action_btn_text">Learn more</div>
                        <div class="square">
                        <img src="/assets/img/arrow_btn.svg" alt="arrow" />
                        </div>
                    </div>
                    <div class="menu_open_contacts">
                        <div class="icon">
                        <img src="/assets/img/inlogo.svg" alt="logo in" />
                        </div>
                        <div class="icon">
                        <img src="/assets/img/instlogo.svg" alt="logo instagram" />
                        </div>
                        <div class="text">647-499-8249</div>
                        <div class="text">info@westmontguarantee.com</div>
                    </div>
                    </div>
                </div>
                <div class="w1-3 linear_gr"></div>
                <div class="w1-3 menu_ul">
                    <ul>
                    <li>Home</li>
                    <li>Our Company</li>
                    <li>Solutions</li>
                    <li>Solutions</li>
                    <li>Westmount West</li>
                    <li>Affiliated Companies</li>
                    <li>Events</li>
                    <li>Contact Us</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
 
        <div class="top_plane">
            <div class="container_box">
                <div class="header_wrap">
                <?php if( $logo ): ?>
                    <div class="logo">
                        <img src="<?php echo $logo["sizes"]['1440'] ?>" alt="logo" />
                    </div>
                <?php endif; ?>
                    <div class="menu">
                        <div class="buttons_wrap">

                            <?php if( $link ): 

                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';

                            ?>

                            <a href="<?php echo esc_url( $link_url ); ?>" 
                                class="btn contact_us"  
                                target="<?php echo esc_attr( $link_target ); ?>">
                                <?php echo esc_html( $link_title ); ?>
                                <i>
                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.2816 0L8.16406 1.11753L11.7299 4.7341V6.30379L8.16406 9.93256L9.23086 11L13.3375 6.89403V4.05588L9.2816 0Z" fill="#F9FAFE"/>
                                        <path d="M9.86962 4.73438H0V6.30406H9.86962V4.73438Z" fill="#F9FAFE"/>
                                    </svg>
                                </i>
                            </a>

                            <?php endif; ?>

                            <div class="btn menu_desktop">
                                <div class="col position_center">
                                    <span>Menu</span>
                                </div>
                                <div class="black_line"></div>
                                <div class="col position_center">
                                    <div class="menu_bar">
                                        <div class="up_line">
                                            <div class="line1"></div>
                                            <div class="line2"></div>
                                        </div>
                                        <div class="line3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="pages" class="pages mt-[140px] transition-anima flex-grow px-4 py-4" data-barba="wrapper">
        <div class="page" data-barba="container">
            <main>

