<?php

/**
 * Tb_CatalogoCategoria filter form base class.
 *
 * @package    Blog
 * @subpackage filter
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTb_CatalogoCategoriaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'           => new sfWidgetFormFilterInput(),
      'siacivadoweb'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'siacivadoweb'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tb_catalogo_categoria_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_CatalogoCategoria';
  }

  public function getFields()
  {
    return array(
      'idallgestempresa' => 'Number',
      'idempresa'        => 'Number',
      'idcategoria'      => 'Number',
      'nombre'           => 'Text',
      'siacivadoweb'     => 'Number',
    );
  }
}
