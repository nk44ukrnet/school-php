//break points (taken from base.less file)
const bpXXl = 1400;
const bpXl = 1200;
const bpLg = 992;
const bpMd = 768;
const bpSm = 576;

const contactPhoneA = {
    text: '+38 (044) 490 90 80',
    href: 'tel:+380444909080'
};

const contactEmail = {
    text: 'info@inventor.com.ua',
    href: 'mailto:info@inventor.com.ua',
}

const phone = document.querySelectorAll('._phone'),
    email = document.querySelectorAll('._email');

//add contact info to css classes _phone, _mail (txt + href)
if (phone) {
    for (let phoneItem of phone) {
        phoneItem.innerHTML += contactPhoneA.text;
        phoneItem.href = contactPhoneA.href;
    }
}

if (email) {
    for (let emailItem of email) {
        emailItem.innerHTML += contactEmail.text;
        emailItem.href = contactEmail.href;
    }
}

//check if mobile device
let isMobile = false;
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    const deviceClassName = '_device';
    document.body.classList.add(`${deviceClassName}`);
    document.querySelector('.header').classList.add(`${deviceClassName}`);
    isMobile = true;
}

//navigation
if (isMobile || window.innerWidth <= bpLg) {
    let navUl = document.querySelector("#headerNavUl"),
        directLi = document.querySelectorAll('#headerNavUl > li'),
        dropDown = document.querySelectorAll(`#headerNavUl > li > ul`);

    for (li of directLi) {
        if (li.children.length > 1) {
            li.insertAdjacentHTML('beforeend', ` <i class="fas fa-caret-down caret-down-size"></i>`);
        }
    }

    navUl.addEventListener('click', function (e) {
        let current = e.target;
        if (current.classList.contains('caret-down-size')) {
            current.parentElement.classList.toggle('_active');
        }
    })
}

const hamburger = document.querySelector('.header__burger-trigger'),
    headerNav = document.querySelector('.header__nav');

hamburger.addEventListener('click', function (e) {
    headerNav.classList.toggle('header__nav-active');
    e.target.classList.toggle('burger-active-nocss');

    if (e.target.classList.contains('burger-active-nocss')) {
        e.target.src = 'img/hamburger_cross.png';
    } else {
        e.target.src = 'img/hamburger.png';
    }
})


document.body.addEventListener('click', e => {
    //modals
    let current = e.target;
    if (current.hasAttribute('data-modal-id')) {
        let modalID = current.getAttribute('data-modal-id');
        let modalTarget = document.querySelector(`#${modalID}`);
        if (modalTarget) {
            modalTarget.classList.add('modal__backdrop-active');
            document.body.classList.add('_lock');
        }
    }
    if (current.classList.contains('modal__backdrop-active')) {
        e.stopPropagation();
        current.classList.remove('modal__backdrop-active');
        document.body.classList.remove('_lock');
    }
});

let modalTrigger = document.querySelectorAll('[data-modal-id]');
if (modalTrigger) {
    modalTrigger.forEach(modal => {
        modal.addEventListener('click', () => {
            let modalID = modal.getAttribute('data-modal-id');
            let modalTarget = document.querySelector(`#${modalID}`);
            if (modalTarget) {
                modalTarget.classList.add('modal__backdrop-active');
                document.body.classList.add('_lock');
            }
        })
    })
}

let closeBtns = document.querySelectorAll('.close');

if (closeBtns) {
    closeBtns.forEach(btn => {
        btn.addEventListener('click', e => {
            let modalBackdrop = document.querySelectorAll('.modal__backdrop');
            document.body.classList.remove('_lock');
            if (modalBackdrop) {
                for (let modal of modalBackdrop) {
                    modal.classList.remove('modal__backdrop-active');
                }
            }
        })
    })
}

