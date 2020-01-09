<?php
/**
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2020 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Ms_category_color extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'ms_category_color';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Mikayil SERT';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Custom color to each category');
        $this->description = $this->l('Color field in Category to add custom color to each category.');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        include(dirname(__FILE__).'/sql/install.php');

        return parent::install() &&
            $this->registerHook('actionCategoryformBuilderModifier') &&
            $this->registerHook('actionAfterCreateCategoryFormHandler') &&
            $this->registerHook('actionAfterUpdateCategoryFormHandler');
    }

    public function uninstall()
    {
        include(dirname(__FILE__).'/sql/uninstall.php');
        
        return parent::uninstall();
    }

    public function hookActionCategoryformBuilderModifier(array $params)
    {
        //
    }

    public function hookActionAfterCreateCategoryFormHandler(array $params)
    {
        //
    }

    public function hookActionAfterUpdateCategoryFormHandler(array $params)
    {
        //
    }
}
