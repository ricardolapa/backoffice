<?php namespace RicardoLapa\Backoffice\Models;

use Model;

/**
 * Menubar Model
 */
class Menubar extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ricardolapa_backoffice_menubars';

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
    public $belongsToMany = [
        'menuitem' => [
            'RicardoLapa\Backoffice\Models\Menuitem',
            'table'    => 'ricardolapa_backoffice_bar_item',
            'key'      => 'bar_id',
            'otherKey' => 'item_id'
        ]
    ];
    public $attachOne = [
        'logobrand' => 'System\Models\File'
    ];
}
