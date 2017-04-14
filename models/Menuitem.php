<?php namespace RicardoLapa\Backoffice\Models;

use Model;

/**
 * Menuitem Model
 */
class Menuitem extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ricardolapa_backoffice_menuitems';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsToMany = [
        'menubar' => [
            'RicardoLapa\Backoffice\Models\Menubar',
            'table'    => 'ricardolapa_backoffice_bar_item',
            'key'      => 'item_id',
            'otherKey' => 'bar_id'
        ]
    ];
    public $belongsTo = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
