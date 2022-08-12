<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__container">
            <div class="footer__inner">
                <div class="footer__item">
                    <div class="footer__item-img">
                        <img src="img/mobile_contact_fb.png" alt="icon">
                    </div>
                    <div class="footer__item-text">
                        <a href="https://www.facebook.com/charter.inventorschool">fb.com/charter.inventorschool</a>
                    </div>
                </div>
                <div class="footer__item">
                    <div class="footer__item-img">
                        <img src="img/mobile_contact_youtube.png" alt="icon">
                    </div>
                    <div class="footer__item-text">
                        <a href="https://www.youtube.com/channel/UCwYXUHUNyjOcmlm2EQjmuCw/featured">канал на youtube</a>
                    </div>
                </div>
                <div class="footer__item">
                    <div class="footer__item-img">
                        <img src="img/mobile_contact_phone.png" alt="icon">
                    </div>
                    <div class="footer__item-text">
                        <a href="" class="_phone"></a>
                    </div>
                </div>
                <div class="footer__item">
                    <div class="footer__item-img">
                        <img src="img/mobile_contact_mail.png" alt="icon">
                    </div>
                    <div class="footer__item-text">
                        <a href="" class="_email"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script  src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<script>
    //jquery mask for phone
    $(":input").inputmask();
    $("input[type='tel']").inputmask({"mask": "+38(099)999-99-99"});
</script>

<script src="script/index.js?ver=<?php echo filemtime('script/index.js'); ?>"></script>
</body>
</html>