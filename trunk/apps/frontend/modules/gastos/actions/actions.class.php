<?php

/**
 * gastos actions.
 *
 * @package    gastos-mensuales
 * @subpackage gastos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class gastosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->gastos_list = GastosPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->gastos = GastosPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->gastos);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new GastosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new GastosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($gastos = GastosPeer::retrieveByPk($request->getParameter('id')), sprintf('Object gastos does not exist (%s).', $request->getParameter('id')));
    $this->form = new GastosForm($gastos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($gastos = GastosPeer::retrieveByPk($request->getParameter('id')), sprintf('Object gastos does not exist (%s).', $request->getParameter('id')));
    $this->form = new GastosForm($gastos);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($gastos = GastosPeer::retrieveByPk($request->getParameter('id')), sprintf('Object gastos does not exist (%s).', $request->getParameter('id')));
    $gastos->delete();

    $this->redirect('gastos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $gastos = $form->save();

      $this->redirect('gastos/edit?id='.$gastos->getId());
    }
  }
}
