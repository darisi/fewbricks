<?php

namespace fewbricks\acf\fields;

/**
 * Class url
 * @package fewbricks\acf
 */
class url extends field
{

    /**
     * @param string $label
     * @param string $name
     * @param string $key
     */
    public function __construct($label, $name, $key)
    {

        $base_settings = [
            'prefix' => '',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'default_value' => '',
            'placeholder' => '',
        ];

        parent::__construct($label, $name, $key, $base_settings);

    }

}