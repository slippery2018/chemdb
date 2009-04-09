<?php

/**
 * BaseSplit
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $analysis_id
 * @property integer $split_bkr_id
 * @property float $wt_split_bkr_tare
 * @property float $wt_split_bkr_split
 * @property float $wt_split_bkr_icp
 * @property string $split_bkr_name
 * @property Analysis $Analysis
 * @property SplitBkr $SplitBkr
 * @property Doctrine_Collection $IcpRun
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5441 2009-01-30 22:58:43Z jwage $
 */
abstract class BaseSplit extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('split');
        $this->hasColumn('id', 'integer', 4, array('type' => 'integer', 'unsigned' => '1', 'primary' => true, 'autoincrement' => true, 'length' => '4'));
        $this->hasColumn('analysis_id', 'integer', 2, array('type' => 'integer', 'unsigned' => '1', 'default' => '', 'notnull' => true, 'length' => '2'));
        $this->hasColumn('split_bkr_id', 'integer', 4, array('type' => 'integer', 'unsigned' => '1', 'default' => '', 'notnull' => true, 'length' => '4'));
        $this->hasColumn('wt_split_bkr_tare', 'float', 2147483647, array('type' => 'float', 'default' => '0', 'notnull' => true, 'length' => '2147483647'));
        $this->hasColumn('wt_split_bkr_split', 'float', 2147483647, array('type' => 'float', 'default' => '0', 'notnull' => true, 'length' => '2147483647'));
        $this->hasColumn('wt_split_bkr_icp', 'float', 2147483647, array('type' => 'float', 'default' => '0', 'notnull' => true, 'length' => '2147483647'));
        $this->hasColumn('split_bkr_name', 'string', 2147483647, array('type' => 'string', 'length' => '2147483647'));
    }

    public function setUp()
    {
        $this->hasOne('Analysis', array('local' => 'analysis_id',
                                        'foreign' => 'id'));

        $this->hasOne('SplitBkr', array('local' => 'split_bkr_id',
                                        'foreign' => 'id'));

        $this->hasMany('IcpRun', array('local' => 'id',
                                       'foreign' => 'split_id'));
    }
}