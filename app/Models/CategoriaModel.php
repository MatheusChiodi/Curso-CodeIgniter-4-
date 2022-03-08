<?php 

namespace App\Models; 
use CodeIgniter\Model;

class CategoriaModel extends Model {
    protected $table = 'categoria'; //nome da tabela      
    protected $primaryKey = 'id'; //chave primaria
    protected $allowedFields = ['nomecategoria'];
    protected $returnType = 'object'; // pode ser array ou object 
}