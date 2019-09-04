<?php

namespace App\Tenant\Traits;

use App\Tenant\Scopes\TenantScope;
use App\Tenant\Manager;

trait ForTenants
{
    public static function boot()
    {
        parent::boot();

        $manager = app(Manager::class);

        static::addGlobalScope(
            new TenantScope($manager->getTenant())
        );
    }
}
