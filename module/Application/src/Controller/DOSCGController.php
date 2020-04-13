<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DOSCGController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
	public function CVAction()
    {
        return new ViewModel();
    }
	public function XYZAction()
    {
        return new ViewModel();
    }
	public function BCAction()
    {
        return new ViewModel();
    }
}
