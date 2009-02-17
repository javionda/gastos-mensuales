<?php

/**
 * Gastos form base class.
 *
 * @package    gastos-mensuales
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseGastosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInput(),
      'descripcion' => new sfWidgetFormTextarea(),
      'tipo'        => new sfWidgetFormPropelChoice(array('model' => 'TipoGasto', 'add_empty' => false)),
      'created_at'  => new sfWidgetFormDateTime(),
      'importe'     => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Gastos', 'column' => 'id', 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 100)),
      'descripcion' => new sfValidatorString(array('required' => false)),
      'tipo'        => new sfValidatorPropelChoice(array('model' => 'TipoGasto', 'column' => 'id')),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'importe'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('gastos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Gastos';
  }


}
