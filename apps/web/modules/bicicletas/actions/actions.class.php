<?php

/**
 * AllTrips actions.
 *
 * @package    Blog
 * @subpackage Blog
 * @author     Conates
 * @version    SVN: $Id: actions.class.php 923 2011-03-03 02:26:16Z conates%hosting.acid.cl $
 */
class bicicletasActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {

        $this->formSign = new sfGuardFormSignin();
        $this->categorias = Doctrine::getTable('Tb_CatalogoCategoria')->getAllCatalogoCategoria();
        $this->accesorios = Doctrine::getTable('Tb_CatalogoAccesorios')->getAllCatalogoAccesorio();
        $this->articulos = Doctrine::getTable('Tb_Articulos')->getAllArticuloMoto();
    }

    public function executeMenu(sfWebRequest $request) {

        $this->accesorios = Doctrine::getTable('Tb_CatalogoAccesorios')->getAllCatalogoAccesorio($request->getParameter('id'));
        return $this->renderPartial('bicicletas/menu_accesorios', array('accesorios' => $this->accesorios));
        $this->setTemplate('index');
    }
    public function executeArticulos(sfWebRequest $request) {

        $this->articulos = Doctrine::getTable('Tb_Articulos')->getAllArticuloMoto($request->getParameter('id_categoria'),$request->getParameter('id_accesorio'));
    //   die('<pre>'.print_r($this->articulos,1).'</pre>');
        return $this->renderPartial('bicicletas/articulos', array('articulos' => $this->articulos));
        $this->setTemplate('index');
    }
}
