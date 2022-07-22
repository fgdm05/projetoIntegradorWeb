<?php
require('cliente.php'); 
require('tipoServico.php');
class Agenda {
    private Cliente $cliente;
    private TipoServico $tipoServico;
    private DateTime $data;
    private DateTime $horario;

    function __construct(Cliente $cliente, TipoServico $tipoServico, DateTime $data, DateTime $horario) {
        $this->cliente = $cliente;
        $this->tipoServico = $tipoServico;
        $this->data = $data;
        $this->horario = $horario;
    }
    
    public function getCliente() {
        return $cliente;
    }
    public function getTipoServico() {
        return $tipoServico;
    }
    public function getData() {
        return $data;
    }
    public function getHorario() {
        return $horario;
    }
}
?>