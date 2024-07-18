<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'welcome/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// login-logout routes
$route['login'] = 'welcome/login';
$route['logout'] = 'welcome/logout';
$route['login_user'] = 'welcome/login_user';

// New user signup routes
$route['user_signup'] = 'welcome/user_signup';
$route['signup'] = 'welcome/signup';
$route['user_delete/(:any)'] = 'welcome/user_delete/(:any)';

// dashboard routes
$route['dashboard'] = 'welcome/dashboard';

// candidates routes
$route['candidates'] = 'welcome/candidates';
$route['add_candidates'] = 'welcome/add_candidates';
$route['add_candidate_job'] = 'welcome/add_candidate_job';
$route['add_candidate'] = 'welcome/add_candidate';
$route['candidate_details/(:any)'] = 'welcome/candidate_details';
$route['candidate_edit/(:any)'] = 'welcome/candidate_edit';
$route['candidate_delete/(:any)'] = 'welcome/candidate_delete';
$route['allot_job_delete/(:any)/(:any)'] = 'welcome/allot_job_delete';
$route['allot_job/(:any)'] = 'welcome/allot_job/(:any)';
$route['update_candidate'] = 'welcome/update_candidate';

// cities routes
$route['cities'] = 'welcome/cities';
$route['add_city'] = 'welcome/add_city';
$route['city_delete/(:any)'] = 'welcome/city_delete/(:any)';

// jobs routes
$route['jobs'] = 'welcome/jobs';
$route['add_job'] = 'welcome/add_job';
$route['add_jobs'] = 'welcome/add_jobs';
$route['allot_candidate/(:any)'] = 'welcome/allot_candidate/(:any)';
$route['allot_candidate_to_job'] = 'welcome/allot_candidate_to_job';
$route['job_edit/(:any)'] = 'welcome/job_edit/(:any)';
$route['job_details/(:any)'] = 'welcome/job_details/(:any)';
$route['job_delete/(:any)'] = 'welcome/job_delete/(:any)';
$route['update_job/(:any)'] = 'welcome/update_job';
$route['allot_candidate_delete/(:any)/(:any)'] = 'welcome/allot_candidate_delete';

// companies routes
$route['companies'] = 'welcome/companies';
$route['add_company'] = 'welcome/add_company';
$route['company_edit/(:any)'] = 'welcome/company_edit/(:any)';
$route['company_delete/(:any)'] = 'welcome/company_delete/(:any)';
$route['update_company/(:any)'] = 'welcome/update_company';

// Website Routes
$route['home'] = 'welcome/home';
$route['job_details'] = 'welcome/website_job_details';
$route['job_list'] = 'welcome/job_list';
$route['job_post'] = 'welcome/job_post';
$route['create_jobs'] = 'welcome/create_jobs';
$route['company_post'] = 'welcome/company_post';
$route['create_company'] = 'welcome/create_company';
$route['candidate_profile'] = 'welcome/candidate_profile';
$route['candidate_dashboard'] = 'welcome/candidate_dashboard';
$route['applied_jobs'] = 'welcome/applied_jobs';
$route['job_description/(:any)'] = 'welcome/job_description/(:any)';
$route['company_description/(:any)'] = 'welcome/company_description/(:any)';
$route['add_job_candidates/(:any)'] = 'welcome/add_job_candidates/(:any)';
$route['applied_job_candidates/(:any)'] = 'welcome/applied_job_candidates/(:any)';
// $route['job_description_blank'] = 'welcome/job_description_blank';


// $route['product_delete/(:any)'] = 'welcome/product_delete';
// $route['order_details'] = 'welcome/order_details';
// $route['add_product'] = 'welcome/add_product';
// $route['orders'] = 'welcome/orders';
// $route['categories'] = 'welcome/categories';
// $route['ptm'] = 'welcome/ptm';
// $route['zbm'] = 'welcome/zbm';
// $route['abm'] = 'welcome/abm';
// $route['tbm'] = 'welcome/tbm';
// $route['purchased'] = 'welcome/purchased';
// $route['dispatch'] = 'welcome/dispatch';
// $route['doctors'] = 'welcome/doctors';

