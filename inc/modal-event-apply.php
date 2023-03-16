<!--Modal btn offer-->
<div class="modal modal__backdrop" id="modalOffer">
    <div class="modal__container">
        <div class="modal__heading">
            <a href="#!" class="close">
                <img src="img/cross.png" alt="close">
            </a>
            <h3>Реєстрація</h3>
        </div>
        <div class="modal__body">
            <form class="form-offer" name="offer-event">
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
                <div class="form-group">
                    <select name="selec_school" class="schools-list" required>
                        <option value="" selected disabled> Оберіть найближчу школу</option>
<!--                        <option value="м.Позняки, вул.Б.Гмирі, 6">м.Позняки, вул.Б.Гмирі, 6</option>-->
<!--                        <option value="м.Осокорки, вул.Дніпровська Набережна, 25а">м.Осокорки, вул.Дніпровська-->
<!--                            Набережна, 25а-->
<!--                        </option>-->
<!--                        <option value="м.Нивки, вул.Олександрівська, 1">м.Нивки, вул.Олександрівська, 1</option>-->
<!--                        <option value="м.Оболонь, вул. Героїв Сталінграду, 21/38">м.Оболонь, вул. Героїв-->
<!--                            Сталінграду, 21/38-->
<!--                        </option>-->
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Надіслати" class="btn submit">
                </div>
            </form>
        </div>
    </div>
</div>