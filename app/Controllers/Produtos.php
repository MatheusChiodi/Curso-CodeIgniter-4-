<?php 

namespace App\Controllers;

class Produtos extends BaseController
{
    public function index()
    {
        //chama uma view que exibe todas os produtos
        $categoriaModel = new \App\Models\ProdutoModel();
        $data['produtos'] = $categoriaModel->find();
        $data['titulo'] = 'Listando todos os produtos';
        $data['msg'] = $this->session->getFlashdata('msg');

        echo view('produtos', $data); 
    }

    public function inserir()
    {   
        $data['msg'] = '';
        $data['titulo'] = 'Inserir novo produto';
        $data['acao'] = 'inserir';
        $data['erros'] = '';
           
        $categoriaModel = new \App\Models\CategoriaModel();
        $listaCategorias = $categoriaModel->findAll(); 

        helper('form');
        $arrayCategorias = [];
        foreach($listaCategorias as $categoria){
            $arrayCategorias[$categoria->id] = $categoria->nomecategoria; 
        }
        $data['comboCategorias'] = form_dropdown('categoria_id', $arrayCategorias);

        if($this ->request->getMethod() === 'post')
        {
            $produtoModel = new \App\Models\ProdutoModel();
            $produtoModel -> set('nomeproduto', $this->request->getPost('nomeproduto'));
            $produtoModel -> set('valor', $this->request->getPost('valor'));
            $produtoModel -> set('id_categoria', $this->request->getPost('categoria_id'));

            if($produtoModel ->insert())
            {
                $data['msg'] = 'Produto inserido com sucesso';
            }else
            {
                $data['msg'] = 'Falha ao inserir produto';
                $data['erros'] = $produtoModel->errors();
            }
            echo view('produtos_form', $data); 
        }else{
            echo view('produtos_form', $data); 
        }
        
    }
}