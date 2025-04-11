class MobileNavbar{
    constructor(mobileMenu, navList, navLinks){
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
        this.navLinks.forEach((link, index) => {
            link.style.animation
            ? (link.style.animation = "")
            : (link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`);
        });
    }

    handleClick(){
        this.navList.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
        this.animateLinks();
    }

    addClickEvent(){
        this.mobileMenu.addEventListener("click", this.handleClick);
    }
    init(){
        if(this.mobileMenu){
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
);
mobileNavbar.init();


const modalCont1 = document.querySelector('.modal-contexto1')
function openModalCont1() {
    modalCont1.classList.add('active')
}
function closeModalCont1(){
    modalCont1.classList.remove('active')
}

const modalVideo1 = document.querySelector('.modal-video1')
function openModalVideo1() {
    modalVideo1.classList.add('active')
}
function closeModalVideo1(){
    modalVideo1.classList.remove('active')
}
const modalHQ1 = document.querySelector('.modal-HQ1')
function openModalHQ1() {
    modalHQ1.classList.add('active')
}
function closeModalHQ1(){
    modalHQ1.classList.remove('active')
}