<?php

namespace DiegoBrocanelli\Core\Components\FlashMessenger;

use Zend\Mvc\Plugin\FlashMessenger\FlashMessenger as Plugin;
use Zend\View\Helper\FlashMessenger               as ViewHelper;

/**
 * Class responsible for manipulation the FlashMessenger.
 *
 * @author Diego Brocanelli <diegod2@msn.com>
 */
class FlashMessenger 
{
    /**
     * @var Zend\Mvc\Plugin\FlashMessenger\FlashMessenger 
     */
    private $flashMessenger;
    
    public function __construct()
    {
        $this->flashMessenger = (new ViewHelper())
             ->setPluginFlashMessenger(new Plugin());
    }
    
    /**
     * Return FlashMessenger.
     * 
     * @return Zend\Mvc\Plugin\FlashMessenger\FlashMessenger
     */
    public function getFlashMessenger()
    {
        return $this->flashMessenger->getPluginFlashMessenger();
    }
    
    /**
     * Return FlashMessenter View Helper.
     * 
     * @return Zend\View\Helper\FlashMessenger
     */
    public function getViewHelper()
    {
        return $this->flashMessenger;
    }
}
