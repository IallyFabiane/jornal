<html>
    <body>
        <?php 
            echo "hello world, my name is ";
            $nome = " Ially! ";
            print "$nome<br>";

            $boll = true;
            print "$boll<br>";

            $group = array("hello", "world");
            print_r($group);

            class Noticia {
                function imprimir() {
                    return "<br><strong>PHP é multifuncional.<br></strong>";
                }
            }

            $noticia = new Noticia;
            print($noticia->imprimir()); /*-> significa a notação de ponto em PHP */
            
            define("TOTAL", 100);
            print(TOTAL . " ");/*1ª forma de escrever constantes*/

            const TOTAL2 = 200;
            echo  "<br> " . TOTAL2 ."<br> "; /*2ª forma de escrever constantes*/
        
            $a = 1;
            echo gettype($a) . "<br>";

            $a = (double)1;
            echo gettype($a) . "<br>";

            $num1 = 1;
            $num2 = 2;

            echo $num1 + $num2 . " "; /*operação de adição*/
            echo $num1 - $num2 . " "; /*operação de subtração*/
            echo $num1 * $num2 . " "; /*operação de multiplicação*/
            echo $num1 / $num2 . " "; /*operação de divisão*/
            echo $num1 % $num2 . " "; /*operação de divisão*/
            echo $num1 == $num2 . " "; /*operação de igualdade*/
            echo $num1 != $num2 . " "; /*operação de desigualdade*/
            echo $num1 >= $num2 . " "; /*operação de comparação*/
            echo $num1 <= $num2 . " "; /*operação de comparação*/
            echo $num1 > $num2 . " "; /*operação de comparação*/
            echo $num1 < $num2 . " "; /*operação de comparação*/
            echo !($num1 < $num2). " "; /*operação de negação*/
            echo ($num1 < $num2) && ($num1 > $num2)  . " "; /*operador AND*/
            echo ($num1 < $num2) || ($num1 > $num2)  . " "; /*operador OR*/

            if ($num1 > $num2) {
                echo '<font color="red">';
                echo '<br>Num1 é maior que num2.';
                echo '</font>';
            } elseif ($num1 < $num2) {
                echo '<font color="red">';
                echo '<br>Num1 é menor que num2.';
                echo '</font>';
            } else {
                echo '<font color="red">';
                echo '<br>Num1 não é  menor nem maior que num2.';
                echo '</font>';
            }

            switch ($num1) {
                case 1:
                    echo '<br>O valor de num1 é 1.';
                    break;
                default:
                    echo 'Fim...';
                    break;
            }
           
        ?>
    </body>
</html>