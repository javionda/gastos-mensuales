<?php

/**
 * GastoTarjeta form base class.
 *
 * @package    gastos-mensuales
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseGastoTarjetaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'id_tarjeta'     => new sfWidgetFormPropelChoice(array('model' => 'TipoTarjeta', 'add_empty' => false)),
      'cuotas'         => new sfWidgetFormInput(),
      'cuotas_pagadas' => new sfWidgetFormInput(),
      'created_at'     => new sfWidgetFormDateTime(),
      'id_gasto'       => new sfWidgetFormPropelChoice(array('model' => 'Gastos', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorPropelChoice(array('model' => 'GastoTarjeta', 'column' => 'id', 'required' => false)),
      'id_tarjeta'     => new sfValidatorPropelChoice(array('model' => 'TipoTarjeta', 'column' => 'id')),
      'cuotas'         => new sfValidatorInteger(),
      'cuotas_pagadas' => new sfValidatorInteger(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
      'id_gasto'       => new sfValidatorPropelChoice(array('model' => 'Gastos', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('gasto_tarjeta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GastoTarjeta';
  }


}
