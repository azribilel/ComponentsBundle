<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 03/04/17
 * Time: 12:26
 */

namespace Lch\ComponentsBundle\Twig\Extension;


use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class LchComponentsToolsExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return array(
            'class' => new TwigFunction('getClass', array($this, 'getClass'))
        );
    }

    public function getName()
    {
        return 'lch.components.tools.twig.extension';
    }

    public function getClass($object)
    {
        return (get_class($object));
    }
}