<?php

namespace App\Http\Controllers;

use App\Models\Cadastros;
use Illuminate\Http\Request;

class CadastrosController extends Controller
{
  private $model;

  public function __construct(Cadastros $cadastros)
  {
    $this->model= $cadastros;
  }

  public function create(Request $request)
  {
    $cadastro= new Cadastros();
    $cadastro->id= uniqid();
    $cadastro->nome= $request->input('nome');
    $cadastro->email= $request->input('email');
    $cadastro->data_nascimento= $request->input('data_nascimento');
    $cadastro->telefone= $request->input('telefone');

    $cadastro->save();

    return response()->json($cadastro);
  }

  public function get(string $id= null)
  {
    // verifing to get one or all cadastros
    if (is_null($id)) {
      $cadastro= $this->model->all();
    } else {
      $cadastro= $this->model->find($id);
    }

    return response()->json($cadastro);
  }

  public function update(string $id, Request $request)
  {
    $cadastro= $this->model->find($id);
    $cadastro->nome= (!empty($request->input('nome')))?
      $request->input('nome'):
      $cadastro->nome;
    $cadastro->email= (!empty($request->input('email')))?
      $request->input('email'):
      $cadastro->email;
    $cadastro->data_nascimento= (!empty($request->input('data_nascimento')))?
      $request->input('data_nascimento'):
      $cadastro->data_nascimento;
    $cadastro->telefone= (!empty($request->input('telefone')))?
      $request->input('telefone'):
      $cadastro->telefone;

    $cadastro->update();

    return response()->json($cadastro);

  }

  public function delete(string $id)
  {
    $this->model->where('id', $id)->delete();

    return response()->json(null, 202);
  }
}
