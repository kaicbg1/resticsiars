<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual é o Seu Caminho na Tecnologia? Descubra Agora!</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d3bce8;
        }

        /* Header com a imagem */
        header {
            width: 100%;
            height: 400px; /* Altura do header */
            background: 
                url('banner-inicio-3.png') no-repeat center center; /* A imagem de fundo */
            background-size: cover;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Adiciona uma sombra suave ao redor do header */
        }

        h2{
            text-align: center;
            color: white;
        }

        /* Contêiner dos Blocos Lado a Lado */
        .blocks-container {
            display: flex;
            justify-content: space-between;
            margin: 20px auto;
            max-width: 1200px; /* Limita o tamanho máximo */
            gap: 20px;
            
        }

        .blocks-container2 {
            display: flex;
            justify-content: space-between;
            margin: 20px auto;
            max-width: 1200px; /* Limita o tamanho máximo */
            gap: 20px;
        }

        /* Bloco de Texto Maior */
        .large-block {
            background-color: #701198;
            
            padding: 40px;
            flex: 1; /* Isso garante que eles tenham o mesmo tamanho */
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .large-block h5{
            color: #ffffff;
            text-align: justify;
            text-decoration:solid;
            font-size: 18px;
        }

        .large-block2 {
            background-color: #701198;
            
            padding: 40px;
            flex: 1; /* Isso garante que eles tenham o mesmo tamanho */
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .large-block2 h5{
            color: #ffffff;
            text-align: justify;
            font-size: 18px;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .question {
            margin-bottom: 20px;
        }

        .question p {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        .options {
            display: flex;
            justify-content: space-between;
        }

        .options label {
            flex: 1;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 5px;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .options label:hover {
            background-color: #007bff;
            color: #fff;
        }

        .options input[type="radio"] {
            display: none;
        }

        .options input[type="radio"]:checked + label {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 18px;
            color: #fff;
            background-color: #9400d3;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .blocks-container {
                flex-direction: column; /* Alinha os blocos em coluna em telas menores */
                gap: 10px;
            }

            .large-block {
                flex: none; /* Retira o flex, os blocos terão tamanho ajustado */
            }

            .container {
                margin: 20px; /* Ajusta o espaçamento no mobile */
            }
        }

        @media (max-width: 480px) {
            .options label {
                font-size: 12px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>

    <!-- Header com a imagem -->
    <header></header>


    <!-- Contêiner com dois blocos lado a lado -->
    <div class="blocks-container">
        <!-- Bloco 1 Grande -->
        <div class="large-block">
            <h2>Bem-vindo a Residência em software!</h2>
            <h5>No coração da inovação baiana, com uma abordagem única e focada na prática, nosso projeto de residência tecnológica oferece não apenas conhecimento teórico, mas também experiências reais. Nossa missão é clara: fortalecer a força de trabalho de TIC na Bahia, promovendo o empreendedorismo e a inovação. Venha fazer parte dessa jornada e elevar sua carreira para novos patamares!</h5>
            <a href='https://www.restic36.cepedi.org.br/edital.pdf'><button type="submit">Baixar Edital Da Residência</button></a>
        </div>

        <!-- Bloco 2 Grande -->
        <div class="large-block">
            <h2>Venha Fazer Parte!</h2>
            <h5>Prepare-se para uma jornada de aprendizado imersivo e inovação na Residência em Software do CEPEDI! Aqui, você terá a oportunidade de trabalhar com tecnologias de ponta, desenvolver habilidades práticas e se conectar com especialistas da área. Se você está pronto para transformar sua paixão por tecnologia em soluções reais e impactantes, essa é a sua chance. Junte-se a nós e acelere sua carreira no universo do desenvolvimento de software!</h5>
        </div>

    </div>

    <div class="blocks-container2">
        <!-- Bloco 1 Grande -->
        <div class="large-block2">
            <h2>Objetivo Da Residência em software!</h2>
            <h5>O objetivo do programa é promover a capacitação de excelência dos residentes, por meio de metodologias ativas de aprendizagem centradas nos desafios tecnológicos do setor, desenvolvendo habilidades sólidas e atualizadas que permitam uma atuação de forma direta e efetiva nas demandas e desafios no cenário tecnológico, promovendo o empreendedorismo e a inovação no Estado da Bahia.</h5>
        </div>

        <!-- Bloco 2 Grande -->
        <div class="large-block2">
            <h2>Formulário Indicador De Trilha</h2>
            <h5>Estamos muito felizes em receber você no processo seletivo para a Residência em Software do CEPEDI! Para nos ajudar a entender melhor suas habilidades e interesses, gostaríamos que você preenchesse o formulário abaixo, onde poderá nos contar sobre sua familiaridade com as trilhas de Front-end, Back-end com Python e Ciência de Dados.</h5>
        </div>
    </div>

    <!-- Questionário -->
    <div class="container">
        <form method="POST" action="processar.php">
            <?php 
            $perguntas = [              
                "Eu gosto de observar situações para entender o que estão acontecendo antes de tomar uma decisão",
                "Eu me sinto motivado(a) ao encontrar soluções com base em informações disponíveis, mesmo que precise analisar bastante",
                "Eu acho interessante explorar os motivos por trás de um problema para entender como resolvê-lo.",   
                "Eu gosto de descobrir respostas para problemas analisando informações disponíveis",     
                "Eu me sinto à vontade explorando diferentes opções antes de tomar uma decisão importante.",
                "Eu acho interessante entender como números ou tendências podem influenciar decisões no dia a dia", 
                "Eu gosto de criar coisas que sejam visualmente agradáveis e funcionais para as pessoa.",
                "Eu me interesso em pensar na forma como as pessoas interagem com ferramentas, produtos ou serviços.",
                "Eu me sinto realizado(a) ao ver algo que fiz funcionando de forma prática e acessível para outros.",
                "Eu gosto de pensar em formas criativas para deixar algo mais atraente e fácil de usar.",     
                "Eu me preocupo com a experiência que as pessoas têm ao usar algo que crio.",
                "Trabalhar com cores, formas e organização visual me parece uma tarefa interessante",
                "Eu gosto de resolver problemas complexos pensando na melhor forma de organizar as informações.",                       
                "Eu prefiro pensar em como conectar diferentes partes de um sistema para que elas funcionem bem juntas.",
                "Eu me interesso mais em entender como as coisas funcionam do que em como elas aparecem.",
                "Resolver problemas técnicos e garantir que algo esteja funcionando corretamente ou algo que me atrai",
                "Eu me sinto confortável pensando em lógica e organizando partes de um sistema para que elas funcionem bem juntas.",
                "Eu gosto de entender como as coisas funcionam nos bastidores para garantir que tudo aconteça corretamente."            
            ];

            for ($i = 0; $i < 18; $i++): ?>
                <div class="question">
                    <p><?= $i + 1 ?>. <?= $perguntas[$i] ?></p>
                    <div class="options">
                        <input type="radio" id="q<?= $i + 1 ?>_1" name="q<?= $i + 1 ?>" value="1">
                        <label for="q<?= $i + 1 ?>_1">Discordo Totalmente</label>

                        <input type="radio" id="q<?= $i + 1 ?>_2" name="q<?= $i + 1 ?>" value="2">
                        <label for="q<?= $i + 1 ?>_2">Discordo</label>

                        <input type="radio" id="q<?= $i + 1 ?>_3" name="q<?= $i + 1 ?>" value="3">
                        <label for="q<?= $i + 1 ?>_3">Neutro</label>

                        <input type="radio" id="q<?= $i + 1 ?>_4" name="q<?= $i + 1 ?>" value="4">
                        <label for="q<?= $i + 1 ?>_4">Concordo</label>

                        <input type="radio" id="q<?= $i + 1 ?>_5" name="q<?= $i + 1 ?>" value="5">
                        <label for="q<?= $i + 1 ?>_5">Concordo Totalmente</label>
                    </div>
                </div>
            <?php endfor; ?>

            <button type="submit">Enviar Respostas</button>
        </form>
    </div>
    
</body>
</html>
