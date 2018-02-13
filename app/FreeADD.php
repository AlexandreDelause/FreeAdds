<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class FreeADD extends Model
{

public $table = 'freeadd';

public $fillable = ['titre','message','prix', 'user_id',];

}
