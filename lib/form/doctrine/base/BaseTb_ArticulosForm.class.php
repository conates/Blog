<?php

/**
 * Tb_Articulos form base class.
 *
 * @method Tb_Articulos getObject() Returns the current form's model object
 *
 * @package    Blog
 * @subpackage form
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTb_ArticulosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idallgestempresa'   => new sfWidgetFormInputHidden(),
      'idempresa'          => new sfWidgetFormInputHidden(),
      'idarticulo'         => new sfWidgetFormInputHidden(),
      'idcategoria'        => new sfWidgetFormInputText(),
      'idaccesorio'        => new sfWidgetFormInputText(),
      'nombreweb'          => new sfWidgetFormInputText(),
      'textoweb'           => new sfWidgetFormTextarea(),
      'modelo'             => new sfWidgetFormInputText(),
      'marca'              => new sfWidgetFormInputText(),
      'imagen'             => new sfWidgetFormInputText(),
      'idgrupoarticulo'    => new sfWidgetFormInputText(),
      'idsubgrupoarticulo' => new sfWidgetFormInputText(),
      'siactivadoweb'      => new sfWidgetFormInputText(),
      'idestado'           => new sfWidgetFormInputText(),
      'idestadoventas'     => new sfWidgetFormInputText(),
      'precioventa'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idallgestempresa'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idallgestempresa')), 'empty_value' => $this->getObject()->get('idallgestempresa'), 'required' => false)),
      'idempresa'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idempresa')), 'empty_value' => $this->getObject()->get('idempresa'), 'required' => false)),
      'idarticulo'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idarticulo')), 'empty_value' => $this->getObject()->get('idarticulo'), 'required' => false)),
      'idcategoria'        => new sfValidatorInteger(),
      'idaccesorio'        => new sfValidatorInteger(),
      'nombreweb'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'textoweb'           => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'modelo'             => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'marca'              => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'imagen'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'idgrupoarticulo'    => new sfValidatorInteger(array('required' => false)),
      'idsubgrupoarticulo' => new sfValidatorInteger(array('required' => false)),
      'siactivadoweb'      => new sfValidatorInteger(),
      'idestado'           => new sfValidatorInteger(array('required' => false)),
      'idestadoventas'     => new sfValidatorInteger(),
      'precioventa'        => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tb_articulos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_Articulos';
  }

}
