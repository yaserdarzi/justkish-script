<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use SoftDeletes;
    protected $table = Constants::CATEGORY_DB;
    protected $fillable = [
        'type_app_id', 'group_features_id', 'title', 'icon', 'desc',
        'sort', 'link'
    ];
    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id', 'id')->where('deleted_at', null)
            ->select('*', DB::raw("CASE WHEN image != '' THEN (concat ( '" . url('') . "/files/products/',id,'/', image) ) ELSE '' END as image"));
    }
}
