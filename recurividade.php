<?php

class Recursividade
{
  static public function menorNumeroDivisivel(int $valor) : int
  {
    if ($valor % 2 == 0 and $valor % 3 == 0 and $valor % 10 == 0) {
      return $valor;
    }

    $valor++;
    return self::menorNumeroDivisivel($valor);
  }
}

echo Recursividade::menorNumeroDivisivel(1)."\n";
