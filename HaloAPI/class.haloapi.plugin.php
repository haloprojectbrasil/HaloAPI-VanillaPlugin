<?php
/**
 * Gravatar Plugin.
 *
 * @copyright 2009-2015 Vanilla Forums Inc.
 * @license https://www.gnu.org/licenses/lgpl.html GNU LGPL v3
 * @package HaloAPI
 */

// Define the plugin:
$PluginInfo['HaloAPI'] = array(
    'Name' => 'HaloAPI',
    'Description' => 'Implements the Halo Public API among the Vanilla forum system.',
    'Version' => '0.1',
    'Author' => "Germano Corrêa",
    'AuthorEmail' => 'germanobruscato@gmail.com',
    'AuthorUrl' => 'http://sculy.neocities.org',
    'MobileFriendly' => true
);

/**
 * Class HaloAPI
 */
require_once('haloapi.class.php');
class HaloAPI extends Gdn_Plugin {
    /**
     *
     *
     * @param $apiKey
     */
}
