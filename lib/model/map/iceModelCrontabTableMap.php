<?php



/**
 * This class defines the structure of the 'crontab' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.iceCrontabPlugin.lib.model.map
 */
class iceModelCrontabTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceCrontabPlugin.lib.model.map.iceModelCrontabTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('crontab');
    $this->setPhpName('iceModelCrontab');
    $this->setClassname('iceModelCrontab');
    $this->setPackage('plugins.iceCrontabPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('CONTEXT', 'Context', 'CHAR', true, null, 'global');
    $this->addColumn('MINUTE', 'Minute', 'CHAR', true, 2, '1');
    $this->addColumn('HOUR', 'Hour', 'CHAR', true, 2, '5');
    $this->addColumn('MONTH', 'Month', 'CHAR', true, 2, '*');
    $this->addColumn('DAY_OF_WEEK', 'DayOfWeek', 'CHAR', true, 2, '*');
    $this->addColumn('DAY_OF_MONTH', 'DayOfMonth', 'CHAR', true, 2, '*');
    $this->addColumn('FUNCTION_NAME', 'FunctionName', 'VARCHAR', true, 255, null);
    $this->getColumn('FUNCTION_NAME', false)->setPrimaryString(true);
    $this->addColumn('PARAMETERS', 'Parameters', 'VARCHAR', false, 255, null);
    $this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
    $this->addColumn('PRIORITY', 'Priority', 'INTEGER', true, null, 1);
    $this->addColumn('IS_ACTIVE', 'IsActive', 'BOOLEAN', false, 1, true);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
  }

  /**
   *
   * Gets the list of behaviors registered for this table
   *
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'symfony_timestampable' => array('update_column' => 'updated_at', 'create_column' => 'created_at', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
