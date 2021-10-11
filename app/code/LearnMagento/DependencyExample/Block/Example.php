<?php
declare(strict_types=1);
namespace LearnMagento\DependencyExample\Block;

use Magento\Framework\View\Element\Template;
use LearnMagento\DependencyExample\Model\Main;
use Magento\InventorySales\Model\GetStockBySalesChannelCache\Interceptor;

class Example extends Template
{
    private Main $main;

    public function __construct(Template\Context $context, Main $main, array $data = [])
    {
        parent::__construct($context, $data);
        $this->main = $main;
    }

    public function getMain(): Main
    {
        return $this->main;
    }
}
