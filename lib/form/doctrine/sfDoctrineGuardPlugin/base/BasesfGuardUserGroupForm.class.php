<?php

/**
 * sfGuardUserGroup form base class.
 *
 * @method sfGuardUserGroup getObject() Returns the current form's model object
 *
 * @package    Blog
 * @subpackage form
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'    => new sfWidgetFormInputHidden(),
      'group_id'   => new sfWidgetFormInputHidden(),
      'created_at' => new sfWidgetFormInputText(),
      'updated_at' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'user_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
      'group_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('group_id')), 'empty_value' => $this->getObject()->get('group_id'), 'required' => false)),
      'created_at' => new sfValidatorString(array('max_length' => 19)),
      'updated_at' => new sfValidatorString(array('max_length' => 19)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserGroup';
  }

}
