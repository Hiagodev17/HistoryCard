<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trilha-Indepêndencia dos EUA</title>
    <link rel="stylesheet" href="css/IndepêndenciaEUA.css">
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
            <img id="fotoprinc" src="Imagens/simboloIEUA.png">
            <h1>Indepêndencia dos <br>Estados Unidos</h1>
        </div>

        <div class="conteudo">
            <div class="circulo" id="circ1">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-contexto1')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ2">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-pergunta1')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ3">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-HQ1')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ4">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-video1')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ5">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-contexto2')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ6">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-pergunta2')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ7">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-HQ2')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ8">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-contexto3')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ9">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-pergunta3')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ10">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-HQ3')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ11">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-contexto4')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ12">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-pergunta4')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ13">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-HQ4')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ14">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-contexto5')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ15">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-pergunta5')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="circulo" id="circ16">
                <br>
                <br>
                <button class="btnOpenModal" onclick="openModal('.modal-HQ5')"><img src="Imagens/play.png"
                        class="popUpVideo"></button>
            </div>

            <div class="parabens">
                <button class="btnOpenModal-parabens" onclick="openModal('.modal-parabens')"><img
                        src="Imagens/play.png" class="popUpVideo"></button>
            </div>
            <div class="sair">
                <a href="Feedback-IEUA.php">
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
                        <p style=" font-size: 30px;">Parabéns! Você concluío o card da Indepêndencia dos Estados Unidos.<br>Vamos
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
                    <img src="Imagens/IEUA-contexto1.png" style="height: 300px; width: 600px"><br>
                    <audio controls="controls">
                        <source src="audios/IEUA-1.mp3" type="audio/mp3" />
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
                    <img src="Imagens/IEUA-contexto2.png" style="height: 350px; width: 550px;"><br>
                    <audio controls="controls">
                        <source src="audios/IEUA-2.mp3" type="audio/mp3" />
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
                    <img src="Imagens/IEUA-contexto3.png" style="height: 350px; width: 650px;"><br>
                    <audio controls="controls">
                        <source src="audios/IEUA-3.mp3" type="audio/mp3" />
                    </audio>
                </span>
                <hr />
                <div class="btns">

                    <button class="btnContinuar"
                        onclick="closeModal('.modal-contexto3')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-contexto4">
            <div class="modal-base modal-contexto">
                <h2>Texto-Áudio</h2>
                <hr />
                <span>
                    <img src="Imagens/IEUA-contexto4.png" style="height: 350px; width: 650px;"><br>
                    <audio controls="controls">
                        <source src="audios/IEUA-4.mp3" type="audio/mp3" />
                    </audio>
                </span>
                <hr />
                <div class="btns">

                    <button class="btnContinuar"
                        onclick="closeModal('.modal-contexto4')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-contexto5">
            <div class="modal-base modal-contexto">
                <h2>Texto-Áudio</h2>
                <hr />
                <span>
                    <img src="Imagens/IEUA-contexto5.png" style="height: 350px; width: 650px;"><br>
                    <audio controls="controls">
                        <source src="audios/IEUA-5.mp3" type="audio/mp3" />
                    </audio>
                </span>
                <hr />
                <div class="btns">

                    <button class="btnContinuar"
                        onclick="closeModal('.modal-contexto5')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-pergunta1">
            <div class="modal-base modal-pergunta">
                <img src="Imagens/IEUA-pergunta1.png" style="width: 250px; height: 200px;">
                <h2>Quantas colônias assinaram a Declaração de Independência?</h2>
                <button class="opcao" onclick="responder(1, false)">50</button>
                <button class="opcao" onclick="responder(1, false)">20</button>
                <button class="opcao" onclick="responder(1, true)">13</button>
                <button class="opcao" onclick="responder(1, false)">7</button>

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
                <img src="Imagens/IEUA-pergunta2.png" style="width: 250px; height: 200px;">
                <h2 >Por que os colonos queriam a independência?</h2>
                <button class="opcao" onclick="responder(2, true)">Por causa dos impostos altos</button>
                <button class="opcao" onclick="responder(2, false)">Por causa do frio</button>
                <button class="opcao" onclick="responder(2, false)">Por causa da religião</button>
                <button class="opcao" onclick="responder(2, false)">Porque queriam se mudar</button>
                

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
                <img src="Imagens/IEUA-pergunta3.png" style="width: 250px; height: 200px;">
                <h2>Em que ano os Estados Unidos declararam sua independência?</h2>
                <button class="opcao" onclick="responder(3, false)">1492</button>
                <button class="opcao" onclick="responder(3, true)">1776</button>
                <button class="opcao" onclick="responder(3, false)">1808</button>
                <button class="opcao" onclick="responder(3, false)">1945</button>


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
                <img src="Imagens/IEUA-pergunta4.png" style="width: 250px; height: 200px;">
                <h2>Quem foi o principal autor da Declaração de Independência dos EUA?</h2>
                <button class="opcao" onclick="responder(4, false)">Abraham Lincoln</button>
                <button class="opcao" onclick="responder(4, false)">George Washington</button>
                <button class="opcao" onclick="responder(4, true)">Thomas Jefferson</button>
                <button class="opcao" onclick="responder(4, false)">Benjamin Franklin</button>


                <p class="feedback" id="feedback4"></p>
                <img src="Imagens/caraFeliz.png" id="imgCerta4" class="imagem-feedback hidden"
                    alt="Parabéns! Você acertou" />
                <br>
                <button class="botao hidden" id="botaoProxima4"
                    onclick="closeModal('.modal-pergunta4')">Continuar</button>
                <button class="botao hidden" id="botaoRefazer4" onclick="refazer(4)">Tentar Novamente</button>
            </div>
        </div>
        <div class="modal-pergunta5">
            <div class="modal-base modal-pergunta">
                <img src="Imagens/IEUA-pergunta5.png" style="width: 230px; height: 180px;">
                <h2>Quem foi o comandante dos exércitos americanos na guerra pela independência?</h2>
                <button class="opcao" onclick="responder(5, true)">George Washington</button>
                <button class="opcao" onclick="responder(5, false)">Abraham Lincoln</button>
                <button class="opcao" onclick="responder(5, false)">John Adams</button>
                <button class="opcao" onclick="responder(5, false)">Alexander Hamilton</button>

                <p class="feedback" id="feedback5"></p>
                <img src="Imagens/caraFeliz.png" id="imgCerta5" class="imagem-feedback hidden"
                    alt="Parabéns! Você acertou" />
                <br>
                <button class="botao hidden" id="botaoProxima5"
                    onclick="closeModal('.modal-pergunta5')">Continuar</button>
                <button class="botao hidden" id="botaoRefazer5" onclick="refazer(5)">Tentar Novamente</button>
            </div>
        </div>
        <div class="modal-video1">
            <div class="modal-base modal-video">
                <h2>Video</h2>
                <hr />
                <span>
                    <iframe width="706" height="397" src="https://www.youtube.com/embed/nDYB99Khqmc?si=lEdcQHC0d2asD4qB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                   
                </span>
                <hr />
                <div class="btns">
                    <button class="btnClose" onclick="closeModal('.modal-video1')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-HQ1">
            <div class="modal-base modal-HQ">
                <h2>História em Quadrinhos</h2>
                <hr />
                <span>
                    <img src="Imagens/IEUA-HQ1.png" style="width: 340px; height: 350px;">
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
                    <img src="Imagens/IEUA-HQ2.png" style="width: 400px; height: 350px;">
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
        <div class="modal-HQ3">
            <div class="modal-base modal-HQ">
                <h2>História em Quadrinhos</h2>
                <hr />
                <span>
                    <img src="Imagens/IEUA-HQ3.png" style="width: 700px; height: 300px;">
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

                    <button class="btnClose" onclick="closeModal('.modal-HQ3')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-HQ4">
            <div class="modal-base modal-HQ">
                <h2>História em Quadrinhos</h2>
                <hr />
                <span>
                    <img src="Imagens/IEUA-HQ4.png" style="width: 300px; height: 350px;">
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

                    <button class="btnClose" onclick="closeModal('.modal-HQ4')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>
        <div class="modal-HQ5">
            <div class="modal-base modal-HQ">
                <h2>História em Quadrinhos</h2>
                <hr />
                <span>
                    <img src="Imagens/IEUA-HQ5.png" style="width: 350px; height: 350px;">
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

                    <button class="btnClose" onclick="closeModal('.modal-HQ5')"><strong>Continuar</strong></button>
                </div>
            </div>
        </div>

    </main>
</body>
<script src="js/IndepêndenciaEUA.js"></script>

</html>