//teachers array (used in functions below)
// const teamMembers = [
//     {
//         name: "Оксана Стоєцька",
//         photo: "img/mobile_member1.png",
//         title: "Засновниця школи"
//     },
//     {
//         name: "Cкаба Лариса",
//         photo: "img/mobile_member2.png",
//         title: "Директорка початкової школи “Школа Інвентор Скул” (Inventor School)"
//     },
//     {
//         name: "Лілія Марченко",
//         photo: "img/l_march.jpg",
//         title: "Заступниця директорки з навчально-виховної роботи"
//     },
//     {
//         name: "Башлик Марія",
//         photo: "img/mobile_member3.png",
//         title: "Заступниця директорки з науково-методичної роботи"
//     },
//     {
//         name: "Очеретна Анастасія",
//         photo: "img/IMG_5313.jpg",
//         title: "вчителька початкових класів"
//     },
//     {
//         name: "Козачок Ілона",
//         photo: "img/IMG_5290.jpg",
//         title: "методистка з виховної роботи"
//     },
//     {
//         name: "Поліщук Богдана",
//         photo: "img/IMG_5270.jpg",
//         title: "вчителька початкових класів"
//     },
//     {
//         name: "Андрійчук Юлія",
//         photo: "img/IMG_5277.jpg",
//         title: "вчителька початкових класів"
//     },
//     {
//         name: "Чайковська Мирослава",
//         photo: "img/IMG_5243.jpg",
//         title: "вчителька  початкових класів"
//     },
//     {
//         name: "Мельник Людмила",
//         photo: "img/IMG_5214.jpg",
//         title: "вчителька початкових класів"
//     },
//     {
//         name: "Дичок Неля",
//         photo: "img/IMG_5200.jpg",
//         title: "вчителька початкових класів"
//     },
//     {
//         name: "Лахмай Дарія",
//         photo: "img/IMG_5192.jpg",
//         title: "вчителька початкових класів"
//     },
//     {
//         name: "Гурко Тетяна",
//         photo: "img/IMG_5169.jpg",
//         title: "вчителька англійської мови"
//     },
//     {
//         name: "Лісова Наталія",
//         photo: "img/IMG_5151.jpg",
//         title: "вчителька англійської мови"
//     },
//     {
//         name: "Шайдецька Вікторія",
//         photo: "img/IMG_5139.jpg",
//         title: "вчителька музики"
//     },
//     {
//         name: "Шувалов Олександр",
//         photo: "img/IMG_5130.jpg",
//         title: "психолог"
//     },
//     {
//         name: "Костюк Ярослава",
//         photo: "img/IMG_4969.jpg",
//         title: "вчителька початкових класів"
//     },
//     {
//         name: "Ходос Юлія",
//         photo: "img/IMG_4979.jpg",
//         title: "вчителька англійської мови"
//     },
//     {
//         name: "Валерія Болобосова",
//         photo: "img/bolobosova_img.png",
//         title: "вихователька"
//     },
// ];

// function loadTeamQuantity({quantity, id}) {
//     if (!id) {
//         return;
//     }

//     function teamTemplate({img, fullName, title}) {
//         return `
//         <div class="team__item">
//                         <div class="team__item__inner">
//                             <div class="team__item__inner-photo">
//                                 <img src="${img}" alt="team">
//                             </div>
//                             <div class="team__item__inner-text">
//                                 <h4 class="team__item__inner-text-name">
//                                     ${fullName}
//                                 </h4>
//                                 <p class="team__item__inner-text-desc">
//                                     ${title}
//                                 </p>
//                             </div>
//                         </div>
//                     </div>
//         `;
//     }

//     if (quantity && id) {
//         let strHTML = '';
//         for (let i = 0; i < quantity; i++) {
//             strHTML += teamTemplate({
//                 img: teamMembers[i].photo,
//                 fullName: teamMembers[i].name,
//                 title: teamMembers[i].title
//             })
//         }
//         id.innerHTML = strHTML;
//     } else if (id) {
//         id.innerHTML = ``;
//         let strHTML = '';
//         for (let i = 0; i < teamMembers.length; i++) {
//             try {
//                 strHTML += teamTemplate({
//                     img: teamMembers[i].photo,
//                     fullName: teamMembers[i].name,
//                     title: teamMembers[i].title
//                 })
//             } catch (e) {
//                 console.log(e);
//             }
//         }
//         id.innerHTML = strHTML;
//     }
// }

