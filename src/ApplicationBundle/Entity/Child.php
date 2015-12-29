<?php

namespace ApplicationBundle\Entity;

/**
 * Child
 */
class Child
{
    /**
     * @var string
     */
    private $nameInFull;

    /**
     * @var string
     */
    private $nameInIntials;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var string
     */
    private $religion;

    /**
     * @var string
     */
    private $mediumOfLearning;

    /**
     * @var \DateTime
     */
    private $dob;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ApplicationBundle\Entity\Applicant
     */
    private $applicant;


    /**
     * Set nameInFull
     *
     * @param string $nameInFull
     *
     * @return Child
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
     * Set nameInIntials
     *
     * @param string $nameInIntials
     *
     * @return Child
     */
    public function setNameInIntials($nameInIntials)
    {
        $this->nameInIntials = $nameInIntials;

        return $this;
    }

    /**
     * Get nameInIntials
     *
     * @return string
     */
    public function getNameInIntials()
    {
        return $this->nameInIntials;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Child
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set religion
     *
     * @param string $religion
     *
     * @return Child
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
     * Set mediumOfLearning
     *
     * @param string $mediumOfLearning
     *
     * @return Child
     */
    public function setMediumOfLearning($mediumOfLearning)
    {
        $this->mediumOfLearning = $mediumOfLearning;

        return $this;
    }

    /**
     * Get mediumOfLearning
     *
     * @return string
     */
    public function getMediumOfLearning()
    {
        return $this->mediumOfLearning;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     *
     * @return Child
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set applicant
     *
     * @param \ApplicationBundle\Entity\Applicant $applicant
     *
     * @return Child
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
