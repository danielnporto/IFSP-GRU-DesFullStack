<?php

// Definição de uma classe
// Representa um conjunto de elementos que possuem as mesmas caracteristicas


// $alunos = [
//     'a1' => ['nome' => 'Carlos', 'sobrenome' => 'Henrique', 'idade' => 22],
//     'a2' => ['nome' => 'Thiago', 'sobrenome' => 'Abulquerque', 'idade' => 24],
//     'a3' => ['nome' => 'Ana', 'sobrenome' => 'Laura', 'idade' => 21],
//     'a4' => ['nome' => 'Pietra', 'sobrenome' => 'Boop', 'idade' => 29],
//     'a5' => ['nome' => 'João', 'sobrenome' => 'Ricardo', 'idade' => 21],
// ];

// foreach ($alunos as $aluno){
//     echo $aluno['nome'].' '.$aluno['sobrenome'].' - '.$aluno['idade'].'<br>';
// }

$a1 = new Aluno('Carlos', 'Henrique', 19);
$a2 = new Aluno('Thiago', 'Abulquerque', 24);
$a3 = new Aluno('Ana', 'Laura', 21);
$a4 = new Aluno('Pietra', 'Boop', 29);
$a5 = new Aluno('João', 'Ricardo', 21);

$alunos = [$a1, $a2, $a3, $a4, $a5];

foreach ($alunos as $aluno){
    $aluno->falarNome().'<br>';
}
