<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\HomeawalController;
use App\Http\Controllers\IndoregionController;
use App\Http\Controllers\KebijakanPrivasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\SubTentangtitipsiniController;
use App\Http\Controllers\SubHomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\TambahAlamatController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//COBACOBA
Route::resource('/posts', SubHomeController::class);

    

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Maps
Route::get('/map', [MapsController::class, 'maps'])->name('map');

/////////////-------------ADMIN-------------/////////////
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/index', 'index')->middleware('role:admin')->name('admin.index');
    Route::get('/admin/dashboard', 'index')->middleware('auth');
    Route::get('/admin/profile', 'profile')->middleware('auth');
    Route::get('/admin/data/order', 'order')->middleware('auth');
    Route::get('/admin/data/order=barang', 'barang')->middleware('auth');
    Route::get('/admin/home/home', 'home')->middleware('auth');
    Route::get('/admin/data/order=bangunan', 'bangunan')->middleware('auth');
    Route::get('/admin/data/order=pickup', 'pickup')->middleware('auth');
    Route::get('/admin/data/payment', 'payment')->middleware('auth');
    Route::get('/admin/vendor', 'vendor')->middleware('auth');
    Route::get('/admin/vendor/trans', 'trans')->middleware('auth');
    Route::get('/admin/vendor/data-pick-up', 'data_pickup')->middleware('auth');
    Route::get('/admin/vendor/data_trans=selesai', 'trans_selesai')->middleware('auth');
    Route::get('/admin/vendor/data_trans=berlangsung', 'trans_berlangsung')->middleware('auth');
    Route::get('/admin/setting', 'setting')->middleware('auth');
    Route::get('/admin/data/pengaturan-user','pengaturanuser')->middleware('auth');
});

/////////////-------------UBAH PASSWORD ADMIN-------------/////////////
Route::controller(ProfileController::class)->group(function(){
    Route::get('/admin/profile', 'index')->name('profile.index');
    Route::patch('/profile/{id}', 'update')->name('profile.update');
});

///HOME///
Route::controller(HomeController::class)->group(function(){
    Route::get('/admin/home/index', 'index')->name('index');
    Route::get('/admin/home/detail', 'show');
    Route::put('/admin/home/simpan', 'update');
    Route::get('/admin/home/edit', 'edit');
});
Route::resource('/home', HomeController::class);

//TENTANG
Route::controller(TentangController::class)->group(function(){
    Route::get('/superadmin/super/tentang/index', 'indextentang');
    Route::get('/superadmin/super/tentang/detail', 'show');
    Route::put('/superadmin/super/tentang/simpan', 'update');
    Route::get('/superadmin/super/tentang/edit', 'edit');
});
Route::resource('/tentangawal', TentangController::class);

///////////////-----------------USER-----------------//////////////
Route::get('/user/index', [UserController::class, 'index'])->middleware('role:user')->name('user.index');
Route::get('/user/layanan', [LayananController::class, 'index'])->middleware('auth');
Route::get('/user/tentang', [TentangController::class, 'index'])->middleware('auth');
Route::get('/user/kontak', [KontakController::class, 'index'])->middleware('auth');

Route::controller(UserController::class)->group(function(){
    Route::get('/user/pemesanan/info_pembayaran', 'InfoPembayaran')->middleware('auth');
    Route::get('/user/pemesanan/History/Last_Progress', 'LastProgress')->middleware('auth');
    Route::get('/user/pemesanan/History/On_Progress', 'OnProgress')->middleware('auth');
    Route::get('/user/pemesanan/struk', 'struk')->middleware('auth');
    Route::get('/user/pemesanan/konfirm_pembayaran', 'KonfirmPembayaran')->middleware('auth');
    Route::get('/user/pemesanan/pemesanan', 'pemesanan')->middleware('auth');
    /////////////-------------PROFILE USER-------------//////////////
    Route::get('/user/profile/profileuser', 'profileuser')->middleware('auth');
    Route::get('/user/profile/edit_profile', 'editprofile')->middleware('auth');
    Route::get('/user/profile/alamat/Alamat', 'alamat')->middleware('auth');
    Route::get('/user/profile/alamat/edit_alamat', 'EditAlamat')->middleware('auth');
    // Route::get('/user/profile/alamat/Tambah_alamat', 'TambahAlamat')->middleware('auth');
    Route::get('/user/Notifikasi', 'Notifikasi')->middleware('auth');
    Route::get('/user/profile/kebijakanprivasi', 'KebijakanPrivasi')->middleware('auth');
    Route::get('/user/profile/bantuan', 'Bantuan')->middleware('auth');
});

