<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonaRepository")
 */
class Persona
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="edad", type="integer")
     * @Assert\NotNull()
     * @Assert\Range(
     *      min = 18,
     *      max = 90,
     *      minMessage = "La edad mínima es 18",
     *      maxMessage = "La edad máxi,a es 90",
     *      invalidMessage = "Los datos no son válidos"
     * )
     */     
    private $edad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="natalidad", type="date")
     */
    private $natalidad;

    /**
     * @var int
     *
     * @ORM\Column(name="estatura", type="integer")
     */
    private $estatura;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", length=100)
     */
    private $genero;

    /**
     * @var int
     *
     * @ORM\Column(name="descendientes", type="integer")
     */
    private $descendientes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vehiculo", type="boolean")
     */
    private $vehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="lengua", type="string", length=100)
     */
    private $lengua;

    /**
     * @var string
     *
     * @ORM\Column(name="ingles", type="string", length=100)
     */
    private $ingles;

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=100)
     */
    private $web;


    /**
     * @var string
     *
     * @ORM\Column(name="tarjeta", type="string", length=100)
     */
    private $tarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string", length=100)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=100)
     */
    private $foto;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Persona
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return Persona
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set natalidad
     *
     * @param \DateTime $natalidad
     * @return Persona
     */
    public function setNatalidad($natalidad)
    {
        $this->natalidad = $natalidad;

        return $this;
    }

    /**
     * Get natalidad
     *
     * @return \DateTime 
     */
    public function getNatalidad()
    {
        return $this->natalidad;
    }

    /**
     * Set estatura
     *
     * @param integer $estatura
     * @return Persona
     */
    public function setEstatura($estatura)
    {
        $this->estatura = $estatura;

        return $this;
    }

    /**
     * Get estatura
     *
     * @return integer 
     */
    public function getEstatura()
    {
        return $this->estatura;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Persona
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     * @return Persona
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set genero
     *
     * @param string $genero
     * @return Persona
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set descendientes
     *
     * @param integer $descendientes
     * @return Persona
     */
    public function setDescendientes($descendientes)
    {
        $this->descendientes = $descendientes;

        return $this;
    }

    /**
     * Get descendientes
     *
     * @return integer 
     */
    public function getDescendientes()
    {
        return $this->descendientes;
    }

    /**
     * Set vehiculo
     *
     * @param integer $vehiculo
     * @return Persona
     */
    public function setVehiculo($vehiculo)
    {
        $this->vehiculo = $vehiculo;

        return $this;
    }

    /**
     * Get vehiculo
     *
     * @return integer 
     */
    public function getVehiculo()
    {
        return $this->vehiculo;
    }

    /**
     * Set lengua
     *
     * @param string $lengua
     * @return Persona
     */
    public function setLengua($lengua)
    {
        $this->lengua = $lengua;

        return $this;
    }

    /**
     * Get lengua
     *
     * @return string 
     */
    public function getLengua()
    {
        return $this->lengua;
    }

    /**
     * Set ingles
     *
     * @param string $ingles
     * @return Persona
     */
    public function setIngles($ingles)
    {
        $this->ingles = $ingles;

        return $this;
    }

    /**
     * Get ingles
     *
     * @return string 
     */
    public function getIngles()
    {
        return $this->ingles;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Persona
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set tarjeta
     *
     * @param string $tarjeta
     * @return Persona
     */
    public function setTarjeta($tarjeta)
    {
        $this->tarjeta = $tarjeta;

        return $this;
    }

    /**
     * Get tarjeta
     *
     * @return string 
     */
    public function getTarjeta()
    {
        return $this->tarjeta;
    }

    /**
     * Set iban
     *
     * @param string $iban
     * @return Persona
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string 
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Persona
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }
}
