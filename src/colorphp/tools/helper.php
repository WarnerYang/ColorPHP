<?php
if (!function_exists('getClass')) {
    function getClass($class, $option = '', $newInstance = false)
    {
        return \colorphp\Factory::getInstance()->getClass($class, $option, $newInstance);
    }
}
