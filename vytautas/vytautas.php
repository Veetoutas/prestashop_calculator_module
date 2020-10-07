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
            !$this->registerHook('displayRightColumnProduct') ||
            !Configuration::updateValue('MYMODULE_NAME', 'Calculator') ||
            !Configuration::updateValue('min_amount', 1) ||
            !Configuration::updateValue('min_period', 3) ||
            !Configuration::updateValue('max_period', 48) ||
            !Configuration::updateValue('default_period', 3) ||
            !Configuration::updateValue('step_period', 3) ||
            !Configuration::updateValue('min_downpayment', 1) ||
            !Configuration::updateValue('max_downpayment', 90) ||
            !Configuration::updateValue('calculator_textfield', 'This is a sample text')
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

    public function hookDisplayRightColumnProduct()
    {
        if (!$this->active)
            return ;

        $this->context->smarty->assign(
            array(
                'min_amount' => Configuration::get('min_amount'),
                'max_amount' => Product::getPriceStatic(Tools::getValue('id_product'), true, null, 2),
                'default_amount' => Product::getPriceStatic(Tools::getValue('id_product'), true, null, 2),
                'min_period' => Configuration::get('min_period'),
                'max_period' => Configuration::get('max_period'),
                'default_period' => Configuration::get('default_period'),
                'step_period' => Configuration::get('step_period'),
                'min_downpayment' => Configuration::get('min_downpayment'),
                'max_downpayment' => Configuration::get('max_downpayment'),
                'calculator_textfield' => Configuration::get('calculator_textfield')
            )
        );

        return $this->display(__FILE__, 'calculator.tpl');
    }

    public function getContent()
    {
        $output = null;

        if (Tools::isSubmit('submit'.$this->name))
        {
            Configuration::updateValue('min_amount', Tools::getValue('min_amount'));
            Configuration::updateValue('min_period', Tools::getValue('min_period'));
            Configuration::updateValue('max_period', Tools::getValue('max_period'));
            Configuration::updateValue('default_period', Tools::getValue('default_period'));
            Configuration::updateValue('step_period', Tools::getValue('step_period'));
            Configuration::updateValue('min_downpayment', Tools::getValue('min_downpayment'));
            Configuration::updateValue('max_downpayment', Tools::getValue('max_downpayment'));
            Configuration::updateValue('calculator_textfield', Tools::getValue('calculator_textfield'));

            $output .= $this->displayConfirmation($this->l('Calculator settings were updated successfully'));

        }

        return $output.$this->displayForm();
    }

    public function displayForm()
    {
        // Get default language
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        // Init Fields form array
        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Calculator settings'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Min. amount'),
                    'name' => 'min_amount',
                    'size' => 10,
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Min. period'),
                    'name' => 'min_period',
                    'size' => 10,
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Max. period'),
                    'name' => 'max_period',
                    'size' => 10,
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Default period'),
                    'name' => 'default_period',
                    'size' => 10,
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Step period'),
                    'name' => 'step_period',
                    'size' => 10,
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Min. downpayment'),
                    'name' => 'min_downpayment',
                    'size' => 10,
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Max. downpayment'),
                    'name' => 'max_downpayment',
                    'size' => 10,
                    'required' => true
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Custom bottom text (1000 symbols)'),
                    'name' => 'calculator_textfield',
                    'size' => 1000,
                    'required' => true
                )
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right'
            )
        );

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        // Language
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;        // false -> remove toolbar
        $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
        $helper->submit_action = 'submit'.$this->name;
        $helper->toolbar_btn = array(
            'save' =>
                array(
                    'desc' => $this->l('Save'),
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                        '&token='.Tools::getAdminTokenLite('AdminModules'),
                ),
            'back' => array(
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            )
        );

        // Load current value
        $helper->fields_value['min_amount'] = Configuration::get('min_amount');
        $helper->fields_value['min_period'] = Configuration::get('min_period');
        $helper->fields_value['max_period'] = Configuration::get('max_period');
        $helper->fields_value['default_period'] = Configuration::get('default_period');
        $helper->fields_value['step_period'] = Configuration::get('step_period');
        $helper->fields_value['min_downpayment'] = Configuration::get('min_downpayment');
        $helper->fields_value['max_downpayment'] = Configuration::get('max_downpayment');
        $helper->fields_value['calculator_textfield'] = Configuration::get('calculator_textfield');

        return $helper->generateForm($fields_form);
    }

}
