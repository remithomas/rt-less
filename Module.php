<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace RtLess;

use Zend\Mvc\MvcEvent;

class Module 
{
    public function onBootstrap(MvcEvent $e)
    {
        $application     = $e->getTarget();
        $serviceManager  = $application->getServiceManager();
        $eventManager    = $application->getEventManager();
        $events = $eventManager->getSharedManager();
        
    }
    
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    
    public function getControllerConfig(){
        return array(
            'factories' => array(
                
            )
        );
    }
    
    /**
     * 
     * @return array
     */
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'RtLess\Options\ModuleOptions'   => function ($sm) {
                    $config = $sm->get('Config');
                    return new Options\ModuleOptions(isset($config[__NAMESPACE__]) ? $config[__NAMESPACE__] : array());
                },
            )
        );
    }
    
    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'lessCss' => function ($serviceManager) {
                    // Get the service locator 
                    $serviceLocator = $serviceManager->getServiceLocator();
                    return new \RtLess\View\Helper\LessCss($serviceLocator);
                },
            ),
        );
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
}
