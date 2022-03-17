<?php 

namespace App\Models; 
use CodeIgniter\Model;

class ProdutoModel extends Model {
    protected $table = 'produtos'; //nome da tabela      
    protected $primaryKey = 'id'; //chave primaria
    protected $allowedFields = ['nomeproduto', 'valor', 'id_categoria' ];
    protected $returnType = 'object'; // pode ser array ou object 

    /*
    protected $validationRules = [
        'nomeproduto' => 'required | min_length[3] | alpha_numeric | is_unique[produto.nomeproduto]' , //nome do produto obrigatorio  | tem que ter 3 numeros no minimo | tem que ser letra ou numero | nao pode existir o mesmo produto na tabela produto 
        'valor' => 'required | numeric'
    ];
    */
}