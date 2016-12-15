<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Front end routes
Route::get('/', 'DynamicPageController@dynamicText');
Route::get('page/{slug}', 'DynamicPageController@dynamicText');
//ADMIN routes
Route::get('admin', 'BackendController@dashboard');
//Route::resource('admin/test', 'TestController');
Route::get('admin/test', 'TestController@index');
Route::get('admin/test/call_new', 'TestController@call_new');
Route::post('admin/test/save', 'TestController@save');
Route::post('admin/test/check_duplicate', 'TestController@check_duplicate');
Route::post('admin/test/delete/{id}', 'TestController@delete');
//Route::get('admin/test', 'TestController@dashboard');

Route::resource('admin/states', 'StatesController');
Route::resource('admin/townships', 'TownshipsController');
Route::resource('admin/roles', 'RolesController');
Route::resource('admin/users', 'UsersController');
Route::resource('admin/countries', 'CountriesController');
Route::resource('admin/projects', 'ProjectsController');
Route::resource('admin/clients', 'ClientsController');
Route::resource('admin/partners', 'PartnersController');
Route::resource('admin/staffs', 'StaffsController');
Route::resource('admin/pages', 'PagesController');
Route::resource('admin/blogs', 'BlogsController');
Route::resource('admin/albums', 'AlbumsController');
Route::resource('admin/menus', 'MenusController');
Route::resource('admin/photos', 'PhotosController');
Route::resource('admin/comments', 'CommentsController');
Route::resource('admin/contacts', 'ContactsController');
Route::resource('admin/sliders', 'SlidersController');
Route::resource('admin/vacancies', 'VacanciesController');
Route::resource('admin/settings', 'SettingsController');
Route::resource('admin/constants', 'ConstantsController');
Route::get('admin/constants/save_constants', 'ConstantsController@saveConstants');
//Route::get('admin/blog/approve_comments','BlogsController@approveComments');
//Route::get('admin/pages/test123','PagesController@test123');
//project route9860726705
Route::get('admin/projects/manage_project/{project_id}', 'ProjectsController@manageProject');
Route::post('admin/projects/upload_project_reports/{project_id}','ProjectsController@uploadProjectReports');
Route::post('admin/projects/upload_project_presentations/{project_id}','ProjectsController@uploadProjectPresentations');
Route::post('admin/projects/upload_project_briefs/{project_id}','ProjectsController@uploadProjectBriefs');
Route::post('admin/projects/upload_project_discussion_papers/{project_id}','ProjectsController@uploadProjectDiscussionPapers');
Route::post('admin/projects/upload_project_training_meterials/{project_id}','ProjectsController@uploadProjectTrainingMeterials');
Route::get('admin/projects/delete/{project_id}','ProjectsController@delete');
Route::get('admin/clients/delete/{id}','ClientsController@delete');
Route::get('admin/partners/delete/{id}','PartnersController@delete');
Route::get('admin/pages/delete/{id}','PagesController@delete');
Route::get('admin/vacancies/delete/{id}','VacanciesController@delete');
Route::get('admin/sliders/delete/{id}','SlidersController@delete');
Route::get('admin/projects_type/delete/{project_id}/{id}','ProjectsController@deleteReportType');
Route::get('admin/contacts/delete/{id}','ContactsController@deleteContact');
Route::get('admin/staffs/delete/{id}','StaffsController@delete');
Route::get('admin/blogs/delete/{id}','BlogsController@delete');
Route::get('admin/contacts/set_primary/{id}','ContactsController@makePrimary');
//Route::get('admin/pages/test123','PagesController@test123');
Route::get('admin/pages/showPage/{id}', 'PagesController@showPage');
Route::get('admin/pages/test', 'PagesController@test');
//Route::resource('admin/pages', 'PagesController');
//Route::get('admin/pages/notices', 'PagesController@notices');

