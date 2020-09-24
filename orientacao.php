<?php

class Objeto
{
  protected $largura= null;
  protected $altura= null;
  protected $profundidade= null;

  public function getLargura() : float
  {
    return $this->largura;
  }
  public function setLargura(float $val)
  {
    $this->largura= $val;
  }
  public function getAltura() : float
  {
    return $this->altura;
  }
  public function setAltura(float $val)
  {
    $this->altura= $val;
  }
  public function getProfundidade() : float
  {
    return $this->profundidade;
  }
  public function setProfundidade(float $val)
  {
    $this->profundidade= $val;
  }

  public function calculaVolume() : float
  {
    if ( is_null($this->largura)
      or is_null($this->altura)
      or is_null($this->profundidade)) {
        throw new Exception("ERRO: Todos os valores devem ser setados antes de calcular o volume");
      }
    return $this->largura * $this->altura * $this->profundidade;
  }
}


$obj= new Objeto();
$obj->setLargura(2);
$obj->setAltura(2);
$obj->setProfundidade(2);

echo $obj->calculaVolume();
