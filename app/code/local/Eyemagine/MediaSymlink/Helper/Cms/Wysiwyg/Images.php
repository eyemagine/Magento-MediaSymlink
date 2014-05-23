<?php
/**
 * EYEMAGINE - The leading Magento Solution Partner
 *
 * Media Symlink Fix
 *
 * @author    EYEMAGINE <magento@eyemaginetech.com>
 * @category  Eyemagine
 * @package   Eyemagine_MediaSymlink
 * @copyright Copyright (c) 2014 EYEMAGINE Technology, LLC (http://www.eyemaginetech.com)
 * @license   http://www.eyemaginetech.com/license.txt
 */

/**
 * Wysiwyg Images Helper
 */
class Eyemagine_MediaSymlink_Helper_Cms_Wysiwyg_Images
    extends Mage_Cms_Helper_Wysiwyg_Images
{
    /**
     * @var Eyemagine_MediaSymlink_Helper_Data
     */
    protected $_mediaSymlinkHelper;
    /**
     * Gets helper
     * 
     * @return Eyemagine_MediaSymlink_Helper_Data
     */
    protected function _getMediaSymlinkHelper()
    {
        if (is_null($this->_mediaSymlinkHelper)) {
            $this->_mediaSymlinkHelper = Mage::helper('mediasymlink');
        }
        return $this->_mediaSymlinkHelper;
    }
    /**
     * Images Storage root directory
     *
     * @return string
     */
    public function getStorageRoot()
    {
        if ($this->_getMediaSymlinkHelper()->active()) {
            return realpath(Mage::getConfig()->getOptions()->getMediaDir()) . DS . Mage_Cms_Model_Wysiwyg_Config::IMAGE_DIRECTORY
                . DS;
        } else {
            return parent::getStorageRoot();
        }
    }
    /**
     * Images Storage base URL
     *
     * @return string
     */
    public function getBaseUrl()
    {
        if ($this->_getMediaSymlinkHelper()->active()) {
            return Mage::getBaseUrl('media') . Mage_Cms_Model_Wysiwyg_Config::IMAGE_DIRECTORY . '/';
        } else {
            return parent::getBaseUrl();
        }
        
    }
    /**
     * Return URL based on current selected directory or root directory for startup
     *
     * @return string
     */
    public function getCurrentUrl()
    {
        if ($this->_getMediaSymlinkHelper()->active()) {
            if (!$this->_currentUrl) {
                $path = str_replace(realpath(Mage::getConfig()->getOptions()->getMediaDir()), '', $this->getCurrentPath());
                $path = trim($path, DS);
                $this->_currentUrl = Mage::app()->getStore($this->_storeId)->getBaseUrl('media') .
                                     $this->convertPathToUrl($path) . '/';
            }
            return $this->_currentUrl;
        } else {
            return parent::getCurrentUrl();
        }
    }
}
