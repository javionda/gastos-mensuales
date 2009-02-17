<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Gastos filter form base class.
 *
 * @package    gastos-mensuales
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseGastosFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'      => new sfWidgetFormFilterInput(),
      'descripcion' => new sfWidgetFormFilterInput(),
      'tipo'        => new sfWidgetFormPropelChoice(array('model' => 'TipoGasto', 'add_empty' => true)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'importe'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'tipo'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoGasto', 'column' => 'id')),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'importe'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('gastos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Gastos';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nombre'      => 'Text',
      'descripcion' => 'Text',
      'tipo'        => 'ForeignKey',
      'created_at'  => 'Date',
      'importe'     => 'Number',
    );
  }
}
