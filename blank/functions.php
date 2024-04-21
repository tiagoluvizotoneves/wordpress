<?php

function redirect_root_only() {
    if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '') {
        wp_redirect('https://carmensteffens.com.br');
        exit;
    }
}
add_action('template_redirect', 'redirect_root_only');
