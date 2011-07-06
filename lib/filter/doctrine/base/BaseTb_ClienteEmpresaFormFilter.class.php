<?php

/**
 * Tb_ClienteEmpresa filter form base class.
 *
 * @package    Blog
 * @subpackage filter
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTb_ClienteEmpresaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'correlativo'      => new sfWidgetFormFilterInput(),
      'giro'             => new sfWidgetFormFilterInput(),
      'fono'             => new sfWidgetFormFilterInput(),
      'celular'          => new sfWidgetFormFilterInput(),
      'fax'              => new sfWidgetFormFilterInput(),
      'email'            => new sfWidgetFormFilterInput(),
      'siclienteweb'     => new sfWidgetFormFilterInput(),
      'claveweb'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'correlativo'      => new sfValidatorPass(array('required' => false)),
      'giro'             => new sfValidatorPass(array('required' => false)),
      'fono'             => new sfValidatorPass(array('required' => false)),
      'celular'          => new sfValidatorPass(array('required' => false)),
      'fax'              => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorPass(array('required' => false)),
      'siclienteweb'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'claveweb'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tb_cliente_empresa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_ClienteEmpresa';
  }

  public function getFields()
  {
    return array(
      'idallgestempresa' => 'Number',
      'idempresa'        => 'Number',
      'idcliente'        => 'Text',
      'correlativo'      => 'Text',
      'giro'             => 'Text',
      'fono'             => 'Text',
      'celular'          => 'Text',
      'fax'              => 'Text',
      'email'            => 'Text',
      'siclienteweb'     => 'Number',
      'claveweb'         => 'Text',
    );
  }
}
