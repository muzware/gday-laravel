<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entry
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereUpdatedAt($value)
 */
class Entry extends Model
{
	
	
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
