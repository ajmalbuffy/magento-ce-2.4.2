<?php
declare(strict_types=1);
namespace LearnMagento\DependencyExample\Block;

use Magento\Framework\View\Element\Template;

class Example extends Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
}
