<?php
/**
 * Plugin Name: Landing Redirector
 * Description: Redirects homepage visitors to mobile or desktop landing page based on device.
 * Version: 1.1
 * Author: B.BARAKA MANZI YA RUZIGANDENGERA
 */

add_action('template_redirect', function() {
    if (is_front_page()) {
        $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? strtolower($_SERVER['HTTP_USER_AGENT']) : '';

        $is_mobile = false;

        if (preg_match('/iphone|ipod|ipad|android|blackberry|bb10|mini|windows\sce|palm|mobile|tablet|opera mini|iemobile/', $user_agent)) {
            $is_mobile = true;
        }

        if ($is_mobile) {
            wp_redirect('https://buysellorrent.com/mobile/', 301);
            exit;
        } else {
            wp_redirect('https://buysellorrent.com/BuySellorRent.com/index.html', 301);
            exit;
        }
    }
});
