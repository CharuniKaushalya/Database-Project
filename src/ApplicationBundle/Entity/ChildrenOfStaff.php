<?php

namespace ApplicationBundle\Entity;

/**
 * ChildrenOfStaff
 */
class ChildrenOfStaff
{
    /**
     * @var string
     */
    private $periodOfService;

    /**
     * @var string
     */
    private $periodOfDifficultSchoolService;

    /**
     * @var \DateTime
     */
    private $diffFromYear;

    /**
     * @var \DateTime
     */
    private $diffToYear;

    /**
     * @var \DateTime
     */
    private $unUtilizedLeave;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $empId;

    /**
     * @var \ApplicationBundle\Entity\Applicant
     */
    private $applicant;


    /**
     * Set periodOfService
     *
     * @param string $periodOfService
     *
     * @return ChildrenOfStaff
     */
    public function setPeriodOfService($periodOfService)
    {
        $this->periodOfService = $periodOfService;

        return $this;
    }

    /**
     * Get periodOfService
     *
     * @return string
     */
    public function getPeriodOfService()
    {
        return $this->periodOfService;
    }

    /**
     * Set periodOfDifficultSchoolService
     *
     * @param string $periodOfDifficultSchoolService
     *
     * @return ChildrenOfStaff
     */
    public function setPeriodOfDifficultSchoolService($periodOfDifficultSchoolService)
    {
        $this->periodOfDifficultSchoolService = $periodOfDifficultSchoolService;

        return $this;
    }

    /**
     * Get periodOfDifficultSchoolService
     *
     * @return string
     */
    public function getPeriodOfDifficultSchoolService()
    {
        return $this->periodOfDifficultSchoolService;
    }

    /**
     * Set diffFromYear
     *
     * @param \DateTime $diffFromYear
     *
     * @return ChildrenOfStaff
     */
    public function setDiffFromYear($diffFromYear)
    {
        $this->diffFromYear = $diffFromYear;

        return $this;
    }

    /**
     * Get diffFromYear
     *
     * @return \DateTime
     */
    public function getDiffFromYear()
    {
        return $this->diffFromYear;
    }

    /**
     * Set diffToYear
     *
     * @param \DateTime $diffToYear
     *
     * @return ChildrenOfStaff
     */
    public function setDiffToYear($diffToYear)
    {
        $this->diffToYear = $diffToYear;

        return $this;
    }

    /**
     * Get diffToYear
     *
     * @return \DateTime
     */
    public function getDiffToYear()
    {
        return $this->diffToYear;
    }

    /**
     * Set unUtilizedLeave
     *
     * @param \DateTime $unUtilizedLeave
     *
     * @return ChildrenOfStaff
     */
    public function setUnUtilizedLeave($unUtilizedLeave)
    {
        $this->unUtilizedLeave = $unUtilizedLeave;

        return $this;
    }

    /**
     * Get unUtilizedLeave
     *
     * @return \DateTime
     */
    public function getUnUtilizedLeave()
    {
        return $this->unUtilizedLeave;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return ChildrenOfStaff
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set empId
     *
     * @param string $empId
     *
     * @return ChildrenOfStaff
     */
    public function setEmpId($empId)
    {
        $this->empId = $empId;

        return $this;
    }

    /**
     * Get empId
     *
     * @return string
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * Set applicant
     *
     * @param \ApplicationBundle\Entity\Applicant $applicant
     *
     * @return ChildrenOfStaff
     */
    public function setApplicant(\ApplicationBundle\Entity\Applicant $applicant = null)
    {
        $this->applicant = $applicant;

        return $this;
    }

    /**
     * Get applicant
     *
     * @return \ApplicationBundle\Entity\Applicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }
}
