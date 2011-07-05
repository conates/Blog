<?php

/**
 * Pedidos actions.
 *
 * @package    Blog
 * @subpackage Blog
 * @author     Conates
 * @version    SVN: $Id: actions.class.php 923 2011-03-03 02:26:16Z conates $
 */
class pedidosActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        if (sfContext::getInstance()->getUser()->isAuthenticated()) {
            $this->pdi = Doctrine::getTable('Pedido')->getPedidosPendiente();
            if ($this->pdi) {

                $this->pedidos = Doctrine::getTable('Pedido')->getPedidosArticulos();

                //     die('<pre>'.print_r($this->pedidos,1).'</pre>');
            }
        }
        $this->formSign = new sfGuardFormSignin();
    }

    public function executeEnviarPedido(sfWebRequest $request) {
        if($request->getParameter('id')){
        $this->pdi = Doctrine::getTable('Pedido')->getCambiaPedido($request->getParameter('id'));
            $this->getUser()->setFlash('notice', 'Su pedido ha sido enviado, por favor dirijase a la oficina central para retirar los productos.');
        }
        
    }

    public function executeAgregaArticulo(sfWebRequest $request) {
        $this->pdi = Doctrine::getTable('Pedido')->getPedidosPendiente();
        if ($this->pdi) {
            $articulopedido = new PedidoTbArticulos;
            $articulopedido->setPedidoId($this->pdi);
            $articulopedido->setTbArticulosId($request->getParameter('id'));
            $articulopedido->save();

        } else {

            $pedidos = new Pedido();
            $pedidos->setUserId(sfContext::getInstance()->getUser()->getGuardUser()->getId());
            $pedidos->setEstado('Pendiente');
            $pedidos->setCreatedAt(date('Y-m-d h:i'));
            $pedidos->setUpdatedAt(date('Y-m-d h:i'));
            $pedidos->save();

            $articulopedido = new PedidoTbArticulos;
            $articulopedido->setPedidoId($pedidos->getId());
            $articulopedido->setTbArticulosId($request->getParameter('id'));
            $articulopedido->save();
        }

        $this->redirect('@pedidos');
    }

}
