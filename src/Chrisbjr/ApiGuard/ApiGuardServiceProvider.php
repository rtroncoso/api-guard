<?php namespace Chrisbjr\ApiGuard;

use Illuminate\Support\ServiceProvider;

class ApiGuardServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		// Publish config
		$this->publishes([
			__DIR__ . '/../../config/config.php' => config_path('apiguard.php')
		], 'config');

		// Publish migrations
		$this->publishes([
			__DIR__ . '/../../migrations' => base_path('/database/migrations')
		], 'migrations');

        $this->app->register('EllipseSynergie\ApiResponse\Laravel\ResponseServiceProvider');

        require_once __DIR__ . '/../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
