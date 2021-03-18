<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $guarded = [];
    protected $table = "new_tags";
}