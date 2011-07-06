<?php

/**
 * Tb_ArticuloCategoria filter form base class.
 *
 * @package    Blog
 * @subpackage filter
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTb_ArticuloCategoriaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('tb_articulo_categoria_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_ArticuloCategoria';
  }

  public function getFields()
  {
    return array(
      'idallgestempresa' => 'Number',
      'idempresa'        => 'Number',
      'idarticulo'       => 'Text',
      'idcategoria'      => 'Number',
      'idaccesorio'      => 'Number',
    );
  }
}
