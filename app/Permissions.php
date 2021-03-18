<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $guarded = [];
    protected $table = "permissions";
}