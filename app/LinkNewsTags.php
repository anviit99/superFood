<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class LinkNewsTags extends Model
{
    protected $guarded = [];
    protected $table = "link_news_tag";
}