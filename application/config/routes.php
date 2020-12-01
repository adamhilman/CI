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
$route['default_controller'] = 'dashboard';
$route['user/data/buku'] = 'member/data_buku';
$route['user/data/buku/pinjam/(:num)'] = 'member/pinjam_buku/$1';
$route['user/data/pinjaman/(:num)'] = 'member/data_pinjaman/$1';
$route['user/profile_member'] = 'dashboard/profile_member';
$route['user/profile_member/update'] = 'dashboard/update_profile_anggota';
$route['user/profile'] = 'dashboard/profile';
$route['user/profile/update'] = 'dashboard/update_profile';
$route['admin/data/buku'] = 'dashboard/data_buku';
$route['admin/data/buku/edit/(:any)'] = 'dashboard/edit_buku/$1';
$route['admin/data/buku/tambah'] = 'dashboard/tambah_buku';
$route['admin/data/buku/tambah/submit'] = 'dashboard/tambah_buku_aksi';
$route['admin/data/anggota'] = 'dashboard/data_anggota';
$route['admin/data/anggota/update'] = 'dashboard/update_anggota';
$route['admin/data/anggota/tambah'] = 'dashboard/tambah_anggota';
$route['admin/data/anggota/tambah/submit'] = 'dashboard/tambah_anggota_aksi';
$route['admin/data/peminjam'] = 'dashboard/data_peminjam';
$route['admin/data/peminjam/kembalikan/(:num)'] = 'dashboard/kembalikan_pinjaman/$1';
$route['admin/data/transaksi'] = 'dashboard/transaksi';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
