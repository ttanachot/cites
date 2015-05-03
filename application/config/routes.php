<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

/*$route['default_controller'] = 'pages/view';
$route['pages'] = 'pages/view';
//$route['(:any)'] = 'pages/view/$1';
$route['pages/login'] = 'pages/login';*/

$route['default_controller'] = 'auth';
$route['auth/create_user'] = 'auth/create_user';
$route['pages'] = 'pages_c';
$route['auth/logout'] = 'auth/logout';
$route['pages/form15/(:any)'] ='form15_c/form15/$1';
$route['pages/preview15'] ='form15_c/preview15';
$route['pages/save15'] = 'form15_c/save15';
$route['pages/about'] = 'pages_c/about';

$route['pages/trans1']='trans_c/trans1';
$route['pages/trans2']='trans_c/trans2';
$route['pages/trans3']='trans_c/trans3';
$route['pages/trans4']='trans_c/trans4';
$route['pages/trans5']='trans_c/trans5';
$route['pages/trans6']='trans_c/trans6';
$route['pages/report']='trans_c/report';

$route['pages/stats_home']='stats_c/home';
$route['pages/stats1']='stats_c/stats1';
$route['pages/stats2']='stats_c/stats2';
$route['pages/stats3']='stats_c/stats3';
$route['pages/stats4']='stats_c/stats4';
$route['pages/stats5']='stats_c/stats5';
$route['pages/stats6']='stats_c/stats6';

$route['officers'] = 'officers_c';
$route['officers/lists/(:any)'] = 'officers_c/lists/$1'; // from officer_c
 // $route['form15/list15/(:any)'] = 'form15_c/list15/$1';   // from officer_c to form15_c 
$route['officers/status/(:any)'] = 'officers_c/status/$1';
$route['form15/show15/(:any)'] = 'form15_c/show15/$1';
$route['pages/status/(:any)'] = 'pages_c/status/$1';
$route['form15/update11']='form16_c/update_stat11';

// $route['pages/forms/form16']='form16_c/';
$route['officers/form15/status'] = 'form15_c/statusoff';
$route['officers/form21/status'] = 'form21_c/statusoff';
$route['officers/form19/status'] = 'form19_c/statusoff';
$route['officers/form20/status'] = 'form20_c/statusoff';
$route['officers/form17/status'] = 'form17_c/statusoff';
$route['officers/form18/status'] = 'form18_c/statusoff';
$route['officers/form13/status/(:any)'] = 'form13_c/statusoff/$1';
$route['officers/formhybrid/status/(:any)'] = 'formhybrid_c/statusoff/$1';

$route['form21/show21/(:any)'] = 'form21_c/show21/$1';
$route['pages/form21/(:any)'] ='form21_c/form21/$1';
$route['pages/preview21'] ='form21_c/preview21';
$route['pages/save21'] = 'form21_c/save21';
$route['form21/update21']='form16_c/update_stat21';  ////////////////////////brb/////


//user view the return form form officer
$route['form16/submitForm16/'] = 'form16_c/submitForm16/';
$route['form16/view/(:any)'] = 'form16_c/view16/$1/$2';
$route['form14/view/(:any)'] = 'form14_c/view14/$1/$2';


$route['pages/form19/(:any)'] ='form19_c/form19/$1';
$route['pages/preview19'] ='form19_c/preview19';
$route['pages/save19'] = 'form19_c/save19';
$route['form19/update22'] = 'form19_c/update_stat22';
$route['form19/show19/(:any)'] = 'form19_c/show19/$1';

$route['pages/form20/(:any)'] ='form20_c/form20/$1';
$route['pages/preview20'] ='form20_c/preview20';
$route['pages/save20'] = 'form20_c/save20';
$route['form20/update23'] = 'form16_c/update_stat23';
$route['form20/show20/(:any)'] = 'form20_c/show20/$1';

$route['pages/form13/(:any)'] ='form13_c/form13/$1';
$route['pages/preview13'] ='form13_c/preview13';
$route['pages/save13'] = 'form13_c/save13';

$route['pages/form17/(:any)'] ='form17_c/form17/$1';
$route['pages/preview17'] ='form17_c/preview17';
$route['pages/save17'] = 'form17_c/save17';
$route['form17/update24'] = 'form16_c/update_stat24';
$route['form17/show17/(:any)'] = 'form17_c/show17/$1';

$route['pages/form18/(:any)'] ='form18_c/form18/$1';
$route['pages/preview18'] ='form18_c/preview18';
$route['pages/save18'] = 'form18_c/save18';
$route['form18/update25'] = 'form16_c/update_stat25';
$route['form18/show18/(:any)'] = 'form18_c/show18/$1';

$route['pages/form13/(:any)'] ='form13_c/form13/$1';
$route['pages/preview13'] ='form13_c/preview13';
$route['pages/save13'] = 'form13_c/save13';
$route['form13/show13/(:any)'] = 'form13_c/show13/$1';
$route['form13/update3/(:any)'] = 'form14_c/update_stat3/$1';

$route['pages/formhybrid/(:any)'] ='formhybrid_c/formhybrid/$1';
$route['pages/previewhybrid'] ='formhybrid_c/previewhybrid';
$route['pages/savehybrid'] = 'formhybrid_c/savehybrid';
$route['formhybrid/update61'] = 'form14_c/update_stat61';
$route['formhybrid/showhybrid/(:any)'] = 'formhybrid_c/showhybrid/$1';


//officers reports
$route['officers/users-report']='officers_c/getAllUser';
$route['officers/officers-report']='officers_c/getAllOfficer';

/* End of file routes.php */
//test upload
$route['pages/contact'] = 'pages_c/contact';
$route['pages/upload_file'] = 'pages_c/upload';
//end test
/* Location: ./application/config/routes.php */