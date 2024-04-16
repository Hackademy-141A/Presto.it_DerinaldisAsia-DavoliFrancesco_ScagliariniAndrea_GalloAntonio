
let containerNavbar = document.querySelector('.container-navbar');
let navbar = document.querySelector('.mynavbar');
let logo = document.querySelector('#logo');
let list = document.querySelectorAll('#list');

// console.log(window);

window.addEventListener( 'scroll', ()=>{
    let scrolled = window.scrollY;
    // console.log(scrolled);
    
    if (scrolled > 0) {
        containerNavbar.classList.add('sticky-top');
        navbar.style.backgroundColor = 'var(--fine)';
        navbar.classList.add('fadeIn')
        list.forEach((list)=>{
            list.style.color='black'
        })
        
        
    } else {
        containerNavbar.classList.remove('sticky-top');
        navbar.style.backgroundColor = 'var(--root)';
        navbar.classList.remove('fadeIn')
        list.forEach((list)=>{
            list.style.color='white'
        })
    }
    
})
