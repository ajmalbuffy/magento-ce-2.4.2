<?php
declare(strict_types=1);
namespace LearnMagento\DependencyExample\Model;

class Main
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getId(array $data=[]): string
    {
        return $this->data['id'];
    }
}

