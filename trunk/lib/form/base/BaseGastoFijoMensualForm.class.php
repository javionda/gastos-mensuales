<?php

/**
 * GastoFijoMensual form base class.
 *
 * @package    gastos-mensuales
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseGastoFijoMensualForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInput(),
      'notas'      => new sfWidgetFormTextarea(),
      'created_at' => new sfWidgetFormDateTime(),
      'recargo'    => new sfWidgetFormInput(),
      'id_gasto'   => new sfWidgetFormPropelChoice(array('model' => 'Gastos', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'GastoFijoMensual', 'column' => 'id', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 100)),
      'notas'      => new sfValidatorString(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'recargo'    => new sfValidatorNumber(array('required' => false)),
      'id_gasto'   => new sfValidatorPropelChoice(array('model' => 'Gastos', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('gasto_fijo_mensual[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GastoFijoMensual';
  }


}
