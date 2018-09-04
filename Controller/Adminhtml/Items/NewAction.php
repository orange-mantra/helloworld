<?php
/**
 * Copyright © 2015 Orangemantra. All rights reserved.
 */

namespace Orangemantra\Helloworld\Controller\Adminhtml\Items;

class NewAction extends \Orangemantra\Helloworld\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
