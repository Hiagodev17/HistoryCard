<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trilha-Segunda Guerra Mundial</title>
    <link rel="stylesheet" href="css/SegundaGuerra.css">
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
                
            </ul>
        </nav>
    </header>
    <main>
        <div class="titulo">
            <img id="fotoprinc" src="Imagens/simboloSGM.png">
            <h1>Segunda Guerra Mundial</h1>
        </div>

        <div class="conteudo">
            <div class="circulo" id="circ1">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-video1')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ2">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-HQ1')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ3">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-pergunta1')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ4">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-contexto1')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ5">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-pergunta2')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ6">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-video2')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ7">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-contexto2')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ8">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-HQ2')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ9">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-video3')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ10">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-pergunta3')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ11">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-video4')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ12">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-contexto3')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ13">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-pergunta4')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>
            

            <div class="parabens">
                <button class="btnOpenModal-parabens" onclick="openModal('.modal-parabens')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="sair">
                <a href="Feedback-SGM.php">
                    <button class="retornar"><strong>RETORNAR</strong></button>
                </a>
            </div>
        </div>
        <div class="modal-parabens">
            <div class="modal-base modal-contexto">
                <h2>Conclusão</h2>
                <hr />
                <span>
                    <img src="Imagens/parabens.png" style="height: 300px;width: 300px;"><br><br><br><br>
                    <strong>
                        <p style=" font-size: 30px;">Parabéns! Você concluío o card da Segunda Guerra Mundial.<br>Vamos
                            iniciar outro card!</p>
                    </strong>

                </span>
                <hr />
                <div class="btns">

                    <button class="btnContinuar"
                        onclick="closeModal('.modal-parabens')"><strong>Finalizar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-contexto1">
            <div class="modal-base modal-contexto">
                <h2>Texto-Áudio</h2>
                <hr />
                <span>
                    <img src="Imagens/SGM-contexto1.png" style="height: 300px; width: 600px"><br>
                    <audio controls="controls">
                        <source src="audios/SGM-1.mp3" type="audio/mp3" />
                    </audio>
                </span>
                <hr />
                <div class="btns">

                    <button class="btnContinuar"
                        onclick="closeModal('.modal-contexto1')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-contexto2">
            <div class="modal-base modal-contexto">
                <h2>Texto-Áudio</h2>
                <hr />
                <span>
                    <img src="Imagens/SGM-contexto2.png" style="height: 350px; width: 550px;"><br>
                    <audio controls="controls">
                        <source src="audios/SGM-2.mp3" type="audio/mp3" />
                    </audio>
                </span>
                <hr />
                <div class="btns">

                    <button class="btnContinuar"
                        onclick="closeModal('.modal-contexto2')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-contexto3">
            <div class="modal-base modal-contexto">
                <h2>Texto-Áudio</h2>
                <hr />
                <span>
                    <img src="Imagens/SGM-contexto3.png" style="height: 350px; width: 650px;"><br>
                    <audio controls="controls">
                        <source src="audios/SGM-3.mp3" type="audio/mp3" />
                    </audio>
                </span>
                <hr />
                <div class="btns">

                    <button class="btnContinuar"
                        onclick="closeModal('.modal-contexto3')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        
        <div class="modal-pergunta1">
            <div class="modal-base modal-pergunta">
                <h2>Quem era o líder que queria deixar a Alemanha forte novamente?</h2>
                <button class="opcao" onclick="responder(1, true)">Adolf Hitler</button>
                <button class="opcao" onclick="responder(1, false)">Albert Einstein</button>
                <button class="opcao" onclick="responder(1, false)">Thomas Edison</button>
                <button class="opcao" onclick="responder(1, false)">Getulio Vargas</button>

                <p class="feedback" id="feedback1"></p>
                <img src="Imagens/caraFeliz.png" id="imgCerta1" class="imagem-feedback hidden"
                    alt="Parabéns! Você acertou" />
                <br>
                <button class="botao hidden" id="botaoProxima1"
                    onclick="closeModal('.modal-pergunta1')">Continuar</button>
                <button class="botao hidden" id="botaoRefazer1" onclick="refazer(1)">Tentar Novamente</button>
            </div>
        </div>
        <div class="modal-pergunta2">
            <div class="modal-base modal-pergunta">
                <h2>Quem venceu a Segunda Guerra Mundial?</h2>
                <button class="opcao" onclick="responder(2, false)">O Eixo</button>
                <button class="opcao" onclick="responder(2, true)">Os Aliados</button>
                <button class="opcao" onclick="responder(2, false)">Nenhum dos dois</button>
                <button class="opcao" onclick="responder(2, false)">Ambos os lados saíram vitoriosos</button>
                

                <p class="feedback" id="feedback2"></p>
                <img src="Imagens/caraFeliz.png" id="imgCerta2" class="imagem-feedback hidden"
                    alt="Parabéns! Você acertou" style=" margin: 10px auto;" />
                <br>
                <button class="botao hidden" id="botaoProxima2"
                    onclick="closeModal('.modal-pergunta2')">Continuar</button>
                <button class="botao hidden" id="botaoRefazer2" onclick="refazer(2)">Tentar Novamente</button>
            </div>
        </div>
        <div class="modal-pergunta3">
            <div class="modal-base modal-pergunta">
                <h2>Qual grupo foi mais perseguido durante o Holocausto?</h2>
                <button class="opcao" onclick="responder(3, true)">Judeus</button>
                <button class="opcao" onclick="responder(3, false)">Ingleses</button>
                <button class="opcao" onclick="responder(3, false)">Americanos</button>
                <button class="opcao" onclick="responder(3, false)">Brasileiros</button>


                <p class="feedback" id="feedback3"></p>
                <img src="Imagens/caraFeliz.png" id="imgCerta3" class="imagem-feedback hidden"
                    alt="Parabéns! Você acertou" style=" margin: 10px auto;" />
                <br>
                <button class="botao hidden" id="botaoProxima3"
                    onclick="closeModal('.modal-pergunta3')">Continuar</button>
                <button class="botao hidden" id="botaoRefazer3" onclick="refazer(3)">Tentar Novamente</button>
            </div>
        </div>
        <div class="modal-pergunta4">
            <div class="modal-base modal-pergunta">
                
                <h2>Em que país foram lançadas as bombas atômicas?</h2>
                
                <button class="opcao" onclick="responder(4, false)">Estados Unidos</button>
                <button class="opcao" onclick="responder(4, false)">Alemanha</button>
                <button class="opcao" onclick="responder(4, false)">Itália</button>
                <button class="opcao" onclick="responder(4, true)">Japão</button>

                <p class="feedback" id="feedback4"></p>
                <img src="Imagens/caraFeliz.png" id="imgCerta4" class="imagem-feedback hidden"
                    alt="Parabéns! Você acertou" />
                <br>
                <button class="botao hidden" id="botaoProxima4"
                    onclick="closeModal('.modal-pergunta4')">Continuar</button>
                <button class="botao hidden" id="botaoRefazer4" onclick="refazer(4)">Tentar Novamente</button>
            </div>
        </div>
        
        
        <div class="modal-HQ1">
            <div class="modal-base modal-HQ">
                <h2>História em Quadrinhos</h2>
                <hr />
                <span>
                    <img src="Imagens/SGM-HQ1.png" style="width: 340px; height: 360px;">
                    <br>
                    <p
                        style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        <strong>Escreva o que você entendeu nos quadrinhos!</strong>
                    </p>
                    <br>
                    <textarea name="Descrição" class="descricaoHQ"></textarea>
                </span>
                <hr />

                <div class="btns">

                    <button class="btnClose" onclick="closeModal('.modal-HQ1')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-HQ2">
            <div class="modal-base modal-HQ">
                <h2>História em Quadrinhos</h2>
                <hr />
                <span>
                    <img src="Imagens/SGM-HQ2.png" style="width: 250px; height: 350px;">
                    <br>
                    <p
                        style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        <strong>Escreva o que você entendeu nos quadrinhos!</strong>
                    </p>
                    <br>
                    <textarea name="Descrição" class="descricaoHQ"></textarea>
                </span>
                <hr />

                <div class="btns">

                    <button class="btnClose" onclick="closeModal('.modal-HQ2')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-video1">
            <div class="modal-base modal-video">
                <h2>Video</h2>
                <hr />
                <span>
                    <iframe width="232" height="510" src="https://www.youtube.com/embed/antl9nA4HvE" title="Por que aconteceu a Segunda Guerra Mundial?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </span>
                <hr />
                <div class="btns">
                    <button class="btnClose" onclick="closeModal('.modal-video1')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-video2">
            <div class="modal-base modal-video">
                <h2>Video</h2>
                <hr />
                <span>
                    <iframe width="706" height="397" src="https://www.youtube.com/embed/LrzB3cPh9fY?si=JzJsGgbFUzpqbKRm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    
                </span>
                <hr />
                <div class="btns">
                    <button class="btnClose" onclick="closeModal('.modal-video2')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-video3">
            <div class="modal-base modal-video">
                <h2>Video</h2>
                <hr />
                <span>
                    <iframe width="706" height="397" src="https://www.youtube.com/embed/4M2iFlUqSnw?si=xrwJiEm7w56pvx6P" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </span>
                <hr />
                <div class="btns">
                    <button class="btnClose" onclick="closeModal('.modal-video3')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-video4">
            <div class="modal-base modal-video">
                <h2>Video</h2>
                <hr />
                <span>
                    <iframe width="706" height="397" src="https://www.youtube.com/embed/kytpJCXbVfQ?si=7JkpP58SJ63cp8Kw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    
                </span>
                <hr />
                <div class="btns">
                    <button class="btnClose" onclick="closeModal('.modal-video4')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>

    </main>
</body>
<script src="js/SegundaGuerra.js"></script>

</html>