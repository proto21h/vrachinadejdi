<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./normalize.css">
      <link rel="stylesheet" href="./styles.css">
      <link rel="stylesheet" href="./styles.mob.css">
      <link rel="stylesheet" href="./menu.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
      <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script src="./js/jquery.js"></script>
      <script src="./js/select2.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
      <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
      <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
      <title>Document</title>
</head>

<body>
      <div class="navdrawr">

            <div class="navdrawheader">
                  <a href="/"> <span>Врачи надежды</span></a>

                  <img src="./img/close.png" alt="close" />
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
                              <a href="/"> <img src="img/logo.png" /></a>

                              <span>Врачи <br />
                                    надежды</span>
                        </div>
                        <ul>
                              <div class="menuLinks">
                                    <li><a class="menu__links-item" href="#"
                                                onclick="$('html, body').animate({scrollTop: $(`.underNavBlock`).offset().top-100}, 500);">Кто
                                                мы</a></li>
                                    <li><a class="menu__links-item" href="#"
                                                onclick="$('html, body').animate({scrollTop: $(`#howhelp`).offset().top-100}, 500);">Как
                                                мы помогаем</a></li>
                                    <li><a class="menu__links-item" href="#"
                                                onclick="$('html, body').animate({scrollTop: $(`#pokazateli`).offset().top-100}, 500);">Показатели</a>
                                    </li>
                                    <li><a class="menu__links-item" href="#"
                                                onclick="$('html, body').animate({scrollTop: $(`#blago-li`).offset().top-100}, 500);">Благотворители</a>
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
                                          <a href="#"><span>Врачи</span></a>
                                    </li>
                              </div>
                        </ul>

                  </nav>
            </header>
      </div>
      <main class="mainContent">
            <div class="invitation">
                  <div class="text">
                        <span class="title">
                              Приглашаем Врачей с <span>Живым сердцем</span> в команду!
                        </span>
                        <span class="undertitle">
                              Врачи Надежды – это волонтёрское сообщество медицинских экспертов со всей России. <span>Мы
                                    помогаем
                                    установить диагноз, составить план лечения и найти клинику.</span>
                        </span>
                        <button>
                              <span>Посмотрите видео</span><span class="becomedoctor">Стать Врачем Надежды</span>
                              <div class="tri"></div>
                        </button>
                        <span class="underButton">
                              Без отрыва от основной деятельности
                        </span>
                  </div>
                  <img src="./img/Врачи.svg">
            </div>
            <span id="howhelp" class="title">Как помогают Врачи Надежды</span>
            <span class="undertitle2">Тысячи подопечных Благотворительных Фондов нуждаются в квалифицированной
                  диагностике,
                  внимательном отношении к истинной причине болезни, а также в экспертном подборе клиник, в которых
                  действительно вылечат.</span>
            <div class="howhelp">
                  <div class="video">
                        <iframe src="https://www.youtube.com/embed/Dw-RIuz3_X8" frameborder="0"
                              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen width="516px" height="328px"></iframe>
                        <button>
                              <span>Посмотрите видео</span>
                              <div class="tri"></div>
                        </button>
                  </div>
                  <ul id="helplist" class="description">
                  </ul>
            </div>
            <div class="selection">
                  <div class="leftselection">
                        <span class="title">
                              Тщательно отбираем врачей в команду
                        </span>

                        <ul id="selection-list" class="selection-list"></ul>
                  </div>
                  <div class="swiper-container">
                        <div id="doctorinfo" class="swiper-wrapper"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"><img src="./img/Vector.png" alt="" /></div>
                        <div class="swiper-button-next"><img src="./img/Next.png" alt="" /></div>
                  </div>
            </div>
            <div class="inourteam">
                  <span class="title">В нашей команде уже 87 врачей</span>
                  <span class="undertitle">В составе нашего проекта только действующие специалисты доказательной
                        медицины, работающие в системе здравоохранения. </span>
                  <div id="container" class="container"></div>
            </div>
            <div class="joinus">
                  <button>
                        <span>Присоединяйтесь к нам</span>
                        <div class="tri"></div>
                  </button>
            </div>
            <div class="who-we-need">
                  <span class="title">Кто сейчас нам нужен в команду</span>
                  <span class="undertitle">Приглашаем врачей всех профилей,<span>но особенно в команде сейчас
                              нужны:</span> </span>
                  <div id="we-need-list" class="we-need-list"></div>
                  <span class="lastext">Людей, которые готовы профессионально, но при этом душевно и внимательно
                        помогать другим –
                        независимо от их социального статуса и тяжести заболевания.</span>
                  <div class="joinus">
                        <button>
                              <span>Оставить заявку</span>
                              <div class="tri"></div>
                        </button>
                  </div>
            </div>
            <div id="pokazateli" class="results"><span class="title">Наши показатели</span>
                  <span class="title">Наша работа в цифрах</span>
                  <span class="undertitle">Но мы не только оказываем экспертную помощь – а вселяем даже в самых тяжёлых
                        пациентов – Надежду</span>
                  <span class="undertitlemob">С 2017 года<span style="color: #367BF5;">"Врачи Надежды"</span></span>
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
                  <div class="numbs">
                        <div class="swiper-container">
                              <div class="swiper-wrapper">
                                    <div class="swiper-slide"> <img src="./img/3years.png" /></div>
                                    <div class="swiper-slide"> <img src="./img/2750.png" /></div>
                                    <div class="swiper-slide"><img src="./img/7funds.png" /></div>
                                    <div class="swiper-slide"><img src="./img/89doctors.png" /></div>
                              </div>
                              <div class="swiper-pagination"></div>
                        </div>
                  </div>
                  <ul class="after-numbersmob">
                        <li>
                              <span>3 Года помогаем</span>
                        </li>
                        <li>
                              <span>2750 Человек получили медицинскую помощь</span>
                        </li>
                        <li>
                              <span>89 Врачей с <span class="life-hearts">живыми сердцами</span> по всей стране</span>
                        </li>
                        <li>
                              <span>В Росии 7 фондов работают с нами</span>
                        </li>
                  </ul>
            </div>
            <div class="helpToWork">
                  <div class="rowToWork">
                        <div class="descrToWork">
                              <span>Волонтёрская организация Врачи Надежды бесплатно помогает подопечным
                                    Благотворительных
                                    Фондов. Мы содействуем пациентам в диагностике изначальной причины заболевания и
                                    поиске
                                    адекватного лечебного учреждения.</span>
                              <p></p> <span>Ваша помощь пойдёт на текущие затраты по подопечным, а также на рост
                                    проекта:
                                    мы постоянно увеличиваем штат врачей-волонтёров, развиваем мобильную платформу
                                    HopeDoc
                                    для оперативного обмена информацией и проведения онлайн-консилиумов.</span> <span
                                    class="helpTohelp">Помогите нам помогать! </span>
                              <span class="tellAboutUS"> Расскажите о нас своим друзьям</span>
                              <div class="socialIconsBlock">

                                    <div class="socialIcons">
                                          <div class="whatsapp"> <img src="./img/whatsapp.png" width=20px heigth=20px />
                                          </div>
                                          <div class="telegram"> <img src="./img/tlgr.png" width=35px heigth=35px />
                                          </div>
                                          <div class="facebook"> <img src="./img/f.png" width=15px heigth=20px /></div>
                                          <div> <img src="./img/instagramIc.png" width=36px heigth=36px /></div>
                                    </div>

                              </div>


                        </div>
                        <div class="rightSide">
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
                        </div>
                  </div>
            </div>
            <span id="partners" class="partners-title">С нами сотрудничают</span>
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
            <div id="blago-li" class="nko-titles">
                  <span class="nko-title">Руководители НКО о сотрудничестве с нами</span>
                  <span class="nko-title">Кто помогает деятельности проектa ?</span>
            </div>

            <div id="nko" class="nko"></div>
            <div class="nko-slides">
                  <div class="swiper-container">
                        <div id="nko-slide" class="swiper-wrapper"></div>
                        <div class="swiper-pagination"></div>
                  </div>
            </div>
            <!-- <div class="history">
                  <span class="title">Истории наших подопечных</span>
                  <span class="undertitle">За проиденный период это было нелегко но как говрится глаза боятся, а руки
                        делают</span>
                  <div id="patients" class="patients"></div>
                  <div class="patients-slide">
                        <div class="swiper-container">
                              <div id="patient-slide" class="swiper-wrapper"></div>
                              <div class="swiper-pagination"></div>
                        </div>
                  </div>
            </div> -->
            <div class="how-become">
                  <span class="title">Как стать Врачем Надежды?</span>
                  <span class="undertitle">Мы будем рады видеть в команде проекта Врачи Надежды действующих специалистов
                        доказательной медицины, которые в данный момент работают в системе здравоохранения РФ <span
                              class="diplom">
                              (потребуются дипломы и сертификаты соответствия).
                        </span>
                  </span>
                  <div class="container">
                        <div id="become-list" class="become-list"> </div>
                        <div class="form">
                              <span class="form-title">Пожалуйста, заполните эти поля</span>
                              <div class="form-container">
                                    <input type="text" placeholder="Полное ФИО">
                                    <input type="text" placeholder="Полное ФИО">
                                    <input type="text" placeholder="Специальность:">
                                    <input type="text" placeholder="Номер телефона:">
                                    <input type="text" placeholder="Адрес электронной почты:">
                                    <input type="text" placeholder="Город, где вы работаете:">
                              </div>
                              <button>
                                    <span>Оставить заявку</span>
                                    <div class="tri"></div>
                              </button>
                              <div class="agreement">
                                    <input type="checkbox">
                                    <span class="agreement-text">
                                          Я согласен с условиями <span>обработки персональных данных</span>
                                    </span>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="all-answers">
                  <span class="title">Все ответы о «Врачах Надежды»</span>
                  <div id="answers" class="answers"> </div>
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
                        <form action="/vrachi.php" class="form-inline" method="post">
                              <div class="formfields">
                                    <input type="text" id="name" placeholder="Имя" name="name">
                                    <input type="text" id="phone" placeholder="Телефон" name="phone">
                                    <input type="email" id="eml" placeholder="Email" name="eml">
                                    <button type="Submit" class="wantHelpButton">
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
      </main>
      <script type="text/babel" src="./js/doctors.js"></script>
</body>
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
                                          onclick="$('html, body').animate({scrollTop: $(`.underNavBlock`).offset().top-100}, 500);">Кто
                                          мы</a></li>
                              <li><a class="menu__links-item" href="#"
                                          onclick="$('html, body').animate({scrollTop: $(`#howhelp`).offset().top-100}, 500);">Как
                                          мы помогаем</a></li>
                              <li><a class="menu__links-item" href="#"
                                          onclick="$('html, body').animate({scrollTop: $(`#pokazateli`).offset().top-100}, 500);">Показатели</a>
                              </li>
                              <li><a class="menu__links-item" href="#"
                                          onclick="$('html, body').animate({scrollTop: $(`#blago-li`).offset().top-100}, 500);">Благотворители</a>
                              </li>
                              <li><a class="menu__links-item" href="#"
                                          onclick="$('html, body').animate({scrollTop: $(`.anyqstnTitle`).offset().top}, 500);">Контакты</a>
                              </li>
                        </div>



                  </ul>

            </div>
      </div>

</footer>


</html>