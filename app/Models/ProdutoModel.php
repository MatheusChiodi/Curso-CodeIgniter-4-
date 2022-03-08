<?php 

namespace App\Models; 
use CodeIgniter\Model;

class ProdutoModel extends Model {
    protected $table = 'produtos'; //nome da tabela      
    protected $primaryKey = 'id'; //chave primaria
    protected $allowedFields = ['nomeproduto', 'valor', 'id_categoria' ];
    protected $returnType = 'object'; // pode ser array ou object 
}