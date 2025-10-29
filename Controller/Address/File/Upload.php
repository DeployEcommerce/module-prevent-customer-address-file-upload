<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace DeployEcommerce\PreventCustomerAddressFileUpload\Controller\Address\File;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class for upload files for customer custom address attributes
 */
class Upload extends Action implements HttpPostActionInterface
{
    /**
     * @inheritDoc
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Json $resultJson */
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);

        $resultJson->setData([
            'error' => __('Invalid file upload'),
            'errorcode' => 0
        ]);

        return $resultJson;
    }
}
