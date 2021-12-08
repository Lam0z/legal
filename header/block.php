{% if header %}
<header class="header">
    <div class="container">

        <div class="header__box">
            <div class="header__logo">
                <img src="img/header/synergy-logo.svg" alt="Synergy">
            </div>
            <div class="header__logo">
                <img src="img/header/vtb-logo.svg" alt="Synergy">
            </div>
            <div class="header__logo">
                <img src="img/header/kpmg-logo.svg" alt="Synergy">
            </div>

            <div class="header__right">
                <div class="header__menu">
                    <div class="header__menu-item">
                        <a href="#about" class="header__menu-link scroll">о&nbsp;курсе</a>
                    </div>
                    <div class="header__menu-item">
                        <a href="#program" class="header__menu-link scroll">программа</a>
                    </div>
                    <div class="header__menu-item">
                        <a href="#speakers" class="header__menu-link scroll">преподаватели</a>
                    </div>
                    <div class="header__menu-item">
                        <a href="#speakers" class="header__menu-link scroll">Фищге</a>
                    </div>
                    
                </div>

                <div class="header__contacts">
                    <div class="header__buttonbox">
                        <a href="#popup-reg" class="button button_link button_2 header__button" data-fancybox>записаться</a></div>
                    <div class="header__icon">
                        <i class="header__icon-menu"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>

{% else %}
<header class="header">
    <div class="container">

        <div class="header__box">
            <div class="header__logo">
                <img src="img/header/logo.png" alt="">
            </div>
        </div>

    </div>
</header>

{% endif %}