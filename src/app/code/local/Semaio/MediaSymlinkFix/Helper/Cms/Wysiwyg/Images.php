<?php
/**
 * This file is part of the Semaio_MediaSymlinkFix module.
 *
 * See LICENSE.md bundled with this module for license details.
 *
 * @category  Semaio
 * @package   Semaio_MediaSymlinkFix
 * @author    semaio GmbH <hello@semaio.com>
 * @copyright 2016 semaio GmbH (http://www.semaio.com)
 */

/**
 * Class Semaio_MediaSymlinkFix_Helper_Cms_Wysiwyg_Images
 */
class Semaio_MediaSymlinkFix_Helper_Cms_Wysiwyg_Images extends Mage_Cms_Helper_Wysiwyg_Images
{
    /**
     * Images Storage root directory
     *
     * @return string
     */
    public function getStorageRoot()
    {
        $mediaDir = realpath(Mage::getConfig()->getOptions()->getMediaDir());

        return $mediaDir . DS . Mage_Cms_Model_Wysiwyg_Config::IMAGE_DIRECTORY . DS;
    }

    /**
     * Images Storage base URL
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return Mage::getBaseUrl('media') . Mage_Cms_Model_Wysiwyg_Config::IMAGE_DIRECTORY . '/';
    }

    /**
     * Return URL based on current selected directory or root directory for startup
     *
     * @return string
     */
    public function getCurrentUrl()
    {
        if (!$this->_currentUrl) {
            $mediaDir = realpath(Mage::getConfig()->getOptions()->getMediaDir());
            $mediaUrl = Mage::app()->getStore($this->_storeId)->getBaseUrl('media');

            $path = str_replace($mediaDir, '', $this->getCurrentPath());
            $path = trim($path, DS);
            $this->_currentUrl = $mediaUrl . $this->convertPathToUrl($path) . '/';
        }

        return $this->_currentUrl;
    }
}
