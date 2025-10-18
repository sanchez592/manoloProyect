
// js/script.js - corregido y robusto
document.addEventListener('DOMContentLoaded', function() {
  const listElements = document.querySelectorAll('.list__button--click');
  const buttonMenu = document.querySelector('.button__menu');
  const nav = document.querySelector('.nav');
  const overlay = document.querySelector('.overlay');

  listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=> {
      listElement.classList.toggle('arrow');
      let height = 0;
      const menu = listElement.nextElementSibling;
      if (menu && menu.clientHeight === 0) {
        height = menu.scrollHeight;
      }
      if (menu) menu.style.height = `${height}px`;
    });
  });

  if (buttonMenu && nav && overlay) {
    buttonMenu.addEventListener('click', () => {
      nav.classList.toggle('nav--show');
      overlay.classList.toggle('show');
    });

    overlay.addEventListener('click', () => {
      nav.classList.remove('nav--show');
      overlay.classList.remove('show');
    });
  }

  // botón de búsqueda
  const searchBtn = document.querySelector('.button__search');
  const searchBar = document.getElementById('searchBar');

  if (searchBtn && searchBar) {
    searchBtn.addEventListener('click', () => {
      searchBar.classList.toggle('show');
      const input = searchBar.querySelector('input');
      if (searchBar.classList.contains('show') && input) input.focus();
    });
  }

  // Filtro en vivo: atención -> los elementos a filtrar deben llevar la clase .product-card
  const searchInput = document.getElementById('searchInput');
  if (searchInput) {
    searchInput.addEventListener('input', function(){
      const filter = this.value.toLowerCase();
      document.querySelectorAll('.product-card').forEach(card => {
        const text = card.innerText.toLowerCase();
        card.style.display = text.includes(filter) ? '' : 'none';
      });
    });
  }
});
