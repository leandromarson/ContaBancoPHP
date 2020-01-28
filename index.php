<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <title>Conta Banco PHP Poo</title>
    </head>
    <body>
        <div id = "interface">
            <header id ="cabecalho">
            	<hgroup>
                    <h1>Site Conta Banco</h1>
                        <h2>POO em PHP</h2>
		</hgroup>						
            </header>
            <pre>
            <?php
                require_once 'ContaBanco.php';
                $p1 = new ContaBanco();
                $p2 = new ContaBanco();
                
                $p1->abrirConta("CC");
                $p1->setNumConta(1111);
                $p1->setDono("Jubileu");
                
              
                $p2->abrirConta("CP");
                $p2->setNumConta(2222);
                $p2->setDono("Aristides");
                
                $p1->depositar(300);
                $p2->depositar(500);
                
                $p2->sacar(100);
                
                $p1->fecharConta();
                $p2->fecharConta();
                
                $p1->sacar(350);
                $p1->fecharConta();
                
                $p2->sacar(550);
                $p2->fecharConta();
                
                print_r($p1);
                print_r($p2);
                
                



            ?>
            </pre>
            <footer id= "rodape">
			<p>2020 - by Leandro Marson Ribeiro<br>
            </footer> 
        </div>    
    </body>
</html>
