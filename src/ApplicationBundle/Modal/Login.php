<?php
namespace ApplicationBundle\Modal;
class Login {
    private $username;
    private $password;
    private $empNo;
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmpNo($empNo)
    {
        $this->empNo = $empNo;
    }
    public function getEmpNo()
    {
        return $this->empNo;
    }


}

?>
