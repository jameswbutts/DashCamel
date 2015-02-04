<?php
namespace Craft;

/**
 * Dash Camel Plugin
 *
 * Custom Twig extension to enable conversion from hyphenated to camel case syntax.
 *
 * @package Craft
 * @subpackage DashCamel
 * @author Jim Butts <jameswbutts@gmail.com>
 */

class DashCamelPlugin extends BasePlugin
{
    /**
     * Plugin slug (matches folder name)
     *
     * @var string $name
     */
    private $pluginSlug = 'dashcamel';

    /**
     * Getter for config's pluginName
     *
     * @return string
     */
    public function getName()
    {
        return Craft::t(craft()->config->get('pluginName', $this->pluginSlug));
    }

    /**
     * Getter for config's pluginVersion
     *
     * @return string
     */
    public function getVersion()
    {
        return Craft::t(craft()->config->get('pluginVersion', $this->pluginSlug));
    }

    /**
     * Getter for config's pluginDeveloper
     *
     * @return string
     */
    public function getDeveloper()
    {
        return Craft::t(craft()->config->get('pluginDeveloper', $this->pluginSlug));
    }

    /**
     * Getter for config's pluginDeveloperUrl
     *
     * @return string
     */
    public function getDeveloperUrl()
    {
        return Craft::t(craft()->config->get('pluginDeveloperUrl', $this->pluginSlug));
    }

    /**
     * Add the plugin's Twig Extension
     *
     * @return Twig_Extension
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.dashcamel.twigextensions.DashCamelTwigExtension');

        return new DashCamelTwigExtension();
    }
}