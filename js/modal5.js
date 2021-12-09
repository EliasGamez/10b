const open5 = document.getElementById('open5');
const modal_container5 = document.getElementById('modal_container5');
const close5 = document.getElementById('close5');

open5.addEventListener('click', () => {
  modal_container5.classList.add('show');  
});

close5.addEventListener('click', () => {
  modal_container5.classList.remove('show');
});