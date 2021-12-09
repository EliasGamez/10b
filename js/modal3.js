const open3 = document.getElementById('open3');
const modal_container3 = document.getElementById('modal_container3');
const close3 = document.getElementById('close3');

open3.addEventListener('click', () => {
  modal_container3.classList.add('show');  
});

close3.addEventListener('click', () => {
  modal_container3.classList.remove('show');
});