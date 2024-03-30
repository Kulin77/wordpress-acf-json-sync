<?php
/**
 * Define the internationalization functionality.
 *
 * Loads and defines the acf json files for this plugin.
 * 
 * @package Demo_Plugin
 * @author  Kulin <kulin2594@gmail.com>
 */
namespace Demo_Plugin;

/**
 * Define the internationalization functionality.
 *
 */
class ACF_Hooks {

    /**
     * Change the acf plugin json save path.
     *
     * @return string The path of acf-json directory.
     */
    public function acf_json_save_point(string $path): string {

        // Update the save location to your desired path
        $path = plugin_dir_path(__DIR__) . 'acf-json';
        return $path;

    }

    /**
     * Change the acf plugin json load path.
     *
     * @param string[] $paths
     * @return string[]    The path of acf-json directory.
     */
    public function acf_json_load_point(array $paths): array {

        // Add your custom save path to the array
        $paths[] = plugin_dir_path(__DIR__) . 'acf-json';
        return $paths;

    }

}
