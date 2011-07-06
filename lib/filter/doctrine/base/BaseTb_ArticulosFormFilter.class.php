<?php

/**
 * Tb_Articulos filter form base class.
 *
 * @package    Blog
 * @subpackage filter
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTb_ArticulosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcategoria'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idaccesorio'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombreweb'          => new sfWidgetFormFilterInput(),
      'textoweb'           => new sfWidgetFormFilterInput(),
      'modelo'             => new sfWidgetFormFilterInput(),
      'marca'              => new sfWidgetFormFilterInput(),
      'imagen'             => new sfWidgetFormFilterInput(),
      'idgrupoarticulo'    => new sfWidgetFormFilterInput(),
      'idsubgrupoarticulo' => new sfWidgetFormFilterInput(),
      'siactivadoweb'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idestado'           => new sfWidgetFormFilterInput(),
      'idestadoventas'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precioventa'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idcategoria'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idaccesorio'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombreweb'          => new sfValidatorPass(array('required' => false)),
      'textoweb'           => new sfValidatorPass(array('required' => false)),
      'modelo'             => new sfValidatorPass(array('required' => false)),
      'marca'              => new sfValidatorPass(array('required' => false)),
      'imagen'             => new sfValidatorPass(array('required' => false)),
      'idgrupoarticulo'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idsubgrupoarticulo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'siactivadoweb'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idestado'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idestadoventas'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'precioventa'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tb_articulos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_Articulos';
  }

  public function getFields()
  {
    return array(
      'idallgestempresa'   => 'Number',
      'idempresa'          => 'Number',
      'idarticulo'         => 'Text',
      'idcategoria'        => 'Number',
      'idaccesorio'        => 'Number',
      'nombreweb'          => 'Text',
      'textoweb'           => 'Text',
      'modelo'             => 'Text',
      'marca'              => 'Text',
      'imagen'             => 'Text',
      'idgrupoarticulo'    => 'Number',
      'idsubgrupoarticulo' => 'Number',
      'siactivadoweb'      => 'Number',
      'idestado'           => 'Number',
      'idestadoventas'     => 'Number',
      'precioventa'        => 'Number',
    );
  }
}
