<?php

extract($_GET);
foreach ($_GET as $element) {
    if (is_numeric($element)) {
        if (stristr($element, '.')) {
            if (startsWith($element, '.')) {
                echo var_export($element, true) . " string", '<br>';
            } elseif (endsWith($element, '.')) {
                echo var_export($element, true) . " string", '<br>';
            } else {
                echo var_export($element, true) . " float", '<br>';
            }
        } else {
            echo var_export($element, true) . " integer", '<br>';
        }
    } else {
        echo var_export($element, true) . " string", '<br>';
    }
}
function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return substr($haystack, 0, $length) === $needle;
}

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if (!$length) {
        return true;
    }
    return substr($haystack, -$length) === $needle;
}