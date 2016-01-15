<?php
namespace ApplicationBundle\Modal;
class Login {
    private $username;
    private $password;
    private $empNo;
    private $roleid;
    private $id;
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

    public function setRoleId($roleid)
    {
        $this->roleid = $roleid;
    }
    public function getRoleId()
    {
        return $this->roleid;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }


}

?>
