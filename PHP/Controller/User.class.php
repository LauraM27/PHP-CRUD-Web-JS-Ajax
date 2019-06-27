<?php

class User{
	private $_idUser; //identifiant en base de données
	private $_pseudo; //terme utilisé pour se logger
	private $_password;
	private $_role; //entier qui permet de définir le niveau d'habilitation de l'utilisateur
	
	// Getter / Setter

    public function getIdUser()
    {
        return $this->_idUser;
    }

    public function getPseudo()
    {
        return $this->_pseudo;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function setIdUser($_idUser)
    {
        $this->_idUser = $_idUser;
    }

     public function setPseudo($_pseudo)
    {
        $this->_pseudo = $_pseudo;
    }

    public function setPassword($_password)
    {
        $this->_password = $_password;
    }

    public function setRole($_role)
    {
        $this->_role = $_role;
    }

   

	// Constructeur
	public function __construct(array $options = [])
	{ 
		if (!empty($options))
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
		foreach ($data as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			
			if (is_callable([$this, $method]))
			{
				$this->$method($value);
			}
		}
	}
}