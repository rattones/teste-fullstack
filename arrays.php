<?php

class Estados
{
  private $siglas= ['ES', 'MG', 'RJ', 'SP'];
  private $nomes= ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espirito Santo'];

  public function buscaEstado(string $sigla) : string
  {
    $retorno= '';
    foreach ($this->nomes as $n) {
      // comparação, esta simples comparação já resolve o problema
      // para os estados requeridos mas não resolveria para todos os estados
      if (substr($n, 0, 1) == substr($sigla, 0, 1)) {
        $retorno= $n;
      }
    }

    return $retorno;
  }

  public function montaArray() : array
  {

    $estados= [];
    // percorrendo o array de siglas
    foreach ($this->siglas as $s) {
      $estados[$s]= $this->buscaEstado($s);
    }

    return $estados;
  }

  public function imprimeEstados()
  {
    foreach ($this->montaArray() as $k=>$v) {
      echo "{$k}-{$v}"."\n";
    }
  }
}

$obj= new Estados();
$obj->imprimeEstados();
