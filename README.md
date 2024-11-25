Descrição do Sistema:

O sistema desenvolvido tem como objetivo fornecer uma análise personalizada sobre a tendência do usuário em áreas tecnológicas específicas, como Ciência de Dados, Front-End e Back-End. Para isso, o sistema utiliza um questionário baseado na Teoria de Resposta ao Item (TRI), que visa avaliar o perfil do usuário de maneira precisa e adaptativa.

Ao preencher o formulário com 18 perguntas, o usuário é solicitado a fornecer suas respostas em uma escala com as opções: Discordo Totalmente, Discordo, Neutro, Concordo e Concordo Totalmente. De acordo com as respostas fornecidas, o sistema processa as informações e gera uma recomendação de trilha de aprendizado personalizada, destacando a área em que o usuário tem maior tendência.

Além da recomendação, o sistema também apresenta um gráfico visual interativo utilizando a API Google Charts, que mostra a distribuição das respostas entre as três áreas, permitindo ao usuário visualizar de forma clara a sua principal área de interesse.

Este sistema é uma ferramenta útil para orientar os usuários em sua jornada de aprendizado, ajudando-os a identificar em qual área tecnológica eles podem ter mais afinidade e, assim, direcionar seu foco para aprimorar suas habilidades naquela área específica.



Funções que deram origem ao gráfico:



// Calcula os totais e porcentagens

    $totais = array_map('array_sum', $categorias);
    $totalRespostas = array_sum($totais);'
    
    // Evita a divisão por zero
    $porcentagens = array_map(function ($total) use ($totalRespostas) {
        return $totalRespostas > 0 ? ($total / $totalRespostas) * 100 : 0;
    }, $totais);

    // Maior tendência
    $tendencia = array_keys($totais, max($totais))[0];

'
Para execução, é necessário instalar o Xampp, colocar a pasta no diretório htdocs, dar start em Apache e MySql e executar localmente!