// let teamTrigger = document.getElementById('teamExpand'),
//     teamContainer = document.getElementById('teamContainer');

// if (teamContainer) {
//     if (window.innerWidth > bpLg) {
//         loadTeamQuantity({
//             quantity: 4,
//             id: teamContainer
//         });
//     } else {
//         loadTeamQuantity({
//             quantity: 2,
//             id: teamContainer
//         });
//     }
// }

// if (teamTrigger) {
//     teamTrigger.addEventListener('click', function (e) {
//         e.target.remove();
//         loadTeamQuantity({id: teamContainer})
//     })
// }


//function post via fetch
async function postViaFetch(url, formName, redirectURL = false) {
    const formData = document.forms[formName],
        inputSubmit = formData.querySelector('input[type="submit"]');

    if (inputSubmit.disabled === false) {
        const inputSubmitVal = inputSubmit.value;
        inputSubmit.disabled = true;
        inputSubmit.value = 'Sending data ...';
        setTimeout(() => {
            inputSubmit.value = inputSubmitVal;
            inputSubmit.disabled = false
        }, 10000)
    }


    await fetch(url, {method: 'POST', body: new FormData(formData)})
        .then(res => {
            if (res.ok && (res.status >= 200 && res.status < 300)) {
                return res;
            } else {
                throw new Error();
            }
        })
        .then(res => {
            if (redirectURL) {
                window.location.href = redirectURL;
            }
        })
        .catch(err => alert(`Помилка серверу! Не вдалося надіслати форму. Наші контакти - ${contactPhoneA.text} / ${contactEmail.text} `));
}

const scriptTolGGLsheetURL = 'https://script.google.com/macros/s/AKfycbzS1VsMyKGdDsMKNcMDUQkw8UkAtg99TQDmse7qVN3roTXmKfM/exec';

if (document.forms['offer-apply']) {
    document.forms['offer-apply'].addEventListener('submit', e => {
        e.preventDefault();
        postViaFetch(scriptTolGGLsheetURL, 'offer-apply', 'thankyou.php');
    })
}

if (document.forms['offer-event']) {
    document.forms['offer-event'].addEventListener('submit', e => {
        e.preventDefault();
        postViaFetch(scriptTolGGLsheetURL, 'offer-event', 'thankyou.php');
    })
}

if (document.forms['offer-event-bot']) {
    document.forms['offer-event-bot'].addEventListener('submit', e => {
        e.preventDefault();
        postViaFetch(scriptTolGGLsheetURL, 'offer-event-bot', 'thankyou.php');
    })
}

if (document.forms['offer-ask']) {
    document.forms['offer-ask'].addEventListener('submit', e => {
        e.preventDefault();
        postViaFetch(scriptTolGGLsheetURL, 'offer-ask', 'thankyou.php');
    })
}


let schoolsList = document.querySelectorAll('.schools-list');
if (schoolsList) {
    console.log(schoolsList.length)
    //generate options for select (cities)
    fetch('https://inventor.com.ua/modules/user_get_locations_info.php')
        .then(res => {
            if (res.ok) {
                return res.text()
            } else {
                throw new Error(`Error! ${res.status}`);
            }
        })
        .then(data => {
            const dataArr = JSON.parse(data);
            if (!Array.isArray(dataArr)) throw new Error('Fetch Data is not in the array');
            console.log(dataArr)
            dataArr.forEach(item => {
                let {title, id, city} = item;
                //title = title.replace('<br>', '').replace(', INVENTOR', '').replace('. INVENTOR', '').replace(' INVENTOR', '').trim();
                if (
                    //city.toLowerCase() == 'київ'
                       id == '245'
                    || id == '11'
                    || id == '221'
                    || id == '404'
                    || id == '271'
                    || id == '422'
                ) {
                    schoolsList.forEach(school => {
                        school.insertAdjacentHTML('beforeend', `<option value="${id}">${title}</option>`);
                    })
                }
            });

        })
        .catch(err => alert(`Сталася помилка!!! ${err}`));
}