<?php

namespace DiegoBrocanelli\Core\Components\Session;

use Zend\Session\Container;

/**
 * Class responsible for manipulation the session container.
 *
 * @author Diego Brocanelli <diegod2@msn.com>
 */
class Session
{
    /**
     * @var Zend\Session\Container
     */
    private $session;
    
    public function __construct()
    {
        $this->session = new Container();
    }
    
    /**
     * Responsible for creating a session container. Storing the information you want.
     * 
     * @param string $key
     * @param mixed  $value
     */
    public function create($key, $value)
    {
        return $this->session->offsetSet($key, $value);
    }
    
    /**
     * Responsible for returning a session container.
     * 
     * @param string $key
     */
    public function get($key)
    {
        return $this->session->offsetGet($key);
    }
    
    /**
     * Responsible for destroying a session container.
     * 
     * @param string $key
     */
    public function destroy($key)
    {
        return $this->session->offsetUnset($key);
    }
    
    /**
     * Return array copy.
     * 
     * @return array
     */
    public function getArrayCopy(): array
    {
        return $this->session->getArrayCopy();
    }
}
