<?php
/**
 * @package ZfcRbac
 * @subpackage Provider
 */
namespace JmlRbacZdb\Provider\AdjacencyList\Role;

use Zend\Stdlib\AbstractOptions;

class ZendDbOptions extends AbstractOptions
{
    /**
     * The name of the table the roles are stored in.
     *
     * @var string
     */
    //protected $table = 'rbac_role';
    protected $table = 'roles';
    
    /**
     * The id column of the role table.
     *
     * @var string
     */
    //protected $idColumn = 'role_id';
    protected $idColumn = 'role_id';

    /**
     * The name column of the role table.
     *
     * @var string
     */
    //protected $nameColumn = 'role_name';
    protected $nameColumn = 'name';

    /**
     * The join column to the parent role. If left empty, then
     * no join is performed. Note: this is a limited implementation and
     * assumes that the join is done on the same table. If this
     * does not work for you create a new provider and use that instead.
     *
     * @var string
     */
    //protected $joinColumn = 'parent_role_id';
    protected $joinColumn = '';

    /**
     * @param  string $idColumn
     * @return DoctrineDbalOptions
     */
    public function setIdColumn($idColumn)
    {
        $this->idColumn = (string) $idColumn;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdColumn()
    {
        return $this->idColumn;
    }

    /**
     * @param  string $joinColumn
     * @return DoctrineDbalOptions
     */
    public function setJoinColumn($joinColumn)
    {
        $this->joinColumn = (string) $joinColumn;
        return $this;
    }

    /**
     * @return string
     */
    public function getJoinColumn()
    {
        return $this->joinColumn;
    }

    /**
     * @param  string $nameColumn
     * @return DoctrineDbalOptions
     */
    public function setNameColumn($nameColumn)
    {
        $this->nameColumn = (string) $nameColumn;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameColumn()
    {
        return $this->nameColumn;
    }

    /**
     * @param  string $table
     * @return DoctrineDbalOptions
     */
    public function setTable($table)
    {
        $this->table = (string) $table;
        return $this;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }
}
