<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Comment', 'doctrine');

/**
 * BaseComment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $url
 * @property string $comment
 * @property string $state
 * @property integer $user_id
 * @property integer $post_id
 * @property string $created_at
 * @property string $updated_at
 * @property Post $Post
 * @property Doctrine_Collection $sfGuardUser
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getEmail()       Returns the current record's "email" value
 * @method string              getUrl()         Returns the current record's "url" value
 * @method string              getComment()     Returns the current record's "comment" value
 * @method string              getState()       Returns the current record's "state" value
 * @method integer             getUserId()      Returns the current record's "user_id" value
 * @method integer             getPostId()      Returns the current record's "post_id" value
 * @method string              getCreatedAt()   Returns the current record's "created_at" value
 * @method string              getUpdatedAt()   Returns the current record's "updated_at" value
 * @method Post                getPost()        Returns the current record's "Post" value
 * @method Doctrine_Collection getSfGuardUser() Returns the current record's "sfGuardUser" collection
 * @method Comment             setId()          Sets the current record's "id" value
 * @method Comment             setName()        Sets the current record's "name" value
 * @method Comment             setEmail()       Sets the current record's "email" value
 * @method Comment             setUrl()         Sets the current record's "url" value
 * @method Comment             setComment()     Sets the current record's "comment" value
 * @method Comment             setState()       Sets the current record's "state" value
 * @method Comment             setUserId()      Sets the current record's "user_id" value
 * @method Comment             setPostId()      Sets the current record's "post_id" value
 * @method Comment             setCreatedAt()   Sets the current record's "created_at" value
 * @method Comment             setUpdatedAt()   Sets the current record's "updated_at" value
 * @method Comment             setPost()        Sets the current record's "Post" value
 * @method Comment             setSfGuardUser() Sets the current record's "sfGuardUser" collection
 * 
 * @package    Blog
 * @subpackage model
 * @author     Conates
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseComment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comment');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('email', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('url', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('comment', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('state', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('post_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'string', 19, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 19,
             ));
        $this->hasColumn('updated_at', 'string', 19, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 19,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Post', array(
             'local' => 'post_id',
             'foreign' => 'id'));

        $this->hasMany('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}