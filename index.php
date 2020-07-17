<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Врачи надежды</title>
</head>

<body>
    <div class="navdrawr">
        <div class="navdrawheader">
            <span>Врачи надежды</span>
            <img src="./img/close.png" alt="close">
        </div>
        <div class="drawerlinks">
            <a href="#">Главная</a>
            <a href="#">Как это работает</a>
            <a href="#">Инструкции</a>
            <a href="#">Наша работа</a>
            <a href="#">О нас</a>
            <a href="#">Контакты</a>
            <div><span>Помочь проекту</span></div>
        </div>
        <div class="drwrSocIcons">
            <span>Следите за нами в социальных сетях</span>
            <div class="icns">
                <img src="img/facebookDr.png" alt="facebook">
                <img src="img/instagramDr.png" alt="instagram">
                <img src="img/youtubrDr.png" alt="youtube">
                <img src="img/odnokl.png" alt="">
            </div>
        </div>
    </div>
    <!-- nav -->
    <div class="bg_main">
        <header class="lp-header">

            <nav class="navSection">

                <div class="hamburger">
                    <div class="div1"></div>
                    <div class="div2"></div>
                    <div class="div3"></div>
                </div>

                <div class="logoSection">
                    <img src="img/logo.png" />
                    <span>Врачи <br />
                        надежды</span>
                </div>
                <ul>
                    <div class="menuLinks">
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.underNavBlock`).offset().top-100}, 500);">Кто
                                мы</a></li>
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.howWeHelpTitle`).offset().top-100}, 500);">Как
                                мы помогаем</a></li>
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.workInNum`).offset().top-100}, 500);">Показатели</a>
                        </li>
                        <!-- <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.patientsHistory`).offset().top-100}, 500);">Истории</a>
                        </li> -->
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.whyHelpBlock .title`).offset().top-100}, 500);">Благотворители</a>
                        </li>
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.anyqstnTitle`).offset().top}, 500);">Контакты</a>
                        </li>
                    </div>
                    <div>
                        <li class="menuButtons">
                            <a href="#"><span>НКО</span></a>
                        </li>
                    </div>
                    <div>
                        <li class="menuButtons">
                            <a href="./vrachi.html"><span>Врачи</span></a>
                        </li>
                    </div>
                </ul>

            </nav>
        </header>
    </div>
    <!-- nav end -->
    <!-- main -->
    <main id="main">

        <div class="underNavBlock">
            <span class="title">Врачи надежды</span>
            <span class="mobileDescr">В этом видео мы <br />
                рассказываем о нашей работе</span>
            <div class="row">
                <div class="underTitle">
                    <div>
                        <span>
                            Организация, которая бесплатно помогает подопечным <br />
                            Благотворительных Фондов
                            <p>Пожалуйста поддержите наш проект и открытые сборы.</p>
                        </span>
                    </div>
                    <div style="position:relative; display: table;">
                        <button class="wantHelpButton" onclick="$('html, body').animate({scrollTop: $(`.helpToWork`).offset().top-100}, 500);">
                            <span class="wantHelpButtonText">Я хочу помочь!</span>
                            <div class="triangle"></div>
                        </button>

                    </div>
                    <div>
                        <span class="underHelpButton">Ваша поддержка действительно необходима. <br />
                            Иксренне благодарим.
                        </span>
                    </div>
                </div>
                <div>

                    <iframe src="https://www.youtube.com/embed/Dw-RIuz3_X8" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                </div>
            </div>
        </div>


        <section class="block-how-works">
            <div id="howhelpsec" class="howHelp">
                <span class="howWeHelpTitle">Как мы помогаем людям ?</span>
                <p class="underHowWeTitle">
                    Мы направляем и оказываем бесплатную медицинскую помощь и делаем все,
                    <br />
                    что в наших силах для подопечныx Благотворительных Фондов:
                </p>
            </div>

            <div class="howWeHelpBlock">


                <div class="howWeHelp">
                    <div class="howWeHelpImg">
                        <img src="./img/howWeHelpImage.png" width="100%" alt="" />
                    </div>
                    <div class="howWeHelpList">
                        <ol>
                            <li><span>Подробно изучаем каждый клинический случай</span></li>
                            <li>
                                <span>Составляем план обследования <br />
                                    с применением самых точных методов диагностики</span>
                            </li>
                            <li>
                                <span>Созываем консилиум для оценки состояния <br />
                                    пациента и постановки диагноза.</span>
                            </li>
                            <li>
                                <span>Выдаём подробную карту лечения <br />
                                    установленной причины заболевания.</span>
                            </li>
                            <li>
                                <span>Отправляем пациента лечиться в клинику, <br />
                                    в которой его уже ждут и где ему действительно помогут.</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="numbs">
                <div class="workInNum">
                    <span class="howWeHelpTitle">Наша работа в цифрах</span>
                </div>

                <span class="underHowWeTitle">С 2017 года<span style="color: #367BF5;">"Врачи Надежды"</span></span>
                <div class="yearsBlock">
                    <div class="years">
                        <div>
                            <img src="./img/3years.png" />
                        </div>
                        <div>
                            <img src="./img/2750.png" />
                        </div>
                        <div>
                            <img src="./img/7funds.png" />
                        </div>
                        <div>
                            <img src="./img/89doctors.png" />
                        </div>
                    </div>
                </div>
                <div class="numbs">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide"> <img src="./img/3years.png" /></div>
                            <div class="swiper-slide"> <img src="./img/2750.png" /></div>
                            <div class="swiper-slide"><img src="./img/7funds.png" /></div>
                            <div class="swiper-slide"><img src="./img/89doctors.png" /></div>

                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="undernumsblock">
                    <div class="undernumslide">
                        <div class="redstar">
                            <div class="redpoint"></div>
                        </div>
                        <span>3 Года помогаем</span>
                    </div>
                    <div class="undernumslide">
                        <div class="redstar">
                            <div class="redpoint"></div>
                        </div>
                        <span>2750 Человек получили медицинскую помощь</span>
                    </div>
                    <div class="undernumslide">

                        <div class="redstar">
                            <div class="redpoint"></div>
                        </div>

                        <span>89 Врачей <span style="display: inline; color: red;">c живыми сердцами</span> по всей
                            стране </span>
                    </div>
                    <div class="undernumslide">
                        <div class="redstar">
                            <div class="redpoint"></div>
                        </div>
                        <span>В Росии 7 фондов работают с нами </span>
                    </div>
                </div>

            </div>

            <!-- <div class="patientsHistory">
                <span class="howWeHelpTitle">Истории наших подопечных</span>
                <span class="underHowWeTitle">Подзаголовок</span>
                <div class="patientsHistoryBlocksContainer">
                    <div class="historyBlock">
                        <div>
                            <iframe src="https://www.youtube.com/embed/Dw-RIuz3_X8" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                        <div>
                            <span>Проблема :</span>

                            <p>Невозможность найти специалистов,пройти обследование и собраться на операцию</p>


                        </div>
                        <div class="avaAndName">
                            <div>
                                <img src="https://www.w3schools.com/howto/img_avatar.png" width="32px" height="32px" />
                            </div>
                            <div class="name">
                                <span> Алиев Али</span>
                            </div>
                        </div>
                    </div>
                    <div class="historyBlock">
                        <div>
                            <iframe src="https://www.youtube.com/embed/Dw-RIuz3_X8" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                        <div>
                            <span>Проблема :</span>

                            <p>Невозможность найти специалистов,пройти обследование и собраться на операцию</p>


                        </div>
                        <div class="avaAndName">
                            <div>
                                <img src="https://www.w3schools.com/howto/img_avatar.png" width="32px" height="32px" />
                            </div>
                            <div class="name">
                                <span> Алиев Али</span>
                            </div>
                        </div>
                    </div>
                    <div class="historyBlock">
                        <div>
                            <iframe src="https://www.youtube.com/embed/Dw-RIuz3_X8" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                        <div>
                            <span>Проблема :</span>

                            <p>Невозможность найти специалистов,пройти обследование и собраться на операцию</p>


                        </div>
                        <div class="avaAndName">
                            <div>
                                <img src="https://www.w3schools.com/howto/img_avatar.png" width="32px" height="32px" />
                            </div>
                            <div class="name">
                                <span> Алиев Али</span>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="historyBlock">
                                <div>
                                    <iframe src="https://www.youtube.com/embed/Dw-RIuz3_X8" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                </div>
                                <div>
                                    <span style="margin: 15px 0 0 16px;">Проблема :</span>

                                    <p>Невозможность найти специалистов,пройти обследование и собраться на операцию
                                    </p>


                                </div>
                                <div class="avaAndName">
                                    <div>
                                        <img src="https://www.w3schools.com/howto/img_avatar.png" width="32px"
                                            height="32px" />
                                    </div>
                                    <div class="name">
                                        <span> Алиев Али</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="historyBlock">
                                <div>
                                    <iframe src="https://www.youtube.com/embed/Dw-RIuz3_X8" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                </div>
                                <div>
                                    <span style="margin: 15px 0 0 16px;">Проблема :</span>

                                    <p>Невозможность найти специалистов,пройти обследование и собраться на операцию
                                    </p>


                                </div>
                                <div class="avaAndName">
                                    <div>
                                        <img src="https://www.w3schools.com/howto/img_avatar.png" width="32px"
                                            height="32px" />
                                    </div>
                                    <div class="name">
                                        <span> Алиев Али</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="historyBlock">
                                <div>
                                    <iframe src="https://www.youtube.com/embed/Dw-RIuz3_X8" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                </div>
                                <div>
                                    <span style="margin: 15px 0 0 16px;">Проблема :</span>

                                    <p>Невозможность найти специалистов,пройти обследование и собраться на операцию
                                    </p>


                                </div>
                                <div class="avaAndName">
                                    <div>
                                        <img src="https://www.w3schools.com/howto/img_avatar.png" width="32px"
                                            height="32px" />
                                    </div>
                                    <div class="name">
                                        <span> Алиев Али</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                <!-- </div>
            </div> -->

            <div class="whyHelpBlock">
                <span class="title">Для чего нужна финансовая <br /> поддержка ?</span>
                <span class="mobWhyHelpTitle">Для чего нам нужна ваша помощь? </span>
                <div class="row">
                    <div class="underTitle">
                        <div>
                            <span>
                                <span> «Врачи Надежды» – это Люди с живыми сердцами, которые
                                    помогают помогать на безвозмездной основе</span>
                                <p> Деньги необходимы для решения текущих задач по каждому пациенту и для развития
                                    проекта.</p>
                                <p>Уже сейчас мы запустили мобильное приложение, чтобы подключить к этому доброму
                                    делу как можно больше врачей волонтёров. И мы не имеем морального права
                                    останавливаться. Миссия проекта – сделать правильное лечение доступным. </p>
                            </span>
                        </div>

                        <button class="wantHelpButton" onclick="$('html, body').animate({scrollTop: $(`.helpToWork`).offset().top-100}, 500);">
                            <span class="wantHelpButtonText">Помочь «Врачам надежды»</span>
                            <div class="triangle"></div>
                        </button>



                    </div>
                    <div class="whyHelpImg">

                        <img src="./img/benefactor.png" width="384px" height="384px" />

                    </div>
                </div>
                <span class="firstHalfYear">На 2020 год нам необходимо</span>
            </div>
            <div class="spendsGenWrap">
                <div class="spendsTables">
                    <div class="spendsWrapper">

                        <div class="spendsContainer">
                            <div class="spendImage">
                                <img src="./img/Star1.png" width="24px" height="24px" />
                                <div class="yellowPoint">
                                </div>

                            </div>
                            <div class="spendsText">
                                <span class="spendsTitle">Ежемесячные зарплаты сотрудников</span> <br />
                                <span class="spendsDescr">В нашем штате работают 8 человек это: <br /> копирайтер,
                                    smm-менеджер, аккаунт- менеджер, разработчики </span>
                            </div>

                            <div class="spendsMoney">
                                <div class="amountAndLogo">
                                    <span> 180000</span>
                                    <img src="./img/RubleIcon.png" width=14px heigth=21px />
                                </div>

                            </div>
                        </div>



                    </div>
                    <div class="spendsWrapper">

                        <div class="spendsContainer">
                            <div class="spendImage">
                                <img src="./img/Star1.png" width="24px" height="24px" />
                                <div class="yellowPoint">
                                </div>

                            </div>
                            <div class="spendsText">
                                <span class="spendsTitle">Административные расходы</span> <br />
                                <span class="spendsDescr"> <br /> Аренда, интернет, мобильная связь,
                                    канцелярия и расходники, коммунальные платежи,налоги и прочие хоз нужды </span>
                            </div>

                            <div class="spendsMoney">
                                <div class="amountAndLogo">
                                    <span> 60000</span>
                                    <img src="./img/RubleIcon.png" width=14px heigth=21px />
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="spendsWrapper">

                        <div class="spendsContainer">
                            <div class="spendImage">
                                <img src="./img/Star1.png" width="24px" height="24px" />
                                <div class="yellowPoint">
                                </div>

                            </div>
                            <div class="spendsText">
                                <span class="spendsTitle">Расходы на Медицинские Консилиумы </span> <br />
                                <span class="spendsDescr">На компенсацию услуг узких специалистов, учавствующих в
                                    консилиумах <br /> </span>
                            </div>

                            <div class="spendsMoney">
                                <div class="amountAndLogo">
                                    <span> 25000</span>
                                    <img src="./img/RubleIcon.png" width=14px heigth=21px />
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="totalSpends">
                    <span>Общая сумма сбора<span class="totalSpendsDate"> на 27.03.20</span></span>

                    <div class="amountAndLogo">
                        <span>265</span>
                        <span>000</span>
                        <svg width="19" height="29" viewBox="0 0 21 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.9"
                                d="M11.925 15.9394C16.3776 15.9394 20 12.5885 20 8.4697C20 4.35091 16.3776 1 11.925 1C11.9076 1 11.8903 1.00026 11.8731 1.00088H5.2769C5.27623 1.00088 5.27566 1.00079 5.27509 1.00079C4.48811 1.00079 3.85009 1.59098 3.85009 2.31897V2.31906V14.6212V18.5758H2.425C1.63802 18.5758 1 19.166 1 19.8939C1 20.6219 1.63802 21.2121 2.425 21.2121H3.85V28.6818C3.85 29.4098 4.48802 30 5.275 30C6.06198 30 6.7 29.4098 6.7 28.6818V21.2121H11.925C12.712 21.2121 13.35 20.6219 13.35 19.8939C13.35 19.166 12.712 18.5758 11.925 18.5758H6.7V15.9394H11.925ZM11.925 3.63724C11.9404 3.63724 11.9558 3.63698 11.971 3.63654C14.831 3.65939 17.15 5.81875 17.15 8.4697C17.15 11.1348 14.8061 13.303 11.925 13.303H6.7V3.63724H11.925Z"
                                fill="#367BF5" stroke="#367BF5" />
                        </svg>
                    </div>
                </div>

                <button class="wantHelpButton" onclick="$('html, body').animate({scrollTop: $(`.helpToWork`).offset().top-100}, 500);">
                    <span class="wantHelpButtonText">Помочь «Врачам надежды»»</span>
                    <div class="triangle"></div>
                </button>
            </div>
            <div class="helpToWork">
                <div class="rowToWork">
                    <div class="descrToWork">
                        <span>Волонтёрская организация Врачи Надежды бесплатно помогает подопечным Благотворительных
                            Фондов. Мы содействуем пациентам в диагностике изначальной причины заболевания и поиске
                            адекватного лечебного учреждения.</span>
                        <p></p> <span>Ваша помощь пойдёт на текущие затраты по подопечным, а также на рост проекта:
                            мы постоянно увеличиваем штат врачей-волонтёров, развиваем мобильную платформу HopeDoc
                            для оперативного обмена информацией и проведения онлайн-консилиумов.</span> <span
                            class="helpTohelp">Помогите нам помогать! </span>
                        <span class="tellAboutUS"> Расскажите о нас своим друзьям</span>
                        <div class="socialIconsBlock">

                            <div class="socialIcons">
                                <div class="whatsapp"> <img src="./img/whatsapp.png" width=20px heigth=20px /></div>
                                <div class="telegram"> <img src="./img/tlgr.png" width=35px heigth=35px /></div>
                                <div class="facebook"> <img src="./img/f.png" width=15px heigth=20px /></div>
                                <div> <img src="./img/instagramIc.png" width=36px heigth=36px /></div>
                            </div>

                        </div>


                    </div>


                    <div class="rightSide">
                    <form action="https://money.yandex.ru/eshop.xml" method="post">
                        <div class="helpboard">
                            <span class="hlpbrdTitle">Сделать пожертвование</span>
                            <div class="boardRow">
                                <div class="numberCol">
                                    <span class="numbCol">1</span>
                                    <span class="amountCol">СУММА</span>
                                </div>
                                <div class="boardGap"></div>
                                <div class="numberCol">
                                    <span class="numbCol">2</span>
                                    <span class="amountCol">КОНТАКТЫ</span>
                                </div>
                                <div class="boardGap"></div>
                                <div class="numberCol">
                                    <span class="numbCol">3</span>
                                    <span class="amountCol">ОПЛАТА</span>
                                </div>
                            </div>
                            <div class="periodblock">
                                <button>ЕЖЕМЕСЯНОЕ</button>
                                <button>РАЗОВОЕ</button>
                            </div>
                            <div class="sumblock">
                                <div class="sumRow">
                                    <div class=item>

                                        <div class="amountAndLogo"> <span> 100</span>
                                            <img src="./img/RubleIcon.png" width=14px heigth=21px />

                                        </div>
                                    </div>
                                    <div class=item>

                                        <div class="amountAndLogo"> <span> 200</span>
                                            <img src="./img/RubleIcon.png" width=14px heigth=21px />

                                        </div>
                                    </div>
                                    <div class=item>

                                        <div class="amountAndLogo"> <span> 500</span>
                                            <img src="./img/RubleIcon.png" width=14px heigth=21px />

                                        </div>
                                    </div>
                                    <div class=item>

                                        <div class="amountAndLogo"> <span> 1500</span>
                                            <img src="./img/RubleIcon.png" width=14px heigth=21px />

                                        </div>
                                    </div>
                                    <div class=item>

                                        <div class="amountAndLogo"> <span> 2000</span>
                                            <img src="./img/RubleIcon.png" width=14px heigth=21px />

                                        </div>
                                    </div>
                                    <div class=item>

                                        <div class="amountAndLogo"> <span> 10000</span>
                                            <img src="./img/RubleIcon.png" width=14px heigth=21px />

                                        </div>
                                    </div>
                                    <div class=item>

                                        <div class="amountAndLogo"> <span> 150000</span>
                                            <img src="./img/RubleIcon.png" width=14px heigth=21px />

                                        </div>
                                    </div>
                                    
                                        <div class=item>
                                            <input type="text" id="anothersumm" placeholder="Другая сумма"
                                            
                                                name="anothersumm">

                                        </div>
                                    
                                </div>
                            </div>
                            <div class="continuepay"> <button>ПРОДОЛЖИТЬ</button></div>
                        </div>                   
                        <span class="underHelpBoard">Информационаая поддержка тоже очень важна!</span>
                        <input type="hidden" name="shopId" value="729211">
                        <input type="hidden" name="scid" value="145474">
                        <input type="hidden" name="sum" id="sum" value="0">
                        <input type="hidden" name="customerNumber" value="Благотворительный платёж">
                        <input type="hidden" name="orderNumber" value="<?php echo str_replace('.','',microtime(true)); ?>">
                    </form>
                    </div>
                </div>
            </div>
            <div class="partnersBlockGr">
                <span class="howWeHelpTitle">С нами сотрудничают</span>
                <div class="partnersWrappeGr">
                    <div class="partnersItemGr logoNadejda">
                        <span> Надежда махачкала </span>
                    </div>
                    <div class="partnersItemGr logoHome">
                        <span> Фонд Дом доброты</span>
                    </div>
                    <div class="partnersItemGr logoSirat">
                        <span> Сират махачкала </span>
                    </div>
                    <div class="partnersItemGr logoLekki">
                        <span> Лекки ЮЖДАГ </span>
                    </div>
                    <div class="partnersItemGr logoZakyat">
                        <span> Закят - Москва</span>
                    </div>
                    <div class="partnersItemGr logoIhsan">
                        <span> Фонд Ихсан </span>
                    </div>
                    <div class="partnersItemGr logoKdl">
                        <span> КДЛ - Ингушетия </span>
                    </div>
                    <div class="partnersItemGr logoLife">
                        <span> Жизнь как чудо Москва </span>
                    </div>
                </div>
            </div>
            <div class="anyQstnsBlock">
                <span class="anyqstnTitle"> Остались вопросы? </span>
                <span class="anyqstnunder">Оставьте ваш номер телефона и мы вам перезвоним, чтобы дать подробную
                    информацию </span>
                <div class="anyqstnformblock">
                    <!-- <form action="/i_doctor" class="anyqstnform" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="i_fio" placeholder="Введите имя">
                        <input type="text" name="i_phone" placeholder="+7___ ___ __ __">
                        <input type="text" name="i_email" placeholder="Ваш Email">
                        <input type="submit" value="Позвоните мне">
                  </form> -->
                    <form id="mail-form" class="form-inline" method="post">
                        <div class="formfields">
                            <input type="text" id="name" placeholder="Имя" name="name" required>
                            <input type="text" id="phone" placeholder="Телефон" name="phone" required>
                            <input type="email" id="eml" placeholder="Email" name="eml">
                            <button type="button" id="sendmail" class="wantHelpButton" disabled>
                                <span class="wantHelpButtonText">Получить консультацию</span>
                                <span class="wantHelpButtonText2">Отправить</span>
                                <div class="triangle"></div>
                            </button>
                        </div>
                        <div class="checkAgreement">
                            <input type="checkbox" id="agree">
                            <span>Я согласен с условиями обработки </span> <span>персональных данных</span>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </section>
    </main>
    <footer>
        <span class="tellAboutUS"> Расскажите о нас своим друзьям</span>
        <div class="socialIcons">
            <div class="whatsapp"> <img src="./img/whatsapp.png" width=20px heigth=20px /></div>
            <div class="telegram"> <img src="./img/tlgr.png" width=35px heigth=350px /></div>
            <div class="facebook"> <img src="./img/f.png" width=15px heigth=20px /></div>
            <div> <img src="./img/instagramIc.png" width=36px heigth=36px /></div>
        </div>
        <div class="botNav">
            <div class="logoSection">
                <img src="img/logo.png" />
                <span>Врачи <br />
                    надежды</span>
            </div>
            <div class="rightbotNav">
                <div class="upbtns">
                    <li class="menuButtons">
                        <a href="#"><span>НКО</span></a>
                    </li>
                    <li class="menuButtons">
                        <a href="#"><span>Врачи</span></a>
                    </li>
                </div>
                <ul>
                    <div class="menuLinks">
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.block-aboutus`).offset().top}, 500);">О
                                Нас</a></li>
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.block-how-works`).offset().top}, 500);">Как
                                мы помогаем</a></li>
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.numbs`).offset().top}, 500);">Показатели</a>
                        </li>
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.patientsHistory`).offset().top}, 500);">Истории</a>
                        </li>
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.whyHelpBlock`).offset().top}, 500);">Благотворители</a>
                        </li>
                        <li><a class="menu__links-item" href="#"
                                onclick="$('html, body').animate({scrollTop: $(`.anyQstnsBlock`).offset().top}, 500);">Контакты</a>
                        </li>
                    </div>



                </ul>

            </div>
        </div>

    </footer>

    <script type="text/javascript">
        var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            }
        })
        var btn = document.querySelector(".hamburger")
        btn.addEventListener('click', () => {
            document.body.addEventListener('touchstart', function (e) { e.preventDefault(); });
            document.body.style.overflow = 'hidden';
            document.querySelector("body > div.navdrawr").style.transform = "translateX(0)";
        })

        $('.navdrawheader, img').click(function () {
            $('html, body').css('overflowY', 'auto');
            $('.navdrawr').css('transform', 'translateX(-100%)');
        });
    </script>
    <!--  -->
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#mail-form #agree').on('change', function() { //устанавливаем событие отправки для формы с id=form  
                if ($('#mail-form #agree').is(':checked')) {
                    $("#mail-form #sendmail").prop('disabled',false) 
                } else { 
                    $("#mail-form #sendmail").prop('disabled',true) 
                }
            })

            $("#mail-form #sendmail").on('click', function() { //устанавливаем событие отправки для формы с id=form
                //e.preventDefault()
                var form_data = $(this).serialize(); //собераем все данные из формы
                $.ajax({
                    type: 'POST', //Метод отправки
                    url: '/mail/mailsender.php', //путь до php фаила отправителя
                    data: form_data,
                            success: function(data){ // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
                            //alert(JSON.stringify(data));
                            alert('Ваше сообщение отпрвлено!'); // пoкaжeм eё тeкст
                        }
                });
            });
        });    
    </script>
    <!-- <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script> -->
</body>

</html>