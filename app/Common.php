<?php

if (!function_exists('env_is')) {
    /** Cek Environment saat ini
     * @param string $env tipe environtment
     */
    function env_is(string $env)
    {
        $environtment = getenv('CI_ENVIRONMENT') ?: 'production';
        return ($env == $environtment);
    }
}

if (!function_exists('nl2space')) {
    /** Replace semua New Line menjadi Spasi
     * @param null|string $str Content
     * @param bool $toSpace Jadikan false jika ingin tanpa spasi
     * @return string Content tanpa New Line
     */
    function nl2space(?string $str, bool $toSpace = true)
    {
        $string = '' . $str;
        $replacer = $toSpace ? ' ' : '';
        return trim(preg_replace('/\s+/', $replacer, $string));
    }
}
