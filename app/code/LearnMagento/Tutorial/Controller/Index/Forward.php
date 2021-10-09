<?php
declare(strict_types=1);
namespace LearnMagento\Tutorial\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Forward implements ActionInterface{
    private \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory;

    /**
     * @param \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory
     */
    public function __construct(\Magento\Framework\Controller\Result\ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        return $this->forwardFactory->create()->forward("Page");
    }
}
