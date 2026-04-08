<?php
/**
 * Single File Manager sample configuration
 *
 * Copy this file to config.php and adjust it for your deployment.
 * The application loads config.php automatically when it exists.
 */

/**
 * Authentication
 *
 * Supported methods:
 * - password
 * - trusted_header
 * - oidc
 */
$use_auth = true;
$auth_method = 'password';

/**
 * Local password login
 *
 * Generate hashes with password_hash('your-password', PASSWORD_DEFAULT)
 * and replace the examples below before using this in production.
 */
$auth_users = array(
    'admin' => '$2y$10$QyKJ0LQ0f8D9rM7U1Qy7kO0Q2vL2g0dS4mVhLxvP6m2mE8M2dQyqK',
);

/**
 * Trusted header login
 *
 * Uncomment this block to trust a reverse proxy or web server header.
 * Leave $auth_trusted_header_users empty to allow any trusted user.
 */
// $auth_method = 'trusted_header';
// $auth_trusted_header = 'Remote-User';
// $auth_trusted_header_users = array('alice', 'bob');

/**
 * OpenID Connect login
 *
 * Uncomment this block to let Single File Manager handle OIDC directly.
 * If your provider uses strict redirect URI validation, set both URLs
 * explicitly to the exact values registered in the provider.
 */
// $auth_method = 'oidc';
// $oidc_issuer = 'https://sso.example.com/application/o/singlefilemanager/';
// $oidc_client_id = 'singlefilemanager';
// $oidc_client_secret = 'replace-me';
// $oidc_redirect_uri = 'https://files.example.com/index.php?oidc=callback';
// $oidc_post_logout_redirect_uri = 'https://files.example.com/index.php?oidc=logged_out';
// $oidc_allowed_users = array('alice');
// $oidc_allowed_groups = array('filemanagers');

/**
 * File manager root
 *
 * By default the app uses DOCUMENT_ROOT. Override it when you want the
 * file manager to operate on another directory.
 */
// $root_path = '/data';
// $root_url = '';

/**
 * User-specific directory mapping
 */
// $directories_users = array(
//     'alice' => '/data/alice',
//     'bob' => '/data/bob',
// );

/**
 * Optional per-user read-only access
 */
// $readonly_users = array('guest');

/**
 * Optional UI and behavior tweaks
 */
// $iconv_input_encoding = 'UTF-8';
// $datetime_format = 'd/m/Y H:i:s';
// $allowed_file_extensions = '';
// $allowed_upload_extensions = '';
// $favicon_path = '';
// $online_viewer = 'false';
// $sticky_navbar = true;
// $path_display_mode = 'relative';
// $exclude_items = array('.git', '.DS_Store');
// $max_upload_size_bytes = 5000000000;
// $upload_chunk_size_bytes = 2000000;

/**
 * Optional IP-based access rules
 */
// $ip_ruleset = 'OFF';
// $ip_silent = true;
// $ip_whitelist = array(
//     '127.0.0.1',
//     '::1',
// );
// $ip_blacklist = array(
//     '0.0.0.0',
//     '::',
// );
