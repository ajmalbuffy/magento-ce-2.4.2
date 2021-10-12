<?php
declare(strict_types=1);
namespace LearnMagento\DependencyExample\Model;

class NonInjectable
{
    public function getId(): string
    {
        return 'Non-Injectable classes';
    }
}
