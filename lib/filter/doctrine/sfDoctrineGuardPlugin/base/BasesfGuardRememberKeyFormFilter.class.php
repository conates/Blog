<?php

/**
 * sfGuardRememberKey filter form base class.
 *
 * @package    Blog
 * @subpackage filter
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfGuardRememberKeyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'), 'add_empty' => true)),
      'remember_key' => new sfWidgetFormFilterInput(),
      'ip_address'   => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SfGuardUser'), 'column' => 'id')),
      'remember_key' => new sfValidatorPass(array('required' => false)),
      'ip_address'   => new sfValidatorPass(array('required' => false)),
      'created_at'   => new sfValidatorPass(array('required' => false)),
      'updated_at'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_remember_key_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardRememberKey';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'user_id'      => 'ForeignKey',
      'remember_key' => 'Text',
      'ip_address'   => 'Text',
      'created_at'   => 'Text',
      'updated_at'   => 'Text',
    );
  }
}
