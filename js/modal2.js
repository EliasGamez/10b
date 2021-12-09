const open2 = document.getElementById('open2');
const modal_container2 = document.getElementById('modal_container2');
const close2 = document.getElementById('close2');

open2.addEventListener('click', () => {
  modal_container2.classList.add('show');  
});

close2.addEventListener('click', () => {
  modal_container2.classList.remove('show');
});