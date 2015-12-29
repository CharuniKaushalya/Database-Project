<?php

namespace ApplicantBundle\Entity;

/**
 * MarkingScheme
 */
class MarkingScheme
{
    /**
     * @var string
     */
    private $category;

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
    private $applicant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->applicant = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return MarkingScheme
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return MarkingScheme
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
     * Add applicant
     *
     * @param \ApplicantBundle\Entity\Applicant $applicant
     *
     * @return MarkingScheme
     */
    public function addApplicant(\ApplicantBundle\Entity\Applicant $applicant)
    {
        $this->applicant[] = $applicant;

        return $this;
    }

    /**
     * Remove applicant
     *
     * @param \ApplicantBundle\Entity\Applicant $applicant
     */
    public function removeApplicant(\ApplicantBundle\Entity\Applicant $applicant)
    {
        $this->applicant->removeElement($applicant);
    }

    /**
     * Get applicant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApplicant()
    {
        return $this->applicant;
    }
}
