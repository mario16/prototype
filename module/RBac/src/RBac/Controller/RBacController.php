<?php
namespace RBac\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use RBac\Entity\User;
use RBac\Entity\Permission;
use RBac\Entity\HierarchicalRole;

class RBacController extends AbstractActionController
{
    protected $userTable;
    protected $permissionTable;
    protected $hierarchicalroleTable;
	
    public function getUserTable() {
        if (!$this->userTable) {
            $sm = $this->getServiceLocator();
            $this->userTable = $sm->get('RBac\Entity\UserTable');
        }
        return $this->userTable;
    }
    public function getPermissionTable() {
        if (!$this->permissionTable) {
            $sm = $this->getServiceLocator();
            $this->permissionTable = $sm->get('RBac\Entity\PermissionTable');
        }
        return $this->permissionTable;
    }
    public function getHierarchicalRoleTable() {
        if (!$this->hierarchicalroleTable) {
            $sm = $this->getServiceLocator();
            $this->hierarchicalroleTable = $sm->get('RBac\Entity\HierarchicalRoleTable');
        }
        return $this->hierarchicalroleTable;
    }
}