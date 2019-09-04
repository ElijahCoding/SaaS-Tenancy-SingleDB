<?php

namespace App\Tenant\Scopes;

use Illuminate\Database\Eloquent\{Model, Builder, Scope};

class TenantScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        return $builder->where('company_id', '=', 1);
    }
}
