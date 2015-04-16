<?php namespace S1mple\Infusionsoft;

require_once('Infusionsoft/Classloader.php');
use Illuminate\Support\ServiceProvider;

class InfusionsoftServiceProviderLaravel5 extends ServiceProvider {

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([__DIR__ . '/config/config.php' => config_path('infusionsoft-php-sdk.php')]);
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'infusionsoft-php-sdk');

    // laravel 5 apparently uses dots like it always should have...
    $this->app['s1mple.infusionsoft-php-sdk'] = $this->app->share(function($app)
    {
      $infusionsoft_host = $app['config']->get('infusionsoft.domain');
      $infusionsoft_api_key = $app['config']->get('infusionsoft.key');
      return new Infusionsoft_App($infusionsoft_host, $infusionsoft_api_key, 443);
    });
    
    $this->app->bind('S1mple\Infusionsoft\Client', 's1mple.infusionsoft-php-sdk');
  }

}
