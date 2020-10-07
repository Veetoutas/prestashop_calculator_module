<?php
/*
* 2007-2016 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class Vytautas extends Module
{
    private $templateFile;

	public function __construct()
	{
		$this->name = 'vytautas';
		$this->tab = 'analytics_stats';
		$this->version = '1.0.0';
		$this->author = 'PrestaShop';
		$this->need_instance = 1;
		$this->is_eu_compatible = 1;

		$this->currencies = false;

		parent::__construct();

		$this->displayName = $this->l('Vytautas Calculator');
		$this->description = $this->l('Calculates the hirepurchase cases');
		$this->templateFile = 'module:vytautas/templates/hook/header.tpl';
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
        if (!Configuration::get('MYMODULE_NAME'))
            $this->warning = $this->l('No name provided');
	}

    public function install()
    {
        if (Shop::isFeatureActive())
            Shop::setContext(Shop::CONTEXT_ALL);

        if (!parent::install() ||
            !$this->registerHook('displayLeftColumnProduct') ||
            !$this->registerHook('displayRightColumnProduct') ||
            !$this->registerHook('displayCenterColumnProduct') ||
            !Configuration::updateValue('MYMODULE_NAME', 'Calculator')
        )
            return false;
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall() ||
            !Configuration::deleteByName('MYMODULE_NAME')
        )
            return false;

        return true;
    }

//    public function hookDisplayLeftColumnProduct()
//    {
//        if (!$this->active)
//            return ;
//
//        return $this->display(__FILE__, 'test13.tpl');
//    }

    public function hookDisplayRightColumnProduct()
    {
        if (!$this->active)
            return ;

        return $this->display(__FILE__, 'test13.tpl');
    }

    public function hookDisplayCenterColumnProduct()
    {
        if (!$this->active)
            return ;

        return $this->display(__FILE__, 'test13.tpl');
    }

}
