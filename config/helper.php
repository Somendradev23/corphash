<?php
function createSlug($string)
{
    $string = strtolower(trim($string));
    $string = preg_replace('/[^a-z0-9-]+/', '-', $string);
    return rtrim($string, '-');
}
