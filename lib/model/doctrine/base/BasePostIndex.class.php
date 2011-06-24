<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PostIndex', 'doctrine');

/**
 * BasePostIndex
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $keyword
 * @property string $field
 * @property integer $position
 * @property integer $id
 * @property Post $Post
 * 
 * @method string    getKeyword()  Returns the current record's "keyword" value
 * @method string    getField()    Returns the current record's "field" value
 * @method integer   getPosition() Returns the current record's "position" value
 * @method integer   getId()       Returns the current record's "id" value
 * @method Post      getPost()     Returns the current record's "Post" value
 * @method PostIndex setKeyword()  Sets the current record's "keyword" value
 * @method PostIndex setField()    Sets the current record's "field" value
 * @method PostIndex setPosition() Sets the current record's "position" value
 * @method PostIndex setId()       Sets the current record's "id" value
 * @method PostIndex setPost()     Sets the current record's "Post" value
 * 
 * @package    Blog
 * @subpackage model
 * @author     Conates
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePostIndex extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('post_index');
        $this->hasColumn('keyword', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('field', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('position', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Post', array(
             'local' => 'id',
             'foreign' => 'id'));
    }
}