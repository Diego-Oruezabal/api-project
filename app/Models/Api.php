<?php

namespace App\Models;

use App\Models\Scopes\FilterScope;
use App\Models\Scopes\IncludeScope;
use App\Models\Scopes\SelectScope;
use App\Models\Scopes\SortScope;
use Illuminate\Database\Eloquent\Model;



class Api extends Model
{
    /*
    protected static function booted(): void
    {
        static::addGlobalScope([
            FilterScope::class,
            SelectScope::class,
            SortScope::class,
            IncludeScope::class
        ]);
    }
        */
        protected static function booted(): void
    {
        static::addGlobalScope(new FilterScope);
        static::addGlobalScope(new SelectScope);
        static::addGlobalScope(new SortScope);
        static::addGlobalScope(new IncludeScope);
    }



    public function scopeGetOrPaginate($query)
    {
        if (request('perPage')){
           return $query->paginate(request('perPage'));
        }

        return $query->get();
    }
}
