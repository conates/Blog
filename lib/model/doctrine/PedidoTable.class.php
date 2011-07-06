<?php

/**
 * PedidoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PedidoTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object PedidoTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('Pedido');
    }

    public function getPedidosPendiente() {
        return Doctrine::getTable('Pedido')->findOneByUserIdAndEstado(sfContext::getInstance()->getUser()->getGuardUser()->getId(), 'Pendiente');
    }

    public function getPedidosArticulos() {

        $doctrine = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();
        $query = $doctrine->query("
                    EXEC sp_WEB_ConsultaPedido @Usuario = ".sfContext::getInstance()->getUser()->getGuardUser()->getId()."
                ");
        $this->pedidos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $this->pedidos;
    }
    public function getCambiaPedido($id_pedido){
        $pedido = Doctrine::getTable('Pedido')->findOneById($id_pedido);
        $pedido->set('estado', 'Por Revision');
        $pedido->save();
    }
}