<?php

    // declaração de variaveis simples
    //$pagina_inicial = 'Principal';
    //$pagina_secundaria = 'Clientes';

    // declaração de variável composta (array)

    $menu_gestor =  ['Dashboard', 'Pedidos', 'Relatórios', 'Clientes', 'Vendas', 'Contas', 'Configurações', 'Perfil'];
    $menu_atendente =  ['Dashboard', 'Pedidos', 'Clientes', 'Vendas', 'Perfil'];

    // if(rand() % 2 == 0)
    // {
    //   $itens_de_menu = $menu_gestor;
    // }else{
    //   $itens_de_menu = $menu_atendente;
    // }

    // mesma coisa

    $itens_de_menu = rand() % 2 == 0 ? $menu_gestor : $menu_atendente;

    // variaveis do breadcrumb

    $breadcrumb_title = 'Relatório Mensal';

    $breadcrumb_path = ['Home', 'Vendas', 'Relatórios', 'Mensal'];

?>
