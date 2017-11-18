<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php

            /*$cor = "blue"; // comentário em PHP sempre finalizar com ponto e vírgula
            $cor = "red";
            echo $cor; //para finalizar sempre com interrogação e sinal > e comentário usa barra asterisco
            var_dump($cor);*/ 
      
           /* $a = 2;
            $b = 4;
            
           /* $resultado = $a + $b;*/
      
            /*$resultado = $a - $b;*/
           /* 
            if ($a > $b) {
              echo "a maior que b";
            } else if($a == $b) {
              echo "a é igual a b";
            } else {
              echo "a é maior que b";
            } */
      
            /*$i = 1;
      
            while($i < 10) {
              $i = $i + 1;
              echo $i . "<br>";
            }*/
      
           /* $i = 1;
      
            while($i < 10) {
              $i = $i +1;
            
              if($i%2 == 0) {
                //echo "O valor de " . $i . "é par<br>";
                echo "o valor de $i é par <br>";
              } else {
                //echo "O valor de " . $i . "é impar<br>";
                 echo "o valor de $i é ímpar <br>";
              }
            }*/
      
            /*for($i = 1; $i <= 5; $i++) {
              echo "o valor de i é: $i <br>";
            }*/
      
            /*$nome = "João";
      
            switch ($nome) {
              case "Ana":
                echo "Olá Ana";
                break; 
                
              case "Pedro":
                echo "Olá Pedro";
                break;
              
              default:
                echo "Não sei quem é você";
            }*/
      
           /* function soma($a, $b) {
              $resultado = $a + $b;
              return $resultado;
             }
            
             $numero1 = 23;
             $numero2 = 20;
      
             $resultado_funcao= soma($numero1, $numero2);
      
             echo $resultado_funcaouncao;*/
      
           /* $cores = ["vermelho" , "azul"];
            echo $cores[0];*/
      
            /*$pessoa = ["nome" => "Ana" , "idade" => 23];
            echo $pessoa["nome"];*/
      
           /* $numeros = [1, 2, 3];
            array_push($numeros, 4);
            echo $numeros[3];*/
      
            /*$frutas = array ("maça", "laranja", "morango");
      
            foreach($frutas as $fruta) {
              echo "A fruta é $fruta<br>";
            }*/
      
            $Comidas = array ("macarrão", "carne", "legumes");
            foreach($Comidas as $Comida) {
              echo "A minha comida favorira é $Comida <br>";
            }
      
           array_pop($Comidas);
           foreach($Comidas as $Comida) {
              echo "A minha comida favorira é $Comida <br>";
            }
       
            
      
      
      ?>
      
                      
       

    </body>
</html>