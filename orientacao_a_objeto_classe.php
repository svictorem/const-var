<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <?php 
    //definindo uma classe
        class Carro {
            //ojetos atributos
            public $marca;
            public $modelo;
            public $ano;
            public $cor;
            public $velocidade =0;

            //metodos
            public function acelerar(){
                $this -> velocidade >=10;
                echo "O carro acelerou. A velociade e igual: " . $this->velocidade . "Km/h";
            }

            //segundo metodo
            public function frear(){
                if($this -> velocidade >=10){
                    $this->velocidade -=10;
                }else{
                    $this->velocidade = 0;
                }
                echo "Velociade e igual: " . $this->velocidade . "Km/h";
            }
            
        }
        
        $meuCarro = new Carro();
        $meuCarro->marca = "Toyota";
        $meuCarro->acelerar(); // Velocidade vai para 10
        $meuCarro->acelerar(); // Velocidade vai para 20
        $meuCarro->frear();    // Velocidade volta para 10

    
    ?>
    
</body>
</html>