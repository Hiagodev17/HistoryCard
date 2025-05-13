<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Revolução Francesa</title>
    <link rel="stylesheet" href="css/PrimeiraGuerra.css">
    <style>
        body {
            background-color: #c3cfe2 !important;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }
        
        .feedback-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .feedback-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 800px;
            padding: 2.5rem;
            margin-top: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .feedback-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 8px;
            height: 100%;
            background:  #85e3ff;
        }
        
        .feedback-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }
        
        .feedback-header h1 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }
        
        .feedback-header p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .score-container {
            display: flex;
            justify-content: space-around;
            margin: 2rem 0;
        }
        
        .score-box {
            text-align: center;
            padding: 1.5rem;
            border-radius: 15px;
            width: 45%;
            transition: transform 0.3s ease;
        }
        
        .score-box:hover {
            transform: translateY(-5px);
        }
        
        .correct {
            background:  #bffcc6;
        }
        
        .incorrect {
            background:  #FFBEBC;
        }
        
        .score-value {
            font-size: 3rem;
            font-weight: 700;
            margin: 0.5rem 0;
            color: #333;
        }
        
        .hq-responses {
            margin-top: 2rem;
        }
        
        .hq-item {
            background: #f8f9fa;
            border-left: 4px solid #85e3ff;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .hq-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .hq-item h3 {
            color: #333;
            margin-top: 0;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
        }
        
        .hq-item h3::before {
            content: '✏️';
            margin-right: 10px;
        }
        
        .hq-response {
            color: #555;
            line-height: 1.6;
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }
        
        .no-response {
            color: #999;
            font-style: italic;
        }
        
        .btn-home {
            display: inline-block;
            background: #bffcc6;
            color: #333;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 2rem;
            box-shadow: 0 4px 15px rgba(133, 227, 255, 0.4);
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
        }
        
        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(133, 227, 255, 0.6);
            color: #000;
        }
        
        @media (max-width: 768px) {
            .feedback-card {
                padding: 1.5rem;
            }
            
            .score-container {
                flex-direction: column;
                align-items: center;
            }
            
            .score-box {
                width: 80%;
                margin-bottom: 1rem;
            }
            
            .feedback-header h1 {
                font-size: 2rem;
            }
        }
    </style>
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
        <div class="feedback-wrapper">
            <div class="feedback-card">
                <div class="feedback-header">
                    <h1>Seu Progresso</h1>
                    <p>Confira como foi seu desempenho na trilha da Revolução Francesa</p>
                </div>
                
                <div class="score-container">
                    <div class="score-box correct">
                        <h3>Respostas Corretas</h3>
                        <div class="score-value" id="total-acertos">0</div>
                        <p>Você está indo muito bem!</p>
                    </div>
                    
                    <div class="score-box incorrect">
                        <h3>Respostas Incorretas</h3>
                        <div class="score-value" id="total-erros">0</div>
                        <p>Continue praticando!</p>
                    </div>
                </div>
                
                <div class="hq-responses">
                    <h2 style="text-align: center; margin-bottom: 1.5rem; color: #333;">Suas Interpretações</h2>
                    
                    <div class="hq-item">
                        <h3>HQ 1 - Contexto Histórico</h3>
                        <p class="hq-response" id="resposta-hq1"><span class="no-response">Nenhuma resposta registrada</span></p>
                    </div>
                    
                    <div class="hq-item">
                        <h3>HQ 2 - Assembleia</h3>
                        <p class="hq-response" id="resposta-hq2"><span class="no-response">Nenhuma resposta registrada</span></p>
                    </div>
                    
                    <div class="hq-item">
                        <h3>HQ 3 - Tomada da Bastilha</h3>
                        <p class="hq-response" id="resposta-hq3"><span class="no-response">Nenhuma resposta registrada</span></p>
                    </div>
                    
                    <div class="hq-item">
                        <h3>HQ 4 - Declaração dos Direitos Humanos</h3>
                        <p class="hq-response" id="resposta-hq4"><span class="no-response">Nenhuma resposta registrada</span></p>
                    </div>
                    
                    <div class="hq-item">
                        <h3>HQ 5 - Convenções</h3>
                        <p class="hq-response" id="resposta-hq5"><span class="no-response">Nenhuma resposta registrada</span></p>
                    </div>
                </div>
                
                <div style="text-align: center; margin-top: 2.5rem;">
                    <button onclick="voltarELimpar()" class="btn-home">Voltar ao Início</button>
                </div>
            </div>
        </div>
    </main>
    
    <script src="js/RevoluçãoFrancesa.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Contagem de acertos e erros
            let acertos = 0;
            let erros = 0;
            
            for (let i = 0; i <= localStorage.length; i++) {
                const resposta = localStorage.getItem(`pergunta${i}`);
                const chave = localStorage.key(i);
                const valor = localStorage.getItem(chave);
                if(valor === 'acertou') {
                    acertos++;
                } else if (valor === 'errou') {
                    erros++;
                }
                
            }
            
            document.getElementById('total-acertos').textContent = acertos;
            document.getElementById('total-erros').textContent = erros;
            
            // Respostas das HQs
            for (let i = 1; i <= 5; i++) {
                const respostaHQ = localStorage.getItem(`hq${i}`);
                const element = document.getElementById(`resposta-hq${i}`);
                
                if (respostaHQ && respostaHQ.trim() !== '') {
                    element.innerHTML = respostaHQ;
                    element.querySelector('.no-response')?.remove();
                }
            }
            
            // Animação de entrada
            setTimeout(() => {
                document.querySelector('.feedback-card').style.opacity = '1';
                document.querySelector('.feedback-card').style.transform = 'translateY(0)';
            }, 100);
        });
        function voltarELimpar() {
            localStorage.clear();
            window.location.href = 'TelaInicial.php';
        }
    </script>
</body>
</html>