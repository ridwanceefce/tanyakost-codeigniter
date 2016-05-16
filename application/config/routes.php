<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';

$route['login-user'] = 'user/login'; // routing url /login-user ke constroller login_user pada folder user
$route['login-admin'] = 'admin/login'; // routing url /login-admin ke controller login_admin pada folder admin
$route['registrasi'] = 'user/registrasi'; // routing url /registrasi ke controller Registrasi.php pada folder user

// Routes untuk user
$route['user/profil'] = 'user/dashboard'; // routing url tampil dashboard user
$route['user/profil/ubah'] = 'user/dashboard/ubah_profil'; // routing url tampil ubah profil user
$route['user/kost/tampil'] = 'user/kost'; // routing url tampil semua kost di user
$route['user/kost/tambah'] = 'user/kost/input_kost'; // routing url untuk tambah kost
$route['user/kost/ubah'] = 'user/kost/ubah_kost'; // routing url untuk tampil ubah kost user
$route['user/pesan/tampil'] = 'user/pesan'; // routing url untuk tampil semua pesan
$route['user/pesan/baca'] = 'user/pesan/baca_pesan'; // routing url untuk tampil baca pesan dengan id


// Routes untuk admin
$route['admin/profil'] = 'admin/dashboard'; // routing url tampil dashboard user
$route['admin/users'] = 'admin/user'; // routing url tampil daftar user di admin
$route['admin/profil/ubah'] = 'admin/dashboard/ubah_profile'; // routing url ubah data profil admin
$route['admin/kost/all'] = 'admin/kost'; // routing url untuk tampil daftar kost di admin
$route['admin/pesan/all'] = 'admin/pesan'; // routing url untuk tampil daftar pesan di admin

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
