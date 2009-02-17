<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * TipoTarjeta filter form base class.
 *
 * @package    gastos-mensuales
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseTipoTarjetaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_tarjeta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoTarjeta';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'nombre' => 'Text',
    );
  }
}
