<?php

/**
 * sfGuardUserPermission filter form base class.
 *
 * @package    Blog
 * @subpackage filter
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserPermissionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'created_at'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'created_at'    => new sfValidatorPass(array('required' => false)),
      'updated_at'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_permission_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserPermission';
  }

  public function getFields()
  {
    return array(
      'user_id'       => 'Number',
      'permission_id' => 'Number',
      'created_at'    => 'Text',
      'updated_at'    => 'Text',
    );
  }
}
