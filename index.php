<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200, 300;0,400;0,700;1,300&family=Titillium+Web&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <!-- Метод для адаптации, что-бы наш сайт был размером как устройство человека который
        защел на него -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="header" id="home-anchor">
        <div class="container">
            <div class="header__inner">
                <div class="header__main">
                    <button type="button" class="header__burger" id="navToggle">
                        <img class="header__burger-icon" src="images/241756.png" alt="">
                    </button>
                    <div class="header__user">
                        <div class="header__user-avatar">
                            <img src="https://placehold.it/57x57" class="img" alt="">
                        </div>
                        <div class="user__content">
                            <div class="header__user-name">Kangash<br>Eduard</div>
                            <div class="header__user-prof">UI & UX Designer</div>
                        </div>
                    </div>
                </div>
                <nav class="nav" id="nav">
                    <a href="#" class="nav__link nav__link--btn">Админка</a>
                </nav>
            </div>
        </div>

        <div class="side">
            <button class="side__close" type="button" data-closeSide>
                <img src="/images/close_icon.svg" alt="close">
            </button>
            <div class="side__user">
                <div class="side__user-avatar">
                    <img src="https://placehold.it/57x57" class="img" alt="">
                </div>
                <p class="side__user-text">Войдите в админ панель...</p>
            </div>
            <div class="container">
                <h2 class="side__title">Навигация по сайту:</h2>
                <nav class="side__nav">
                    <!-- side__nav-link--btn активный -->
                    <a class="side__nav-link" href="#home-anchor">home</a>
                    <a class="side__nav-link" href="#work-anchor">work</a>
                    <a class="side__nav-link" href="#about-anchor">about me</a>
                    <a class="side__nav-link" href="#blog-anchor">blog</a>                     
                </nav>
            </div>
        </div>
    </header>

    <section class="intro">
        <div class="container">
            <div class="intro__inner">
                <div class="intro__content">
                    <h2 class="intro__subtitle">Hello i`m</h2>
                    <h1 class="intro__title">Lewis Nathaniel</h1>
                    <div class="intro__text">PHP developer</div>
                    <div class="social">
                        <a class="social__link" href="#">
                            <img src="/images/social/vk.svg" width="41" alt="">
                        </a>
                        <a class="social__link" href="#">
                            <img src="/images/social/instagram.svg" width="41" alt="">
                        </a>
                        <a class="social__link" href="#">
                            <img src="/images/social/whatsapp.svg" width="41" alt="">
                        </a>
                        <a class="social__link" href="#">
                            <img src="/images/social/gmail.svg" width="41" alt="">
                        </a>
                    </div>

                    <a href="" class="btn" data-modal="#modal_hire_me">HIRE ME</a>
                    <a href="" class="btn" data-modal="#modal_resume">SEE MY RESUME</a>
                </div>
                <img class="intro__photo" src="/images/photo.png" alt="">
            </div>
        </div><!-- /container -->
    </section>

<!-- Works -->
    <div class="works" id="work-anchor">
        <div class="container">
            <div class="works__nav">
                <a href="#" class="works__nav-link" data-filter="All">All</a>
                <a href="#" class="works__nav-link" data-filter="CSS">CSS</a>
                <a href="#" class="works__nav-link" data-filter="PHP">PHP</a>
                <a href="#" class="works__nav-link" data-filter="JavaScript">JavaScript</a>
            </div>
            <div class="portfolio">
                <?php for($i = 0; $i < 6; $i++): ?>
                    <?php if ($i <= 1 ) {
                        $atribut = "PHP";
                    } elseif ( $i > 1 && $i <= 3) {
                        $atribut = "JavaScript";
                    } else {
                        $atribut = "CSS";
                    } ?>
                <div class="portfolio__col" data-cat="<?=$atribut?>">
                    <div class="work" data-modal="#modal_project">
                        <img class="work__image" src="https://placehold.it/370x300" alt="">
                        <div class="work__content">
                            <div class="work__cat">Category: <?=$atribut?></div>
                            <div class="work__title">
                                Project title
                                <time class="work__data" datetime="2019-11-22 19:00">2020</time>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div> <!-- end wrapper portfolio-->
        </div><!-- /container -->
    </div>

    <!-- About -->
    <section class="about" id="about-anchor">
        <div class="container">
            <div class="about__inner">
                <div class="about__photo">
                    <img class="img" src="\images\designer_photo.png" alt="">
                </div>
                <div class="about__content">
                    <h3 class="about__title">ABOUT ME</h3>
                    <h2 class="about__bigtitle">WHO AM I</h2>
                    <div class="about__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque 
                        eu enim eget luctus. Sed augue felis, facilisis et elementum vitae, aliquam sit 
                        amet ante. Sed iaculis eros sem, elementum consequat est consequat eu. Quisque 
                        aliquet a ipsum nec tincidunt. Nulla vitae rhoncus leo.</p>
                        <p>Praesent dui sapien, bibendum quis tempus dictum, auctor ac dui. Vestibulum ante ipsum primis in 
                        faucibus orci luctus et ultrices posuere cubilia Curae; Donec at mauris porta, 
                        ullamcorper sem quis, lobortis sem. Donec sit amet aliquet dui, at varius est.</p>
                        <p>Phasellus porttitor finibus neque vel vehicula. Duis in nulla egestas, dignissim 
                        elit at, imperdiet eros. Integer tristique posuere purus. Suspendisse placerat, 
                        quam vitae ullamcorper sollicitudin, dui ligula molestie massa, sit amet laoreet 
                        nibh ex vitae dui. Aenean laoreet pellentesque lacus, eget varius massa mattis 
                        quis. Nunc ultrices urna eu nunc lobortis pulvinar. Duis viverra, quam non 
                        imperdiet scelerisque, urna nunc consequat velit, in mollis erat nibh in libero.</p>
                    </div>
                    <a href="" class="btn" data-modal="#modal_hire_me">HIRE ME</a>
                    <a href="" class="btn" data-modal="#modal_resume">SEE MY RESUME</a>
                </div>
            </div>
        </div>
    </section>
      
    <section class="news" id="blog-anchor">
        <div class="container">
            <div class="news__header">
                <h3 class="news__title">Blog</h3>
                <div class="news__text">Sometime i write something</div>
            </div>
            <div class="articles">
                <?php for($i = 0; $i < 6; $i++): ?>
                <div class="articles__col">
                    <div class="articles__item">
                        <div class="articles__header">
                            <!-- <time class="articles__date">10<br>June</time> -->
                            <a href="">
                                <img class="articles__photo img" src="/images/default.jpg" alt="">
                            </a>
                        </div>
                        <div class="articles__content">
                            <h4 class="articles__title">
                                <a href="">
                                    Nen the best app in web interface
                                </a>
                            </h4>
                            <div class="articles__cat">category</div>
                            <div class="articles__text">
                            <p>Praesent dui sapien, bibendum quis tempus dictum, auctor ac dui. Vestibulum ante ipsum primis in 
                            faucibus orci luctus et ultrices posuere cubilia Curae; Donec at mauris porta, 
                            ullamcorper sem quis, lobortis sem. Donec sit amet aliquet dui, at varius est.</p>
                            </div>
                        </div>
                        <!-- <a class="btn btn--sm" href="">read more</a> -->
                    </div>
                </div>
                <?php endfor; ?>
            </div> <!-- end articles wrapper-->
            <div class="text-center">
                <a href="#" class="btn btn--sm">LOAD MORE POSTS</a>
            </div>
            <div class="news__footer">
                <a class="news__footer-link" href="">See more posts</a>
            </div>
        </div> <!-- /container -->
    </section>

    <footer class="footer">
        <div class="container">

            <div class="footer__inner">
                <div class="footer__credits">
                    <div class="footer__copyright">
                        &copy; 2018 U143 - Free Templates
                    </div>
                    <div class="footer__social">
                        <a href="" torget="_back">
                            <img src="/images/social/vk.svg" width="24" alt="">
                        </a>
                        <a href="" torget="_back">
                            <img src="/images/social/instagram.svg" width="24" alt="">
                        </a>
                        <a href="" torget="_back">
                            <img src="/images/social/whatsapp.svg" width="24" alt="">
                        </a>
                        <a href="" torget="_back">
                            <img src="/images/social/gmail.svg" width="24" alt="">
                        </a>
                    </div>
                </div>
                <nav class="footer__nav">
                    <a href="" class="footer__nav-link">Home</a>
                    <a href="" class="footer__nav-link">Work</a>
                    <a href="" class="footer__nav-link">About</a>
                    <a href="" class="footer__nav-link">Blog</a>
                    <!-- footer__nav-link--btn -->
                </nav>
            
            </div>
            
        </div>
    </footer>


    <div class="modal" id="modal_project">
        <div class="modal__dialog">

            <button class="modal__close" type="button" data-close>
                <img src="/images/close_icon.svg" alt="close">
            </button>
        
            <div class="modal-work">
                <div class="modal-work__preview">
                    <div id="worksSlider">
                        <div>
                            <img class="modal-work__photo" src="https://placehold.it/790x780" alt="">
                        </div>
                        <div>
                            <img class="modal-work__photo" src="https://placehold.it/790x780/333" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-work__content">
                    <div class="modal-work__header">
                        <h3 class="modal-work__title">Project title</h3>
                        <div class="modal-work__cat">
                            category
                        </div>
                    </div>

                    <div class="modal-work__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque 
                        eu enim eget luctus. Sed augue felis, facilisis et elementum vitae, aliquam sit 
                        amet ante. Sed iaculis eros sem, elementum consequat est consequat eu. Quisque 
                        aliquet a ipsum nec tincidunt. Nulla vitae rhoncus leo.</p>
                        <p>Praesent dui sapien, bibendum quis tempus dictum, auctor ac dui. Vestibulum ante ipsum primis in 
                        faucibus orci luctus et ultrices posuere cubilia Curae; Donec at mauris porta, 
                        ullamcorper sem quis, lobortis sem. Donec sit amet aliquet dui, at varius est.</p>
                    </div>

                    <div class="modal-work__footer">
                        <button type="button" class="modal-work__btn modal-work__btn--prev">
                            <img src="images/left-arrow.svg" height="12" alt="15">
                            Previous
                        </button>
                        <button type="button" class="modal-work__btn modal-work__btn--next">
                            Next
                            <img src="images/next.svg" height="12" alt="15">   
                        </button>
                    </div>
                </div><!-- /modal-content -->
            </div><!-- /modal-work -->

        </div> <!-- /modal__dialog -->
    </div> <!-- /modal -->

    <div class="modal" id="modal_resume">
        <div class="modal__dialog">

            <button class="modal__close" type="button" data-close>
                <img src="/images/close_icon.svg" alt="close">
            </button>


            <div class="modal__content text-center">
                <h3 class="modal__title">RESUME</h3>
                <div class="text-center">
                    <a href="" class="btn btn--thin">POWNLOAD PDF</a>
                    <a href="" class="btn btn--thin">PRINT</a>
                </div>

                <div class="timeline">
                    <div class="timeline__col timeline__col--left">
                        <h4 class="timeline__title">Опыт работы:</h4>
                        <?php for($i = 0; $i < 2; $i++): ?>
                        <div class="timeline__item">
                            <div class="timeline__date">2017 - <b>Present</b></div>
                            <h5 class="timeline__subtitle">Freelancer</h5>
                            <div class="timeline__position">
                                Analog system developer
                            </div>
                            <div class="timeline__text">
                                <p>
                                    Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.
                                </p>
                            </div>
                        </div> <!-- /timeline__item-->
                        <?php endfor; ?>
                    </div> <!-- /timeline__col-->

                    <div class="timeline__col timeline__col--right">
                        <h4 class="timeline__title">Образование:</h4>
                        <div class="timeline__item">
                            <div class="timeline__date"><b>Когда:</b> 2017 - 2020</div>
                            <h5 class="timeline__subtitle"><b>Где:</b> MIET</h5>
                            <div class="timeline__position">
                            <b>На кого:</b> Digital system developer
                            </div>
                        </div> <!-- /timeline__item-->
                        <h4 class="timeline__title">Дополнительно:</h4>
                        <div class="timeline__text">
                            <p>
                                Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.
                            </p>
                        </div>
                    </div><!-- /timeline__col-->
                </div> <!-- /timeline-->

                <div class="text-center">
                    <a href="/" class="btn">Here me</a>
                </div>
            </div> <!-- /modal__content -->

        </div> 
    </div> <!-- /modal -->

    
    <div class="modal" id="modal_hire_me">
        <div class="modal__dialog modal__dialog--sm">

            <button class="modal__close" type="button" data-close>
                <img src="/images/close_icon.svg" alt="close">
            </button>


            <div class="contact">
                <div class="contact__left">
                    <h3 class="modal__title mb-0">RESUME</h3>
                    <h5 class="modal__subtitle">CALL ME OR SEND ME A REQUEST</h5>

                    <div class="social mt-5">
                        <a class="social__link" href="#">
                            <img src="/images/social/vk.svg" width="41" alt="">
                        </a>
                        <a class="social__link" href="#">
                            <img src="/images/social/instagram.svg" width="41" alt="">
                        </a>
                        <a class="social__link" href="#">
                            <img src="/images/social/whatsapp.svg" width="41" alt="">
                        </a>
                        <a class="social__link" href="#">
                            <img src="/images/social/gmail.svg" width="41" alt="">
                        </a>
                    </div>

                    <form class="form" action="/" method="POST">
                        <div class="form__group">
                            <label class="form__label" for="input-email">Adress e-mail</label>
                            <input class="form__input" name="input-email" type="text" id="input-email" placeholder="Adress e-mail">
                        </div>

                        <div class="form__group">
                            <label class="form__label" for="input-text">Request</label>
                            <textarea class="form__textarea" name="input-text" id="input-text" placeholder="Type your request..."></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn">SEND</button>
                        </div>
                    </form>
                </div>
                <div class="contact__right"></div>
                
            </div> <!-- /content -->

        </div> 
    </div> <!-- /modal -->


    <!-- /JS -->
    <script src="js/jquery/jquery-3.5.1.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>