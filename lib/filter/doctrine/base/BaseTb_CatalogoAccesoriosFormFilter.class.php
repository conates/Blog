<?php

/**
 * Tb_CatalogoAccesorios filter form base class.
 *
 * @package    Blog
 * @subpackage filter
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTb_CatalogoAccesoriosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'           => new sfWidgetFormFilterInput(),
      'siacivadoweb'     => new sfWidgetFormFilterInput(),
      'nombreweb'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'siacivadoweb'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nombreweb'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tb_catalogo_accesorios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_CatalogoAccesorios';
  }

  public function getFields()
  {
    return array(
      'idallgestempresa' => 'Number',
      'idempresa'        => 'Number',
      'idcategoria'      => 'Number',
      'idaccesorio'      => 'Number',
      'nombre'           => 'Text',
      'siacivadoweb'     => 'Number',
      'nombreweb'        => 'Text',
    );
  }
}
