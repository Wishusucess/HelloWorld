<?php
/**
 *
 * @package     magento2
 * @author      Wishusucess Magento Team
 * @license     http://wishusucess.com/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        http://www.wishusucess.com/
 */

namespace Wishusucess\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getText() {
        return "Hello World";
    }
}