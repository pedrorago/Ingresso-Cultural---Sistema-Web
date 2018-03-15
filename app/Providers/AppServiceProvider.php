<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Hash;
use App\Views;

class AppServiceProvider extends ServiceProvider {
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){

        error_reporting(0);

        //echo Hash::make('Teste123');

        session_start();

        if ($_SERVER['SERVER_NAME'] == "rcultural") {
            $url_base = config('app.url');
            $admin_base = config('app.admin');
        } else {
            $url_base = config('app.url_oficial');
            $admin_base = config('app.admin_oficial');
        }

        $this->views(getenv("REMOTE_ADDR"));

        //$data = $this->get_data($admin_base);

        if (!isset($_SESSION['admin_path'])) {
            $_SESSION['admin_path'] = $admin_base;
        }
        
        view()->share(array(
            //'data' => $data,
            'url_base' => $url_base,
            'admin_base' => $admin_base
        ));

    }

    private function get_data($admin_base){

        $json = json_decode(file_get_contents($admin_base.'json/home'),true);

        return $json;
    
    }

    private function views($ip){

        date_default_timezone_set('America/Recife');

        if (!empty($ip)) {

            $busca = Views::where('ip', $ip)->orwhere('data', date('Y-m-d'))->first();

            if (empty($busca)) {
                
                $data = array(
                    'ip' => $ip,
                    'data' => date('d/m/Y')
                );

                $views = new Views;

                $views->fill( $data );
                $views->save();

            }

        }
    }


    public function register(){
        //
    }
}
