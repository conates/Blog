<?php

/**
 * Tb_ClienteEmpresa form base class.
 *
 * @method Tb_ClienteEmpresa getObject() Returns the current form's model object
 *
 * @package    Blog
 * @subpackage form
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTb_ClienteEmpresaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idallgestempresa' => new sfWidgetFormInputHidden(),
      'idempresa'        => new sfWidgetFormInputHidden(),
      'idcliente'        => new sfWidgetFormInputHidden(),
      'correlativo'      => new sfWidgetFormInputText(),
      'giro'             => new sfWidgetFormInputText(),
      'fono'             => new sfWidgetFormInputText(),
      'celular'          => new sfWidgetFormInputText(),
      'fax'              => new sfWidgetFormInputText(),
      'email'            => new sfWidgetFormInputText(),
      'siclienteweb'     => new sfWidgetFormInputText(),
      'claveweb'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idallgestempresa' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idallgestempresa')), 'empty_value' => $this->getObject()->get('idallgestempresa'), 'required' => false)),
      'idempresa'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idempresa')), 'empty_value' => $this->getObject()->get('idempresa'), 'required' => false)),
      'idcliente'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcliente')), 'empty_value' => $this->getObject()->get('idcliente'), 'required' => false)),
      'correlativo'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'giro'             => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'fono'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'celular'          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fax'              => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'email'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'siclienteweb'     => new sfValidatorInteger(array('required' => false)),
      'claveweb'         => new sfValidatorString(array('max_length' => 15, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tb_cliente_empresa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_ClienteEmpresa';
  }

}
