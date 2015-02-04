<?php
namespace Craft;

/**
 * Dash Camel Twig Extension
 *
 * @package Craft
 * @subpackage DashCamel
 * @author Jim Butts <jameswbutts@gmail.com>
 */

class DashCamelTwigExtension extends \Twig_Extension
{
    protected $env;

    public function getName()
    {
        return Craft::t(craft()->config->get('pluginName', 'dashcamel'));
    }

    public function getFilters()
    {
        return array('dashToCamel' => new \Twig_Filter_Method($this, 'dashToCamel'));
    }

    public function getFunctions()
    {
        return array('dashToCamel' => new \Twig_Function_Method($this, 'dashToCamel'));
    }

    public function initRuntime(\Twig_Environment $env)
    {
        $this->env = $env;
    }

    /**
     * Convert a hypenated-string to camelCase
     *
     * @param string $var
     * @param bool $startWithCapital
     *
     * @return string|mixed (returns the same type $var comes in as)
     */
    public function dashToCamel($var, $startWithCapital = false)
    {
        if (is_string($var) && strlen($var))
        {
            $var = str_replace(' ', '', ucwords(str_replace('-', ' ', $var)));

            if (!$startWithCapital) {
                $var = lcfirst($var);
            }
        }

        return $var;
    }

}