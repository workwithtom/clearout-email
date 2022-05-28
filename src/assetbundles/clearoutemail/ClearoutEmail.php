<?php
/**
 * Clearout email validation & verification plugin for Craft CMS 3.x
 *
 * Clearout email validation & verification protects your database from fake, disposable & bad email addresses.
 *
 * @link      https://www.workwithtom.ro
 * @copyright Copyright (c) 2022 Work With Tom SRL
 */

namespace workwithtom\clearoutemail\assetbundles\clearoutemail;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * ClearoutEmail AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    Work With Tom SRL
 * @package   ClearoutEmail
 * @since     1.0.0
 */
class ClearoutEmail extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@workwithtom/clearoutemail/assetbundles/clearoutemail/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/ClearoutEmail.js',
        ];

        $this->css = [
            'css/ClearoutEmail.css',
        ];

        parent::init();
    }
}
