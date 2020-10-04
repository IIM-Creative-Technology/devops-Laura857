<?php
// config/routes.php
use App\Controller\WishlistController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    
    $lien= base64_encode('/liensecretmyArticles/{id}');
    $routes->add('myArticles', "/". $lien.'{id}')
        // the controller value has the format [controller_class, method_name]
        ->controller([WishlistController::class, 'myArticles'])

        // if the action is implemented as the __invoke() method of the
        // controller class, you can skip the ', method_name]' part:
        // ->controller([BlogController::class])
    ;
};