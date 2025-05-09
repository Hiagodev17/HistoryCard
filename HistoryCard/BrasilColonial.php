<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trilha-Brasil Colonial</title>
    <link rel="stylesheet" href="css/BrasilColonial.css">
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
            <img id="fotoprin" src="Imagens/caravela-BC.png">
            <h1>Brasil Colonial</h1>
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
                <a href="TelaInicial.php">
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
                        <p style=" font-size: 30px;">Parabéns! Você concluío o card da Revolução Francesa.<br>Vamos
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
                    <img src="Imagens/fasesdaRF.png" alt=""><br>
                    <audio controls="controls">
                        <source src="audios/RF-1.mp3" type="audio/mp3" />
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
                    <img src="Imagens/img_contexto2.png" style="height: 350px; width: 550px;"><br>
                    <audio controls="controls">
                        <source src="audios/RF-2.mp3" type="audio/mp3" />
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
                    <img src="Imagens/img_contexto3.png" style="height: 350px; width: 650px;"><br>
                    <audio controls="controls">
                        <source src="audios/RF-3.mp3" type="audio/mp3" />
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
                    <img src="Imagens/img_contexto4.png" style="height: 350px; width: 650px;"><br>
                    <audio controls="controls">
                        <source src="audios/RF-4.mp3" type="audio/mp3" />
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
                    <img src="Imagens/img_contexto5.png" style="height: 350px; width: 650px;"><br>
                    <audio controls="controls">
                        <source src="audios/RF-5.mp3" type="audio/mp3" />
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
                <h2>Quando aconteceu a Revolução Francesa?</h2>
                <button class="opcao" onclick="responder(1, false)">1792</button>
                <button class="opcao" onclick="responder(1, true)">1789</button>
                <button class="opcao" onclick="responder(1, false)">1795</button>
                <button class="opcao" onclick="responder(1, false)">1799</button>

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
                <img src="Imagens/img_pergunta2.png" style="width: 250px; height: 200px;">
                <h2 >O que eram os Três Estados na França antes da Revolução?</h2>
                <button class="opcao" onclick="responder(2, false)">Três grupos de trabalhadores</button>
                <button class="opcao" onclick="responder(2, false)">Três religiões</button>
                <button class="opcao" onclick="responder(2, true)">Três classes sociais diferentes</button>
                <button class="opcao" onclick="responder(2, false)">Três governos diferentes</button>

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
                <img src="Imagens/img_pergunta3.png" style="width: 350px; height: 200px;">
                <h2>O que foi a "Queda da Bastilha"?</h2>
                <button class="opcao" onclick="responder(3, true)">Um evento onde as pessoas destruíram uma prisão
                    importante</button>
                <button class="opcao" onclick="responder(3, false)">Uma festa muito famosa</button>
                <button class="opcao" onclick="responder(3, false)">A vitória de um exército francês</button>


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
                <h2>Por que as pessoas lutaram na Revolução Francesa?</h2>
                <button class="opcao" onclick="responder(4, false)">Para ter mais riqueza</button>
                <button class="opcao" onclick="responder(4, false)">Para ter mais poder</button>
                <button class="opcao" onclick="responder(4, true)">Para ter mais liberdade, igualdade e
                    fraternidade</button>

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
                <h2>Quem era o rei da França antes da Revolução?</h2>
                <button class="opcao" onclick="responder(5, true)">Luis XVI</button>
                <button class="opcao" onclick="responder(5, false)">Napoleão Bonaparte</button>
                <button class="opcao" onclick="responder(5, false)">Alexandre III</button>

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
                    <iframe width="706" height="397" src="https://www.youtube.com/embed/-SAdry5BkYg?si=iefcr-NaPndzcqsU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <img src="Imagens/HQ1.jpg" style="width: 340px; height: 340px;">
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
                    <img src="Imagens/HQ2.jpg" style="width: 500px; height: 200px;">
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
                    <img src="Imagens/HQ3.jpg" style="width: 500px; height: 200px;">
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
                    <img src="Imagens/HQ4.png" style="width: 400px; height: 300px;">
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
                    <img src="Imagens/HQ5.png" style="width: 350px; height: 360px;">
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
<script src="js/BrasilColonial.js"></script>

</html>