<?php

namespace Ruvents\TwigExtensions;

class ClassExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getTests()
    {
        return [
            new \Twig_SimpleTest('instanceof', function ($value, $className) {
                return $value instanceof $className;
            }),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ruvents_twig_extensions.class';
    }
}