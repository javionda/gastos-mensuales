<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * GastoTarjeta filter form base class.
 *
 * @package    gastos-mensuales
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseGastoTarjetaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tarjeta'     => new sfWidgetFormPropelChoice(array('model' => 'TipoTarjeta', 'add_empty' => true)),
      'cuotas'         => new sfWidgetFormFilterInput(),
      'cuotas_pagadas' => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'id_gasto'       => new sfWidgetFormPropelChoice(array('model' => 'Gastos', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_tarjeta'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoTarjeta', 'column' => 'id')),
      'cuotas'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cuotas_pagadas' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'id_gasto'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Gastos', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('gasto_tarjeta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GastoTarjeta';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'id_tarjeta'     => 'ForeignKey',
      'cuotas'         => 'Number',
      'cuotas_pagadas' => 'Number',
      'created_at'     => 'Date',
      'id_gasto'       => 'ForeignKey',
    );
  }
}
