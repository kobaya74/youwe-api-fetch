<?php

namespace Youwe\ApiFetch\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends AbstractHelper
{

    /**
    * Admin configuration paths
    *
    */
    const IS_ENABLED = 'apifetch/general/enable';
    const API_URL = 'apifetch/general/api_url';

    /**
    * @var ScopeConfigInterface
    */
    protected $scopeConfig;
    
    /**
    * Data constructor
    * @param \Magento\Framework\App\Helper\Context $context
    * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    */
    public function __construct(
    \Magento\Framework\App\Helper\Context $context,
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
    parent::__construct($context);
    }
    
    /**
    * @return $isEnabled
    */
    public function isEnabled()
    {
        $isEnabled = $this->scopeConfig->getValue(self::IS_ENABLED, 
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        
        return $isEnabled;
    }
    
    /**
    * @return $apiUrl
    */
    public function getApiUrl()
    {
        $apiUrl = $this->scopeConfig->getValue(self::API_URL,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    
        return $apiUrl;
    }
    
}