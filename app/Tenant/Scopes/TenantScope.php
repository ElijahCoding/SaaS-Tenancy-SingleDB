<?php

namespace App\Tenant\Scopes;

use Illuminate\Database\Eloquent\{Model, Builder, Scope};

class TenantScope implements Scope
{
    protected $tenant;

    public function __construct(Model $tenant)
    {
        $this->tenant = $tenant;
    }

    public function apply(Builder $builder, Model $model)
    {
        return $builder->where($this->tenant->getForeignKey(), '=', $this->tenant->id);
    }
}
