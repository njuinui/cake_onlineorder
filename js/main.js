
const navItems = document.querySelector('.nav__items'); 
const openNavBtn = document.querySelector('#open__nav-btn'); 
const closeNavBtn = document.querySelector('#close__nav-btn'); 

// open dropdown nav
const openNav = () => {
    navItems.style.display = 'flex';
    openNavBtn.style.display = 'none';
    closeNavBtn.style.display = 'inline-block';
}

// close dropdown nav
const closeNav = () => {
    navItems.style.display = 'none';
    openNavBtn.style.display = 'inline-block';
    closeNavBtn.style.display = 'none';
}

openNavBtn.addEventListener('click', openNav);
closeNavBtn.addEventListener('click', closeNav);

//Dropdown Button
function show_hide() {
    var click = document.getElementById("list-items");
    if (click.style.display ==="none") {
        click.style.display="block";
    }else{
        click.style.display="none";
    };
}



// Admin Dashboard

const sidebar = document.querySelector('aside');
const showSidebarBtn = document.querySelector('#show__sidebar-btn');
const hideSidebarBtn = document.querySelector('#hide__sidebar-btn');



const showSidebar = () => {
    sidebar.style.left ='10px';
    sidebar.style.width ='15%';
    showSidebarBtn.style.display = 'none';
    hideSidebarBtn.style.display = 'inline-block';
}

showSidebarBtn.addEventListener('click', showSidebar);


const hideSidebar = () => {
    sidebar.style.left ='-100%';
    showSidebarBtn.style.display ='inline-block';
    hideSidebarBtn.style.display = 'none';

}

hideSidebarBtn.addEventListener('click', hideSidebar);

// $(".testimonial_slider_area").owlCarousel({
//     autoplay:rue,
//     slideSpeed:3000,
//     items : 3,
//     nav:true,
//     navText:['<i class="fa fa-arrow-left"></i> ', '<i class="fa fa-arrow-right"></i> '],
//     margin:10,
//     responsive:{
//         320:{
//             items:1
//         },
//         767:{
//             items:2
//         },
//        600:{
//             items:3
//         },
//         1000:{
//             items:3
//         }
//     }
// });