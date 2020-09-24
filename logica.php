<?php

class Logica
{
  protected $multiplos= [3, 5];
  protected $soma;

  public function __construct()
  {
    $this->soma= 0;
  }

  public function somaMultiplos(int $teto) : int
  {
    // soma menores que o teto (excludente)
    $teto--;

    if ($teto == 0) {
      return $this->soma;
    }

    if ($teto % $this->multiplos[0] == 0 or $teto % $this->multiplos[1] == 0) {
      $this->soma+= $teto;
    }

    return $this->somaMultiplos($teto);
  }
}


$obj= new Logica();
echo "{$obj->somaMultiplos(1000)}"."\n";
