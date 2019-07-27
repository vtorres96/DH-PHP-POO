<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once ('./Conta.php');
            
            $p1 = new Conta();  
            $p1->setNomeConta("Abirosvaldo");
            $p1->setTipoConta("cc");
            $p1->abrirConta();
            $p1->depositarDinheiro(150);
            $p1->retirarDinheiro(200);
            $p1->depositarDinheiro(12);
            $p1->pagarTarifa();
            $p1->depositarDinheiro(100);
            $p1->cancelarConta();
            $p1->retirarDinheiro(10);
            $p1->pagarTarifa();
            echo "<pre>";
                var_dump($p1);
            echo "</pre>";
            
            $p2 = new Conta();
            $p2->setNomeConta("Jussara");
            $p2->setTipoConta("cp");
            $p2->abrirConta();
            echo "<pre>";
                var_dump($p2);
            echo "</pre>";
          
        ?>
    </body>
</html>
