<?php
namespace finalTheme\Providers;
use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
class finalThemeServiceProvider extends ServiceProvider {
	public function register() {

	}
	public function boot(Twig $twig, Dispatcher $eventDispatcher) {
		$eventDispatcher->listen('IO.init.templates', function(Partial $partial) {
		   $partial->set('header', 'finalTheme::content.ThemeHeader');
		}, 0);
		$eventDispatcher->listen('IO.init.templates', function(Partial $partial) {
		   $partial->set('footer', 'finalTheme::content.ThemeFooter');
		}, 0);
	}
}
