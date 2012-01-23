<?php

/**
 * iceModelCrontab filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelCrontabFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'context'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'minute'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hour'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'month'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'day_of_week'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'day_of_month'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'function_name' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'parameters'    => new sfWidgetFormFilterInput(),
      'description'   => new sfWidgetFormFilterInput(),
      'priority'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_active'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'context'       => new sfValidatorPass(array('required' => false)),
      'minute'        => new sfValidatorPass(array('required' => false)),
      'hour'          => new sfValidatorPass(array('required' => false)),
      'month'         => new sfValidatorPass(array('required' => false)),
      'day_of_week'   => new sfValidatorPass(array('required' => false)),
      'day_of_month'  => new sfValidatorPass(array('required' => false)),
      'function_name' => new sfValidatorPass(array('required' => false)),
      'parameters'    => new sfValidatorPass(array('required' => false)),
      'description'   => new sfValidatorPass(array('required' => false)),
      'priority'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_active'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_crontab_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelCrontab';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'context'       => 'Text',
      'minute'        => 'Text',
      'hour'          => 'Text',
      'month'         => 'Text',
      'day_of_week'   => 'Text',
      'day_of_month'  => 'Text',
      'function_name' => 'Text',
      'parameters'    => 'Text',
      'description'   => 'Text',
      'priority'      => 'Number',
      'is_active'     => 'Boolean',
      'updated_at'    => 'Date',
      'created_at'    => 'Date',
    );
  }
}
