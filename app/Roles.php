<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $guarded = [];
    protected $table = "roles";
}