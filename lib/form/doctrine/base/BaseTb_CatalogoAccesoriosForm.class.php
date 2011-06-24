<?php

/**
 * Tb_CatalogoAccesorios form base class.
 *
 * @method Tb_CatalogoAccesorios getObject() Returns the current form's model object
 *
 * @package    Blog
 * @subpackage form
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTb_CatalogoAccesoriosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idallgestempresa' => new sfWidgetFormInputHidden(),
      'idempresa'        => new sfWidgetFormInputHidden(),
      'idcategoria'      => new sfWidgetFormInputHidden(),
      'idaccesorio'      => new sfWidgetFormInputHidden(),
      'nombre'           => new sfWidgetFormInputText(),
      'siacivadoweb'     => new sfWidgetFormInputText(),
      'nombreweb'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idallgestempresa' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idallgestempresa')), 'empty_value' => $this->getObject()->get('idallgestempresa'), 'required' => false)),
      'idempresa'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idempresa')), 'empty_value' => $this->getObject()->get('idempresa'), 'required' => false)),
      'idcategoria'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcategoria')), 'empty_value' => $this->getObject()->get('idcategoria'), 'required' => false)),
      'idaccesorio'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idaccesorio')), 'empty_value' => $this->getObject()->get('idaccesorio'), 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'siacivadoweb'     => new sfValidatorNumber(array('required' => false)),
      'nombreweb'        => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tb_catalogo_accesorios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_CatalogoAccesorios';
  }

}
