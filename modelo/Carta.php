<?php

class Carta{

    private string $time; //Mesma coisa que "nome", só alterei para maior compreensão do código.
    private string $numero;

    public function __toString(){
        return "Time: " . $this->time . ".\nNúmero: " . $this->numero . ".\n";
    }

    /**
     * Get the value of time
     */ 
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of time
     *
     * @return  self
     */ 
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

}