//change status 
Route::get('admin/vacancies/change_status/{status}/{id}','VacanciesController@changeStatus');
Route::get('admin/albums/change_status/{status}/{id}','AlbumsController@changeStatus');
Route::get('admin/projects/change_status/{status}/{id}','ProjectsController@changeStatus');
Route::get('admin/clients/change_status/{status}/{id}','ClientsController@changeStatus');
Route::get('admin/partners/change_status/{status}/{id}','PartnersController@changeStatus');
Route::get('admin/blogs/change_status/{status}/{id}','BlogsController@changeStatus');
Route::get('admin/pages/change_status/{status}/{id}','PagesController@changeStatus');
Route::get('admin/sliders/change_status/{status}/{id}','SlidersController@changeStatus');
Route::get('admin/contacts/change_status/{status}/{id}','ContactsController@changeStatus');
Route::get('admin/users/change_status/{status}/{id}','UsersController@changeStatus');
//front status
Route::get('admin/projects/add_to_front/{front_status}/{id}','ProjectsController@changeFrontStatus');
Route::get('admin/blog/comments/{id}', 'BlogsController@showBlogComments');
Route::get('admin/blog/approve_comments','BlogsController@approveComments');
Route::get('admin/blog/moderate_comment/{id}','BlogsController@moderateComment');
Route::get('admin/pages/show/{id}', 'PagesController@showPage');
Route::get('admin/blogs/show/{id}', 'BlogsController@showBlogPost');
Route::get('admin/contacts/show/{id}', 'ContactsController@showContact');
Route::get('admin/album/upload_photo/{album_id}', 'PhotosController@uploadAlbumPhoto');
Route::post('admin/photo_upload/{id}','PhotosController@uploadPhotosInAlbum');
Route::get('admin/album/photos/{id}', 'PhotosController@showAlbumPhotos');
Route::post('admin/edit_album_photos/{id}','PhotosController@saveAlbumPhotos');
Route::get('admin/make_album_cover/{album_id}/{id}','PhotosController@makeAlbumCover');
Route::get('admin/photo/delete/{album_id}/{id}','PhotosController@deleteAlbumPhoto');
Route::get('admin/delete/album/{album_id}','AlbumsController@deleteAlbum');
Route::get('admin/logout', 'UsersController@logout');
Route::get('admin/change_password', 'AdminController@changePassword');
Route::post('admin/update_password', 'AdminController@updatePassword');
Route::get('admin/clients_upload', 'ClientsController@uploadClient');
Route::post('admin/clients_upload_logo', 'ClientsController@uploadClientLogo');
Route::post('admin/settings_save', 'SettingsController@updateSettings');
Route::post('admin/service_settings_save', 'SettingsController@updateServiceSettings');
Route::get('admin/delete/contact/{id}','ContactsController@deleteContact');
Route::get('admin/delete/user/{id}','UsersController@delete');
Route::get('admin/users/reset/{id}','UsersController@resetPassword');
Route::post('admin/users/reset_password','UsersController@changeNewPassword');
Route::post('admin/ivc_settings_save', 'SettingsController@updateIvcSettings');
Route::post('admin/food_settings_save', 'SettingsController@updateFoodSettings');
Route::post('admin/climate_settings_save', 'SettingsController@updateClimateSettings');
Route::post('admin/company_settings_save', 'SettingsController@updateCompanySettings');
Route::get('admin/service_settings', 'SettingsController@showServiceSettingsPage');
Route::get('admin/ivc_settings', 'SettingsController@showIvcSettingsPage');
Route::get('admin/food_settings', 'SettingsController@showFoodSettingsPage');
Route::get('admin/climate_settings', 'SettingsController@showClimateSettingsPage');
Route::get('admin/company_settings', 'SettingsController@showCompanySettingsPage');
//front page 
Route::get('page/{slug}', 'FrontPageController@showPageContent');
Route::get('team', 'FrontPageController@showTeamPage');
Route::get('opportunity', 'FrontPageController@showOppurtunity');
Route::get('opportunity/{slug}', 'FrontPageController@showOppurtunityDetails');
Route::get('contacts', 'FrontPageController@showContacts');
Route::get('blogs', 'FrontPageController@showBlogPosts');
Route::get('blog/{slug}', 'FrontPageController@showBlogDetails');
Route::post('blog/post_comment', 'FrontPageController@submitBlogComment');
Route::post('contact/post_contact', 'FrontPageController@submitContactForm');
Route::get('projects', 'FrontPageController@listProjects');
Route::get('project/maps', 'FrontPageController@showMap');
Route::get('project/country/{country_code}', 'FrontPageController@showMapProjects');
Route::get('albums', 'FrontPageController@showAlbums');
Route::get('album/{slug}', 'FrontPageController@showAlbumsPhotos');
Route::get('project/detail/{id}', 'FrontPageController@showProjectDetails');
Route::get('our-clients', 'FrontPageController@showClientPage');
Route::get('our-services', 'FrontPageController@showServicePage');
Route::get('inclusive-value-chains', 'FrontPageController@showIvcPage');
Route::get('food-security-food-safety', 'FrontPageController@showFoodPage');
Route::get('climate-smart-ag
riculture', 'FrontPageController@showClimatePage');
Route::get('private-company', 'FrontPageController@showCompanyPage');
Route::get('pagesd/{slug}', 'TesController@showPage1');
//for test purpose
Route::get('gms', 'GmsController@change_date_format');
Route::get('phpinfo_gms', 'GmsController@phpinfo');

//super admin login route
Route::any("admin/login", [
 "as"   => "users/login",
 "uses" => "BackendusersController@login"
]);

