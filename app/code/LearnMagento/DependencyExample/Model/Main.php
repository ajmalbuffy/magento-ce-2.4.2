<?php
declare(strict_types=1);
namespace LearnMagento\DependencyExample\Model;

class Main
{
    private array $data;
    private Injectable $injectable;
    protected NonInjectableFactory $nonInjectableFactory;

    /**
     * @param Injectable $injectable
     * @param NonInjectableFactory $nonInjectableFactory
     * @param array $data
     */
    public function __construct(Injectable           $injectable,
                                NonInjectableFactory $nonInjectableFactory,
                                array                $data = [])
    {
        $this->data = $data;
        $this->injectable = $injectable;
        $this->nonInjectableFactory = $nonInjectableFactory;
    }

    public function getId(array $data=[]): string
    {
        return $this->data['id'];
    }

    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }

    public function getNonInjectable(): NonInjectable
    {
        return $this->nonInjectableFactory->create();
    }
}

