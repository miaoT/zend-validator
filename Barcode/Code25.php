<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Validate
 */

namespace Zend\Validator\Barcode;

/**
 * @category   Zend
 * @package    Zend_Validate
 */
class Code25 extends AbstractAdapter
{
    /**
     * Constructor for this barcode adapter
     */
    public function __construct()
    {
        $this->setLength(-1);
        $this->setCharacters('0123456789');
        $this->setChecksum('code25');
        $this->useChecksum(false);
    }
}
