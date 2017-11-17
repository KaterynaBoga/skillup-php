<?php
    require_once "Form.php";
/**
 * Created by PhpStorm.
 * User: BKN1402
 * Date: 17.11.2017
 * Time: 19:53
 */

    class SmartForm extends Form
    {
        protected function prepareAttr(array $attr)
        {
            if ( isset($attr['name'])
                && !isset($att['value'])
                && isset($_REQUEST[$attr['name']])
            ) {
                $attr['value'] = $_REQUEST[$attr['name']];
            }

            return parent::prepareAttr($attr);
        }

    }