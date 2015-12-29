<?php

namespace ApplicantBundle\Entity;

/**
 * Role
 */
class Role
{
    /**
     * @var string
     */
    private $role;

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
    private $previlege;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->previlege = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Role
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
     * Add previlege
     *
     * @param \ApplicantBundle\Entity\Previlege $previlege
     *
     * @return Role
     */
    public function addPrevilege(\ApplicantBundle\Entity\Previlege $previlege)
    {
        $this->previlege[] = $previlege;

        return $this;
    }

    /**
     * Remove previlege
     *
     * @param \ApplicantBundle\Entity\Previlege $previlege
     */
    public function removePrevilege(\ApplicantBundle\Entity\Previlege $previlege)
    {
        $this->previlege->removeElement($previlege);
    }

    /**
     * Get previlege
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrevilege()
    {
        return $this->previlege;
    }
}
