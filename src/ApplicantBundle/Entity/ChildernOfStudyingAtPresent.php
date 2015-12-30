<?php

namespace ApplicantBundle\Entity;

/**
 * ChildernOfStudyingAtPresent
 */
class ChildernOfStudyingAtPresent
{
    /**
     * @var string
     */
    private $nameInFull;

    /**
     * @var string
     */
    private $nameInInitial;

    /**
     * @var integer
     */
    private $grade;

    /**
     * @var string
     */
    private $addmissionNo;

    /**
     * @var integer
     */
    private $addmissionGrade;

    /**
     * @var string
     */
    private $gradesSpent;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ApplicantBundle\Entity\School
     */
    private $school;

    /**
     * @var \ApplicantBundle\Entity\Applicant
     */
    private $applicant;


    /**
     * Set nameInFull
     *
     * @param string $nameInFull
     *
     * @return ChildernOfStudyingAtPresent
     */
    public function setNameInFull($nameInFull)
    {
        $this->nameInFull = $nameInFull;

        return $this;
    }

    /**
     * Get nameInFull
     *
     * @return string
     */
    public function getNameInFull()
    {
        return $this->nameInFull;
    }

    /**
     * Set nameInInitial
     *
     * @param string $nameInInitial
     *
     * @return ChildernOfStudyingAtPresent
     */
    public function setNameInInitial($nameInInitial)
    {
        $this->nameInInitial = $nameInInitial;

        return $this;
    }

    /**
     * Get nameInInitial
     *
     * @return string
     */
    public function getNameInInitial()
    {
        return $this->nameInInitial;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     *
     * @return ChildernOfStudyingAtPresent
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set addmissionNo
     *
     * @param string $addmissionNo
     *
     * @return ChildernOfStudyingAtPresent
     */
    public function setAddmissionNo($addmissionNo)
    {
        $this->addmissionNo = $addmissionNo;

        return $this;
    }

    /**
     * Get addmissionNo
     *
     * @return string
     */
    public function getAddmissionNo()
    {
        return $this->addmissionNo;
    }

    /**
     * Set addmissionGrade
     *
     * @param integer $addmissionGrade
     *
     * @return ChildernOfStudyingAtPresent
     */
    public function setAddmissionGrade($addmissionGrade)
    {
        $this->addmissionGrade = $addmissionGrade;

        return $this;
    }

    /**
     * Get addmissionGrade
     *
     * @return integer
     */
    public function getAddmissionGrade()
    {
        return $this->addmissionGrade;
    }

    /**
     * Set gradesSpent
     *
     * @param string $gradesSpent
     *
     * @return ChildernOfStudyingAtPresent
     */
    public function setGradesSpent($gradesSpent)
    {
        $this->gradesSpent = $gradesSpent;

        return $this;
    }

    /**
     * Get gradesSpent
     *
     * @return string
     */
    public function getGradesSpent()
    {
        return $this->gradesSpent;
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
     * Set school
     *
     * @param \ApplicantBundle\Entity\School $school
     *
     * @return ChildernOfStudyingAtPresent
     */
    public function setSchool(\ApplicantBundle\Entity\School $school = null)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return \ApplicantBundle\Entity\School
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set applicant
     *
     * @param \ApplicantBundle\Entity\Applicant $applicant
     *
     * @return ChildernOfStudyingAtPresent
     */
    public function setApplicant(\ApplicantBundle\Entity\Applicant $applicant = null)
    {
        $this->applicant = $applicant;

        return $this;
    }

    /**
     * Get applicant
     *
     * @return \ApplicantBundle\Entity\Applicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }
}
