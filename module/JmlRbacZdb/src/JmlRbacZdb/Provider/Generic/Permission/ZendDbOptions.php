<?php
/**
 * @package ZfcRbac
 * @subpackage Provider
 */
namespace JmlRbacZdb\Provider\Generic\Permission;

use Zend\Stdlib\AbstractOptions;

class ZendDbOptions extends AbstractOptions
{
    /**
     * The name of the table the permissions are stored in.
     *
     * @var string
     */
    //protected $permissionTable = 'rbac_permission';
    protected $permissionTable = 'permissions';

    /**
     * The name of the table the permissions are stored in.
     *
     * @var string
     */
    protected $roleTable = 'roles';

    /**
     * The name of the table used to join roles to permissions.
     *
     * @var string
     */
    //protected $roleJoinTable = 'rbac_role_permission';
    protected $roleJoinTable = 'hierarchicalrole_permission';

    /**
     * The id column of the permission table.
     *
     * @var string
     */
    //protected $permissionIdColumn = 'perm_id';
    protected $permissionIdColumn = 'id';

    /**
     * The join table permission id column.
     *
     * @var string
     */
    protected $permissionJoinColumn = 'permission_id';

    /**
     * The id column of the role table.
     *
     * @var string
     */
    //protected $roleIdColumn = 'role_id';
    protected $roleIdColumn = 'id';

    /**
     * The join table role id column.
     *
     * @var string
     */
    protected $roleJoinColumn = 'hierarchicalrole_id';

    /**
     * The name column of the permission table.
     *
     * @var string
     */
    //protected $permissionNameColumn = 'perm_name';
    protected $permissionNameColumn = 'name';

    /**
     * The name column of the role table.
     *
     * @var string
     */
    //protected $roleNameColumn = 'role_name';
    protected $roleNameColumn = 'name';

    /**
     * @param  string $permissionIdColumn
     * @return DoctrineDbalOptions
     */
    public function setPermissionIdColumn($permissionIdColumn)
    {
        $this->permissionIdColumn = (string) $permissionIdColumn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionIdColumn()
    {
        return $this->permissionIdColumn;
    }

    /**
     * @param string $permissionJoinColumn
     * @return DoctrineDbalOptions
     */
    public function setPermissionJoinColumn($permissionJoinColumn)
    {
        $this->permissionJoinColumn = (string) $permissionJoinColumn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionJoinColumn()
    {
        return $this->permissionJoinColumn;
    }

    /**
     * @param string $permissionNameColumn
     * @return DoctrineDbalOptions
     */
    public function setPermissionNameColumn($permissionNameColumn)
    {
        $this->permissionNameColumn = (string) $permissionNameColumn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionNameColumn()
    {
        return $this->permissionNameColumn;
    }

    /**
     * @param string $permissionTable
     * @return DoctrineDbalOptions
     */
    public function setPermissionTable($permissionTable)
    {
        $this->permissionTable = (string) $permissionTable;
        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionTable()
    {
        return $this->permissionTable;
    }

    /**
     * @param string $roleIdColumn
     * @return DoctrineDbalOptions
     */
    public function setRoleIdColumn($roleIdColumn)
    {
        $this->roleIdColumn = (string) $roleIdColumn;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoleIdColumn()
    {
        return $this->roleIdColumn;
    }

    /**
     * @param string $roleJoinColumn
     * @return DoctrineDbalOptions
     */
    public function setRoleJoinColumn($roleJoinColumn)
    {
        $this->roleJoinColumn = (string) $roleJoinColumn;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoleJoinColumn()
    {
        return $this->roleJoinColumn;
    }

    /**
     * @param string $roleJoinTable
     * @return DoctrineDbalOptions
     */
    public function setRoleJoinTable($roleJoinTable)
    {
        $this->roleJoinTable = (string) $roleJoinTable;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoleJoinTable()
    {
        return $this->roleJoinTable;
    }

    /**
     * @param string $roleNameColumn
     * @return DoctrineDbalOptions
     */
    public function setRoleNameColumn($roleNameColumn)
    {
        $this->roleNameColumn = (string) $roleNameColumn;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoleNameColumn()
    {
        return $this->roleNameColumn;
    }

    /**
     * @param string $roleTable
     * @return DoctrineDbalOptions
     */
    public function setRoleTable($roleTable)
    {
        $this->roleTable = (string) $roleTable;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoleTable()
    {
        return $this->roleTable;
    }
}

