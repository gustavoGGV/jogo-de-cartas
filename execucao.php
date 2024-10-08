<?php

require_once("modelo/Carta.php");

$Flamengo=array(1=>"Rossi", 2=>"Varela", 3=>"Léo Ortiz", 4=>"Léo Pereira", 5=>"Pulgar", 6=>"Ayrton Lucas", 7=>"Luiz Araújo", 8=>"Gerson", 9=>"Pedro", 10=>"Zico", 11=>"Cebolinha");

$Vasco=array(1=>"Léo Jardim", 2=>"Pumita", 3=>"Léo Pelé", 4=>"Maicon", 5=>"Souza", 6=>"Lucas Piton", 7=>"David", 8=>"Jair", 9=>"Bebeto", 10=>"Payet", 11=>"Coutinho");

$Fluminense=array(1=>"Fábio", 2=>"Samuel Xavier", 3=>"Thiago Silva", 4=>"Ignácio", 5=>"Facundo Bernal", 6=>"Diogo Barbosa", 7=>"Renato Augusto", 8=>"Martinelli", 9=>"John Kennedy", 10=>"Ganso", 11=>"Keno");

$Botafogo=array(1=>"Gatito", 2=>"Rafael", 3=>"Lucas Halter", 4=>"Mateo Ponte", 5=>"Danilo Barbosa", 6=>"Tchê Tchê", 7=>"Luiz Henrique", 8=>"Patrick de Paula", 9=>"Tiquinho", 10=>"Savarino", 11=>"Júnior Santos");

$Sao_Paulo=array(1=>"Rogério Ceni", 2=>"Igor Vinícius", 3=>"Jamal Lewis", 4=>"Santiago Longo", 5=>"Arboleda", 6=>"Welington", 7=>"Lucas Moura", 8=>"Galoppo", 9=>"Calleri", 10=>"Luciano", 11=>"Nestor");

$Santos=array(1=>"João Paulo", 2=>"Alex", 3=>"Hayner", 4=>"Gil", 5=>"João Schmidt", 6=>"Durval", 7=>"Pedrinho", 8=>"Rincón", 9=>"Julio Furch", 10=>"Pelé", 11=>"Guilherme");

$Corinthians=array(1=>"Hugo Souza", 2=>"Matheuzinho", 3=>"Félix Torres", 4=>"Caetano", 5=>"André Ramalho", 6=>"Diego Palacios", 7=>"Maycon", 8=>"Charles", 9=>"Yuri Alberto", 10=>"Garro", 11=>"Ángel Romero");

$Palmeiras=array(1=>"Mateus", 2=>"Marcos Rocha", 3=>"Edu Dracena", 4=>"Agustín Giay", 5=>"Aníbal Moreno", 6=>"Vanderlan", 7=>"Dudu", 8=>"Zé Rafael", 9=>"Felipe Anderson", 10=>"Rony", 11=>"Bruno Rodrigues");

$Flamengo_dicas=array("o time da carta possui 8 campeonatos brasileiros...", "'Em dezembro de 81...'", "o time da carta veste rubro-negro...");

$Vasco_dicas=array("o time da carta ganhou a Libertadores de 1998...", "o time da carta tem nome em homenagem a um navegador português...", "o nome do estádio do time da carta é 'São Januário'...");

$Fluminense_dicas=array("o time da carta é sediado no bairro de Laranjeiras, na Zona Sul do Rio de Janeiro...", "o time da carta veste as cores grená e verde escuro...", "o time da carta ganhou a Libertadores de 2023...");

$Botafogo_dicas=array("o time da carta possui o apelido de 'Glorioso'...", "o escudo do time da carta é 'uma estrela solitária'...", "o time da carta PIPOCOU fortemente no brasileirão de 2023...");

$Sao_Paulo_dicas=array("o time da carta possui 3 mundiais...", "o goleiro com mais gols na história é ídolo do time da carta...", "o mascote do time da carta é um 'velhinho' com barbas brancas...");

$Santos_dicas=array("o time da carta foi rebaixado pela primeira vez em sua história em 2023...", "o time da carta é conhecido por ter uma torcida 'velha'...", "o time da carta veste a cor branca...");

$Corinthians_dicas=array("o time da carta veste alvinegro...", "o time da carta possui 30 campeonatos paulistas...", "o time da carta possui 1 Libertadores e 2 Mundiais...");

$Palmeiras_dicas=array("o time da carta conquistou boa parte de seus títulos brasileiros na justiça...", "o time da carta veste alviverde...", "o estádio do time da carta é o Allianz Park...");

