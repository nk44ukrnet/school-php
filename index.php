<?php
$title = "INVENTOR початкова школа";
$desc = "INVENTOR початкова школа - це школа, де використовують передові STEM-технології у навчанні дітей від 6 до 10 років. За час навчання діти стають частиною STEM-спільноти та долучаються до участі у Міжнародних змаганнях.";
?>

<?php include 'inc/header.php'; ?>

    <main>
        <section class="hero">
            <div class="hero__wrapper">
                <div class="hero__container">
                    <h1>Ліцензована школа</h1>
                    <h2>
                        для дітей 6 – 10 років з освітньою
                        <br>
                        технологією STEM
                    </h2>
                    <a href="#!" class="btn offer-btn" data-modal-id="modalOffer">Дізнатись більше</a>
                </div>
            </div>
        </section>

        <section class="advantages">
            <div class="advantages__wrapper">
                <div class="advantages__container">
                    <h3>Наші переваги:</h3>
                    <div class="advantages__grid">
                        <div class="advantages__grid-item">
                            <div class="inner">
                                <div class="side-text">
                                    <h4>Принципи навчального процесу</h4>
                                    <p>
                                        Ми обрали освітні програми НУШ – школа, в якій комфортно вчитись і яка дасть
                                        учням не зайві знання, а й практичні навички застосування знань у повсякденному
                                        житті, нову школу, де навчать мислити критично, проводити власні експерименти та
                                        вільно висловлювати власну думку.
                                    </p>
                                </div>
                                <div class="side-img">
                                    <img src="img/fhd_boy1.png" alt="advantages">
                                </div>
                            </div>
                        </div>
                        <div class="advantages__grid-item">
                            <div class="inner">
                                <div class="side-text">
                                    <h4>STEM- <br>
                                        освіта</h4>
                                    <p>
                                        В нашому навчальному розкладі ми обов’язково додаємо STEM-курс, розроблений саме
                                        для мережі наших шкіл.
                                        STEM-підхід до навчання означає, що наукові явища пояснюють завдяки простій
                                        візуалізації, дослідам, практичним завданням, аби учень не лише знав, а й
                                        розумів процеси. Робототехніка, програмування, проєктна діяльність – все це є в
                                        навчальній програмі.
                                    </p>
                                </div>
                                <div class="side-img">
                                    <img src="img/fhd_boy2.png" alt="advantages">
                                </div>
                            </div>
                        </div>
                        <div class="advantages__grid-item">
                            <div class="inner">
                                <div class="side-text">
                                    <h4>
                                        Навчання <br> через гру
                                    </h4>
                                    <p>
                                        Ми застосовуємо природну особливість дитячого розвитку – пізнавати світ у грі,
                                        створювати реальні речі й одночасно набувати знань.
                                        Через гру діти формують м‘які навички, які допомагають їм впевнено дивитися в
                                        майбутнє.
                                        М’які навички універсальні та допомагають досягти успіху в будь-якій професії,
                                        передбачають високі комунікаційні здібності та самоорганізацію, вміння
                                        довгострокового планування, командну роботу. Вчені з Гарварду та Стенфорду
                                        запевняють, що професійний успіх на 85% залежить саме від м‘яких навичок - soft
                                        skills.
                                    </p>
                                </div>
                                <div class="side-img">
                                    <img src="img/fhd_boy3.png" alt="advantages">
                                </div>
                            </div>
                        </div>
                        <div class="advantages__grid-item">
                            <div class="inner">
                                <div class="side-text">
                                    <h4>Наявність <br>
                                        укриття</h4>
                                    <p>
                                        Для учасників навчального процесу підготовлені безпечні укриття,
                                        які відповідають всім вимогам.
                                    </p>
                                </div>
                                <div class="side-img">
                                    <img src="img/save-place1.png" alt="advantages">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="choose">
            <div class="choose__wrapper">
                <div class="choose__container">
                    <h2>Чому нас обирають</h2>
                    <div class="choose__content">
                        <div class="choose__item">
                            <div class="choose__inner">
                                <h3>Школа для творців змін </h3>
                                <p>
                                    INVENTOR SCHOOL – це унікальна можливість <br>
                                    надихнути дитину й подарувати їй <br>
                                    задоволення від пізнання.
                                </p>
                            </div>
                        </div>
                        <div class="choose__item" data-modal-id="modalPrograms">
                            <div class="choose__inner" data-modal-id="modalPrograms">
                                <h3 data-modal-id="modalPrograms">Навчальні <br> програми </h3>
                            </div>
                        </div>
                        <div class="choose__item" data-modal-id="modalParticipation">
                            <div class="choose__inner" data-modal-id="modalParticipation">
                                <h3 data-modal-id="modalParticipation">Участь у <br>
                                    міжнародних <br>
                                    конкурсах
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="team" style="display: none;">
            <div class="team__wrapper">
                <div class="team__content">
                    <h2>Команда</h2>
                    <div class="team__container" id="teamContainer"></div>
                    <div class="team__expand" id="teamExpand">усі викладачі</div>
                </div>
            </div>
        </section>

        <section class="packages">
            <div class="content_size">
                <div class="packages__holder">
                    <div class="packages__item">
                        <div class="packages__cell packages__cell_highlight">10 000 грн./місяць</div>
                        <div class="packages__cell"><strong>1 клас</strong></div>
                        <div class="packages__cell">Щорічний внесок 10 000 грн.</div>
                        <div class="packages__cell">Перебування у школі неповний навчальний день з 8:00 до 14:15</div>
                        <div class="packages__cell">Для учасників навчального процесу підготовлені безпечне укриття, яке
                            відповідає всім вимогам
                        </div>
                        <div class="packages__cell">Класи не більше 12 учнів</div>
                        <div class="packages__cell">Електронне освітнє середовище "1 учень – 1 iPad"</div>
                        <div class="packages__cell">Освітні програми НУШ</div>
                        <div class="packages__cell">Високотехнологічне сучасне оснащення школи</div>
                        <div class="packages__cell">Робототехніка, Основи механіки, Програмування</div>
                        <div class="packages__cell">Курс "Творче конструювання"</div>
                        <div class="packages__cell">Додатковий курс "Розвиток продуктивного мислення"</div>
                        <div class="packages__cell">Медичний супровід</div>
                        <div class="packages__cell">Психологічний супровід</div>
                        <div class="packages__cell">Позаурочне дозвілля</div>
                        <div class="packages__cell">Охорона, відеоспостереження</div>
                        <div class="packages__cell packages__cell_highlight">Сплачується додатково</div>
                        <div class="packages__cell">Спеціалізоване дитяче харчування за вибором</div>
                        <div class="packages__cell">Група продовженого дня</div>
                        <div class="packages__cell">STEM-курси</div>
                        <div class="packages__cell">Підготовка до міжнародних програма <br>
                            World Robot Olympiad та FIRST LEGO League
                        </div>
                        <div class="packages__cell"><a href="#!" class="btn offer-btn" data-modal-id="modalOffer">Записатись</a>
                        </div>
                    </div>
                    <div class="packages__item">
                        <div class="packages__cell packages__cell_highlight">10 000 грн./місяць</div>
                        <div class="packages__cell"><strong>2 клас</strong></div>
                        <div class="packages__cell">Щорічний внесок 10 000 грн.</div>
                        <div class="packages__cell">Перебування у школі неповний навчальний день з 8:00 до 14:15</div>
                        <div class="packages__cell">Власне бомбосховище з можливістю продовження навчального процесу</div>
                        <div class="packages__cell">Класи не більше 12 учнів</div>
                        <div class="packages__cell">Електронне освітнє середовище "1 учень – 1 iPad"</div>
                        <div class="packages__cell">Освітні програми НУШ</div>
                        <div class="packages__cell">Високотехнологічне сучасне оснащення школи</div>
                        <div class="packages__cell">Поглиблене вивчення англійської мови</div>
                        <div class="packages__cell">Поглиблене вивчення української мови і літератури за авторською методикою</div>
                        <div class="packages__cell">Робототехніка, Основи механіки, Програмування</div>
                        <div class="packages__cell">Медичний супровід</div>
                        <div class="packages__cell">Психологічний супровід</div>
                        <div class="packages__cell">Охорона, відеоспостереження</div>
                        <div class="packages__cell packages__cell_highlight">Сплачується додатково</div>
                        <div class="packages__cell">Спеціалізоване дитяче харчування за вибором</div>
                        <div class="packages__cell">Група продовженого дня</div>
                        <div class="packages__cell">STEM-курси</div>
                        <div class="packages__cell">Підготовка до міжнародних програма <br>
                            World Robot Olympiad та FIRST LEGO League
                        </div>
                        <div class="packages__cell"><a href="#!" class="btn offer-btn" data-modal-id="modalOffer">Записатись</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="schedule">
            <div class="content_size">
                <h2 class="heading-primary">Розклад</h2>
                <table style="border-collapse: collapse; width: 767pt;" width="1023">
                    <colgroup>
                        <col style="width: 75pt;" width="100">
                        <col style="width: 144pt;" width="192">
                        <col style="width: 125pt;" width="167">
                        <col style="width: 141pt;" width="188">
                        <col style="width: 131pt;" width="174">
                        <col style="width: 152pt;" width="202">
                    </colgroup>
                    <tbody>
                    <tr style="height: 38.25pt;">
                        <td class="xl71" style="width: 767pt; height: 38.25pt;" colspan="6" width="1023" height="51">
                            Орієнтовний розклад 1 клас
                        </td>
                    </tr>
                    <tr style="height: 18.75pt;">
                        <td class="xl44" style="height: 18.75pt;" height="25">&nbsp;</td>
                        <td class="xl44">Понеділок</td>
                        <td class="xl44">Вівторок</td>
                        <td class="xl44">Середа</td>
                        <td class="xl44">Четвер</td>
                        <td class="xl44">П'ятниця</td>
                    </tr>
                    <tr style="height: 28.5pt;">
                        <td class="xl27" style="height: 28.5pt;" height="38">08:30-09:10</td>
                        <td class="xl28" style="width: 144pt;" width="192">Ранкова зустріч</td>
                        <td class="xl29" style="width: 125pt;" width="167">Ранкова зустріч</td>
                        <td class="xl29" style="width: 141pt;" width="188">Ранкова зустріч</td>
                        <td class="xl29" style="width: 131pt;" width="174">Ранкова зустріч</td>
                        <td class="xl29" style="width: 152pt;" width="202">Ранкова зустріч</td>
                    </tr>
                    <tr style="height: 26.25pt;">
                        <td class="xl30" style="width: 75pt; height: 26.25pt;" width="100" height="35">09:10-09:25</td>
                        <td class="xl31" style="width: 144pt;" width="192">Перерва</td>
                        <td class="xl31" style="width: 125pt;" width="167">Перерва</td>
                        <td class="xl31" style="width: 141pt;" width="188">Перерва</td>
                        <td class="xl31" style="width: 131pt;" width="174">Перерва</td>
                        <td class="xl31" style="width: 152pt;" width="202">Перерва</td>
                    </tr>
                    <tr style="height: 52.5pt;">
                        <td class="xl27" style="height: 52.5pt;" height="70">09:25-10:05</td>
                        <td class="xl32">Математика</td>
                        <td class="xl33">Іноземна мова</td>
                        <td class="xl32">Математика</td>
                        <td class="xl34">Навчання грамоти</td>
                        <td class="xl32">Математика</td>
                    </tr>
                    <tr style="height: 30.75pt;">
                        <td class="xl27" style="height: 30.75pt;" height="41">10:05-10:35</td>
                        <td class="xl35">Сніданок</td>
                        <td class="xl35">Сніданок</td>
                        <td class="xl35">Сніданок</td>
                        <td class="xl35">Сніданок</td>
                        <td class="xl35">Сніданок</td>
                    </tr>
                    <tr style="height: 47.25pt;">
                        <td class="xl27" style="height: 47.25pt;" height="63">10:35-11:15</td>
                        <td class="xl36" style="width: 144pt;" width="192">Навчання грамоти</td>
                        <td class="xl32">Математика</td>
                        <td class="xl33">Іноземна мова</td>
                        <td class="xl34">Навчання грамоти</td>
                        <td class="xl37">Технології/інформатика</td>
                    </tr>
                    <tr style="height: 23.25pt;">
                        <td class="xl27" style="height: 23.25pt;" height="31">11:15-11:30</td>
                        <td class="xl31" style="width: 144pt;" width="192">Перерва</td>
                        <td class="xl31" style="width: 125pt;" width="167">Перерва</td>
                        <td class="xl31" style="width: 141pt;" width="188">Перерва</td>
                        <td class="xl31" style="width: 131pt;" width="174">Перерва</td>
                        <td class="xl31" style="width: 152pt;" width="202">Перерва</td>
                    </tr>
                    <tr style="height: 42.75pt;">
                        <td class="xl27" style="height: 42.75pt;" height="57">11:30-12:10</td>
                        <td class="xl37">Я досліджую світ</td>
                        <td class="xl34">Навчання грамоти</td>
                        <td class="xl34">Навчання грамоти</td>
                        <td class="xl37">Я досліджую світ</td>
                        <td class="xl37">Я досліджую світ</td>
                    </tr>
                    <tr style="height: 36.75pt;">
                        <td class="xl38" style="height: 36.75pt;" height="49">12:10-12:40</td>
                        <td class="xl35">Обід</td>
                        <td class="xl35">Обід</td>
                        <td class="xl35">Обід</td>
                        <td class="xl35">Обід</td>
                        <td class="xl35">Обід</td>
                    </tr>
                    <tr style="height: 51.75pt;">
                        <td class="xl27" style="height: 51.75pt;" height="69">12:40-13:20</td>
                        <td class="xl40" style="width: 144pt;" width="192">Розвиток продуктивного мислення</td>
                        <td class="xl34">Навчання грамоти</td>
                        <td class="xl34">Навчання грамоти</td>
                        <td class="xl70" style="width: 131pt; height: 111.0pt;" rowspan="3" width="174" height="148">
                            Основи робототехніки (1,30 год)<span style="mso-spacerun: yes;">&nbsp;</span></td>
                        <td class="xl39">Мистецтво</td>
                    </tr>
                    <tr style="height: 18.75pt;">
                        <td class="xl38" style="height: 18.75pt;" height="25">13:20-13:35</td>
                        <td class="xl35">Перерва</td>
                        <td class="xl35">Перерва</td>
                        <td class="xl35">Перерва</td>
                        <td class="xl35">Перерва</td>
                    </tr>
                    <tr style="height: 40.5pt;">
                        <td class="xl27" style="height: 40.5pt;" height="54">13:35-14:15</td>
                        <td class="xl42" style="width: 144pt;" width="192">Творче конструювання</td>
                        <td class="xl39">Мистецтво</td>
                        <td class="xl42" style="width: 141pt;" width="188">Творче конструювання</td>
                        <td class="xl42" style="width: 152pt;" width="202">Творче конструювання</td>
                    </tr>
                    </tbody>
                </table>
                <table style="border-collapse: collapse; width: 761pt;" width="1023">
                    <colgroup>
                        <col style="width: 92pt;" width="123">
                        <col style="width: 140pt;" width="186">
                        <col style="width: 125pt;" width="167">
                        <col style="width: 133pt;" width="177">
                        <col style="width: 123pt;" width="164">
                        <col style="width: 148pt;" width="197">
                    </colgroup>
                    <tbody>
                    <tr style="height: 42.0pt;">
                        <td class="xl77" style="width: 761pt; height: 42.0pt;" colspan="6" width="1014" height="56">
                            Орієнтовний розклад 2 клас
                        </td>
                    </tr>
                    <tr style="height: 18.75pt;">
                        <td class="xl44" style="height: 18.75pt;" height="25">&nbsp;</td>
                        <td class="xl44">Понеділок</td>
                        <td class="xl44">Вівторок</td>
                        <td class="xl44">Середа</td>
                        <td class="xl44">Четвер</td>
                        <td class="xl44">П'ятниця</td>
                    </tr>
                    <tr style="height: 30.75pt;">
                        <td class="xl46" style="height: 30.75pt;" height="41">08:30-09:10</td>
                        <td class="xl47" style="width: 140pt;" width="186">Ранкова зустріч</td>
                        <td class="xl48" style="width: 125pt;" width="167">Ранкова зустріч</td>
                        <td class="xl48" style="width: 133pt;" width="177">Ранкова зустріч</td>
                        <td class="xl48" style="width: 123pt;" width="164">Ранкова зустріч</td>
                        <td class="xl48" style="width: 148pt;" width="197">Ранкова зустріч</td>
                    </tr>
                    <tr style="height: 24.0pt;">
                        <td class="xl49" style="width: 92pt; height: 24.0pt;" width="123" height="32">09:10-09:25</td>
                        <td class="xl50" style="width: 140pt;" width="186">Перерва</td>
                        <td class="xl50" style="width: 125pt;" width="167">Перерва</td>
                        <td class="xl50" style="width: 133pt;" width="177">Перерва</td>
                        <td class="xl50" style="width: 123pt;" width="164">Перерва</td>
                        <td class="xl50" style="width: 148pt;" width="197">Перерва</td>
                    </tr>
                    <tr style="height: 39.0pt;">
                        <td class="xl46" style="height: 39.0pt;" height="52">09:25-10:05</td>
                        <td class="xl51">Математика</td>
                        <td class="xl52">Іноземна мова</td>
                        <td class="xl51">Математика</td>
                        <td class="xl53" style="width: 123pt;" width="164">Українська мова та читання</td>
                        <td class="xl51">Математика</td>
                    </tr>
                    <tr style="height: 33.0pt;">
                        <td class="xl46" style="height: 33.0pt;" height="44">10:05-10:35</td>
                        <td class="xl54">Сніданок</td>
                        <td class="xl54">Сніданок</td>
                        <td class="xl54">Сніданок</td>
                        <td class="xl54">Сніданок</td>
                        <td class="xl54">Сніданок</td>
                    </tr>
                    <tr style="height: 51.75pt;">
                        <td class="xl46" style="height: 51.75pt;" height="69">10:35-11:15</td>
                        <td class="xl53" style="width: 140pt;" width="186">Українська мова та читання</td>
                        <td class="xl51">Математика</td>
                        <td class="xl52">Іноземна мова</td>
                        <td class="xl53" style="width: 123pt;" width="164">Українська мова та читання</td>
                        <td class="xl55">Я досліджую світ</td>
                    </tr>
                    <tr style="height: 25.5pt;">
                        <td class="xl46" style="height: 25.5pt;" height="34">11:15-11:30</td>
                        <td class="xl50" style="width: 140pt;" width="186">Перерва</td>
                        <td class="xl50" style="width: 125pt;" width="167">Перерва</td>
                        <td class="xl50" style="width: 133pt;" width="177">Перерва</td>
                        <td class="xl50" style="width: 123pt;" width="164">Перерва</td>
                        <td class="xl50" style="width: 148pt;" width="197">Перерва</td>
                    </tr>
                    <tr style="height: 53.25pt;">
                        <td class="xl46" style="height: 53.25pt;" height="71">11:30-12:10</td>
                        <td class="xl52">Іноземна мова</td>
                        <td class="xl53" style="width: 125pt;" width="167">Українська мова та читання</td>
                        <td class="xl53" style="width: 133pt;" width="177">Українська мова та читання</td>
                        <td class="xl55">Я досліджую світ</td>
                        <td class="xl55">Інформатика</td>
                    </tr>
                    <tr style="height: 36.75pt;">
                        <td class="xl56" style="height: 36.75pt;" height="49">12:10-12:40</td>
                        <td class="xl54">Обід</td>
                        <td class="xl54">Обід</td>
                        <td class="xl54">Обід</td>
                        <td class="xl54">Обід</td>
                        <td class="xl54">Обід</td>
                    </tr>
                    <tr style="height: 48.75pt;">
                        <td class="xl46" style="height: 48.75pt;" height="65">12:40-13:20</td>
                        <td class="xl55">Я досліджую світ</td>
                        <td class="xl53" style="width: 125pt;" width="167">Українська мова та читання</td>
                        <td class="xl53" style="width: 133pt;" width="177">Українська мова та читання</td>
                        <td class="xl74" style="width: 123pt; height: 126.75pt;" rowspan="3" width="164" height="169">
                            Основи робототехніки (1,30 год)<span style="mso-spacerun: yes;">&nbsp;</span></td>
                        <td class="xl57">Мистецтво</td>
                    </tr>
                    <tr style="height: 23.25pt;">
                        <td class="xl56" style="height: 23.25pt;" height="31">13:20-13:35</td>
                        <td class="xl54">Перерва</td>
                        <td class="xl54">Перерва</td>
                        <td class="xl54">Перерва</td>
                        <td class="xl54">Перерва</td>
                    </tr>
                    <tr style="height: 54.75pt;">
                        <td class="xl46" style="height: 54.75pt;" height="73">13:35-14:15</td>
                        <td class="xl58" style="width: 140pt;" width="186">Розвиток продуктивного мислення</td>
                        <td class="xl57">Мистецтво</td>
                        <td class="xl59" style="width: 133pt;" width="177">Технології</td>
                        <td class="xl60" style="width: 148pt;" width="197">Творче конструювання</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="feedback">
            <div class="feedback__wrapper">
                <div class="feedback__container">
                    <h2>Залишилися запитання?</h2>
                    <div class="feedback__content">
                        <form class="form-offer" name="offer-ask">
                            <div class="inner">
                                <div class="side">
                                    <input type="text" required placeholder="ім’я (обов’язково)" name="name_submit_hidden">
                                    <input type="email" required placeholder="еmail (обов’язково)" name="email_submit_hidden">
                                    <input type="tel" required placeholder="телефон (обов’язково)" name="phone_submit_hidden">
                                    <input type="number" required placeholder="Вік дитини (обов’язково)" name="age_submit_hidden">
                                    <select name="selec_school" class="schools-list">
                                        <option value="" selected disabled>Оберіть школу</option>
                                    </select>
                                </div>
                                <div class="side">
                                    <textarea name="message" placeholder="текст запитання"></textarea>
                                </div>
                            </div>
                            <input type="submit" name="send" value="Запитати" class="submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!--POP UP SELECT SCHOOL + SCRIPT-->
    <div class="index-overlay" id="visitorChooseSite">
        <div class="index-overlay__container">
            <div class="index-overlay__container__item">
                <!--                <img src="img/popup-i1.png" alt="School">-->
                <img src="https://school.inventorschool.org.ua/wp-content/themes/inventor2/img/kids-walking.jpg"
                     alt="School">
                <div class="index-overlay__container__item-text">
                    <h6>Школа повного дня Inventor School на Осокорках</h6>
                    <p>
                        Це школа для учнів 1-12 класів, де дитина проводить цілий день: відвідує заняття, харчується,
                        робить
                        домашні завдання, займається спортом, ходить на факультативи i спілкується зі своїм ментором.
                        Тут за
                        допомогою педагогів діти готуються до вступу до найкращих ВНЗ України та світу.
                    </p>
                    <div class="index-overlay__container__item-a-holder">
                        <a href="//school.inventorschool.org.ua" class="index-overlay__container__item-a">Сайт
                            школи
                            повного
                            дня</a></div>
                </div>
            </div>
            <div class="index-overlay__container__item">
                <img src="https://school.inventorschool.org.ua/wp-content/themes/inventor2/img/about-screen1-i2a.png"
                     alt="School">
                <div class="index-overlay__container__item-text">
                    <h6>Початкові STEM-школи неповного дня на Осокорках, Позняках, Нивках, Оболоні</h6>
                    <p>
                        Це ліцензовані початкові школи неповного дня для дітей 6-10 років. Тут ми також використовуємо
                        STEM-підхід, але додаємо програму початкової школи. Дитина проводить у школі половину дня і
                        вчиться
                        загальноосвітнім предметам через гру, власні проєкти і дискусії. Таких шкіл у нас 4, усі в
                        Києві.
                    </p>
                    <div class="index-overlay__container__item-a-holder">
                        <a href="#!" class="index-overlay__container__item-a" id="visitorCurrentSite">Сайт школи
                            неповного дня</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //set for 3 day localstorage and dont show popUp if clicked on school not full day btn
        /*let currentTime = new Date().getTime(),
            timePlusDays = new Date(currentTime + (3 * 86400000)).getTime();

        if (localStorage.getItem('popUpLifeTime')) {
            let storageItem = localStorage.getItem('popUpLifeTime');

            if (+storageItem - +currentTime <= 0) {
                console.log('popup should appear');
            } else {
                console.log(+storageItem - +currentTime);
                console.log(storageItem);
                visitorChooseSite.remove();
            }
        } else {
            localStorage.setItem('popUpLifeTime', currentTime)
        }*/

        try {
            let currentHash = window.location.hash;
            let visitorCurrentSite = document.getElementById('visitorCurrentSite');
            //visitorChooseSite.remove(); // DEL AFTER DEV
            if (currentHash == '#no-popup') visitorChooseSite.remove();

            visitorCurrentSite.addEventListener('click', function (e) {
                visitorChooseSite.remove();
                //localStorage.setItem('popUpLifeTime', timePlusDays);
            })

            // close poup on Backdrop click and set SeessionStorage
            document.body.addEventListener('click', e => {
                let el = e.target,
                    elAttr = el.getAttribute('id');

                if (el.classList.contains('index-overlay') && elAttr === 'visitorChooseSite') {
                    visitorChooseSite.remove();
                }
            });
            let popUpDone = sessionStorage.getItem('PopUpIndexDone');
            if (popUpDone && popUpDone === 'true') {
                visitorChooseSite.remove();
            }
            sessionStorage.setItem('PopUpIndexDone', 'true');
            //

        } catch (e) {
        }
    </script>
    <!--END POP UP SELECT SCHOOL + SCRIPT-->


    <!--MODALs-->

