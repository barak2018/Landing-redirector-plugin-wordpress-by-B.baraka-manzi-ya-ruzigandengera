<?php
/**
 * Plugin Name: Landing Redirector
 * Description: Redirects homepage visitors to mobile or desktop landing page based on device.
 * Version: 1.0
 * Author: Your Name
 */

// Hook into WordPress init
add_action('template_redirect', function() {
    if (is_front_page()) {
        $user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);

        $mobile_devices = array('iphone', 'ipod', 'ipad', 'android', 'blackberry', 'webos', 'windows phone', 'opera mini', 'iemobile', 'mobile');

        $is_mobile = false;

        foreach ($mobile_devices as $device) {
            if (strpos($user_agent, $device) !== false) {
                $is_mobile = true;
                break;
            }
        }

        if ($is_mobile) {
            wp_redirect('https://buysellorrent.com/mobile/index.html');
            exit;
        } else {
            wp_redirect('https://buysellorrent.com/BuySellorRent.com/index.html');
            exit;
        }
    }
});
