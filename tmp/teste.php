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
                    echo '<br>O valor de num1 é 1.<br>';
                    break;
                default:
                    echo 'Fim... ';
                    break;
            }
           
            $num = 5;

            for($i = 0; $i < $num; $i++) {
                echo strval($i) . " é menor que 5.<br> "; /*strval é usado para converter para string */
            }

            $arr = array("a", "b", "c"); /*pode ser escrito também assim: $arr = [elements] */
            $arr[] = "d";
            $arr[4] = "e";
            $arr1 = array("id"=> 1, "nomes"=>array("Ially", "Fabiane"));
            array_push($arr,"f");
            print_r($arr);
            print("<br>");
            print_r($arr1);
            print("<br>");
            print($arr1["id"]);
            print("<br>");
            print($arr1["nomes"][0]);

            $buffer = array("id"=> 1, "nomes"=>array("Ially", "Fabiane"));
            $objeto = json_decode(json_encode($buffer));
            print("<br>");
            print_r($objeto);
            print("<br>");
            echo $objeto->nomes[0];
            print("<br>");

            for ($i = 0; $i < count($arr1["nomes"]); $i++) {
                echo "Nome: " . $arr1["nomes"][$i] . "<br>";
            }

            $obj = json_decode(file_get_contents(dirname(__FILE__) . "/exemplo.json"));

            echo "ID: " . $obj->id . "\n";
            echo "Nome: " . $obj->nome . "\n";
            
            foreach ($obj->contatos as $contato) {
                $tipo = key($contato);
                $valor = $contato->$tipo;
                
                echo "Tipo de Contato: " . $tipo . "\n";
                echo "Valor do Contato: " . $valor . "\n";
            }  
           
            $frutas = (object) array(
                "tropical" => "melancia",
                "vermelha" => "framboesa",
                "cítrica" => "laranja"
            );
            
            foreach ($frutas as $chave => $valor) {
                echo "Tipo de Fruta: " . $chave . "\n";
                echo "Nome da Fruta: " . $valor . "\n";
            }
            
            /*Essa sintaxe é uma forma simplificada de criar objetos em PHP e é útil quando você precisa de objetos simples sem criar uma classe completa. Se você precisar de mais funcionalidade ou lógica, é recomendado criar suas próprias classes.




 */
            
        ?>  
    </body>
</html>