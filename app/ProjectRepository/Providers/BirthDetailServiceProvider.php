<?php namespace Repo\Providers;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 4:08 PM
 */

    use Illuminate\Support\ServiceProvider;
    use Repo\Repositories\BirthDetail\BirthDetailRepository;

    class BirthDetailServiceProvider extends ServiceProvider{

        /**
         * Register the service provider.
         *
         * @return void
         */
        public function register()
        {
            $this->app->bind('Repo\Repositories\BirthDetail\BirthDetailInterface',function()
            {
                return new BirthDetailRepository();
            });
        }
    }