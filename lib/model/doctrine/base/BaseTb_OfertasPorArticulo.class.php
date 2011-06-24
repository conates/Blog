<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tb_OfertasPorArticulo', 'doctrine');

/**
 * BaseTb_OfertasPorArticulo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idallgestempresa
 * @property integer $idempresa
 * @property string $idarticulo
 * @property integer $correlativooferta
 * @property integer $bultooferta
 * @property integer $preciooferta
 * @property string $fechaactualizacion
 * @property string $idusuario
 * 
 * @method integer               getIdallgestempresa()   Returns the current record's "idallgestempresa" value
 * @method integer               getIdempresa()          Returns the current record's "idempresa" value
 * @method string                getIdarticulo()         Returns the current record's "idarticulo" value
 * @method integer               getCorrelativooferta()  Returns the current record's "correlativooferta" value
 * @method integer               getBultooferta()        Returns the current record's "bultooferta" value
 * @method integer               getPreciooferta()       Returns the current record's "preciooferta" value
 * @method string                getFechaactualizacion() Returns the current record's "fechaactualizacion" value
 * @method string                getIdusuario()          Returns the current record's "idusuario" value
 * @method Tb_OfertasPorArticulo setIdallgestempresa()   Sets the current record's "idallgestempresa" value
 * @method Tb_OfertasPorArticulo setIdempresa()          Sets the current record's "idempresa" value
 * @method Tb_OfertasPorArticulo setIdarticulo()         Sets the current record's "idarticulo" value
 * @method Tb_OfertasPorArticulo setCorrelativooferta()  Sets the current record's "correlativooferta" value
 * @method Tb_OfertasPorArticulo setBultooferta()        Sets the current record's "bultooferta" value
 * @method Tb_OfertasPorArticulo setPreciooferta()       Sets the current record's "preciooferta" value
 * @method Tb_OfertasPorArticulo setFechaactualizacion() Sets the current record's "fechaactualizacion" value
 * @method Tb_OfertasPorArticulo setIdusuario()          Sets the current record's "idusuario" value
 * 
 * @package    Blog
 * @subpackage model
 * @author     Conates
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTb_OfertasPorArticulo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tb_OfertasPorArticulo');
        $this->hasColumn('idallgestempresa', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'default' => 2,
             'length' => 4,
             ));
        $this->hasColumn('idempresa', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'default' => 1,
             'length' => 4,
             ));
        $this->hasColumn('idarticulo', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 15,
             ));
        $this->hasColumn('correlativooferta', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('bultooferta', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('preciooferta', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fechaactualizacion', 'string', 19, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'autoincrement' => false,
             'length' => 19,
             ));
        $this->hasColumn('idusuario', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'autoincrement' => false,
             'length' => 15,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}