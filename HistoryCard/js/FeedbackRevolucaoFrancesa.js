
document.addEventListener('DOMContentLoaded', function() {
    // Inicializa a navbar mobile
    const mobileNavbar = new MobileNavbar(
        ".mobile-menu",
        ".nav-list",
        ".nav-list li",
    );
    mobileNavbar.init();

    // Recupera os dados do localStorage
    const respostas = JSON.parse(localStorage.getItem('respostasRevolucaoFrancesa')) || {};
    const anotacoes = JSON.parse(localStorage.getItem('anotacoesRevolucaoFrancesa')) || {};
    
    // Calcula estatísticas
    const totalQuestoes = 5;
    let acertos = 0;
    let erros = 0;
    
    // Conta acertos e erros
    for (let i = 1; i <= totalQuestoes; i++) {
        if (respostas[`pergunta${i}`] === true) {
            acertos++;
        } else if (respostas[`pergunta${i}`] === false) {
            erros++;
        }
    }
    
    // Atualiza a interface
    document.getElementById('acertos').textContent = acertos;
    document.getElementById('erros').textContent = erros;
    
    // Exibe as anotações
    for (let i = 1; i <= 5; i++) {
        const elemento = document.getElementById(`anotacao-hq${i}`);
        if (anotacoes[`hq${i}`] && anotacoes[`hq${i}`].trim() !== "") {
            elemento.textContent = anotacoes[`hq${i}`];
            elemento.style.fontStyle = "normal";
            elemento.style.color = "#000";
        } else {
            elemento.textContent = "Nenhuma anotação foi feita nesta HQ.";
            elemento.style.fontStyle = "italic";
            elemento.style.color = "#7f8c8d";
        }
    }
    
    // Não limpa os dados aqui para permitir que o usuário visualize várias vezes
    // localStorage.removeItem('respostasRevolucaoFrancesa');
    // localStorage.removeItem('anotacoesRevolucaoFrancesa');
});
document.addEventListener('DOMContentLoaded', function() {
        // Verifica se há dados para mostrar
        const respostas = JSON.parse(localStorage.getItem('respostasRevolucaoFrancesa')) || {};
        const anotacoes = JSON.parse(localStorage.getItem('anotacoesRevolucaoFrancesa')) || {};
        
        if (Object.keys(respostas).length === 0 && Object.keys(anotacoes).length === 0) {
            // Se não houver dados, redireciona para a trilha
            alert('Nenhum dado de feedback encontrado. Você será redirecionado para a trilha.');
            window.location.href = 'RevoluçãoFrancesa.php';
        }
    });