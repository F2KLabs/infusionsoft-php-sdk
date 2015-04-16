<?php namespace S1mple\Infusionsoft;

require_once('Infusionsoft/infusionsoft.php');
use Illuminate\Support\ServiceProvider;

class InfusionsoftServiceProviderLaravel4 extends ServiceProvider {

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->package('s1mple/infusionsoft-php-sdk');
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->app['s1mple.infusionsoft-php-sdk'] = $this->app->share(function($app)
    {

      $infusionsoft_host = $app['config']->get('infusionsoft::domain');
      $infusionsoft_api_key = $app['config']->get('infusionsoft::key');
      return new Infusionsoft_App($infusionsoft_host, $infusionsoft_api_key, 443);

    });

    $this->app->bind('S1mple\Infusionsoft\Client', 's1mple.infusionsoft-php-sdk');
  }

}
