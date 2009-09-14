<?php

/**
 * BaseAlCarrier
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property float $al_conc
 * @property float $del_al_conc
 * @property date $in_service_date
 * @property string $mfg_lot_no
 * @property string $notes
 * @property string $in_use
 * @property Doctrine_Collection $Batch
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseAlCarrier extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('al_carrier');
        $this->hasColumn('id', 'integer', 1, array(
             'type' => 'integer',
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => true,
             'length' => '1',
             ));
        $this->hasColumn('name', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2147483647',
             ));
        $this->hasColumn('al_conc', 'float', 2147483647, array(
             'type' => 'float',
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2147483647',
             ));
        $this->hasColumn('del_al_conc', 'float', 2147483647, array(
             'type' => 'float',
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2147483647',
             ));
        $this->hasColumn('in_service_date', 'date', 25, array(
             'type' => 'date',
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('mfg_lot_no', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2147483647',
             ));
        $this->hasColumn('notes', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2147483647',
             ));
        $this->hasColumn('in_use', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2147483647',
             ));
    }

    public function setUp()
    {
        $this->hasMany('Batch', array(
             'local' => 'id',
             'foreign' => 'al_carrier_id'));
    }
}