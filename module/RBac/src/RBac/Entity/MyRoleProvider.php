<?php

namespace RBac\Entity;

use ZfcRbac\Role\RoleProviderInterface;

class MyRoleProvider implements RoleProviderInterface
{
    /**
     * Get the roles from the provider
     *
     * @param  string[] $roleNames
     * @return \Rbac\Role\RoleInterface[]
     */
    public function getRoles(array $roleNames){
        return array( 'admin', 'member', 'guest');
    }
}
