magento-integration
===================

Include Magento blocks and CMS blocks in any PHP application.

Example
-------------

Joomla and Magento

![Joomla and Magento](http://i.imgur.com/MNpADpW.png)

Installation
-------------

* Include <code>magento-integration.php</code> in your application.
* Initialize the integration and pass the path to Magento bootstrap file.

Example:

    <?php
    
    include 'magento-integration.php';
    MI::init('/path/to/magento/app/Mage.php');

This only needs to be done once.

Usage
-------------

These methods can be used anywhere in the PHP application.

### Layout Blocks

Blocks in Magento's layout can be retrieved by passing the layout name (header, footer, left, etc).

    echo MI::getBlock('header');

### CMS Static Blocks

CMS blocks added via Magento admin can also be retrieved.

    echo MI::getStaticBlock('home-slider');

---

Inspired by [Magento WordPress Integration](http://www.mwi-plugin.com/)