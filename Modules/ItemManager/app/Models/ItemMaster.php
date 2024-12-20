<?php

namespace Modules\ItemManager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Clients\Models\Client;

// use Modules\ItemManager\Database\Factories\ItemMasterFactory;

class ItemMaster extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = "items_master";
    protected $fillable = [
        'id',
        'item_id',
        'item_name',
        'version',
        'category',
        'color',
        'client_id',
        'image_thumbnail_link',
        'license_update',
        'serve_latest_updates'
    ];

    // public $timestamps = true;

    // protected static function newFactory(): ItemMasterFactory
    // {
    //     // return ItemMasterFactory::new();
    // }
}
