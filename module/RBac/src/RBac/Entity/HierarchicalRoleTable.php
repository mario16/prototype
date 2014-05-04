<?php
namespace RBac\Entity;

use Zend\Db\TableGateway\TableGateway;

class HierarchicalRoleTable
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

    public function getHierarchicalRole($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function saveHierarchicalRole(HierarchicalRole $role)
    {
        $data = array(
            'artist' => $role->artist,
            'title'  => $role->title,
        );

        $id = (int)$role->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getHierarchicalRole($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Form id does not exist');
            }
        }
    }

    public function deleteHierarchicalRole($id)
    {
        $this->tableGateway->delete(array('id' => $id));
    }
}