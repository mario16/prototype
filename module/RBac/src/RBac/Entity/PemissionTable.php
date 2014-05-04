<?php
namespace RBac\Entity;

use Zend\Db\TableGateway\TableGateway;

class PermissionTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getPermission($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function savePermission(Permission $permission)
    {
        $data = array(
            'name' => $permission->name,
        );

        $id = (int)$permission->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getPermission($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Form id does not exist');
            }
        }
    }

    public function deletePermission($id)
    {
        $this->tableGateway->delete(array('id' => $id));
    }
}