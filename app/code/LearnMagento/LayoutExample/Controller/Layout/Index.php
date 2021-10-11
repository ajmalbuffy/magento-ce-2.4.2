<?php
declare(strict_types=1);
namespace LearnMagento\LayoutExample\Controller\Layout;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Index implements ActionInterface
{
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
        return $this->pageFactory->create();
    }
}
