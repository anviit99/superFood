<?php
$router= new AltoRouter();


$router->map('GET','/small/public/home','App\Controllers\HomeController@index','index');
$router->map('GET','/small/public/login','App\Controllers\LoginController@index','login');
$router->map('GET','/small/public/register','App\Controllers\RegisterController@index','register');
$router->map('POST','/small/public/registerCheck','App\Controllers\RegisterController@store','registerCheck');
$router->map('POST','/small/public/loginCheck','App\Controllers\LoginController@store','loginCheck');
$router->map('GET','/small/public/logout','App\Controllers\LoginController@logout','logout');

$router->map('GET','/small/public/home/users','App\Controllers\UserAdminController@index','users');
$router->map('GET','/small/public/home/active/[i:id]','App\Controllers\UserAdminController@active','active');
$router->map('POST','/small/public/checkEmail/[i:email]','App\Controllers\RegisterController@update','checkEmail');
$router->map('GET','/small/public/home/deactivate/[i:id]','App\Controllers\UserAdminController@deactivate','deactivate');
$router->map('GET','/small/public/home/deleteUser/[i:id]','App\Controllers\UserAdminController@delete','deleteUser');

$router->map('GET','/small/public/user/add','App\Controllers\UserAdminController@add','userAdd');
$router->map('POST','/small/public/user/update','App\Controllers\UserAdminController@store','userAdd1');
$router->map('GET','/small/public/user/editUser/[i:id]','App\Controllers\UserAdminController@show','showAdd');
$router->map('POST','/small/public/user/update/[i:id]','App\Controllers\UserAdminController@update','updateUser');

$router->map('GET','/small/public/admin/news','App\Controllers\NewsAdminController@index','blogIndex');
$router->map('GET','/small/public/admin/newsAdd','App\Controllers\NewsAdminController@create','blogAdd');
$router->map('POST','/small/public/admin/news/store','App\Controllers\NewsAdminController@store','NewsAdd');
$router->map('POST','/small/public/admin/news/update/[i:id]','App\Controllers\NewsAdminController@update','newsUpdate');
$router->map('GET','/small/admin/news/edit/[i:id]','App\Controllers\NewsAdminController@show','editNews');
$router->map('GET','/small/admin/news/delete/[i:id]','App\Controllers\NewsAdminController@delete','deleteNews');

$router->map('GET','/small/public/admin/categories','App\Controllers\CategoriesAdminController@index','categories');
$router->map('GET','/small/public/admin/categories/edit/[i:id]','App\Controllers\CategoriesAdminController@show','categoriesEdit');
$router->map('POST','/small/public/admin/categories/update/[i:id]','App\Controllers\CategoriesAdminController@update','categoriesUpdate');
$router->map('GET','/small/public/admin/categories/delete/[i:id]','App\Controllers\CategoriesAdminController@delete','categoriesDelete');
$router->map('GET','/small/public/admin/categoriesAdd','App\Controllers\CategoriesAdminController@create','categoriesAdd');
$router->map('POST','/small/public/admin/newsCategories/addUp','App\Controllers\CategoriesAdminController@store','addUp');

$router->map('GET','/small/public/admin/tags','App\Controllers\TagsAdminController@index','tagAdmin');
$router->map('GET','/small/public/admin/tags/create','App\Controllers\TagsAdminController@create','tagAdd');
$router->map('GET','/small/public/admin/tags/edit/[i:id]','App\Controllers\TagsAdminController@show','tagShow');
$router->map('POST','/small/public/admin/tags/update/[i:id]','App\Controllers\TagsAdminController@update','tagUpdate');
$router->map('GET','/small/public/admin/tags/delete/[i:id]','App\Controllers\TagsAdminController@delete','tagDelete');
$router->map('POST','/small/public/admin/tags/store','App\Controllers\TagsAdminController@store','tagStore');

$router->map('GET','/small/public/admin/roles','App\Controllers\RolesAdminController@index','rolesIndex');
$router->map('GET','/small/public/admin/roles/create','App\Controllers\RolesAdminController@create','rolesAdd');
$router->map('POST','/small/public/admin/roles/store','App\Controllers\RolesAdminController@store','rolesStore');
$router->map('GET','/small/public/admin/roles/edit/[i:id]','App\Controllers\RolesAdminController@show','rolesShow');
$router->map('POST','/small/public/admin/roles/update/[i:id]','App\Controllers\RolesAdminController@update','rolesUpdate');
$router->map('GET','/small/public/admin/roles/delete/[i:id]','App\Controllers\RolesAdminController@delete','rolesDelete');



///FRONTEND///
$router->map('GET','/small/public/superFood','App\Controllers\SuperFoodController@index','supperFood');
$router->map('GET','/small/public/superFood/products','App\Controllers\ProductsController@index','products');
$router->map('GET','/small/public/superFood/products/[i:id]','App\Controllers\ProductsController@show','productShow');