//INDOREGION
Route::controller(IndoregionController::class)->group(function(){
    Route::get('/user/profile/alamat/Tambah_alamat', 'AlamatProfile')->name('Tambah_alamat.AlamatProfile');
    Route::post('/getkabupaten', 'getkabupaten')->name('getkabupaten');
    Route::post('/getkecamatan', 'getkecamatan')->name('getkecamatan');
    Route::post('/getdesa', 'getdesa')->name('getdesa');
});

/////TAMBAH ALAMAT BERDASARKAN USER_ID//////
Route::controller(TambahAlamatController::class)->group(function(){
    Route::get('/user/profile/alamat/Alamat', 'alamat')->name('user.profile.alamat.Alamat');
    Route::post('/user/profile/alamat/Tambah_alamat', 'tambahalamat')->name('store.alamat');
});

//KEBIJAKAN PRIVASI///
route::controller(KebijakanPrivasiController::class)->group(function(){
    Route::get('/superadmin/super/kebijakanprivasi/index', 'index')->name('index');
    Route::get('/superadmin/super/kebijakanprivasi/detail', 'show');
    Route::put('/superadmin/super/kebijakanprivasi/simpan', 'update');
    Route::get('/superadmin/super/kebijakanprivasi/edit', 'edit');
}); 
Route::resource('/keb', KebijakanPrivasiController::class);

//TENTANG TITIPSINI YANG ADA DI TAMPILAN USER
Route::resource('/tentang', SubTentangtitipsiniController::class);
Route::get('/tentangtitipsini/index', [SubTentangtitipsiniController::class, 'index']);

//FAQ atau PUSAT BANTUAN
Route::controller(FaqController::class)->group(function(){
    Route::get('/superadmin/super/faq/index', 'index');
    Route::get('/superadmin/super/faq/detail', 'show');
    Route::put('/superadmin/super/faq/simpan', 'update');
    Route::get('/superadmin/super/faq/edit', 'edit');
});
Route::resource('/faq', FaqController::class);


Route::get('/user/bantuan/Jawaban1', function () {
    return view('/user/bantuan/Jawaban1',[
        "title" => "Pusat Bantuan"
    ]);
});

Route::get('/user/bantuan/Jawaban2', function () {
    return view('/user/bantuan/Jawaban2',[
        "title" => "Pusat Bantuan"
    ]);
});

Route::get('/user/bantuan/Jawaban3', function () {
    return view('/user/bantuan/Jawaban3',[
        "title" => "Pusat Bantuan"
    ]);
});

Route::get('/user/bantuan/Jawaban4', function () {
    return view('/user/bantuan/Jawaban4',[
        "title" => "Pusat Bantuan"
    ]);
});

Route::get('/user/bantuan/Jawaban5', function () {
    return view('/user/bantuan/Jawaban5',[
        "title" => "Pusat Bantuan"
    ]);
});

Route::get('/user/profile/Tentang', function () {
    return view('/user/profile/Tentang',[
        "title" => "Tentang Titipsini"
    ]);
});


//Route subkategori layanan

    Route::get('user/subkategori/subbaru', function () {
        return view('user/subkategori/subbaru', [
            "title" =>" Golongan 1"
        ]);
    });

    //detail kendaraan

    Route::get('user/subkategori/detailbaru', function () {
        return view('user/subkategori/detailbaru', [
            "title" =>" Detail kendaraan"
        ]);
    });

    //wishlist
    Route::get('user/pemesanan/wishlist', function () {
        return view('user/pemesanan/wishlist', [
            "title" =>"Wishtlist"
        ]);
    });
    Route::get('user/pemesanan/qrish', function () {
        return view('user/pemesanan/qrish', [
            "title" =>"Wishtlist"
        ]);
    });

//profile vendor di user
Route::get('user/profiilevendor/profilevendor', function () {
    return view('user/profiilevendor/profilevendor', [
        "title" =>"Wishtlist"
    ]);
});

Route::get('/superadmin/dashboard', function () {
    return view('superadmin/index');
});

// SUPER ADMIN
Route::controller(SuperadminController::class)->group(function(){
    Route::get('/superadmin/index', 'index')->middleware('role:superadmin')->name('superadmin.index');
    Route::get('/superadmin/profile','profile')->middleware('auth')->name('profile.profile');
    Route::get('/superadmin/profile','indexp')->name('profile.indexp');
    Route::patch('/profile/{id}','update')->name('profile.update');
});

