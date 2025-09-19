let listElements = document.querySelectorAll('.list__button--click');
const buttonMenu = document.querySelector('.button__menu');
const nav = document.querySelector('.nav');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=>{
        
        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;
        if(menu.clientHeight == "0"){
            height=menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

    })
});

buttonMenu.addEventListener('click', () => {
    nav.classList.toggle('nav--show');
});
