<?php

/**
 * Pedido filter form base class.
 *
 * @package    Blog
 * @subpackage filter
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePedidoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'    => new sfWidgetFormFilterInput(),
      'estado'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado'     => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorPass(array('required' => false)),
      'updated_at' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pedido_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pedido';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'user_id'    => 'Number',
      'estado'     => 'Text',
      'created_at' => 'Text',
      'updated_at' => 'Text',
    );
  }
}
