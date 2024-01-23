    <?php

    // use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\admin\PlanController;
    use App\Http\Controllers\SelectPlanController;
    use App\Http\Controllers\admin\paymentController;
    use App\Http\Controllers\admin\PaymentConfirm;
    use App\Http\Controllers\profile\ProfileController;
    use App\Http\Controllers\DashboardController;






    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', function () {
        return view('auth.register');
    });

     Route::get('/plans', function () {
       return view('plans');
     })->middleware(['auth', 'verified'])->name('plans');

    // Route::middleware('auth')->group(function () {
    //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // });


    Route::controller(PlanController::class)->group(function () {
        Route::get('/admin/plan/', 'index');
        Route::get('/admin/plan/create/', 'create');
        Route::post('/admin/plan/', 'store');
        Route::get('/admin/plan/edit/{id}/', 'edit');
        Route::put('/admin/plan/{id}/', 'update');
        Route::put('/admin/plan/{id}/status/', 'status');
        Route::delete('/admin/plan/{id}', 'destroy');


        Route::get('/plans', [SelectPlanController::class, 'index']);

        Route::get('/plan/payment/method/{id}/', [PaymentController::class, 'index']);
        Route::Post('/plan/payment/method/', [PaymentController::class, 'store']);

        Route::get('/plan/payment/confirm', [PaymentConfirm::class, 'index']);

        Route::get('/dashboard/', [DashboardController::class, 'index']);

        Route::get('/profile/{id}/', [DashboardController::class, 'profile']);

        // Route::put('/profile/', [DashboardController::class, 'update']);
        // Route::put('/profile/{{ Auth::user()->id }}/', [DashboardController::class, 'update']);


        Route::middleware('auth')->group(function () {
          Route::put('/profile/{id}', [DashboardController::class, 'update'])->name('profile.update');
      });




        

       



        



     // Route::get('/plans', function () {
     //   return view('plan');
     // })->middleware(['auth', 'verified'])->name('plan');



       
    });
    require __DIR__.'/auth.php';