//HOME AWAL SEBELUM LOGIN
Route::resource('/homeawal', HomeawalController::class);
Route::get('/superadmin/super/homeawal/index', [HomeawalController::class, 'index']);

//CRUD PROVINSI
Route::controller(ProvinsiController::class)->group(function(){
    Route::get('/superadmin/super/provinsi/index', 'index')->name('index');
    Route::get('/superadmin/super/provinsi/edit', 'edit');
    Route::put('/superadmin/super/provinsi/simpan','update');
});
Route::resource('/provinsi', ProvinsiController::class);

//CRUD ADMIN DIHALAMAN SUPERADMIN
Route::controller(AdminUsersController::class)->group(function(){
    Route::get('/superadmin/akun/admin/index', 'index')->name('index');
});


Route::get('/superadmin/data/alamat', function () {
    return view('superadmin/data/alamat');
});

Route::get('/superadmin/data/order', function () {
    return view('superadmin/data/order');
});

Route::get('/superadmin/data/payment', function () {
    return view('superadmin/data/payment');
});

Route::get('/superadmin/data/pengaturan-user', function () {
    return view('superadmin/data/pengaturan-user');
});

Route::get('/superadmin/vendor/laporan', function () {
    return view('superadmin/vendor/laporan');
});

Route::get('/superadmin/vendor/pickup', function () {
    return view('superadmin/vendor/pickup');
});

Route::get('/superadmin/vendor/transaksi', function () {
    return view('superadmin/vendor/transaksi');
});

Route::get('/superadmin/vendor/vendor', function () {
    return view('superadmin/vendor/vendor');
});

Route::get('/superadmin/setting/hapus', function () {
    return view('superadmin/setting/hapus');
});

Route::get('/superadmin/setting/tambah', function () {
    return view('superadmin/setting/tambah');
});

/////////////-------------Vendor-------------/////////////
Route::controller(VendorController::class)->group(function(){
    Route::get('/vendor/homelagi', 'index')->middleware('role:vendor')->name('vendor.index');
    Route::get('/Vendor/order/kendaraan/orderan_baru', 'OrderanBaru')->middleware('auth');
    Route::get('/Vendor/order/kendaraan/rincian_baru', 'RincianBaru')->middleware('auth');
    Route::get('/Vendor/Profile/profile_vendor', 'ProfileVendor')->middleware('auth');
    Route::get('/Vendor/Profile/edit_profilevendor', 'EditProfile')->middleware('auth');
    Route::get('/Vendor/Profile/profile_vendor', 'EditAlamat')->middleware('auth');
    Route::get('/Vendor/Profile/Notifikasi', 'Notifikasi')->middleware('auth');
    // Route::get('/Vendor/Profile/Kebijakan_privasi', 'KebijakanPrivasi')->middleware('auth');
    Route::get('Vendor/Profile/Ketentuan_layanan', 'KetentuanLayanan')->middleware('auth');
    Route::get('/Vendor/Profile/Pusat_bantuan', 'PusatBantuan')->middleware('auth');
});

Route::get('Vendor/Profile/Jawaban1', function () {
    return view('Vendor/Profile/Jawaban1', [
        "title" =>"Jawaban1"
    ]);
});

Route::get('Vendor/Profile/Jawaban2', function () {
    return view('Vendor/Profile/Jawaban2', [
        "title" =>"Jawaban2"
    ]);
});

Route::get('Vendor/Profile/Jawaban3', function () {
    return view('Vendor/Profile/Jawaban3', [
        "title" =>"Jawaban3"
    ]);
});

Route::get('Vendor/Profile/Jawaban4', function () {
    return view('Vendor/Profile/Jawaban4', [
        "title" =>"Jawaban4"
    ]);
});

Route::get('Vendor/Profile/Jawaban5', function () {
    return view('Vendor/Profile/Jawaban5', [
        "title" =>"Jawaban5"
    ]);
});

Route::get('Vendor/Profile/Jawaban6', function () {
    return view('Vendor/Profile/Jawaban6', [
        "title" =>"Jawaban6"
    ]);
});

//notifikasi vendor
Route::get('/notifikasi', static fn () => view('Vendor/notifikasi'));

//earning
Route::get('/earning', static fn () => view('Vendor/earnings/earning'));
Route::get('/penarikan_baru', static fn () => view('Vendor/earnings/penarikan_baru'));
Route::get('/info_penarikan', static fn () => view('Vendor/earnings/info_penarikan'));
Route::get('/riwayat_penarikan', static fn () => view('Vendor/earnings/riwayat_penarikan'));

