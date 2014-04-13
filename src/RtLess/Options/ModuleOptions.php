<?php

namespace RtLess\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions 
{
    
    /**
     *
     * @var string 
     */
    protected $cacheFolder;

    /**
     *
     * @var string 
     */
    protected $cacheFolderUrl;
    
    /**
     *
     * @var bool 
     */
    protected $minify;

    /**
     * 
     * @param string $cacheFolder
     * @return \RtLess\Options\ModuleOptions
     */
    public function setCacheFolder($cacheFolder)
    {
        $this->cacheFolder = $cacheFolder;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getCacheFolder()
    {
        return $this->cacheFolder;
    }
    
    /**
     * 
     * @param string $cacheFolderUrl
     * @return \RtLess\Options\ModuleOptions
     */
    public function setCacheFolderUrl($cacheFolderUrl)
    {
        $this->cacheFolderUrl = $cacheFolderUrl;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getCacheFolderUrl()
    {
        return $this->cacheFolderUrl;
    }

    /**
     * 
     * @param bool $minify
     * @return \RtLess\Options\ModuleOptions
     */
    public function setMinify($minify){
        $this->minify = $minify;
        return $this;
    }

    /**
     * 
     * @return bool
     */
    public function getMinify(){
        return $this->minify;
    }
    
}
