<?php


Auth::routes();

/*admin routes*/

Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\Auth\LoginController@login');

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {

    Route::get('/', 'Admin\HomeController@dashboard');

    Route::resource('users', 'Admin\UsersController');
    Route::get('profile/{id}', 'Admin\UsersController@show');
    Route::get('profile-edit/{id}', 'Admin\UsersController@profile_edit');
    Route::post('profile-update', 'Admin\UsersController@profile_update');

    Route::resource('slider-category', 'Admin\SliderCategoryController');
    Route::resource('sliders', 'Admin\SlidersController');

    Route::resource('menus', 'Admin\MenuController');

    Route::resource('news', 'Admin\NewsController');

    Route::resource('charity-profile', 'Admin\CharityProfileController');



    Route::resource('video', 'Admin\VideoController');

    Route::resource('payments', 'Admin\PaymentsController');
    Route::get('payment/{id}', 'Admin\PaymentsController@payment_detail');
    Route::get('payments-pending', 'Admin\PaymentsController@payments_pending');

    Route::resource('commissions', 'Admin\CommissionsController');

    Route::resource('products', 'Admin\ProductsController');
    Route::resource('products-type', 'Admin\ProductsTypeController');

    Route::resource('service', 'Admin\ServiceController');
    Route::resource('service-type', 'Admin\ServiceTypeController');

    Route::resource('jobs', 'Admin\JobsController');
    Route::resource('jobs-category', 'Admin\JobsCategoryController');

    Route::resource('pages', 'Admin\PagesController');

    Route::resource('students', 'Admin\HajjiController');

    Route::resource('applicatnts', 'Admin\ApplicantsController');

    Route::resource('roles', 'Admin\RolesController');
    Route::resource('permissions', 'Admin\PermissionsController');

    Route::get('system-settings', 'Admin\SettingsController@system_settings');
    Route::post('system-settings', 'Admin\SettingsController@system_settings_update');


    Route::post('logout', 'Admin\Auth\LoginController@logout');

});


/*admin ajax*/
Route::post('extra-fields', 'Admin\AjaxController@extra_fields');


Route::get('password/change/{id}', 'UsersController@password_change');
Route::post('password/change', 'UsersController@password_update');


// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');


/*site url*/
Route::get('/', 'HomeController@index');


Route::get('registration', 'HomeController@registration');
Route::post('registration-form', 'HomeController@registration_submit');
Route::get('registration-second', 'HomeController@registration_second');
Route::post('registration-final-submit', 'HomeController@registration_final_submit');




Route::get('user/activate/{id}', 'HomeController@activate');



Route::get('myprofile', 'ProfileController@myprofile');
Route::get('myprofile-edit', 'ProfileController@myprofile_edit');
Route::post('myprofile-update', 'ProfileController@myprofile_update');

Route::get('contact-info', 'ProfileController@contact_info');
Route::get('contact-info-edit', 'ProfileController@contact_info_edit');
Route::post('contact-info-update', 'ProfileController@contact_info_update');
Route::post('contact-info-insert', 'ProfileController@contact_info_insert');

Route::get('educational-info', 'ProfileController@educational_info');
Route::get('educational-info-edit', 'ProfileController@educational_info_edit');
Route::post('educational-info-update', 'ProfileController@educational_info_update');
Route::post('educational-info-insert', 'ProfileController@educational_info_insert');

Route::get('payments', 'ProfileController@payments');
Route::get('payment/{id}', 'ProfileController@payment_detail');
Route::get('payment-add', 'ProfileController@payment_add');
Route::post('payment-insert', 'ProfileController@payment_insert');


Route::get('product/{title}', 'HomeController@product');
Route::get('service/{title}', 'HomeController@service');
Route::get('training/{title}', 'HomeController@training');


/*jobs*/
Route::get('job-category/{id}', 'JobsController@job_list');
Route::get('job-detail/{id}', 'JobsController@job_detail');


Route::get('news/{id}', 'HomeController@news_detail');
Route::get('service/{id}', 'HomeController@service_detail');
Route::get('package/{id}', 'HomeController@package_detail');
Route::post('contact-us-send', 'HomeController@contact_us_send');




Route::get('resume-view', 'CvController@resume_view');

Route::get('resume-view-step1', 'CvController@resume_view_step1');
Route::post('personal-form-edit-submit', 'CvController@personal_form_edit_submit');
Route::post('address-form-edit-submit', 'CvController@address_form_edit_submit');
Route::post('cai-form-edit-submit', 'CvController@cai_form_edit_submit');
Route::post('ori-form-edit-submit', 'Jobboard\ResumeController@ori_form_edit_submit');

Route::get('resume-view-step2', 'CvController@resume_view_step2');
Route::post('aca-edit-submit', 'CvController@aca_edit_submit');
Route::post('aca-delete', 'CvController@aca_delete');
Route::post('tr-edit-submit', 'CvController@tr_edit_submit');
Route::post('tr-delete', 'CvController@tr_delete');
Route::post('pq-edit-submit', 'CvController@pq_edit_submit');
Route::post('pq-delete', 'CvController@pq_delete');


Route::get('resume-view-step3', 'CvController@resume_view_step3');
Route::post('exp-form', 'CvController@exp_form');
Route::post('exp-edit-submit', 'CvController@exp_edit_submit');
Route::post('employment-delete', 'CvController@employment_delete');


/*dynamic form by ajax*/
Route::post('cv-form', 'CvController@cv_form');


Route::get('resume-view-step4', 'CvController@resume_view_step4');
Route::post('spe-edit-submit', 'CvController@spe_edit_submit');
Route::post('spe-delete', 'CvController@spe_delete');
Route::post('lan-edit-submit', 'CvController@lan_edit_submit');
Route::post('lan-delete', 'CvController@lan_delete');
Route::post('ref-edit-submit', 'CvController@ref_edit_submit');
Route::post('ref-delete', 'CvController@ref_delete');

Route::get('resume-view-step5', 'CvController@resume_view_step5');
Route::post('resume-view-step5-edit-submit', 'CvController@resume_view_step5_edit_submit');


Route::get('cv-pdf', 'CvController@cv_pdf');


Route::get('{title}', 'HomeController@pages');
/*site ajax url*/
Route::post('division-district', 'AjaxController@division_district');
Route::post('district-upzilla', 'AjaxController@district_upzilla');
Route::post('application-submit', 'HomeController@application_submit');
















