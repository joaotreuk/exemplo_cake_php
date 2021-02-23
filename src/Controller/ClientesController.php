<?php

class ClientesController extends AppController{
  function index() { //da visão index
    $registros=$this->Cliente->find('all', //chama o método find
      array(
        'order'=>array('Cliente.nome'=>'asc') //parâmetros de ordem
      )
    );

    $this->set('clientes', $registros); //publica a variável para a visão
  }
}

?>