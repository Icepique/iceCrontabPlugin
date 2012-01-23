<?php

/**
 * iceModelCrontab form base class.
 *
 * @method iceModelCrontab getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelCrontabForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'context'       => new sfWidgetFormInputText(),
      'minute'        => new sfWidgetFormInputText(),
      'hour'          => new sfWidgetFormInputText(),
      'month'         => new sfWidgetFormInputText(),
      'day_of_week'   => new sfWidgetFormInputText(),
      'day_of_month'  => new sfWidgetFormInputText(),
      'function_name' => new sfWidgetFormInputText(),
      'parameters'    => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormTextarea(),
      'priority'      => new sfWidgetFormInputText(),
      'is_active'     => new sfWidgetFormInputCheckbox(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'created_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'context'       => new sfValidatorString(),
      'minute'        => new sfValidatorString(array('max_length' => 2)),
      'hour'          => new sfValidatorString(array('max_length' => 2)),
      'month'         => new sfValidatorString(array('max_length' => 2)),
      'day_of_week'   => new sfValidatorString(array('max_length' => 2)),
      'day_of_month'  => new sfValidatorString(array('max_length' => 2)),
      'function_name' => new sfValidatorString(array('max_length' => 255)),
      'parameters'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'   => new sfValidatorString(array('required' => false)),
      'priority'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'is_active'     => new sfValidatorBoolean(array('required' => false)),
      'updated_at'    => new sfValidatorDateTime(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_crontab[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelCrontab';
  }


}
