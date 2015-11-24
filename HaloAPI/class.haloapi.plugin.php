<?php if (!defined('APPLICATION')) exit();
/**
 * HaloAPI Plugin.
 *
 * @license https://www.gnu.org/licenses/lgpl.html GNU LGPL v3
 * @package HaloAPI
 */
$PluginInfo['HaloAPI'] = array(
    'Name' => 'HaloAPI',
    'Description' => 'Implements the Halo Public API among the Vanilla forum system.',
    'Version' => '0.1',
    'Author' => "Germano Corrêa",
    'AuthorEmail' => 'germanobruscato@gmail.com',
    'AuthorUrl' => 'http://sculy.neocities.org',
    'MobileFriendly' => true,
    'SettingsUrl' => '/settings/haloapi',
    'SettingsPermission' => 'Garden.Settings.Manage',
    'RequiredApplications' => array('Vanilla' => '2.2'),
    'SettingsPermission' => 'Garden.AdminUser.Only',
);
require_once('PHP-HaloAPI/haloapi.class.php');
class HaloAPI extends Gdn_Plugin {
    private $apiKey;
    private $haloAPI; // PHP-HaloAPI class object
    private $playerName;
    public function __construct(){}
}
