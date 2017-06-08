<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Index controller
 */
class IndexController extends AbstractActionController
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * IndexController constructor.
     * @param $em
     */
    public function __construct($em)
    {
        $this->em = $em;
    }

    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel();
    }
}
