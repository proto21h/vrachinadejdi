'use strict'
const Hello = () => {
      let names = ["Средний стаж 7 лет", "Вторая строчка 2", "Третья строчка 3"]
      return <React.Fragment>
            {
                  names.map(name => <li>
                        <div class='undernumslide'>
                              <div class='redstar'>
                                    <div class='redpoint'></div>
                              </div>
                              <div class="descr">
                                    <span class="helptitle">
                                          {name}
                                    </span>
                              </div>
                        </div>
                  </li>)}
      </React.Fragment>
}
ReactDOM.render(<Hello />, document.getElementById('selection-list'))
let names = [{ title: "Подробно изучаем каждый клинический случай", description: "Наша цель найти главную причину заболевания." }, { title: "Составляем план обследования", description: "С применением самых точных методов диагностики." }, { title: "Созываем консилиум Врачей", description: "Для постановки диагноза и оценки состояния пациента." }, { title: "Выдаём подробную карту лечения", description: "Установленной причины заболевания." }, { title: "Находим медицинский центр", description: "С опытом излечения этой болезни – в России или за границей." }, { title: "Отправляем пациента лечиться", description: "В клинику, в которой его уже ждут и где ему действительно помогут." }]
const Lello = ({ names }) => {

      return <React.Fragment>
            {
                  names.map(name => <li>
                        <div class='undernumslide'>
                              <div class='redstar'>
                                    <div class='redpoint'></div>
                              </div>
                              <div class="descr">
                                    <span class="helptitle">
                                          {name.title}
                                    </span>
                                    <span class="helpdescr">{name.description}</span>
                              </div>
                        </div>
                  </li>)}
      </React.Fragment>
}
ReactDOM.render(<Lello names={names} />, document.getElementById('helplist'))
const AboutDoctor = () => {
      const [state, setState] = React.useState({
            doctors: [{
                  position: "Невропатолог",
                  fio: "Алиев Али Шамильевич",
                  opit: "Опыт работы: 10 лет",
                  education: "семантический разбор внешних противодействий создаёт предпосылки для поставленных обществом задач."
            }, {
                  position: "Уролог",
                  fio: "Алиев Али Шамильевич",
                  opit: "Опыт работы: 30 лет",
                  education: "медакадемия"
            }, {
                  position: "Терапевт",
                  fio: "Алиев Гусейн Шамильевич",
                  opit: "Опыт работы: 15 лет",
                  education: "дгу"
            }]
      })
      return <React.Fragment>
            {state.doctors.map(doctor => <div class="swiper-slide">
                  <div class="row">
                        <img src="./img/face.png" alt="" />
                        <div class="doctorinfo">
                              <span class="position">{doctor.position}</span>
                              <span class="fio">{doctor.fio}</span>
                              <span class="opit">{doctor.opit}</span>
                              <span class="education"><span>Образование:</span> {doctor.education}</span>
                        </div>

                  </div>
                  <span class="educationmob"><span>Образование:</span> {doctor.education}</span>
            </div>)}
      </React.Fragment>
}
ReactDOM.render(<AboutDoctor />, document.getElementById('doctorinfo'))
var mySwiper = new Swiper('.swiper-container', {
      loop: true,
      watchOverflow: true,

      pagination: {
            el: '.swiper-pagination',
      },
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
      },
      scrollbar: {
            el: '.swiper-scrollbar',
      },
})
const InOurTeam = () => {
      let team = [{ img: "./img/neuro.png", position: "Хирург" }, { img: "./img/logoped.png", position: "Невропатолог" }, { img: "./img/hirurg.png", position: "Логопед" }, { img: "./img/neuro.png", position: "Отоларинголог", }, { img: "./img/logoped.png", position: "Нейрохирург", }, { img: "./img/hirurg.png", position: "Травматолог" }, { img: "./img/neuro.png", position: "Психолог" }, { img: "./img/logoped.png", position: "Уролог" }, { img: "./img/hirurg.png", position: "Рентгенолог" }]
      return <React.Fragment>
            {team.map(doctor => <div class="item">
                  <img
                        src={doctor.img}
                        alt=""
                        width="60px"
                        height="60px"
                  />
                  <span>{doctor.position}</span>
            </div>)}
      </React.Fragment>
}
ReactDOM.render(<InOurTeam />, document.getElementById('container'))
let list = ["Урологи", "Педиатры", "Ортопеды-травматологи", "Гинекологи", "Урологи", "Неврологи", "Отолорингологи", "Инфекционисты", "Ортопеды-травматологи"]
const WeNeedList = () => {
      return <React.Fragment>
            {list.map(position => <div class='undernumslide'>
                  <div class='redstar'>
                        <div class='redpoint'></div>
                  </div>
                  <span class="helptitle">
                        {position}
                  </span>

            </div>
            )}
      </React.Fragment>
}
ReactDOM.render(<WeNeedList names={list} />, document.getElementById('we-need-list'))
