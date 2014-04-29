<?php
namespace Album;

use Album\Model\Album;
use Album\Model\AlbumTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Mvc\MvcEvent;
use Zend\Mvc\Router\RouteMatch;

class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
	
    public function getServiceConfig() {
        return array(
            'factories' => array(
                'Album\Model\AlbumTable' => function($sm) {
                    $tableGateway = $sm->get('AlbumTableGateway');
                    $table = new AlbumTable($tableGateway);
                    return $table;
                },
                'AlbumTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Album());
                    return new TableGateway('album', $dbAdapter, null, $resultSetPrototype);
                },
                'AlbumController' => function($sm) {
                     return new AlbumController(
                         $sm->get('doctrine.entitymanager.orm_default'),
                         $sm->get('ZfcRbac\Service\AuthorizationService') // This is new!
                     );
                 }
                        /*'RBACService' => function($sm) {
                    $authService = $sm->get('ZfcRbac\Service\AuthorizationService');
                    return new RBACService($authService);
                }*/
            ),
            /*'initializers' => array(
                'ZfcRbac\Initializer\AuthorizationServiceInitializer'
            )*/
        );
    }
	
    //protected $whitelist = array('zfcuser/login', 'zfcuser/register');

    /*public function onBootstrap($e)
    {
	
        $t = $e->getTarget();
        $t->getEventManager()->attach(
                $t->getServiceManager()->get('ZfcRbac\View\Strategy\RedirectStrategy')
        );
        
	// COMENTO ESTO QUE REDIRECCIONA AL LOGIN SI NO ESTA AUTENTICADO
        /*
        $app = $e->getApplication();
        $em = $app->getEventManager();
        $sm = $app->getServiceManager();

        $list = $this->whitelist;
        $auth = $sm->get('zfcuser_auth_service');

        $em->attach(MvcEvent::EVENT_ROUTE, function($e) use ($list, $auth) {
                    $match = $e->getRouteMatch();

                    // No route match, this is a 404
                    if (!$match instanceof RouteMatch) {
                        return;
                    }

                    // Route is whitelisted
                    $name = $match->getMatchedRouteName();
                    if (in_array($name, $list)) {
                        return;
                    }

                    // User is authenticated
                    if ($auth->hasIdentity()) {
                        return;
                    }

                    // Redirect to the user login page, as an example
                    $router = $e->getRouter();
                    $url = $router->assemble(array(), array(
                        'name' => 'zfcuser/login'
                            ));



                    $response = $e->getResponse();
                    $response->getHeaders()->addHeaderLine('Location', $url);
                    $response->setStatusCode(302);

                    return $response;
                }, -100);
    
    }*/

    //}
}
