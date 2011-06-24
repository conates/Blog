<?php

/**
 * Tb_CatalogoCategoria form base class.
 *
 * @method Tb_CatalogoCategoria getObject() Returns the current form's model object
 *
 * @package    Blog
 * @subpackage form
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTb_CatalogoCategoriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idallgestempresa' => new sfWidgetFormInputHidden(),
      'idempresa'        => new sfWidgetFormInputHidden(),
      'idcategoria'      => new sfWidgetFormInputHidden(),
      'nombre'           => new sfWidgetFormInputText(),
      'siacivadoweb'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idallgestempresa' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idallgestempresa')), 'empty_value' => $this->getObject()->get('idallgestempresa'), 'required' => false)),
      'idempresa'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idempresa')), 'empty_value' => $this->getObject()->get('idempresa'), 'required' => false)),
      'idcategoria'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcategoria')), 'empty_value' => $this->getObject()->get('idcategoria'), 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'siacivadoweb'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tb_catalogo_categoria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_CatalogoCategoria';
  }

}
