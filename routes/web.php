<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;


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

/*Route::get('/', function () {
    return view('welcome');
    //return 'checking';
})*/;
Route::get('register-domain', function () {
    return view('domain.register_domain');
});
Route::get('transfer-domain', function () {
    return view('domain.transfer_domain');
});
/*Route::get('pk-domain', function () {
    return view('domain.pk_domain');
});*/
/*Route::get('domain-checker', function () {
    return view('domain.domain_checker');
});*/



// Route::view('maria','hosting.wordpress_hosting')->name('maria');

Route::get('/','HomeController@index');

Route::post('quote-mail','HomeController@qoute_mail')->name('quote-mail');

/*Routes for domain sub pages*/

Route::get('register-domain','HomeController@registerDomain');


Route::get('transfer-domain','HomeController@transferDomain');

Route::get('pk-domain','HomeController@pkDomain');

Route::get('domain-checker','HomeController@domainChecker');

Route::get('website-development','HomeController@websitedevelopment')->name('website-development');

Route::get('ssl','HomeController@ssl')->name('ssl');

Route::get('seo','HomeController@seo')->name('seo');

Route::get('smm','HomeController@smm')->name('smm');

Route::get('privacy-policy','HomeController@privacy')->name('privacy');

Route::get('terms-condition','HomeController@terms')->name('terms');

Route::get('refund-policy','HomeController@refund')->name('refund');
/*Routes for hosting sub pages*/

Route::get('business-hosting','HomeController@businessHosting')->name('business-hosting');

Route::get('reseller-hosting','HomeController@resellerHosting')->name('reseller-hosting');

Route::get('shared-hosting','HomeController@sharedHosting')->name('shared-hosting');

Route::get('wordpress-hosting','HomeController@wordpressHosting')->name('wordpress-hosting');

/*Routes for Server sub pages*/

Route::get('dedicated-servers','HomeController@dedicatedServers');

Route::get('pak-based-servers','HomeController@pakBasedServers');

Route::get('ssd-servers','HomeController@ssdServers')->name('ssd-servers');

Route::get('rdp-servers','HomeController@rdpServers');

Route::get('storage-vps-servers','HomeController@storageServers');

Route::post('quotation','HomeController@quotation')->name('quotation');

Route::post('qoutemail','QuoteController@qoutemail')->name('qoutemail');

Route::post('thank-you','QuoteController@thank-you')->name('thank-you');










