<?php

/**
 * sfGuardForgotPassword form base class.
 *
 * @method sfGuardForgotPassword getObject() Returns the current form's model object
 *
 * @package    Blog
 * @subpackage form
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardForgotPasswordForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'), 'add_empty' => false)),
      'unique_key' => new sfWidgetFormInputText(),
      'expires_at' => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormInputText(),
      'updated_at' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'))),
      'unique_key' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'expires_at' => new sfValidatorString(array('max_length' => 19)),
      'created_at' => new sfValidatorString(array('max_length' => 19)),
      'updated_at' => new sfValidatorString(array('max_length' => 19)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_forgot_password[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardForgotPassword';
  }

}
