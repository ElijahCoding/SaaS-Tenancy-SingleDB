<?php

namespace App\Tenant\Observers;

use Illuminate\Database\Eloquent\Model;

class TenantObserver
{

    public function __construct()
    {
        
    }

    public function creating(Model $model)
    {
        $foreignKey = $this->getForeignKey();

        if (!isset($model->company_id)) {
            // code...
        }
    }
}
