<?php

require_once("modelo/Carta.php");

$Flamengo=array(1=>"Rossi", 2=>"Varela", 3=>"Léo Ortiz", 4=>"Léo Pereira", 5=>"Pulgar", 6=>"Ayrton Lucas", 7=>"Luiz Araújo", 8=>"Gerson", 9=>"Pedro", 10=>"Zico", 11=>"Cebolinha");

$Vasco=array(1=>"Léo Jardim", 2=>"Pumita", 3=>"Léo Pelé", 4=>"Maicon", 5=>"Souza", 6=>"Lucas Piton", 7=>"David", 8=>"Jair", 9=>"Bebeto", 10=>"Payet", 11=>"Coutinho");

$Fluminense=array(1=>"Fábio", 2=>"Samuel Xavier", 3=>"Thiago Silva", 4=>"Ignácio", 5=>"Facundo Bernal", 6=>"Diogo Barbosa", 7=>"Renato Augusto", 8=>"Martinelli", 9=>"John Kennedy", 10=>"Ganso", 11=>"Keno");

$Botafogo=array(1=>"Gatito", 2=>"Rafael", 3=>"Lucas Halter", 4=>"Mateo Ponte", 5=>"Danilo Barbosa", 6=>"Tchê Tchê", 7=>"Luiz Henrique", 8=>"Gerson", 9=>"Pedro", 10=>"Zico", 11=>"Cebolinha");

$Sao_Paulo=array(1=>"Rossi", 2=>"Varela", 3=>"Léo Ortiz", 4=>"Léo Pereira", 5=>"Pulgar", 6=>"Ayrton Lucas", 7=>"Luiz Araújo", 8=>"Gerson", 9=>"Pedro", 10=>"Zico", 11=>"Cebolinha");

$Santos=array(1=>"Rossi", 2=>"Varela", 3=>"Léo Ortiz", 4=>"Léo Pereira", 5=>"Pulgar", 6=>"Ayrton Lucas", 7=>"Luiz Araújo", 8=>"Gerson", 9=>"Pedro", 10=>"Zico", 11=>"Cebolinha");

$Corinthians=array(1=>"Rossi", 2=>"Varela", 3=>"Léo Ortiz", 4=>"Léo Pereira", 5=>"Pulgar", 6=>"Ayrton Lucas", 7=>"Luiz Araújo", 8=>"Gerson", 9=>"Pedro", 10=>"Zico", 11=>"Cebolinha");

$Palmeiras=array(1=>"Rossi", 2=>"Varela", 3=>"Léo Ortiz", 4=>"Léo Pereira", 5=>"Pulgar", 6=>"Ayrton Lucas", 7=>"Luiz Araújo", 8=>"Gerson", 9=>"Pedro", 10=>"Zico", 11=>"Cebolinha");

$times=array("Flamengo", "Vasco da Gama", "Fluminense", "Botafogo", "São Paulo", "Santos", "Corinthians", "Palmeiras");
$numeros=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);
$cartas=array();

$opcao = 0;
do {
    echo "\n-----------MENU-----------\n";
    echo "| 1 - Adivinhar           |\n";
    echo "| 2 - Meus pontos         |\n";
    echo "| 0 - SAIR                |\n";
    echo "---------------------------\n";
    $opcao=readline("Escolha a opção: ");

    switch ($opcao){

        case 0:

            echo "\nPrograma encerrado!\n";
            break;

        case 1:

            for($i=0; $i<2; $i++){
                $carta=new Carta();
                $carta->setTime($times[array_rand($times)]); 
                /* Usando apenas "array_rand($times)", é retornado o índice. Deste jeito, a string do índice do array é retornada. */
                $carta->setNumero(array_rand($numeros));
                array_push($cartas, $carta);
            }
            
            $carta_escolhida_pc=array_rand($cartas);

            $i=0;
            while($i<count($cartas)){
                echo "Carta " . $i+1 . ":\n" . $cartas[$i] . "\n";
                $i++;
            }

            $carta_escolhida_jogador=(readline("Escolha a carta que você acredita que foi sorteada (entre 1 e 8): "));
            $carta_escolhida_jogador-=1; // Queremos o índice.

            if($carta_escolhida_jogador===$carta_escolhida_pc){

                echo "\nParabéns, você escolheu a carta certa! (+5 pontos)\n";
                


                $jogador_escolhido=(readline("Acerte qual jogador utiliza/utilizou este número neste clube e ganhe 10 pontos!: "));

            } else if($carta_escolhida_jogador>$carta_escolhida_pc && $carta_escolhida_jogador<=count($cartas) || $carta_escolhida_jogador<$carta_escolhida_pc && $carta_escolhida_jogador<=count($cartas)){

                echo "\nQue pena, você errou...\n";

            } else{

                echo "\nOpção INVÁLIDA!\n";

            }

            break;

        case 2:

            echo "Listando....\n";
            break;

        default:

            echo "\nOpção INVÁLIDA!\n";

    }
} while($opcao != 0);
