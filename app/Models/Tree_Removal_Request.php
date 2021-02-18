<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree_Removal_Request extends Model
{
    use HasFactory;

    protected $table = 'tree_removal_requests';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'created_by_user_id',
        'description',
        'land_size',
        'land_size_unit',
        'no_of_trees',
        'no_of_tree_species',
        'no_of_mammal_species',
        'no_of_amphibian_species',
        'no_of_reptile_species',
        'no_of_avian_species',
        'no_of_flora_species',
        'species_special_notes',
        'status_id',
        'land_parcel_id',
        'district_id',
        'province_id',
        'gs_division_id',
        'governing_organizations',

        'images',
        'special approval',
        'tree_locations',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tree_locations' => 'array',
        'special_approval' => 'array',
        'governing_organizations' => 'array',
    ];

    protected $attributes = [
        'created_by_user_id' => 0,
        'images' => 0,
        'special_approval' => 0,
        'tree_locations' => 0,
        'status_id' => 1,
        'land_size_unit' => "acres",
        'governing_organizations' => 0
    ];


    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function gs_division()
    {
        return $this->belongsTo('App\Models\GS_Division');
    }

    public function province()
    {
        return $this->belongsTo('App\Models\Province');
    }

    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }

    public function land_parcel()
    {
        return $this->belongsTo('App\Models\Land_Parcel');
    }
}
