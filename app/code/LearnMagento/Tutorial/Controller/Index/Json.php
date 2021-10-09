<?php
declare(strict_types=1);
namespace LearnMagento\Tutorial\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Json implements ActionInterface
{
    private \Magento\Framework\Controller\Result\JsonFactory $jsonFactory;

    /**
     * @param \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
     */
    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {

        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        return $this->jsonFactory->create()
            ->setHeader('Content-type', 'application/json')
            ->setData([
                'name' => 'Ajmal',
                'job' => 'Senior Software Developer'
            ]);

    }
}
