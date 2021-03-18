<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class LinkRolePermission extends Model
{
    protected $guarded = [];
    protected $table = "link_role_permission";
}