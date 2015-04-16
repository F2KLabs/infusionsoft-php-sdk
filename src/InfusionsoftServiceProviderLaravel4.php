<?php namespace S1mple\Infusionsoft;

require_once('Infusionsoft/Classloader.php');
use Illuminate\Support\ServiceProvider;

class InfusionsoftServiceProviderLaravel4 extends ServiceProvider {

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    /*
     * Load xmlrpc.inc if it isn't already loaded.
     *
     * We HIGHLY recommend using the included version. It contains a few additions
     * that work around bugs in the Infusionsoft API.
     */
    if(!function_exists('xmlrpc_encode_entitites') && !class_exists('xmlrpcresp')) {
        require_once(dirname(__FILE__) . '/xmlrpc.inc');
    }

    $classLoader = new Infusionsoft_Classloader();
    spl_autoload_register(array(&$classLoader, "loadClass"));

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
