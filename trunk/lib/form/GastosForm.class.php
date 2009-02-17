<?php

/**
 * Gastos form.
 *
 * @package    gastos-mensuales
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class GastosForm extends BaseGastosForm
{
  public function configure()
  {
  	unset($this->widgetSchema['created_at'], $this->validatorSchema['created_at']);
  	$this->widgetSchema['tipo'] = new sfWidgetFormPropelChoice(array('model' => 'TipoGasto', 'method' => 'getDescripcion')); 
  	
  }
}
