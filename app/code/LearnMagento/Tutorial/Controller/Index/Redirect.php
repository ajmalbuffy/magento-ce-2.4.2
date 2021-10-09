<?php
declare(strict_types=1);
namespace LearnMagento\Tutorial\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Redirect implements ActionInterface
{
    private \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory;


    /**
     * @param \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
     */
    public function __construct(\Magento\Framework\Controller\Result\RedirectFactory $redirectFactory)
    {

        $this->redirectFactory = $redirectFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        return $this->redirectFactory->create()->setUrl("/helloworld/index/page");
    }
}
