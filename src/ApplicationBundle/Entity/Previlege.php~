<?php

namespace ApplicationBundle\Entity;

/**
 * Previlege
 */
class Previlege
{
    /**
     * @var string
     */
    private $previlege;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $role;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set previlege
     *
     * @param string $previlege
     *
     * @return Previlege
     */
    public function setPrevilege($previlege)
    {
        $this->previlege = $previlege;

        return $this;
    }

    /**
     * Get previlege
     *
     * @return string
     */
    public function getPrevilege()
    {
        return $this->previlege;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Previlege
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add role
     *
     * @param \ApplicationBundle\Entity\Role $role
     *
     * @return Previlege
     */
    public function addRole(\ApplicationBundle\Entity\Role $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \ApplicationBundle\Entity\Role $role
     */
    public function removeRole(\ApplicationBundle\Entity\Role $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRole()
    {
        return $this->role;
    }
}
