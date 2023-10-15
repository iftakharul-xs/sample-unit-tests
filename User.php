<?php 


class User{

    /**
     * First name
     * @var string 
     */
    public string $first_name;

    /**
     * Last name 
     * @var string
     */
    public string $last_name;

    /**
     * Surname  
     * @var string
     */
    public string $surname;


    /**
     * Get user's full name from their first name and surname 
     */
    public function getFullName() : string {
        return trim("$this->first_name $this->surname");
    }

    public function getFirstName() : string{
        return $this->first_name ?? '';
    }

    public function getLastName() : string {
        return $this->last_name ?? '';
    }
    public function getSurname() : string {
        return $this->surname ?? '';
    }

    public function setFirstName(string $first_name) : User {
        $this->first_name = $first_name;
        return $this;
    }

    public function setLastName(string $last_name ) : User  {
        $this->last_name = $last_name;
        return $this;
    }

    public function setSurname(string $surname) : User  {
        $this->surname = $surname;
        return $this;
    }

}