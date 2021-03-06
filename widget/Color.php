<?php
/**
 * Created by PhpStorm.
 * User: wj008
 * Date: 2017/12/16
 * Time: 2:01
 */

namespace beacon\widget;


use beacon\Field;

class Color extends Hidden
{
    public function code(Field $field, $attr = [])
    {
        $attr['yee-module'] = 'color';
        $attr['type'] = 'text';
        $attr = WidgetHelper::mergeAttributes($field, $attr);
        return '<input ' . join(' ', $attr) . ' />';
    }

    public function assign(Field $field, array $input)
    {
        $field->varType = 'string';
        return parent::assign($field, $input);
    }
}