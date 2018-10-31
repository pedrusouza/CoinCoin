<?php
class Contatos_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'usuarios';
    }
    /**
    * Formata os contatos para exibição dos dados na home
    *
    * @param array $contatos Lista dos contatos a serem formatados
    *
    * @return array
    */
    function Formatar($usuarios){
      if($usuarios){
        for($i = 0; $i < count($usuarios); $i++){
          $usuarios[$i]['editar_url'] = base_url('editar')."/".$usuarios[$i]['id'];
          $usuarios[$i]['excluir_url'] = base_url('excluir')."/".$usuarios[$i]['id'];
        }
        return $usuarios;
      } else {
        return false;
      }
    }
}