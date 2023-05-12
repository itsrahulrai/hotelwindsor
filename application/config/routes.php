<?php
defined('BASEPATH') or exit('No direct script access allowed');



$route['default_controller'] = 'HomeController';
$route['404_override'] = 'HomeController/Page404';
$route['translate_uri_dashes'] = FALSE;


/****************************** All Frontend Routes Start *****************************/

$route['about-us'] = 'HomeController/aboutUs';
$route['about-patna'] = 'HomeController/aboutPatna';
$route['vision-mission'] = 'HomeController/visionMission';
$route['event-meeting'] = 'HomeController/eventsMeenting';
$route['dining'] = 'HomeController/dining';
$route['facilities'] = 'HomeController/facilities';
$route['offers'] = 'HomeController/offers';
$route['gallery'] = 'HomeController/gallery';
$route['gallery1'] = 'HomeController/gallery1';
$route['gallery2'] = 'HomeController/gallery2';
$route['gallery3'] = 'HomeController/gallery3';
$route['rooms'] = 'HomeController/rooms';

/******************   Data Insert Routes Start   ******************/

$route['mini-club'] = 'DataController/miniClub';
$route['club-room'] = 'DataController/clubRoom';
$route['royal-club'] = 'DataController/royalClub';
$route['contact'] = 'DataController/contact';
$route['book-now'] = 'DataController/bookNow';
$route['feedback'] = 'DataController/feedback';

/******************   Data Insert Routes End   ******************/


/****************************** All Frontend Routes End *****************************/


/****************************** All Backend Routes Start *****************************/

$route['admin'] = 'admin/LoginController/login_proses';
$route['logout'] = 'admin/LoginController/logout';

$route['dashboard'] = 'admin/DashboardController/index';
$route['change-password'] = 'admin/LoginController/changePassword';


/********** Data Retrive and Delete Routes Start **********/

$route['miniclub'] = 'admin/DashboardController/miniClub';
$route['miniclub/delete/(:num)'] = 'admin/DeleteController/miniDelete/$1';

$route['clubroom'] = 'admin/DashboardController/clubRoom';
$route['clubroom/delete/(:num)'] = 'admin/DeleteController/clubDelete/$1';

$route['royalclub'] = 'admin/DashboardController/royalClub';
$route['royalclub/delete/(:num)'] = 'admin/DeleteController/royalDelete/$1';

$route['booknow'] = 'admin/DashboardController/bookNow';
$route['booknow/delete/(:num)'] = 'admin/DeleteController/booknowDelete/$1';

$route['contact-us'] = 'admin/DashboardController/contact';
$route['contact-us/delete/(:num)'] = 'admin/DeleteController/contactDelete/$1';

$route['feed-back'] = 'admin/DashboardController/feedback';
$route['feed-back/delete/(:num)'] = 'admin/DeleteController/feedbackDelete/$1';



/********** Data Retrive and Delete  Routes End **********/




/****************************** All Backend Routes Start *****************************/
