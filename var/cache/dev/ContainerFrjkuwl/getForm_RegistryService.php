<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\CachingType' => function () {
    return ${($_ = isset($this->services['form.type.performance.caching']) ? $this->services['form.type.performance.caching'] : $this->load('getForm_Type_Performance_CachingService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\CombineCompressCacheType' => function () {
    return ${($_ = isset($this->services['form.type.performance.ccc']) ? $this->services['form.type.performance.ccc'] : $this->services['form.type.performance.ccc'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\CombineCompressCacheType()) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\DebugModeType' => function () {
    return ${($_ = isset($this->services['form.type.performance.debug_mode']) ? $this->services['form.type.performance.debug_mode'] : $this->services['form.type.performance.debug_mode'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\DebugModeType()) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\MediaServersType' => function () {
    return ${($_ = isset($this->services['form.type.performance.media_servers']) ? $this->services['form.type.performance.media_servers'] : $this->services['form.type.performance.media_servers'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\MediaServersType()) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\MemcacheServerType' => function () {
    return ${($_ = isset($this->services['form.type.performance.memcache_servers']) ? $this->services['form.type.performance.memcache_servers'] : $this->services['form.type.performance.memcache_servers'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\MemcacheServerType()) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\OptionalFeaturesType' => function () {
    return ${($_ = isset($this->services['form.type.performance.optional_features']) ? $this->services['form.type.performance.optional_features'] : $this->load('getForm_Type_Performance_OptionalFeaturesService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\SmartyType' => function () {
    return ${($_ = isset($this->services['form.type.performance.smarty']) ? $this->services['form.type.performance.smarty'] : $this->services['form.type.performance.smarty'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\SmartyType()) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Category\\SimpleCategory' => function () {
    return ${($_ = isset($this->services['form.type.product.simple_category']) ? $this->services['form.type.product.simple_category'] : $this->load('getForm_Type_Product_SimpleCategoryService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Administration\\GeneralType' => function () {
    return ${($_ = isset($this->services['form.type.admininistration.general']) ? $this->services['form.type.admininistration.general'] : $this->load('getForm_Type_Admininistration_GeneralService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Administration\\NotificationsType' => function () {
    return ${($_ = isset($this->services['form.type.administration.notification']) ? $this->services['form.type.administration.notification'] : $this->load('getForm_Type_Administration_NotificationService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Administration\\UploadQuotaType' => function () {
    return ${($_ = isset($this->services['form.type.administration.upload_quota']) ? $this->services['form.type.administration.upload_quota'] : $this->load('getForm_Type_Administration_UploadQuotaService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Email\\EmailConfigurationType' => function () {
    return ${($_ = isset($this->services['form.type.email.email_configuration']) ? $this->services['form.type.email.email_configuration'] : $this->load('getForm_Type_Email_EmailConfigurationService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Import\\ImportType' => function () {
    return ${($_ = isset($this->services['form.type.import.import']) ? $this->services['form.type.import.import'] : $this->load('getForm_Type_Import_ImportService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\CustomerPreferences\\GeneralType' => function () {
    return ${($_ = isset($this->services['form.type.customer_preferences.general']) ? $this->services['form.type.customer_preferences.general'] : $this->load('getForm_Type_CustomerPreferences_GeneralService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\General\\MaintenanceType' => function () {
    return ${($_ = isset($this->services['form.type.maintenance.general']) ? $this->services['form.type.maintenance.general'] : $this->load('getForm_Type_Maintenance_GeneralService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\General\\PreferencesType' => function () {
    return ${($_ = isset($this->services['form.type.shop_parameters.general']) ? $this->services['form.type.shop_parameters.general'] : $this->load('getForm_Type_ShopParameters_GeneralService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderPreferences\\GeneralType' => function () {
    return ${($_ = isset($this->services['form.type.order_preferences.general']) ? $this->services['form.type.order_preferences.general'] : $this->load('getForm_Type_OrderPreferences_GeneralService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderPreferences\\GiftOptionsType' => function () {
    return ${($_ = isset($this->services['form.type.order_preferences.gift_options']) ? $this->services['form.type.order_preferences.gift_options'] : $this->load('getForm_Type_OrderPreferences_GiftOptionsService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\ProductPreferences\\GeneralType' => function () {
    return ${($_ = isset($this->services['form.type.product_preferences.general']) ? $this->services['form.type.product_preferences.general'] : $this->load('getForm_Type_ProductPreferences_GeneralService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\ProductPreferences\\StockType' => function () {
    return ${($_ = isset($this->services['form.type.product_preferences.stock']) ? $this->services['form.type.product_preferences.stock'] : $this->load('getForm_Type_ProductPreferences_StockService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\MetaType' => function () {
    return ${($_ = isset($this->services['form.type.shop.traffic_seo.meta']) ? $this->services['form.type.shop.traffic_seo.meta'] : $this->load('getForm_Type_Shop_TrafficSeo_MetaService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\SetUpUrlType' => function () {
    return ${($_ = isset($this->services['form.type.shop.traffic_seo.meta.set_up_url']) ? $this->services['form.type.shop.traffic_seo.meta.set_up_url'] : $this->load('getForm_Type_Shop_TrafficSeo_Meta_SetUpUrlService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\ShopUrlType' => function () {
    return ${($_ = isset($this->services['form.type.shop.traffic_seo.meta.shop_url']) ? $this->services['form.type.shop.traffic_seo.meta.shop_url'] : $this->load('getForm_Type_Shop_TrafficSeo_Meta_ShopUrlService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\UrlSchemaType' => function () {
    return ${($_ = isset($this->services['form.type.shop.traffic_seo.meta.url_schema']) ? $this->services['form.type.shop.traffic_seo.meta.url_schema'] : $this->load('getForm_Type_Shop_TrafficSeo_Meta_UrlSchemaService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Feature\\ProductFeature' => function () {
    return ${($_ = isset($this->services['form.type.product.feature']) ? $this->services['form.type.product.feature'] : $this->load('getForm_Type_Product_FeatureService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Geolocation\\GeolocationOptionsType' => function () {
    return ${($_ = isset($this->services['form.type.geolocation.options']) ? $this->services['form.type.geolocation.options'] : $this->load('getForm_Type_Geolocation_OptionsService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Localization\\ImportLocalizationPackType' => function () {
    return ${($_ = isset($this->services['form.type.localization.import_pack']) ? $this->services['form.type.localization.import_pack'] : $this->load('getForm_Type_Localization_ImportPackService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Localization\\LocalizationConfigurationType' => function () {
    return ${($_ = isset($this->services['form.type.localization_configuration']) ? $this->services['form.type.localization_configuration'] : $this->load('getForm_Type_LocalizationConfigurationService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\AddUpdateLanguageType' => function () {
    return ${($_ = isset($this->services['form.type.translations.add_update_language']) ? $this->services['form.type.translations.add_update_language'] : $this->load('getForm_Type_Translations_AddUpdateLanguageService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\CopyLanguageType' => function () {
    return ${($_ = isset($this->services['form.type.translations.copy_language']) ? $this->services['form.type.translations.copy_language'] : $this->load('getForm_Type_Translations_CopyLanguageService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\ExportThemeLanguageType' => function () {
    return ${($_ = isset($this->services['form.type.translations.export_language']) ? $this->services['form.type.translations.export_language'] : $this->load('getForm_Type_Translations_ExportLanguageService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\ModifyTranslationsType' => function () {
    return ${($_ = isset($this->services['form.type.translations.modify']) ? $this->services['form.type.translations.modify'] : $this->load('getForm_Type_Translations_ModifyService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Improve\\Payment\\Preferences\\PaymentModulePreferencesType' => function () {
    return ${($_ = isset($this->services['form.type.payment.module_currency_restriction']) ? $this->services['form.type.payment.module_currency_restriction'] : $this->load('getForm_Type_Payment_ModuleCurrencyRestrictionService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Improve\\Shipping\\Preferences\\CarrierOptionsType' => function () {
    return ${($_ = isset($this->services['form.type.shipping_preferences.carrier_options']) ? $this->services['form.type.shipping_preferences.carrier_options'] : $this->load('getForm_Type_ShippingPreferences_CarrierOptionsService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Improve\\Shipping\\Preferences\\HandlingType' => function () {
    return ${($_ = isset($this->services['form.type.shipping_preferences.handling']) ? $this->services['form.type.shipping_preferences.handling'] : $this->load('getForm_Type_ShippingPreferences_HandlingService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductAttachement' => function () {
    return ${($_ = isset($this->services['form.type.product.attachment']) ? $this->services['form.type.product.attachment'] : $this->load('getForm_Type_Product_AttachmentService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCategories' => function () {
    return ${($_ = isset($this->services['form.type.product.categories']) ? $this->services['form.type.product.categories'] : $this->load('getForm_Type_Product_CategoriesService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCombination' => function () {
    return ${($_ = isset($this->services['form.type.product.combination']) ? $this->services['form.type.product.combination'] : $this->load('getForm_Type_Product_CombinationService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCombinationBulk' => function () {
    return ${($_ = isset($this->services['form.type.product.combination_bulk']) ? $this->services['form.type.product.combination_bulk'] : $this->load('getForm_Type_Product_CombinationBulkService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCustomField' => function () {
    return ${($_ = isset($this->services['form.type.product.custom_field']) ? $this->services['form.type.product.custom_field'] : $this->load('getForm_Type_Product_CustomFieldService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductInformation' => function () {
    return ${($_ = isset($this->services['form.type.product.information']) ? $this->services['form.type.product.information'] : $this->load('getForm_Type_Product_InformationService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductOptions' => function () {
    return ${($_ = isset($this->services['form.type.product.options']) ? $this->services['form.type.product.options'] : $this->load('getForm_Type_Product_OptionsService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductPrice' => function () {
    return ${($_ = isset($this->services['form.type.product.price']) ? $this->services['form.type.product.price'] : $this->load('getForm_Type_Product_PriceService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductQuantity' => function () {
    return ${($_ = isset($this->services['form.type.product.quantity']) ? $this->services['form.type.product.quantity'] : $this->load('getForm_Type_Product_QuantityService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSeo' => function () {
    return ${($_ = isset($this->services['form.type.product.seo']) ? $this->services['form.type.product.seo'] : $this->load('getForm_Type_Product_SeoService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductShipping' => function () {
    return ${($_ = isset($this->services['form.type.product.shipping']) ? $this->services['form.type.product.shipping'] : $this->load('getForm_Type_Product_ShippingService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSpecificPrice' => function () {
    return ${($_ = isset($this->services['form.type.product.specific_price']) ? $this->services['form.type.product.specific_price'] : $this->load('getForm_Type_Product_SpecificPriceService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSupplierCombination' => function () {
    return ${($_ = isset($this->services['form.type.product.supplier_combination']) ? $this->services['form.type.product.supplier_combination'] : $this->load('getForm_Type_Product_SupplierCombinationService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductVirtual' => function () {
    return ${($_ = isset($this->services['form.type.product.virtual']) ? $this->services['form.type.product.virtual'] : $this->load('getForm_Type_Product_VirtualService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Product\\ProductWarehouseCombination' => function () {
    return ${($_ = isset($this->services['form.type.product.warehouse_combination']) ? $this->services['form.type.product.warehouse_combination'] : $this->load('getForm_Type_Product_WarehouseCombinationService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Delivery\\SlipOptionsType' => function () {
    return ${($_ = isset($this->services['form.type.order.delivery.slip.options']) ? $this->services['form.type.order.delivery.slip.options'] : $this->load('getForm_Type_Order_Delivery_Slip_OptionsService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\GenerateByDateType' => function () {
    return ${($_ = isset($this->services['form.type.order.invoices.generate_by_date']) ? $this->services['form.type.order.invoices.generate_by_date'] : $this->services['form.type.order.invoices.generate_by_date'] = new \PrestaShopBundle\Form\Admin\Sell\Order\Invoices\GenerateByDateType()) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\GenerateByStatusType' => function () {
    return ${($_ = isset($this->services['form.type.order.invoices.generate_by_status']) ? $this->services['form.type.order.invoices.generate_by_status'] : $this->load('getForm_Type_Order_Invoices_GenerateByStatusService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\InvoiceOptionsType' => function () {
    return ${($_ = isset($this->services['form.type.order.invoices.invoice_options']) ? $this->services['form.type.order.invoices.invoice_options'] : $this->load('getForm_Type_Order_Invoices_InvoiceOptionsService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Type\\ChoiceCategoriesTreeType' => function () {
    return ${($_ = isset($this->services['form.type.product.categories_tree']) ? $this->services['form.type.product.categories_tree'] : $this->services['form.type.product.categories_tree'] = new \PrestaShopBundle\Form\Admin\Type\ChoiceCategoriesTreeType()) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Type\\DatePickerType' => function () {
    return ${($_ = isset($this->services['form.type.date_picker']) ? $this->services['form.type.date_picker'] : $this->services['form.type.date_picker'] = new \PrestaShopBundle\Form\Admin\Type\DatePickerType()) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Type\\TranslateType' => function () {
    return ${($_ = isset($this->services['form.type.product.translate']) ? $this->services['form.type.product.translate'] : $this->services['form.type.product.translate'] = new \PrestaShopBundle\Form\Admin\Type\TranslateType()) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadCustomerCollectionType' => function () {
    return ${($_ = isset($this->services['form.type.typeahead.customer']) ? $this->services['form.type.typeahead.customer'] : $this->load('getForm_Type_Typeahead_CustomerService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadProductCollectionType' => function () {
    return ${($_ = isset($this->services['form.type.typeahead.product']) ? $this->services['form.type.typeahead.product'] : $this->load('getForm_Type_Typeahead_ProductService.php')) && false ?: '_'};
}, 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadProductPackCollectionType' => function () {
    return ${($_ = isset($this->services['form.type.typeahead.product_pack']) ? $this->services['form.type.typeahead.product_pack'] : $this->load('getForm_Type_Typeahead_ProductPackService.php')) && false ?: '_'};
}, 'PrestaShop\\Module\\LinkList\\Form\\Type\\CustomUrlType' => function () {
    return ${($_ = isset($this->services['prestashop.module.link_block.custom_url_type']) ? $this->services['prestashop.module.link_block.custom_url_type'] : $this->load('getPrestashop_Module_LinkBlock_CustomUrlTypeService.php')) && false ?: '_'};
}, 'PrestaShop\\Module\\LinkList\\Form\\Type\\LinkBlockType' => function () {
    return ${($_ = isset($this->services['prestashop.module.link_block.form_type']) ? $this->services['prestashop.module.link_block.form_type'] : $this->load('getPrestashop_Module_LinkBlock_FormTypeService.php')) && false ?: '_'};
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->load('getForm_Type_EntityService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->load('getForm_Type_ChoiceService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->load('getForm_Type_FormService.php')) && false ?: '_'};
})), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.form.transformation_failure_handling']) ? $this->services['form.type_extension.form.transformation_failure_handling'] : $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->load('getForm_TypeExtension_Form_HttpFoundationService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->load('getForm_TypeExtension_Form_ValidatorService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->load('getForm_TypeExtension_Upload_ValidatorService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->load('getForm_TypeExtension_CsrfService.php')) && false ?: '_'};
    yield 5 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->load('getForm_TypeExtension_Form_DataCollectorService.php')) && false ?: '_'};
}, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()) && false ?: '_'};
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()) && false ?: '_'};
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type.extension.money']) ? $this->services['form.type.extension.money'] : $this->services['form.type.extension.money'] = new \PrestaShopBundle\Form\Admin\Type\CustomMoneyType()) && false ?: '_'};
}, 1)), new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->load('getForm_TypeGuesser_ValidatorService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->load('getForm_TypeGuesser_DoctrineService.php')) && false ?: '_'};
}, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->load('getForm_ResolvedTypeFactoryService.php')) && false ?: '_'});
