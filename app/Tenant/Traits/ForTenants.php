<?php

namespace App\Tenant\Traits;

use App\Tenant\Scopes\TenantScope;

trait ForTenants
{
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(
            new TenantScope()
        );
    }
}
