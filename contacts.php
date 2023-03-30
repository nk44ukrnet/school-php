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

               <p class="contacts__locations">
                   Київ, Старонаводницька, 4в <br>
                   Київ, вул. Олександри Екстер, 3 <br>
                   Київ, Б. Гмирі, 6 <br>
                   Київ, Дніпровська набережна, 25А <br>
                   Київ, просп. Володимира Івасюка, 10а, к.8  <br>
                   Київ, просп. Володимира Івасюка, 21/38 <br>
                   Київ, Златоустівська, 55 <br>
                   Київ, вул. Олександрівська, 1, Ст. М. Нивки <br>
                   Київ, вул. Василя Липківського, 33а <br>
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
