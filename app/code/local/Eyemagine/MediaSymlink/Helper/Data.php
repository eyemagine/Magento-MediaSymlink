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

class Eyemagine_MediaSymlink_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_ACTIVE = 'dev/mediasymlink/active';
    /**
     * @var bool
     */
    protected $_isActive;
    /**
     * Determines if the module is active
     * 
     * @return bool
     */
    public function active()
    {
        if (is_null($this->_isActive)) {
            $this->_isActive = Mage::getStoreConfig(self::XML_PATH_ACTIVE);
        }
        return $this->_isActive;
    }
}
