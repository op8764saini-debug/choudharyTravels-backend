<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'category';

public function parent()
{
    return $this->belongsTo(category::class, 'parent_id')->where('parent_id', 0);  // 'cat_id' is the foreign key
    
}


}
