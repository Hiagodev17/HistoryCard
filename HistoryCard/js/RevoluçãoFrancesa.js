
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

  // Verifica se este modal está no mapeamento
  if (modalToCircle[selector]) {
    const currentCircle = modalToCircle[selector];
    const nextCircle = circleSequence[currentCircle];

    // Atualiza as cores dos círculos
    updateCircleColors(currentCircle, nextCircle);
  }

  // Salva as respostas das HQs
  if (selector.startsWith('.modal-HQ')) {
    const hqNumber = selector.match(/\d+/)[0];
    const resposta = document.querySelector(`${selector} .descricaoHQ`).value;
    if (resposta) {
      localStorage.setItem(`hq${hqNumber}`, resposta);
    }
  }
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
    feedback.style.fontSize = "30px";
    botaoProxima.classList.remove("hidden");
    botaoRefazer.classList.add("hidden");
    if (imagem) imagem.classList.remove("hidden");
    // Armazena no localStorage que o usuário acertou
    localStorage.setItem(`pergunta${perguntaId}`, 'acertou');
  } else {
    feedback.innerText = "Não foi dessa vez, tente novamente!";
    feedback.style.color = "red";
    feedback.style.fontSize = "30px";
    botaoRefazer.classList.remove("hidden");
    botaoProxima.classList.add("hidden");
    if (imagem) imagem.classList.add("hidden");
    // Armazena no localStorage que o usuário errou
    localStorage.setItem(`pergunta${perguntaId}`, 'errou');
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

// Adicione este código ao seu arquivo RevoluçãoFrancesa.js ou substitua o existente
// Inicialização: define o primeiro círculo como verde
document.addEventListener('DOMContentLoaded', function () {
  // Define o primeiro círculo como verde
  document.getElementById('circ1').classList.add('circulo-verde');
});

// Mapeamento entre círculos e seus próximos na sequência
const circleSequence = {
  'circ1': 'circ2',
  'circ2': 'circ3',
  'circ3': 'circ4',
  'circ4': 'circ5',
  'circ5': 'circ6',
  'circ6': 'circ7',
  'circ7': 'circ8',
  'circ8': 'circ9',
  'circ9': 'circ10',
  'circ10': 'circ11',
  'circ11': 'circ12',
  'circ12': 'circ13',
  'circ13': 'circ14',
  'circ14': 'circ15',
  'circ15': 'circ16',
  'circ16': 'parabens',
  'parabens': null  // Último círculo não tem próximo
};

// Mapeamento entre modais e seus círculos correspondentes
const modalToCircle = {
  '.modal-contexto1': 'circ1',
  '.modal-pergunta1': 'circ2',
  '.modal-HQ1': 'circ3',
  '.modal-video1': 'circ4',
  '.modal-contexto2': 'circ5',
  '.modal-pergunta2': 'circ6',
  '.modal-HQ2': 'circ7',
  '.modal-contexto3': 'circ8',
  '.modal-pergunta3': 'circ9',
  '.modal-HQ3': 'circ10',
  '.modal-contexto4': 'circ11',
  '.modal-pergunta4': 'circ12',
  '.modal-HQ4': 'circ13',
  '.modal-contexto5': 'circ14',
  '.modal-pergunta5': 'circ15',
  '.modal-HQ5': 'circ16',
  '.modal-parabens': 'parabens'
};

function updateCircleColors(completedCircle, nextCircle) {
  // Muda o círculo completado para dourado
  if (completedCircle === 'parabens') {
    document.querySelector('.parabens').classList.remove('circulo-verde');
    document.querySelector('.parabens').classList.add('circulo-dourado');
  } else {
    document.getElementById(completedCircle).classList.remove('circulo-verde');
    document.getElementById(completedCircle).classList.add('circulo-dourado');
  }

  // Se houver próximo círculo, muda para verde
  if (nextCircle) {
    if (nextCircle === 'parabens') {
      document.querySelector('.parabens').classList.add('circulo-verde');
    } else {
      document.getElementById(nextCircle).classList.add('circulo-verde');
    }
  }
}

function openModal(selector) {
  document.querySelector(selector).classList.add('active');
}
