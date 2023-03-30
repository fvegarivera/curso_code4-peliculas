<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class Categoria extends BaseController
{
    
  public function show($id) {
    $categoriaModel = new CategoriaModel();
    echo view('categoria/show', [
        'categoria' => $categoriaModel->find($id)
    ]);
  }

  public function new() {
    echo view('categoria/new', [
      'categoria' => [
        'title' => ''
      ]
    ]);  
  }

  public function create()
  {
    $categoriaModel = new CategoriaModel();
    $categoriaModel->insert([
      'title' => $this->request->getPost('title')
    ]);

    echo 'Categoria creada';
  }

  public function edit($id)
  {
    $categoriaModel = new CategoriaModel();
    echo view('categoria/edit', [
      'categoria' => $categoriaModel->find($id)
    ]);
  }

  public function update($id)
  {
    $categoriaModel = new CategoriaModel();
    $categoriaModel->update($id, [
      'title' => $this->request->getPost('title')
    ]);
    echo 'Categoria actualizada';
  }

  public function delete($id)
  {
    $categoriaModel = new CategoriaModel();
    $categoriaModel->delete($id);
    echo 'Categoria eliminada';
  }

  public function index() {
    $categoriaModel = new CategoriaModel();
    echo view('categoria/index', [
        'categorias' => $categoriaModel->findAll()
    ]);
  }

}
