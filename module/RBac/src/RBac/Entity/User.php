<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace RBac\Entity;

use ZfcRbac\Identity\IdentityInterface;
use ZfcUser\Entity\UserInterface;


class User implements IdentityInterface, UserInterface
{
    
    protected $id;
    protected $username;
    protected $email;
    protected $displayName;
    protected $password;
    protected $state;
    
    private $roles;

    public function __construct()
    {
        $this->roles = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }

    /**
     * Set the list of roles
     * @param Collection $roles
     */
    public function setRoles(Collection $roles)
    {
        $this->roles->clear();
        foreach ($roles as $role) {
            $this->roles[] = $role;
        }
    }

    /**
     * Add one role to roles list
     * @param \Rbac\Role\RoleInterface $role
     */
    public function addRole(RoleInterface $role)
    {
        $this->roles[] = $role;
    }
    
    

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id.
     *
     * @param int $id
     * @return UserInterface
     */
    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username.
     *
     * @param string $username
     * @return UserInterface
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email.
     *
     * @param string $email
     * @return UserInterface
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get displayName.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set displayName.
     *
     * @param string $displayName
     * @return UserInterface
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password.
     *
     * @param string $password
     * @return UserInterface
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get state.
     *
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set state.
     *
     * @param int $state
     * @return UserInterface
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
    
    public function exchangeArray($data) {
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->username = (!empty($data['username'])) ? $data['username'] : null;
        $this->email = (!empty($data['email'])) ? $data['email'] : null;
        $this->password = (!empty($data['password'])) ? $data['password'] : null;
        $this->state = (!empty($data['state'])) ? $data['state'] : null;
        $this->displayName = (!empty($data['displayName'])) ? $data['displayName'] : null;
    }
}