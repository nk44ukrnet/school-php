<?php
$title = 'Презентація школи';
$desc = 'Приходьте на презентацію школи';
include 'inc/header.php';
?>

<main>
    <div class="event">
        <div class="event__wrapper">
            <div class="event__container content_size">

                <div class="event__hero">
                    <div class="event__content">
                        <h1 class="heading-primary">Онлайн презентація <br> початкової школи <br>
                            Inventor School </h1>
                        <p class="font-md">для батьків та дітей 1-3 класів</p>
                        <p class="font-md"><strong>Локації шкіл:</strong> Позняки, Осокорки, Оболонь,
                            Нивки, Троєщина, Солом’янка
                        </p>
                        <a href="#!" class="btn offer-btn btn-red btn-md" data-modal-id="modalOffer">Зереєструватися </a>
                    </div>
                    <img src="img/school-presentation2.png" alt="Presentation" class="event__img" loading="lazy">
                </div>

                <div class="event__description">
                    <h2 class="heading-secondary">Ви у пошуках початкової школи поруч із вашим домом?
                        <br>
                        У якій ваша дитина буде навчатися із
                        задоволенням і де її навчать вчитися? </h2>
                    <br>
                    <h2 class="font-weight-normal">
                        Запрошуємо познайомитися із початковою ліцензованою школою Inventor School! Найближча онлайн-презентація школи – 6 квітня о 19:00. Залишайте заявку і з вами оперативно зв'яжеться менеджерка школи і детально проконсультує.
                    </h2>
                    <br><br>
                    <h2 class="heading-secondary text-center">Графік презентацій початкових шкіл Inventor School</h2>
                    <br>
                    <br>
                    <p class="font-md">На презентації школи ви дізнаєтеся про: </p>
                    <br>
                    <ul class="font-sm">
                        <li>навчальні програми та STEM-підхід;</li>
                        <li>проєктний формат навчання;</li>
                        <li>ефективний режим школяра;</li>
                        <li>потужну команду школи та директорку школи;</li>
                        <li>харчування школярів та багато інших переваг, що відрізняють Inventor School з-поміж
                            більшості приватних закладів освіти.
                        </li>
                    </ul>
                    <br>
                    <h2 class="heading-secondary"><a href="#!" data-modal-id="modalOffer">Реєструйтеся</a> на презентацію початкової школи Inventor School!
                        <br>
                        Кількість місць обмежена!
                    </h2>
                </div>
                <br><br>
                <section class="event_offer event1_offer">
                    <div class="inner">
                        <div class="left">
                            <h2>Кількість учасників заходу обмежена!</h2>
                            <h3>Заповніть форму та отримайте персональне запрошення</h3>
                        </div>
                        <div class="right">
                            <form class="form-offer" name="offer-event-bot">
                                <div class="form-group">
                                    <input type="text" placeholder="ім'я (обов'язково)" name="name_submit_hidden" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="email (обов'язково)" name="email_submit_hidden" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" placeholder="телефон (обов'язково)" name="phone_submit_hidden" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" placeholder="вік дитини (обов'язково)" name="age_submit_hidden" min="1"
                                           max="17" required>
                                </div>
                                <input type="hidden" value="Презентація школи" name="message">
                                <div class="form-group">
                                    <select name="selec_school" class="schools-list" required>
                                        <option value="" selected disabled>Оберіть адресу школи</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Надіслати" class="btn submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</main>


<?php
include "inc/modal-event-apply.php";
include "inc/footer.php";
?>