$times=array("Flamengo", "Vasco da Gama", "Fluminense", "Botafogo", "São Paulo", "Santos", "Corinthians", "Palmeiras");
$numeros=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);

$pontos=0;

$opcao=0;
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

            $valor=5;
            $opcao_adivinhar=0;

                $cartas=array();
                for($i=0; $i<8; $i++){
                    $carta=new Carta();
                    $carta->setTime($times[array_rand($times)]); 
                    /* Usando apenas "array_rand($times)", é retornado o índice. Deste jeito, a string do índice do array é retornada. */
                    $carta->setNumero(array_rand($numeros));
                    array_push($cartas, $carta);
                }
            
                $carta_escolhida_pc=array_rand($cartas);

                $i=0;
                while($i<count($cartas)){
                    echo "\nCarta " . $i+1 . ":\n" . $cartas[$i] . "\n";
                    $i++;
                }

            do{

                if($cartas[$carta_escolhida_pc]->getTime()==="Flamengo"){
                    echo "\nDica: " . $Flamengo_dicas[array_rand($Flamengo_dicas)] . "\n";
                } else if($cartas[$carta_escolhida_pc]->getTime()==="Vasco da Gama"){
                    echo "\nDica: " . $Vasco_dicas[array_rand($Vasco_dicas)] . "\n";
                } else if($cartas[$carta_escolhida_pc]->getTime()==="Fluminense"){
                    echo "\nDica: " . $Fluminense_dicas[array_rand($Fluminense_dicas)] . "\n";
                } else if($cartas[$carta_escolhida_pc]->getTime()==="Botafogo"){
                    echo "\nDica: " . $Botafogo_dicas[array_rand($Botafogo_dicas)] . "\n";
                } else if($cartas[$carta_escolhida_pc]->getTime()==="São Paulo"){
                    echo "\nDica: " . $Sao_Paulo_dicas[array_rand($Sao_Paulo_dicas)] . "\n";
                } else if($cartas[$carta_escolhida_pc]->getTime()==="Santos"){
                    echo "\nDica: " . $Santos_dicas[array_rand($Santos_dicas)] . "\n";
                } else if($cartas[$carta_escolhida_pc]->getTime()==="Corinthians"){
                    echo "\nDica: " . $Corinthians_dicas[array_rand($Corinthians_dicas)] . "\n";
                } else{
                    echo "\nDica: " . $Palmeiras_dicas[array_rand($Palmeiras_dicas)] . "\n";
                }

                $opcao_adivinhar=(readline("Escolha a carta que você acredita que foi sorteada (entre 1 e 8), ou digite 0 para desistir: "));
                $carta_escolhida_jogador=$opcao_adivinhar-1; // Queremos o índice.

                if($carta_escolhida_jogador===$carta_escolhida_pc){

                    if($valor==0){
                        "\nVocê escolheu a carta certa, porém ganhou nenhum ponto!\n";
                    } else{
                        echo "\nParabéns, você escolheu a carta certa! (+ " . $valor . " pontos)\n";
                        $pontos+=$valor;
                    }
                
                    if($cartas[$carta_escolhida_pc]->getTime()==="Flamengo"){

                        echo "\nJogadores deste time:\n1 - Ayrton Lucas\n2 - Cebolinha\n3 - Gerson\n4 - Léo Ortiz\n5 - Léo Pereira\n6 - Luiz Araújo\n7 - Pedro\n8 - Pulgar\n9 - Rossi\n10 - Varela\n11 - Zico\n";
                        
                        /* Maracutaia para pegar o jogador do número da carta (fiquei orgulhoso que deu certo :D). */
                        $jogador_certo=$Flamengo[$cartas[$carta_escolhida_pc]->getNumero()];

                    } else if($cartas[$carta_escolhida_pc]->getTime()==="Vasco da Gama"){

                        echo "\nJogadores deste time:\n1 - Bebeto\n2 - Coutinho\n3 - David\n4 - Jair\n5 - Léo Jardim\n6 - Léo Pelé\n7 - Lucas Piton\n8 - Maicon\n9 - Payet\n10 - Pumita\n11 - Souza\n";
                        
                        $jogador_certo=$Vasco[$cartas[$carta_escolhida_pc]->getNumero()];
                        
                    } else if($cartas[$carta_escolhida_pc]->getTime()==="Fluminense"){

                        echo "\nJogadores deste time:\n1 - Diogo Barbosa\n2 - Facundo Bernal\n3 - Fábio\n4 - Ganso\n5 - Ignácio\n6 - John Kennedy\n7 - Keno\n8 - Martinelli\n9 - Renato Augusto\n10 - Samuel Xavier\n11 - Thiago Silva\n";
                        
                        $jogador_certo=$Fluminense[$cartas[$carta_escolhida_pc]->getNumero()];
                        
                    } else if($cartas[$carta_escolhida_pc]->getTime()==="Botafogo"){

                        echo "\nJogadores deste time:\n1 - Danilo Barbosa\n2 - Gatito\n3 - Júnior Santos\n4 - Lucas Halter\n5 - Luiz Henrique\n6 - Mateo Ponte\n7 - Patrick de Paula\n8 - Rafael\n9 - Savarino\n10 - Tchê Tchê\n11 - Tiquinho\n";
                        
                        $jogador_certo=$Botafogo[$cartas[$carta_escolhida_pc]->getNumero()];
                        
                    } else if($cartas[$carta_escolhida_pc]->getTime()==="São Paulo"){

                        echo "\nJogadores deste time:\n1 - Arboleda\n2 - Calleri\n3 - Galoppo\n4 - Igor Vinícius\n5 - Jamal Lewis\n6 - Lucas Moura\n7 - Luciano\n8 - Nestor\n9 - Rogério Ceni\n10 - Santiago Longo\n11 - Welington\n";
                        
                        $jogador_certo=$Sao_Paulo[$cartas[$carta_escolhida_pc]->getNumero()];
                        
                    } else if($cartas[$carta_escolhida_pc]->getTime()==="Santos"){

                        echo "\nJogadores deste time:\n1 - Alex\n2 - Durval\n3 - Gil\n4 - Guilherme\n5 - Hayner\n6 - João Paulo\n7 - João Schmidt\n8 - Julio Furch\n9 - Pelé\n10 - Pedrinho\n11 - Rincón\n";
                        
                        $jogador_certo=$Santos[$cartas[$carta_escolhida_pc]->getNumero()];
                        
                    } else if($cartas[$carta_escolhida_pc]->getTime()==="Corinthians"){

                        echo "\nJogadores deste time:\n1 - André Ramalho\n2 - Ángel Romero\n3 - Caetano\n4 - Charles\n5 - Diego Palacios\n6 - Félix Torres\n7 - Garro\n8 - Hugo Souza\n9 - Matheuzinho\n10 - Maycon\n11 - Yuri Alberto\n";
                        
                        $jogador_certo=$Corinthians[$cartas[$carta_escolhida_pc]->getNumero()];
                        
                    } else{

                        echo "\nJogadores deste time:\n1 - Agustín Giay\n2 - Aníbal Moreno\n3 - Bruno Rodrigues\n4 - Dudu\n5 - Edu Dracena\n6 - Felipe Anderson\n7 - Marcos Rocha\n8 - Mateus\n9 - Rony\n10 - Vanderlan\n11 - Zé Rafael\n";
                        
                        $jogador_certo=$Palmeiras[$cartas[$carta_escolhida_pc]->getNumero()];
                        
                    }

                    $jogador_escolhido=(readline("Digite o nome do jogador que utiliza/utilizou este número neste clube e ganhe mais 10 pontos!: "));

                    if($jogador_escolhido===$jogador_certo){

                        echo "\nVocê acertou! (+10 pontos)\n\n";
                        $pontos+=10;
                        sleep(2);

                        break;

                    } else{

                        echo "\nQue pena, você errou...\n\n";
                        sleep(2);

                        break;

                    }

                } else if($carta_escolhida_jogador>$carta_escolhida_pc && $carta_escolhida_jogador<=count($cartas) && $opcao_adivinhar!=0 || $carta_escolhida_jogador<$carta_escolhida_pc && $carta_escolhida_jogador<=count($cartas) && $opcao_adivinhar!=0){

                    if($valor>1){
                        echo "\nQue pena, você errou... (-1 ponto caso acerte)\n";
                        $valor-=1;
                        sleep(2); // Function que adiciona um "delay" em segundos.
                    } else{
                        echo "\nEsta rodada vale apenas 1 ponto! Você errou muito!\n";
                        sleep(2);
                    }

                } else if($opcao_adivinhar!=0){

                    echo "\nOpção INVÁLIDA! Refazendo.\n";
                    sleep(2);

                }
            } while($opcao_adivinhar!=0);

            echo "\nVoltando para o menu...\n";
            sleep(2);

            break;

        case 2:

            echo "\nSeus pontos: " . $pontos . ".\n";

            break;

        default:

            echo "\nOpção INVÁLIDA!\n";

    }
} while($opcao!=0);
