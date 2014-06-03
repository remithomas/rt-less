<?php
namespace RtLess\View\Helper;

use Zend\View\Helper\AbstractHelper,
    Zend\ServiceManager\ServiceLocatorInterface as ServiceLocator;


class LessCss extends AbstractHelper
{
    
    /**
     * Service locator
     * @var \Zend\ServiceManager\ServiceLocatorInterface 
     */
    protected $serviceLocator;
    
    /**
     * Module Options
     * @var \RtLess\Options\ModuleOptions 
     */
    protected $options;

    /**
     * 
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     */
    public function __construct(ServiceLocator $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
        $this->options = $this->serviceLocator->get("RtLess\Options\ModuleOptions");
    }
    
    /**
     * 
     * @param string $lessFile
     * @param string $id
     * @return string
     */
    public function __invoke($lessFile, $id = "") {
        
        // less options
        $options = array(
            'compress'=>  $this->options->getMinify()
        );
        
        // file to cache
        $to_cache = array(
            $lessFile => $this->view->basePath("")
        );
        
        \Less_Cache::$cache_dir = $this->options->getCacheFolder();
        
        $css_file_name = \Less_Cache::Get($to_cache, $options);
        
        if($id == ""){
            $id = substr($css_file_name, 0, -4);
        }
        
        return "<link type='text/css' id='".$id."' rel='stylesheet' href='" . $this->options->getCacheFolderUrl() . $css_file_name . "' />";
        
    }
    
}
