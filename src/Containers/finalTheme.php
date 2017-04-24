<?php
namespace finalTheme\Containers;
use Plenty\Plugin\Templates\Twig;
class finalTheme {
    public function call(Twig $twig):string {
        return $twig->render('finalTheme::content.Theme');
    }
}
