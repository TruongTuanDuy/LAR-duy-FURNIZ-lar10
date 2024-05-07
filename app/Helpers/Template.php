<?php

namespace App\Helpers;

class Template
{

    // Rút gọn chuỗi dài
    public static function stringShorten($string, $length)
    {
        if (strlen($string) > $length) {
            $string = wordwrap($string, $length);
            $string = substr($string, 0, strpos($string, "\n")) . '...';
        }
        return $string;
    }

    // Dùng làm gì??? Rút gọn chuỗi???
    public static function showContent($content, $length, $prefix = '...')
    {
        $prefix = ($length == 0) ? '' : $prefix;
        $content = str_replace(['<p>', '</p>'], '', $content);
        return preg_replace('/\s+?(\S+)?$/', '', substr($content, 0, $length)) . $prefix;
    }
}
