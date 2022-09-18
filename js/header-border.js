let scrollpos = window.scrollY;
const header = document.querySelector('header');
const scrollChange = 100;

const add_border_header = () => header.classList.add('header-border');
const delete_border_header = () => header.classList.remove('header-border');

window.addEventListener('scroll', () => {
    scrollpos = window.scrollY;

    if(scrollpos >= scrollChange){
        add_border_header();
    }else{
        delete_border_header();
    }
})

