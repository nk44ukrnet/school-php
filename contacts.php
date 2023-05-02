<?php
$title = 'Контакти';
$desc = 'Навчання здійснюється у м. Києві за адресами: м.Позняки, вул.Б.Гмирі, 6, м.Осокорки, вул.Дніпровська Набережна, 25а, м.Нивки, вул.Олександрівська, 1, м.Оболонь, вул. Героїв Сталінграду, 21/38';
include 'inc/header.php';
?>

<main>
   <div class="contacts">
       <div class="contacts__wrapper">
           <div class="contacts__container">
               <h1>Навчання здійснюється у <br>
                   м. Києві за адресами:</h1>

               <p class="contacts__locations font-sm">
                   Троєщина, вул. Олександри Екстер, 3 <br>
                   Позняки, Б. Гмирі, 6 <br>
                   Осокорки, Дніпровська набережна, 25А <br>
                   Оболонь, просп. Володимира Івасюка, 21/38 <br>
                   Нивки, вул. Олександрівська, 1 <br>
                   Солом'янка, вул. Василя Липківського, 33а <br>
               </p>
           </div>
       </div>
   </div>
</main>

<script>
    window.document.addEventListener('DOMContentLoaded', ()=>{
        const footerContainer = document.querySelector('.footer__container');
        if(footerContainer) {
            footerContainer.classList.add('footer-no-gena');
        }
    })
</script>

<?php
include "inc/footer.php";
?>
