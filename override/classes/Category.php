<?php

class Category extends CategoryCore
{

    public $category_color;

    public function __construct($idCategory = null, $idLang = null, $idShop = null)
    {
        self::$definition['fields']['category_color'] = array(
            'type'  =>  self::TYPE_STRING,
            'validate'  =>  'isGenericName',
            'size'  =>  255,
        );

        self::$definition['fields']['display_color'] = array(
            'type'  =>  self::TYPE_BOOL,
            'validate' => 'isBool',
        );

        parent::__construct($idCategory, $idLang, $idShop);
    }

}