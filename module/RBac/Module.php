<?php
namespace RBac;

use RBac\Entity\User;
use RBac\Entity\UserTable;
use RBac\Entity\Permission;
use RBac\Entity\PermissionTable;
use RBac\Entity\HierarchicalRole;
use RBac\Entity\HierarchicalRoleTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
//            'factories' => array(
//                'RBac\Entity\UserTable' => function($sm) {
//                    $tableGateway = $sm->get('UserTableGateway');
//                    $table = new UserTable($tableGateway);
//                    return $table;
//                },
//                'UserTableGateway' => function ($sm) {
//                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
//                    $resultSetPrototype = new ResultSet();
//                    $resultSetPrototype->setArrayObjectPrototype(new User());
//                    return new TableGateway('user', $dbAdapter, null, $resultSetPrototype);
//                },
//                'RBac\Entity\PermissionTable' => function($sm) {
//                    $tableGateway = $sm->get('PermissionTableGateway');
//                    $table = new PermissionTable($tableGateway);
//                    return $table;
//                },
//                'PermissionTableGateway' => function ($sm) {
//                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
//                    $resultSetPrototype = new ResultSet();
//                    $resultSetPrototype->setArrayObjectPrototype(new Permission());
//                    return new TableGateway('permission', $dbAdapter, null, $resultSetPrototype);
//                },
//                'RBac\Entity\HierarchicalRoleTable' => function($sm) {
//                    $tableGateway = $sm->get('HierarchicalRoleTableGateway');
//                    $table = new HierarchicalRoleTable($tableGateway);
//                    return $table;
//                },
//                'HierarchicalRoleTableGateway' => function ($sm) {
//                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
//                    $resultSetPrototype = new ResultSet();
//                    $resultSetPrototype->setArrayObjectPrototype(new HierarchicalRole());
//                    return new TableGateway('hierarchicalrole', $dbAdapter, null, $resultSetPrototype);
//                },
//            ),
        );
    }
}
