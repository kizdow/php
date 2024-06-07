<?php
    // comandos

    if (true) {
        echo "Hello World!";
    }

    //criação de variaveis
    $nome = "Ronaldo";
    $nomereal = "Felipe";
    $altura = 1.55;
    $verdadeiro = true;
    $sobrenome = "Rossatto";
    echo $nome;
    var_dump ($nomereal);
    var_dump ($altura);
    var_dump ($verdadeiro);
    var_dump ($sobrenome);

    //array
    $notas = [1,2,3,63,7,32,8];
    var_dump ($notas);
    echo "<br>";
    echo "<pre>";
    print_r ($notas);

    $notasComMateria = array (
        "matematica" => 4,
        "historia" => 6 
    );
    echo "<pre>";
    print_r($notasComMateria);

    // Objetos
    $objeto = new stdClass ();
    $objeto->nome = "Jair";

    // pular linhas
    PHP_EOL;
    echo "<br>";
    echo "<hr>";
    echo "<p>" . $nome . "</p>";

    // Criar função
    function soma ($a,$b) {
        return $a + $b;
    }

    $resultadoDaSoma = soma(4,5);
    echo $resultadoDaSoma;

    // Constante
    define ('PI', 3.14);
    echo PI;
?>