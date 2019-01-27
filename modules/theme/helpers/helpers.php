<?php

if (!function_exists('themes')) {
    /**
     * Generate an asset path for the theme.
     *
     * @param string $path
     * @param bool   $secure
     * @return string
     */
    function themes($path, $secure = null)
    {
        return Theme::assets($path, $secure);
    }
}

if (!function_exists('lang')) {
    /**
     * Get lang content from current theme.
     *
     * @param $fallback
     * @return \Illuminate\Contracts\Translation\Translator|string
     */
    function lang($fallback)
    {
        return Theme::lang($fallback);
    }
}

if (!function_exists('assetTheme')) {

    /**
     * @param $path
     * @param bool $frontend
     * @return string
     * @copyright 2019 LUCY VN
     * @author Pencii Team <hoatq@lucy.ne.jp>
     */
    function assetTheme($path, $frontend = true)
    {
        if ($frontend) {
            return asset(FRONTEND_ASSET . $path);
        }

        return asset(BACKEND_ASSET . $path);
    }
}

if (!function_exists('backendAsset')) {
    /**
     * @param $path
     * @return string
     * @copyright 2019 LUCY VN
     * @author Pencii Team <hoatq@lucy.ne.jp>
     */
    function backendAsset($path)
    {
        return asset(BACKEND_ASSET . $path);
    }
}

if (!function_exists('frontendAsset')) {
    /**
     * @param $path
     * @return string
     * @copyright 2019 LUCY VN
     * @author Pencii Team <hoatq@lucy.ne.jp>
     */
    function frontendAsset($path)
    {
        return asset(FRONTEND_ASSET . $path);
    }
}
