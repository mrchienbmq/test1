<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 7/19/18
 * Time: 7:00 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Bakery extends Model
{
    protected $table = 'bakeries';
    public $timestamps = true;

    public function category() {
        return $this->belongsTo('App\Category','categoryId');
    }

}