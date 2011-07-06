<?php

/**
 * Tb_OfertasPorArticulo filter form base class.
 *
 * @package    Blog
 * @subpackage filter
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTb_OfertasPorArticuloFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'preciooferta'       => new sfWidgetFormFilterInput(),
      'fechaactualizacion' => new sfWidgetFormFilterInput(),
      'idusuario'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'preciooferta'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fechaactualizacion' => new sfValidatorPass(array('required' => false)),
      'idusuario'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tb_ofertas_por_articulo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_OfertasPorArticulo';
  }

  public function getFields()
  {
    return array(
      'idallgestempresa'   => 'Number',
      'idempresa'          => 'Number',
      'idarticulo'         => 'Text',
      'correlativooferta'  => 'Number',
      'bultooferta'        => 'Number',
      'preciooferta'       => 'Number',
      'fechaactualizacion' => 'Text',
      'idusuario'          => 'Text',
    );
  }
}
