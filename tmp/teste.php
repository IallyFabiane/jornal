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
                    return "<br><strong>PHP é multifuncional.</strong>";
                }
            }

            $noticia = new Noticia;
            print($noticia->imprimir()); /*-> significa a notação de ponto em PHP */
        ?>
    </body>
</html>