//orderan bangunan
Route::get('/rincian_bangunan', static fn () => view('Vendor/order/bangunan/rincian_bangunan'));
Route::get('/orderan_bangunan', static fn () => view('Vendor/order/bangunan/orderan_bangunan'));

//orderan barang
Route::get('/rincian_barang', static fn () => view('Vendor/order/barang/rincian_barang'));
Route::get('/rincian_tanpapick', static fn () => view('Vendor/order/barang/rincian_tanpapick'));
Route::get('/orderan_barang', static fn () => view('Vendor/order/barang/orderan_barang'));

//orderan pickup
Route::get('/orderan_pickup', static fn () => view('Vendor/order/pickup/orderan_pickup'));
Route::get('/rincian_pickup', static fn () => view('Vendor/order/pickup/rincian_pickup'));

//history vendor
Route::get('/rincian_bangunan', static fn () => view('Vendor/history/bangunan/rincian_bangunan'));
Route::get('/rincian_barang', static fn () => view('Vendor/history/barang/rincian_barang'));
Route::get('/historybaru', static fn () => view('Vendor/history/kendaraan/historybaru'));
Route::get('/rincian_kendaraan', static fn () => view('Vendor/history/kendaraan/rincian_kendaraan'));
Route::get('/history_pickup', static fn () => view('Vendor/history/pickup/history_pickup'));

