<?php

namespace App\Controllers; 

class Categorias extends BaseController
{
    public function index()
    {
        //chama uma view que exibe todas as categorias
        $categoriaModel = new \App\Models\CategoriaModel();
        $data['categorias'] = $categoriaModel->find();
        $data['titulo'] = 'Listando todas as categorias';
        $data['msg'] = $this->session->getFlashdata('msg');

        echo view('categorias', $data); 
    }
    public function inserir()
    {
        $data['titulo'] = 'Inserir nova categoria';
        $data['acao'] = 'inserir';
        $data['msg'] = '';
        if($this ->request->getMethod() === 'post')
        {
            $categoriaModel = new \App\Models\CategoriaModel();
            $categoriaModel -> set('nomecategoria', $this->request->getPost('nomecategoria'));

            if($categoriaModel ->insert())
            {
                $data['msg'] = 'Categoria inserida com sucesso';
            }else
            {
                $data['msg'] = 'Falha ao inserir categoria';
            }
        }

        echo view('categorias_form', $data);
    }
    public function editar($id)
    {
        $data['titulo'] = 'Editar categoria' . $id;
        $data['acao'] = 'editar';
        $data['msg'] = '';
        $categoriaModel = new \App\Models\CategoriaModel();
        $categoria = $categoriaModel->find($id);

        if($this->request->getMethod() === 'post')
        {
            //Quando o form for submetido
            $categoria ->nomecategoria = $this->request->getPost('nomecategoria');
            if($categoriaModel ->update($id, $categoria))
            {
                $data['msg'] = 'Categoria editada com sucesso';
            }else
            {
                $data['msg'] = 'Falha ao editar categoria';
            }
        }

        $data['categoria'] = $categoria; 
        echo view('categorias_form', $data);

    }
    public function excluir($id = null)
    {
        if(is_null($id))
        {
            $this->session->setFlashdata('msg', 'Categoria nao encontrada');//definir uma msg via session todas
            return redirect()->to(base_url('public/Categorias')); //redirecionar para o categoria/index
        }
        $categoriaModel = new \App\Models\CategoriaModel();
        if($categoriaModel->delete($id))
        {
            $this->session->setFlashdata('msg', 'Excluiu com sucesso');//definir uma msg via session todas
            return redirect()->to(base_url('public/Categorias')); //redirecionar para o categoria/index
        }else
        {
            $this->session->setFlashdata('msg', 'Falha ao excluir categoria');//definir uma msg via session todas
            return redirect()->to(base_url('public/Categorias')); //redirecionar para o categoria/index
        }
    }
}