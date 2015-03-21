<?php namespace Anomaly\AccountingModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class AccountingModule
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\AccountingModule
 */
class AccountingModule extends Module
{

    /**
     * The navigation group.
     *
     * @var string
     */
    protected $navigation = 'anomaly.module.accounting::addon.navigation';

    /**
     * The addon sections.
     *
     * @var array
     */
    protected $sections = [
        'products',
        'categories'
    ];

}
