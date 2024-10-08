<?php

/**
 * Plugin Name:       Interactive Block
 * Description:       An interactive block with the Interactivity API
 * Version:           0.1.0
 * Requires at least: 6.6
 * Requires PHP:      7.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       interactive-block
 *
 * @package           create-block
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

require_once "settings/my-first-gutenberg-app.php";

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_interactive_block_block_init()
{
	register_block_type_from_metadata(__DIR__ . '/build/block-1');
	register_block_type_from_metadata(__DIR__ . '/build/block-2');
	register_block_type_from_metadata(__DIR__ . '/build/block-3');
	register_block_type_from_metadata(__DIR__ . '/build/block-4');
}
add_action('init', 'create_block_interactive_block_block_init');
