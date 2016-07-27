<?php
declare(strict_types=1);

namespace Spires\Plugins\ChannelOperations;

class ServiceProvider extends \Spires\Core\ServiceProvider
{
    /**
     * Plugins provided.
     *
     * @return string[]
     */
    public function plugins()
    {
        return [
            Plugin::class
        ];
    }
}
