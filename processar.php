<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe as respostas do formulário
    $respostas = [];
    for ($i = 1; $i <= 18; $i++) {
        // Verifica se a resposta é válida e se existe
        $respostas[$i] = isset($_POST["q$i"]) && is_numeric($_POST["q$i"]) ? (int)$_POST["q$i"] : 0;
    }

    // Categorias
    $categorias = [
        "Ciência de Dados" => array_slice($respostas, 0, 6),
        "Front-End" => array_slice($respostas, 6, 6),
        "Back-End" => array_slice($respostas, 12, 6),
    ];

    // Calcula os totais e porcentagens
    $totais = array_map('array_sum', $categorias);
    $totalRespostas = array_sum($totais);
    
    // Evita a divisão por zero
    $porcentagens = array_map(function ($total) use ($totalRespostas) {
        return $totalRespostas > 0 ? ($total / $totalRespostas) * 100 : 0;
    }, $totais);

    // Maior tendência
    $tendencia = array_keys($totais, max($totais))[0];

    // Gera o gráfico usando Google Charts
    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultado</title>
        <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
        <script type='text/javascript'>
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Categoria', 'Porcentagem'],
                    ['Ciência de Dados', {$porcentagens['Ciência de Dados']}],
                    ['Front-End', {$porcentagens['Front-End']}],
                    ['Back-End', {$porcentagens['Back-End']}]
                ]);

                var options = {
                    title: 'Tendências',
                    pieHole: 0.4
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #ffffff;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                min-height: 100vh;
            }

            header {
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                z-index: 1000;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            }

            header img {
                width: 100%;
                height: auto;
                object-fit: cover;
            }

            .content {
                margin-top: 360px; /* Ajuste para dar espaço ao header fixo */
                width: 90%;
                max-width: 900px;
                text-align: center;
            }

            .result {
                background: #40e0d0;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin-top: 20px;
                color: white;
                font-size: 18px;
            }

            h1 {
                font-size: 24px;
                color: #333;
            }

            @media (max-width: 600px) {
                h1 {
                    font-size: 20px;
                }

                .result {
                    padding: 15px;
                }
            }
        </style>
    </head>
    <body>
        <header>
            <img src='banner-inicio-3.png' alt='Banner'>
        </header>

        <div class='content'>
            <h1>Resultado da Tendência</h1>";
    
    if ($totalRespostas > 0) {
        echo "<div id='piechart' style='width: 100%; height: 400px;'></div>
        <div class='result'>
            <h4>De acordo com o resultado você tem maior tendência para a trilha: <strong>{$tendencia}</strong></h4>
        </div>";
    } else {
        echo "<div class='result'>
            <p>Não foi possível calcular a tendência. Verifique se todas as respostas foram preenchidas.</p>
        </div>";
    }

    echo "</div></body></html>";

} else {
    echo "Método inválido.";
}
?>
