<?php
/**
 * Uninstall utils.
 *
 * @author @jaswsinc
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\WpMenuLogic\Pro\Classes\Utils;

use WebSharks\WpSharks\WpMenuLogic\Pro\Classes;
use WebSharks\WpSharks\WpMenuLogic\Pro\Interfaces;
use WebSharks\WpSharks\WpMenuLogic\Pro\Traits;
#
use WebSharks\WpSharks\WpMenuLogic\Pro\Classes\AppFacades as a;
use WebSharks\WpSharks\WpMenuLogic\Pro\Classes\SCoreFacades as s;
use WebSharks\WpSharks\WpMenuLogic\Pro\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Uninstall utils.
 *
 * @since $v Initial release.
 */
class Uninstaller extends SCoreClasses\SCore\Base\Core
{
    /**
     * Other uninstall routines.
     *
     * @since $v Initial release.
     *
     * @param int $site_counter Site counter.
     */
    public function onOtherUninstallRoutines(int $site_counter)
    {
        // Do something here.
        // $this->uninstallSomething($site_counter);
        // i.e., Create protected methods in this class.
    }
}
