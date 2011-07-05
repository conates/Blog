<?php

/**
 * PedidoTbArticulos filter form base class.
 *
 * @package    Blog
 * @subpackage filter
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePedidoTbArticulosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tb_articulos_id' => new sfWidgetFormFilterInput(),
      'pedido_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pedido'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'tb_articulos_id' => new sfValidatorPass(array('required' => false)),
      'pedido_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pedido'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('pedido_tb_articulos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PedidoTbArticulos';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'tb_articulos_id' => 'Text',
      'pedido_id'       => 'ForeignKey',
    );
  }
}