//<--Vendor Kelola Kendaraan-->
Route::get('Vendor/Kelola-Kendaraan/kelola_kendaraan', function () {
    return view('Vendor/Kelola-Kendaraan/kelola_kendaraan', [
        "title" =>"Kelola_kendaraan"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/layanan_step1', function () {
    return view('Vendor/Kelola-Kendaraan//layanan_step1', [
        "title" =>"laynan_step1"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/layanan_step2', function () {
    return view('Vendor/Kelola-Kendaraan/layanan_step2', [
        "title" =>"layanan_step2"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/layanan_step3', function () {
    return view('Vendor/Kelola-Kendaraan/layanan_step3', [
        "title" =>"layanan_step3"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/layanan_step4', function () {
    return view('Vendor/Kelola-Kendaraan/layanan_step4', [
        "title" =>"layanan_step4"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/Rincian_lahan', function () {
    return view('Vendor/Kelola-Kendaraan/Rincian_lahan', [
        "title" =>"Rincian_kendaraan"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/atur_alamat', function () {
    return view('Vendor/Kelola-Kendaraan/atur_alamat', [
        "title" =>"atur_alamat"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/Rincian_kendaraan', function () {
    return view('Vendor/Kelola-Kendaraan/Rincian_kendaraan', [
        "title" =>"Rincian_kendaraan"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/Rincian_kendaraan', function () {
    return view('Vendor/Kelola-Kendaraan/Rincian_kendaraan', [
        "title" =>"Rincian_kendaraan"
    ]);
});


Route::get('Vendor/Kelola-Kendaraan/setelah_input', function () {
    return view('Vendor/Kelola-Kendaraan/setelah_input', [
        "title" =>"setelah_input"
    ]);
});

// !--barang--

Route::get('Vendor/Kelola_Barang/kelola_barangstep1', function () {
    return view('Vendor/Kelola_Barang/kelola_barangstep1', [
        "title" =>"Kelola_barangstep1"
    ]);
});

Route::get('Vendor/Kelola_Barang/layanan_step1', function () {
    return view('Vendor/Kelola_Barang/layanan_step1', [
        "title" =>"layanan_step1"
    ]);
});

Route::get('Vendor/Kelola_Barang/layanan_step2', function () {
    return view('Vendor/Kelola_Barang/layanan_step2', [
        "title" =>"layanan_step2"
    ]);
});

Route::get('Vendor/Kelola_Barang/layanan_step3', function () {
    return view('Vendor/Kelola_Barang/layanan_step3', [
        "title" =>"layanan_step2"
    ]);
});

Route::get('Vendor/Kelola_Barang/layanan_step4', function () {
    return view('Vendor/Kelola_Barang/layanan_step4', [
        "title" =>"layanan_step4"
    ]);
});

Route::get('Vendor/Kelola_Barang/tambah_layanan', function () {
    return view('Vendor/Kelola_Barang/tambah_layanan', [
        "title" =>"tambah_layanan"
    ]);
});

Route::get('Vendor/Kelola_Barang/tambah_jenispaket', function () {
    return view('Vendor/Kelola_Barang/tambah_jenispaket', [
        "title" =>"tambah_jenispaket"
    ]);
});
Route::get('Vendor/Kelola_Barang/pilih_jenispaket', function () {
    return view('Vendor/Kelola_Barang/pilih_jenispaket', [
        "title" =>"pilih_jenispaket"
    ]);
});

Route::get('Vendor/Kelola_Barang/pengelolaan_barang', function () {
    return view('Vendor/Kelola_Barang/pengelolaan_barang', [
        "title" =>"pengelolaan_barang"
    ]);
});

Route::get('Vendor/Kelola_Barang/Rincian_lahan', function () {
    return view('Vendor/Kelola_Barang/Rincian_lahan', [
        "title" =>"rincian_lahan"
    ]);
});

Route::get('Vendor/Kelola_Barang/setelah_input', function () {
    return view('Vendor/Kelola_Barang/setelah_input', [
        "title" =>"setelah_input"
    ]);
});

Route::get('Vendor/Kelola_Barang/atur_alamat', function () {
    return view('Vendor/Kelola_Barang/atur_alamat', [
        "title" =>"atur alamat"
    ]);
});

Route::get('Vendor/Kelola_Barang/pilih_lokasi', function () {
    return view('Vendor/Kelola_Barang/pilih_lokasi', [
    ]);
});

// <!--bangunan-->

Route::get('Vendor/Kelola-Bangunan/kelola_bangunan', function () {
    return view('Vendor/Kelola-Bangunan/kelola_bangunan', [
        "title" =>"Kelola_bangun"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/Kelola_bangunanstep1', function () {
    return view('VendorKelola-Bangunan/Kelola_bangunanstep1', [
        "title" =>"Kelola_bangunanstep1"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/layanan_step1', function () {
    return view('Vendor/Kelola-Bangunan//layanan_step1', [
        "title" =>"layanan_step1"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/layanan_step2', function () {
    return view('Vendor/Kelola-Bangunan/layanan_step2', [
        "title" =>"layanan_step2"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/layanan_step3', function () {
    return view('Vendor/Kelola-Bangunan/layanan_step3', [
        "title" =>"layanan_step3"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/atur_alamat', function () {
    return view('Vendor/Kelola-Bangunan/atur_alamat', [
        "title" =>"atur alamat"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/setelah_input', function () {
    return view('Vendor/Kelola-Bangunan/setelah_input', [
        "title" =>"setelah_input"
    ]);
});

//<!--pickup-->

Route::get('Vendor/Kelola-PickUp/kelola_pickup', function () {
    return view('Vendor/Kelola-PickUp/kelola_pickup', [
        "title" =>"Kelola_pickupstep1"
    ]);
});

Route::get('Vendor/Kelola-PickUp/layanan_step1', function () {
    return view('Vendor/Kelola-PickUp//layanan_step1', [
        "title" =>"layanan_step1"
    ]);
});

Route::get('Vendor/Kelola-PickUp/layanan_step2', function () {
    return view('Vendor/Kelola-PickUp/layanan_step2', [
        "title" =>"layanan_step2"
    ]);
});

Route::get('Vendor/Kelola-PickUp/layanan_step3', function () {
    return view('Vendor/Kelola-PickUp/layanan_step3', [
        "title" =>"layanan_step3"
    ]);
});

Route::get('Vendor/Kelola-PickUp/atur_alamat', function () {
    return view('Vendor/Kelola-PickUp/atur_alamat', [
        "title" =>"atur alamat"
    ]);
});

Route::get('Vendor/Kelola-PickUp/setelah_input', function () {
    return view('Vendor/Kelola-PickUp/setelah_input', [
        "title" =>"setelah_input"
    ]);
});


//Finance
Route::controller(FinanceController::class)->group(function(){
    Route::get('/finance/page', 'index')->middleware('role:finance')->name('finance.index');
    Route::get('/finance/transaksi/transaksiuser', 'transaksiuser')->middleware('auth');
    Route::get('/finance/transaksi/transaksivendor', 'transaksivendor')->middleware('auth');
    Route::get('/finance/transaksi/detailtransaksiuser', 'detailtransaksiuser')->middleware('auth');
    Route::get('/finance/transaksi/detailtransaksivendor', 'detailtransaksivendor')->middleware('auth');
    Route::get('/finance/DataPenarikan/penarikan', 'penarikan')->middleware('auth');
    Route::get('/finance/DataPenarikan/konfirmasi', 'konfirmasi')->middleware('auth');
    Route::get('/finance/DataPenarikan/history', 'history')->middleware('auth');
    Route::get('/finance/profilefinance', 'profilefinance')->middleware('auth');
});
