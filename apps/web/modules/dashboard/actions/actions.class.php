<?php

/**
 * AllTrips actions.
 *
 * @package    Blog
 * @subpackage Blog
 * @author     Conates
 * @version    SVN: $Id: actions.class.php 923 2011-03-03 02:26:16Z conates%hosting.acid.cl $
 */
class dashboardActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        
 //       $doctrine = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();
 //       $query = $doctrine->query("exec sp_WEB_ConsultaArticulosVenta @IDAllgestEmpresa = 2, @IDEmpresa = 1,@IDEstado = 1, @RutCliente =");
 //       $this->a = $query->fetchAll(PDO::FETCH_ASSOC);        
 //       die('<pre>'.print_r($this->a,1)."</pre>");
        $this->formSign = new sfGuardFormSignin();
    }

}
