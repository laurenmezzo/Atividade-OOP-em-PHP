<?php 
class Planta{
    public $nome;
    public $especie;
    public $cor;
    public $altura;
    public $idade;
    public $folhas;
    public $agua;

    public function crescer($centimetros){
        echo $this->nome.' tem '.$this->altura.' centimetros.<br>';
        $this->altura+=$centimetros;
        echo $this->nome.' cresceu '.$centimetros.' centimetros, atualizando sua altura para '.$this->altura.' centimetros.<br>';
    }
    public function regar($quantidade){
        $this->agua+=$quantidade;
        echo $this->nome.' recebeu '.$quantidade.'mls de água. Agora ela está com '.$this->agua.'mls no pote.<br>';
    }
    public function criarFolhas($quantidade){
        $this->folhas+=$quantidade;
        echo $this->nome.' criou '.$quantidade.' folhas. Agora ela tem '.$this->folhas.' folhas.<br>';
    }
}

$planta1 = new Planta();
$planta1->nome = "Fofura";
$planta1->altura = 15;
$planta1->folhas = 15;
$planta1->agua = 30;
$planta1->crescer(10);
$planta1->regar(100);
$planta1->criarFolhas(4);

?>