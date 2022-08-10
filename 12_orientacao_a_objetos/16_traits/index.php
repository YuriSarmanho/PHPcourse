<?php

 trait Objeto{
    public function teste(){
        echo "Testando trait de objetos <br>";
    }
 }

 trait Testando{
    public function traitTestando(){
        echo "Esta método é da trait Testando <br>";
    }
 }


 class Central{
    use Objeto;
    use Testando;
 }

 $x = new Central;

 $x -> teste();

 $x->traitTestando();