<?php
/**
 * Shaarli urlextern Plugin
 *
 * @author Jeff Sacco 
 * @link 
 */

use Shaarli\Plugin\PluginManager;

/**
 * Hook render_footer.
 * Executed on every page redering.
 *
 * Template placeholders:
 *   - text
 *   - endofpage
 *   - js_files
 *
 * Data:
 *   - _PAGE_: current page
 *   - _LOGGEDIN_: true/false
 *
 * @param array $data data passed to plugin
 *
 * @return array altered $data.
 */
function hook_urlextern_render_footer($data)
{
    // List of plugin's JS files.
    // Note that you just need to specify CSS path.
    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/urlextern/urlextern.js';
    return $data;
}

/**
 * This function is never called, but contains translation calls for GNU gettext extraction.
 */
function urlextern_translation()
{
    // meta
    t('Open external links in new tab/window');
}
