<?php

namespace ApplicationBundle\Entity;

/**
 * Applicant
 */
class Applicant
{
    /**
     * @var string
     */
    private $nameInFull;

    /**
     * @var string
     */
    private $nameInInitials;

    /**
     * @var string
     */
    private $permanentAddress;

    /**
     * @var string
     */
    private $gramaNiladariDivion;

    /**
     * @var string
     */
    private $divsionalScretaryArea;

    /**
     * @var string
     */
    private $district;

    /**
     * @var \DateTime
     */
    private $dob;

    /**
     * @var string
     */
    private $nic;

    /**
     * @var boolean
     */
    private $wetherSrilankan;

    /**
     * @var integer
     */
    private $noYearsInElectoralRegister;

    /**
     * @var integer
     */
    private $noSchoolsLocatedCloser;

    /**
     * @var string
     */
    private $religion;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $school;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $markingScheme;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->school = new \Doctrine\Common\Collections\ArrayCollection();
        $this->markingScheme = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nameInFull
     *
     * @param string $nameInFull
     *
     * @return Applicant
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
     * Set nameInInitials
     *
     * @param string $nameInInitials
     *
     * @return Applicant
     */
    public function setNameInInitials($nameInInitials)
    {
        $this->nameInInitials = $nameInInitials;

        return $this;
    }

    /**
     * Get nameInInitials
     *
     * @return string
     */
    public function getNameInInitials()
    {
        return $this->nameInInitials;
    }

    /**
     * Set permanentAddress
     *
     * @param string $permanentAddress
     *
     * @return Applicant
     */
    public function setPermanentAddress($permanentAddress)
    {
        $this->permanentAddress = $permanentAddress;

        return $this;
    }

    /**
     * Get permanentAddress
     *
     * @return string
     */
    public function getPermanentAddress()
    {
        return $this->permanentAddress;
    }

    /**
     * Set gramaNiladariDivion
     *
     * @param string $gramaNiladariDivion
     *
     * @return Applicant
     */
    public function setGramaNiladariDivion($gramaNiladariDivion)
    {
        $this->gramaNiladariDivion = $gramaNiladariDivion;

        return $this;
    }

    /**
     * Get gramaNiladariDivion
     *
     * @return string
     */
    public function getGramaNiladariDivion()
    {
        return $this->gramaNiladariDivion;
    }

    /**
     * Set divsionalScretaryArea
     *
     * @param string $divsionalScretaryArea
     *
     * @return Applicant
     */
    public function setDivsionalScretaryArea($divsionalScretaryArea)
    {
        $this->divsionalScretaryArea = $divsionalScretaryArea;

        return $this;
    }

    /**
     * Get divsionalScretaryArea
     *
     * @return string
     */
    public function getDivsionalScretaryArea()
    {
        return $this->divsionalScretaryArea;
    }

    /**
     * Set district
     *
     * @param string $district
     *
     * @return Applicant
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     *
     * @return Applicant
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set nic
     *
     * @param string $nic
     *
     * @return Applicant
     */
    public function setNic($nic)
    {
        $this->nic = $nic;

        return $this;
    }

    /**
     * Get nic
     *
     * @return string
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * Set wetherSrilankan
     *
     * @param boolean $wetherSrilankan
     *
     * @return Applicant
     */
    public function setWetherSrilankan($wetherSrilankan)
    {
        $this->wetherSrilankan = $wetherSrilankan;

        return $this;
    }

    /**
     * Get wetherSrilankan
     *
     * @return boolean
     */
    public function getWetherSrilankan()
    {
        return $this->wetherSrilankan;
    }

    /**
     * Set noYearsInElectoralRegister
     *
     * @param integer $noYearsInElectoralRegister
     *
     * @return Applicant
     */
    public function setNoYearsInElectoralRegister($noYearsInElectoralRegister)
    {
        $this->noYearsInElectoralRegister = $noYearsInElectoralRegister;

        return $this;
    }

    /**
     * Get noYearsInElectoralRegister
     *
     * @return integer
     */
    public function getNoYearsInElectoralRegister()
    {
        return $this->noYearsInElectoralRegister;
    }

    /**
     * Set noSchoolsLocatedCloser
     *
     * @param integer $noSchoolsLocatedCloser
     *
     * @return Applicant
     */
    public function setNoSchoolsLocatedCloser($noSchoolsLocatedCloser)
    {
        $this->noSchoolsLocatedCloser = $noSchoolsLocatedCloser;

        return $this;
    }

    /**
     * Get noSchoolsLocatedCloser
     *
     * @return integer
     */
    public function getNoSchoolsLocatedCloser()
    {
        return $this->noSchoolsLocatedCloser;
    }

    /**
     * Set religion
     *
     * @param string $religion
     *
     * @return Applicant
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * Get religion
     *
     * @return string
     */
    public function getReligion()
    {
        return $this->religion;
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
     * Add school
     *
     * @param \ApplicationBundle\Entity\School $school
     *
     * @return Applicant
     */
    public function addSchool(\ApplicationBundle\Entity\School $school)
    {
        $this->school[] = $school;

        return $this;
    }

    /**
     * Remove school
     *
     * @param \ApplicationBundle\Entity\School $school
     */
    public function removeSchool(\ApplicationBundle\Entity\School $school)
    {
        $this->school->removeElement($school);
    }

    /**
     * Get school
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Add markingScheme
     *
     * @param \ApplicationBundle\Entity\MarkingScheme $markingScheme
     *
     * @return Applicant
     */
    public function addMarkingScheme(\ApplicationBundle\Entity\MarkingScheme $markingScheme)
    {
        $this->markingScheme[] = $markingScheme;

        return $this;
    }

    /**
     * Remove markingScheme
     *
     * @param \ApplicationBundle\Entity\MarkingScheme $markingScheme
     */
    public function removeMarkingScheme(\ApplicationBundle\Entity\MarkingScheme $markingScheme)
    {
        $this->markingScheme->removeElement($markingScheme);
    }

    /**
     * Get markingScheme
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMarkingScheme()
    {
        return $this->markingScheme;
    }
}
