<?php namespace Repo\Providers;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 4:08 PM
 */

use Illuminate\Support\ServiceProvider;


/**
 * Class ParentsDetailServiceProvider
 * @package Repo\Providers
 */
class ParentsDetailServiceProvider extends ServiceProvider{

        /**
         * Register the service provider.
         *
         * @return void
         */
        public function register()
        {
            $this->app->bind('Repo\Repositories\BirthDetail\ParentsDetailInterface',function()
            {
                return new ParentsDetailRepository();
            });
        }
    }