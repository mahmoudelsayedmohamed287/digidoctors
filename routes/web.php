<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'indexController@index');
Route::get('/admin', 'admin\loginController@create');
Route::get('/adminname', 'admin\loginController@adminname');
Route::post('/addadmin', 'admin\loginController@login');
Route::post('/updateuser/{id}', 'admin\loginController@update');
Route::get('/profile', 'admin\loginController@profile');
Route::get('/updateuser', 'admin\loginController@update');
Route::get('/logout', 'admin\loginController@logout');
Route::get('/dashboard', 'admin\dashboardController@index');
Route::get('/about', 'aboutController@index');
Route::get('/service', 'serviceController@index');
Route::get('/work', 'workController@index');
Route::get('/client', 'clientsController@index');
Route::get('/contact', 'contactController@index');
Route::post('/addmessage', 'contactController@add');

Route::get('/blog', 'commentController@index');
Route::post('/comment', 'commentController@add');
Route::get('/recentpost/{id}', 'commentController@recentpost');


Route::get('/adminsummery', 'admin\summeryController@index');
Route::get('/adminteam', 'admin\teamController@index');
Route::get('/createteam', 'admin\teamController@create');
Route::post('/addteam', 'admin\teamController@add');
Route::get('/editteam/{id}', 'admin\teamController@edit');
Route::post('/updateteam/{id}', 'admin\teamController@update');
Route::get('/deleteteam/{id}', 'admin\teamController@delete');



Route::get('/adminservice', 'admin\servicesController@index');
Route::get('/createservice', 'admin\servicesController@create');
Route::post('/addservice', 'admin\servicesController@add');
Route::get('/editservice/{id}', 'admin\servicesController@edit');
Route::post('/updateservice/{id}', 'admin\servicesController@update');
Route::get('/deleteservice/{id}', 'admin\servicesController@delete');


Route::get('/adminworks', 'admin\worksController@index');
Route::get('/creatework', 'admin\worksController@create');
Route::post('/addworks', 'admin\worksController@add');
Route::get('/editwork/{id}', 'admin\worksController@edit');
Route::post('/updatework/{id}', 'admin\worksController@update');
Route::get('/deletework/{id}', 'admin\worksController@delete');

Route::get('/adminclients', 'admin\clientController@index');
Route::get('/createclient', 'admin\clientController@create');
Route::post('/addclient', 'admin\clientController@add');
Route::get('/editclient/{id}', 'admin\clientController@edit');
Route::post('/updateclient/{id}', 'admin\clientController@update');
Route::get('/deleteclient/{id}', 'admin\clientController@delete');

Route::get('/adminposts', 'admin\postsController@index');
Route::get('/createpost', 'admin\postsController@create');
Route::post('/addpost', 'admin\postsController@add');
Route::get('/editpost/{id}', 'admin\postsController@edit');
Route::post('/updatepost/{id}', 'admin\postsController@update');
Route::get('/publishpost', 'admin\postsController@publish');
Route::get('/deletepost/{id}', 'admin\postsController@delete');

Route::get('/admincontacts', 'admin\contactusController@index');
Route::get('/createcontact', 'admin\contactusController@create');
Route::post('/addcontact', 'admin\contactusController@add');
Route::get('/editcontact/{id}', 'admin\contactusController@edit');
Route::post('/updatecontact/{id}', 'admin\contactusController@update');
Route::get('/deletecontact/{id}', 'admin\contactusController@delete');

Route::get('/adminabouts', 'admin\aboutController@index');
Route::get('/createabout', 'admin\aboutController@create');
Route::post('/addabout', 'admin\aboutController@add');
Route::post('/addvession', 'admin\aboutController@addvession');
Route::get('/deletevession/{id}', 'admin\aboutController@deletevession');
Route::post('/addwhyus', 'admin\aboutController@addwhyus');
Route::get('/deleteaddwhyus/{id}', 'admin\aboutController@deleteaddwhyus');
Route::get('/addimportant', 'admin\aboutController@createimportant');
Route::post('/addimportantclient', 'admin\aboutController@addimportant');
Route::get('/deleteimportant/{id}', 'admin\aboutController@deleteimportant');

Route::get('/addimportants', 'admin\summeryController@createimportant');
Route::post('/addimportantclients', 'admin\summeryController@addimportant');
Route::get('/deleteimportants/{id}', 'admin\summeryController@deleteimportant');
Route::post('/addteam', 'admin\aboutController@addteam');
Route::get('/createteam', 'admin\aboutController@createteam');
Route::get('/deleteteam/{id}', 'admin\aboutController@deleteteam');
Route::get('/deleteimportant/{id}', 'admin\aboutController@deleteimportant');
Route::get('/editabout/{id}', 'admin\aboutController@edit');
Route::get('/editslider/{id}', 'admin\summeryController@editslider');
Route::post('/updateslider/{id}', 'admin\summeryController@updateslider');
Route::post('/updateabout/{id}', 'admin\aboutController@update');
Route::get('/deleteabout/{id}', 'admin\aboutController@delete');

Route::get('/adminmedia', 'admin\socialmediaController@index');
Route::get('/createmedia', 'admin\socialmediaController@create');
Route::post('/addmedia', 'admin\socialmediaController@add');
Route::get('/editmedia/{id}', 'admin\socialmediaController@edit');
Route::post('/updatemedia/{id}', 'admin\socialmediaController@update');
Route::get('/delete/{id}', 'admin\socialmediaController@delete');

Route::get('/admincore', 'admin\missionController@index');
Route::get('/createcore', 'admin\missionController@create');
Route::post('/addcore', 'admin\missionController@add');
Route::get('/editcore/{id}', 'admin\missionController@edit');
Route::post('/updatecore/{id}', 'admin\missionController@update');
Route::get('/deletecore/{id}', 'admin\missionController@delete');

