<?php namespace Anomaly\OrdersModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class OrdersModule
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\OrdersModule
 */
class OrdersModule extends Module
{

    /**
     * The navigation group.
     *
     * @var string
     */
    protected $navigation = 'anomaly.module.orders::addon.navigation';

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
