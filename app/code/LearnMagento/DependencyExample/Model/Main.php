<?php
declare(strict_types=1);
namespace LearnMagento\DependencyExample\Model;

class Main
{
    private array $data;
    private Injectable $injectable;

    public function __construct(Injectable $injectable, array $data = [])
    {
        $this->data = $data;
        $this->injectable = $injectable;
    }

    public function getId(array $data=[]): string
    {
        return $this->data['id'];
    }

    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }
}

