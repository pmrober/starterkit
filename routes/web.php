<?php

use App\Http\Controllers\Account\PreferencesController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\SubscriptionController;
use App\Http\Controllers\Account\MyPublicationsController;
use App\Http\Controllers\Account\MyGroupsController;
use App\Http\Controllers\Account\NotificationsController;
use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LikeController;
use App\Livewire\Publications;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\Shared\PrivacyController;
use App\Http\Controllers\Shared\TermsController;
use Illuminate\Support\Facades\Route;


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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });

    Route::name('account.')->group(function () {

        Route::get('/account/profile', [AccountController::class, 'index'])->name('profile');
        Route::get('/account/notifications', [NotificationsController::class, 'index'])->name('notifications');
        Route::get('/account/preferences', [PreferencesController::class, 'index'])->name('preferences');
        Route::get('/account/mypublications', [MyPublicationsController::class, 'index'])->name('mypublications');
        Route::get('/account/mygroups', [MyGroupsController::class, 'index'])->name('mygroups');
        Route::get('/account/subscription', [SubscriptionController::class, 'index'])->name('subscription');
    });

        //Route::get('/publications', [PublicationsController::class, 'index'])->name('publications');
        Route::get('/publications', Publications::class)->name('publications');
        Route::get('/prices', [PricesController::class, 'index'])->name('prices');
    
        //Likes a las publicaciones
        Route::post('/publications/{publication}/likes', [LikeController::class, 'store'])->name('publications.likes.store');
        Route::delete('/publications/{publication}/likes', [LikeController::class, 'destroy'])->name('publications.likes.destroy');
});

Route::name('shared.')->group(function () {
    Route::get('/shared/terms-and-conditions', [TermsController::class, 'index'])->name('terms-and-conditions');
    Route::get('/shared/privacy-policy', [PrivacyController::class, 'index'])->name('privacy-policy');
    
});


Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);


require __DIR__ . '/auth.php';
