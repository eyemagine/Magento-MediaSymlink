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

-------------------------------------------------------------------------------
DESCRIPTION:
-------------------------------------------------------------------------------

Fixes an issue in Magento CE 1.8.1.0 and EE 1.13.1.0 where using a symlinked
media directory breaks CMS upload functionality in the admin.

Must be enabled in the Admin under System > Config > Advanced > Developer

See:
  http://www.magentocommerce.com/bug-tracking/issue?issue=16088
  http://stackoverflow.com/a/21547351/763468
  http://magento.stackexchange.com/a/14821/2190

Module Files:

  - app/etc/modules/Eyemagine_MediaSymlink.xml
  - app/code/local/Eyemagine/MediaSymlink/*


-------------------------------------------------------------------------------
COMPATIBILITY:
-------------------------------------------------------------------------------

  - Magento Community Edition 1.8.1.0
  - Magento Enterprise Edition 1.13.1.0
  

-------------------------------------------------------------------------------
RELEASE NOTES:
-------------------------------------------------------------------------------

v1.0.0: May 19, 2014
  - Initial release