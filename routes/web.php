    <?php
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
  
    Route::get('/','PostController@index');
    Route::get('/form','PostController@showform');
    Route::get('/admin','PostController@showadmin');
    Route::get('/Produk','PostController@showProduk');
    Route::get('/Produk1','PostController@showProduk1');
    Route::get('/Produk2','PostController@showProduk2');
    Route::get('/Produk3','PostController@showProduk3');
    Route::get('/Tentang','PostController@showTentang');
    Route::get('/resi','PostController@showresi');
    Route::post('/storeform','PostController@create');

    // Route::get('/', function () {
    //   return view('Home',[
    //     'title' => 'Home'
    //   ]);
    // });

    // Route::get('/form', function () {
    //   return view('form',[
    //     'title' => 'Form'
    //   ]);
    // });
    
    // Route::get('/Produk', function () {
    //   return view('Produk',[
    //     'title' => 'Produk'
    //   ]);
    // });

    // Route::get('/Produk1', function () {
    //   return view('Produk1',[
    //     'title' => 'Produk1'
    //   ]);
    // });

    // Route::get('/Produk2', function () {
    //   return view('Produk2',[
    //     'title' => 'Produk2'
    //   ]);
    // });
    // Route::get('/Produk3', function () {
    //   return view('Produk3',[
    //     'title' => 'Produk3'
    //   ]);
    // });


    // Route::get('/Tentang', function () {
    //   return view('Tentang',[
    //     'title' => 'Tentang'
    //   ]);
    // });
    ?>