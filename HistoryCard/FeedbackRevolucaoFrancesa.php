<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Revolução Francesa</title>
    <link rel="stylesheet" href="css/FeedbackRevolucaoFrancesa.css">
</head>

<body>
    <header>
        <nav>
            <img src="Imagens/logo4.png" class="logo">
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="TelaInicial.php">Início</a></li>
                <li><a href="/">Sobre</a></li>
                <li><a href="/">Projeto</a></li>
                <li><a href="/">Extras</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="titulo">
            <img id="bandeira-franca" src="Imagens/bandeira-franca.png">
            <h1>Seu Feedback - Revolução Francesa</h1>
        </div>

        <div class="feedback-container">
            <div class="resumo-desempenho">
                <h2>Resumo do Seu Desempenho</h2>
                <div class="estatisticas">
                    <div class="estatistica-item">
                        <span class="numero" id="total-questoes">5</span>
                        <span class="rotulo">Questões Respondidas</span>
                    </div>
                    <div class="estatistica-item">
                        <span class="numero" id="acertos">0</span>
                        <span class="rotulo">Acertos</span>
                    </div>
                    <div class="estatistica-item">
                        <span class="numero" id="erros">0</span>
                        <span class="rotulo">Erros</span>
                    </div>
                </div>
            </div>

            <div class="anotacoes-container">
                <h2>Suas Anotações</h2>
                <div class="anotacao-item">
                    <h3>HQ 1</h3>
                    <p id="anotacao-hq1">Nenhuma anotação foi feita nesta HQ.</p>
                </div>
                <div class="anotacao-item">
                    <h3>HQ 2</h3>
                    <p id="anotacao-hq2">Nenhuma anotação foi feita nesta HQ.</p>
                </div>
                <div class="anotacao-item">
                    <h3>HQ 3</h3>
                    <p id="anotacao-hq3">Nenhuma anotação foi feita nesta HQ.</p>
                </div>
                <div class="anotacao-item">
                    <h3>HQ 4</h3>
                    <p id="anotacao-hq4">Nenhuma anotação foi feita nesta HQ.</p>
                </div>
                <div class="anotacao-item">
                    <h3>HQ 5</h3>
                    <p id="anotacao-hq5">Nenhuma anotação foi feita nesta HQ.</p>
                </div>
            </div>

            <div class="botoes-feedback">
                <button class="retornar" onclick="window.location.href='TelaInicial.php'">
                    <strong>VOLTAR À TELA INICIAL</strong>
                </button>
            </div>
        </div>
    </main>

    <script src="js/FeedbackRevolucaoFrancesa.js"></script>
</body>
</html>