<?php

/**
 * Tb_OfertasPorArticulo form base class.
 *
 * @method Tb_OfertasPorArticulo getObject() Returns the current form's model object
 *
 * @package    Blog
 * @subpackage form
 * @author     Conates
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTb_OfertasPorArticuloForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idallgestempresa'   => new sfWidgetFormInputHidden(),
      'idempresa'          => new sfWidgetFormInputHidden(),
      'idarticulo'         => new sfWidgetFormInputHidden(),
      'correlativooferta'  => new sfWidgetFormInputHidden(),
      'bultooferta'        => new sfWidgetFormInputHidden(),
      'preciooferta'       => new sfWidgetFormInputText(),
      'fechaactualizacion' => new sfWidgetFormInputText(),
      'idusuario'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idallgestempresa'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idallgestempresa')), 'empty_value' => $this->getObject()->get('idallgestempresa'), 'required' => false)),
      'idempresa'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idempresa')), 'empty_value' => $this->getObject()->get('idempresa'), 'required' => false)),
      'idarticulo'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idarticulo')), 'empty_value' => $this->getObject()->get('idarticulo'), 'required' => false)),
      'correlativooferta'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('correlativooferta')), 'empty_value' => $this->getObject()->get('correlativooferta'), 'required' => false)),
      'bultooferta'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('bultooferta')), 'empty_value' => $this->getObject()->get('bultooferta'), 'required' => false)),
      'preciooferta'       => new sfValidatorInteger(array('required' => false)),
      'fechaactualizacion' => new sfValidatorString(array('max_length' => 19, 'required' => false)),
      'idusuario'          => new sfValidatorString(array('max_length' => 15, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tb_ofertas_por_articulo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tb_OfertasPorArticulo';
  }

}
