<?php

/**
 * PedidoTbArticulos form base class.
 *
 * @method PedidoTbArticulos getObject() Returns the current form's model object
 *
 * @package    Blog
 * @subpackage form
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePedidoTbArticulosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'tb_articulos_id' => new sfWidgetFormInputText(),
      'pedido_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pedido'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tb_articulos_id' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'pedido_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pedido'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pedido_tb_articulos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PedidoTbArticulos';
  }

}
