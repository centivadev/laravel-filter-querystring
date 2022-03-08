<?php

if (!function_exists('separateCommaValues')) {
    function separateCommaValues($value)
    {
        return explode(',', $value);
    }
}

if (!function_exists('hasComma')) {
    function hasComma($value)
    {
        return strpos($value, ',');
    }
}

if (!function_exists('isDateTime')) {
    function isDateTime($value)
    {
        return date_parse($value)['error_count'] < 1 && preg_match('/\d{4}-\d{2}-\d{2}/', $value);
    }
}
