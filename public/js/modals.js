const open = document.getElementById('open');
const mdl_container = document.getElementById('mdl_container');
const close = document.getElementById('close');

open.addEventListener('click',()=>{
    mdl_container.classList.add('show')
});

close.addEventListener('click',()=>{
    mdl_container.classList.remove('show')
});