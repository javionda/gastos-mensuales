<?php

/**
 * TipoGasto form base class.
 *
 * @package    gastos-mensuales
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseTipoGastoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'descripcion' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'TipoGasto', 'column' => 'id', 'required' => false)),
      'descripcion' => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('tipo_gasto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoGasto';
  }


}
