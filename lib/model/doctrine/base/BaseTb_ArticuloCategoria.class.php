<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tb_ArticuloCategoria', 'doctrine');

/**
 * BaseTb_ArticuloCategoria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property float $idallgestempresa
 * @property float $idempresa
 * @property string $idarticulo
 * @property float $idcategoria
 * @property float $idaccesorio
 * 
 * @method float                getIdallgestempresa() Returns the current record's "idallgestempresa" value
 * @method float                getIdempresa()        Returns the current record's "idempresa" value
 * @method string               getIdarticulo()       Returns the current record's "idarticulo" value
 * @method float                getIdcategoria()      Returns the current record's "idcategoria" value
 * @method float                getIdaccesorio()      Returns the current record's "idaccesorio" value
 * @method Tb_ArticuloCategoria setIdallgestempresa() Sets the current record's "idallgestempresa" value
 * @method Tb_ArticuloCategoria setIdempresa()        Sets the current record's "idempresa" value
 * @method Tb_ArticuloCategoria setIdarticulo()       Sets the current record's "idarticulo" value
 * @method Tb_ArticuloCategoria setIdcategoria()      Sets the current record's "idcategoria" value
 * @method Tb_ArticuloCategoria setIdaccesorio()      Sets the current record's "idaccesorio" value
 * 
 * @package    Blog
 * @subpackage model
 * @author     Conates
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTb_ArticuloCategoria extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tb_ArticuloCategoria');
        $this->hasColumn('idallgestempresa', 'float', 12, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('idempresa', 'float', 12, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('idarticulo', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 15,
             ));
        $this->hasColumn('idcategoria', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('idaccesorio', 'float', 7, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 7,
             ));

        $this->option('collate', 'SQL_Latin1_General_CP850_CI_AS');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}