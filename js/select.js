
let select_leng     = document.querySelector('#select_leng');
let select_header   = document.querySelector('#select_leng > .select_header');
let select_content  = document.querySelector('#select_leng > .select_content');

select_leng.addEventListener('click',function () {
    select_content.classList.toggle('show');
});
