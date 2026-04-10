<?php
/**
 * Plugin Name: Playground Custom Patterns
 * Description: Custom block patterns for the playground theme preview
 * Version: 1.0.0
 * Author: Playground Team
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Register pattern categories
function playground_register_pattern_categories() {
    register_block_pattern_category(
        'playground-patterns',
        array('label' => __('Playground Patterns', 'playground-patterns'))
    );
}
add_action('init', 'playground_register_pattern_categories');

// Register custom block patterns
function playground_register_patterns() {
    // Register patterns from the patterns directory
    $patterns_dir = plugin_dir_path(__FILE__) . 'patterns/';

    if (is_dir($patterns_dir)) {
        $pattern_files = glob($patterns_dir . '*.php');

        foreach ($pattern_files as $pattern_file) {
            // Read the entire file content
            $file_content = file_get_contents($pattern_file);

            // Extract HTML content (everything after the PHP closing tag)
            $html_start = strpos($file_content, '?>');
            if ($html_start !== false) {
                $html_content = trim(substr($file_content, $html_start + 2));
            } else {
                continue; // Skip if no PHP closing tag found
            }

            // Expand plugin-relative image placeholders to the actual plugin URL
            $plugin_url = plugin_dir_url(__FILE__) . 'images/';
            $html_content = str_replace('__PLUGIN_URL__', esc_url($plugin_url), $html_content);

            // Extract pattern metadata from PHP comments
            $title = '';
            $slug = '';
            $categories = '';

            // Look for Title
            if (preg_match('/\* Title:\s*(.+?)\s*\n/', $file_content, $matches)) {
                $title = trim($matches[1]);
            }

            // Look for Slug
            if (preg_match('/\* Slug:\s*(.+?)\s*\n/', $file_content, $matches)) {
                $slug = trim($matches[1]);
            }

            // Look for Categories
            if (preg_match('/\* Categories:\s*(.+?)\s*\n/', $file_content, $matches)) {
                $categories = trim($matches[1]);
            }

            if (!empty($slug) && !empty($html_content) && !empty($title)) {
                register_block_pattern(
                    $slug,
                    array(
                        'title' => $title,
                        'content' => $html_content,
                        'categories' => array_map('trim', explode(',', $categories)),
                    )
                );
            }
        }
    }
}
add_action('init', 'playground_register_patterns');