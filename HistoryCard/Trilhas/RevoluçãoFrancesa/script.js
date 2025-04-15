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


function openModal(selector) {
    document.querySelector(selector).classList.add('active');
}
function closeModal(selector) {
    document.querySelector(selector).classList.remove('active');
}

const perguntas = [
    {
        pergunta: "Quando aconteceu a Revolução Francesa?",
        respostas: ["1792", "1789", "1795", "1799"],
        correta: "1789"
    },
    {
        pergunta: "Qual é o maior planeta do sistema solar?",
        respostas: ["Terra", "Júpiter", "Marte", "Saturno"],
        correta: "Júpiter"
    },
    {
        pergunta: "Quem escreveu 'Dom Quixote'?",
        respostas: ["Miguel de Cervantes", "Shakespeare", "Dante Alighieri", "Machado de Assis"],
        correta: "Miguel de Cervantes"
    }
];
let indicePerguntaAtual = 0;
let pontuacao = 0;
const elementoPergunta = document.getElementById("pergunta");
const botoesResposta = document.querySelectorAll(".botao-resposta");