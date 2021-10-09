<?php
declare(strict_types=1);
namespace LearnMagento\Tutorial\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Page implements ActionInterface{
    private \Magento\Framework\View\Result\PageFactory $pageFactory;

    /**
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("First Page");
        return $page;
    }
}