<?php include "inc/modal-offer-apply.php"; ?>

    <!--modal Programs-->
    <div class="modal modal__backdrop" id="modalPrograms">
        <div class="modal__container">
            <div class="modal__heading">
                <a href="#!" class="close">
                    <img src="img/cross.png" alt="close">
                </a>
            </div>
            <div class="modal__body">
                <br>
                <img src="img/fhd_boy4.png" alt="Programs" class="img-responsive">
<!--                <img src="img/educational_programs.png" alt="Programs" class="img-responsive">-->
                <br>
                <p>
                    Замість запам’ятовування фактів та понять наші учні набуватимуть компетентностей. Це – динамічна комбінація знань, умінь, навичок, способів мислення, поглядів, цінностей, інших особистих якостей, що визначає здатність успішно соціалізуватися, провадити професійну та/або подальшу навчальну діяльність. Тобто формується ядро знань, на яке будуть накладатись уміння цими знаннями користуватися, а також цінності та навички, що знадобляться дітям у професійному та приватному житті.
                    Спільними для всіх компетентностей є так звані наскрізні вміння: читання з розумінням, уміння висловлювати власну думку усно і письмово, критичне та системне мислення, здатність логічно обґрунтовувати позицію, творчість, ініціативність, вміння конструктивно керувати емоціями, оцінювати ризики, приймати рішення, розв’язувати проблеми, здатність співпрацювати з іншими людьми.
                    Щоб набувати компетентностей, учні навчаються за діяльнісним підходом – тобто частіше щось роблять замість того, щоб просто сидіти за партами і слухати вчителя. Концепція НУШ пропонує також впроваджувати інтегроване та проєктне навчання. Це сприяє тому, що наші учні отримують цілісне уявлення про світ, адже вивчають явища з точки зору різних наук та вчаться вирішувати реальні проблеми за допомогою знань з різних дисциплін.
                </p>
            </div>
        </div>
    </div>

    <!--Modal participation-->

    <div class="modal modal__backdrop" id="modalParticipation">
        <div class="modal__container">
            <div class="modal__heading">
                <a href="#!" class="close">
                    <img src="img/cross.png" alt="close">
                </a>
            </div>
            <div class="modal__body">
                <br>
                <img src="img/international_competitions.png" alt="Programs" class="img-responsive">
                <br>
                <p>
                    За час навчання діти стають частиною світової STEM-спільноти та долучаються
                    до участі у Міжнародних змаганнях
                </p>
            </div>
        </div>
    </div>

<?php include 'inc/footer.php'; ?>