class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
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

    handleClick() {
        this.navList.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
        this.animateLinks();
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }
    init() {
        if (this.mobileMenu) {
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

function abrirModal(classe) {
    document.querySelector(classe).classList.add("active");
  }

  function fecharModal(classe) {
    document.querySelector(classe).classList.remove("active");
  }

  function responder(perguntaId, correta) {
    const feedback = document.getElementById(`feedback${perguntaId}`);
    const botaoProxima = document.getElementById(`botaoProxima${perguntaId}`);
    const botaoRefazer = document.getElementById(`botaoRefazer${perguntaId}`);
    const imagem = document.getElementById(`imgCerta${perguntaId}`);
  
    if (correta) {
      feedback.innerText = "Parabéns! Você acertou!";
      feedback.style.color = "green";
      botaoProxima.classList.remove("hidden");
      botaoRefazer.classList.add("hidden");
      if (imagem) imagem.classList.remove("hidden");
    } else {
      feedback.innerText = "Resposta incorreta. Tente novamente.";
      feedback.style.color = "red";
      botaoRefazer.classList.remove("hidden");
      botaoProxima.classList.add("hidden");
      if (imagem) imagem.classList.add("hidden");
    }
  
    // Desativa os botões de opção
    document.querySelectorAll(`.modal-pergunta${perguntaId} .opcao`).forEach(btn => {
      btn.disabled = true;
    });
  }

  function refazer(numeroPergunta) {
    document.querySelectorAll(`.modal-pergunta${numeroPergunta} .opcao`).forEach(btn => btn.disabled = false);
    document.getElementById(`feedback${numeroPergunta}`).textContent = "";
    document.getElementById(`botaoRefazer${numeroPergunta}`).classList.add("hidden");
    document.getElementById(`botaoProxima${numeroPergunta}`).classList.add("hidden");
    const imagem = document.getElementById(`imgCerta${numeroPergunta}`);
    if (imagem) imagem.classList.add("hidden");
  }
function abrirProxima(proxima) {
    fecharModal(`.modal-pergunta${proxima - 1}`);
    abrirModal(`.modal-pergunta${proxima}`);
}
