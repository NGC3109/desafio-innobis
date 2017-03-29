<?php

namespace Form\PersonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Form\PersonBundle\Entity\PersonRepository")
 */
class Person
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_paterno", type="string", length=50)
     */
    private $apellidoPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_materno", type="string", length=50)
     */
    private $apellidoMaterno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date")
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="nacionalidad", type="string", length=70)
     */
    private $nacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", length=15)
     */
    private $genero;

    /**
     * @var string
     *
     * @ORM\Column(name="p_cardiaco", type="string", length=255)
     */
    private $pCardiaco;

    /**
     * @var string
     *
     * @ORM\Column(name="p_respiratorio", type="string", length=255)
     */
    private $pRespiratorio;

    /**
     * @var string
     *
     * @ORM\Column(name="historial_familiar", type="string", length=255)
     */
    private $historialFamiliar;


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
     * @return Person
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
     * Set apellidoPaterno
     *
     * @param string $apellidoPaterno
     * @return Person
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;

        return $this;
    }

    /**
     * Get apellidoPaterno
     *
     * @return string 
     */
    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     * @return Person
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;

        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string 
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Person
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     * @return Person
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set genero
     *
     * @param string $genero
     * @return Person
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
     * Set pCardiaco
     *
     * @param string $pCardiaco
     * @return Person
     */
    public function setPCardiaco($pCardiaco)
    {
        $this->pCardiaco = $pCardiaco;

        return $this;
    }

    /**
     * Get pCardiaco
     *
     * @return string 
     */
    public function getPCardiaco()
    {
        return $this->pCardiaco;
    }

    /**
     * Set pRespiratorio
     *
     * @param string $pRespiratorio
     * @return Person
     */
    public function setPRespiratorio($pRespiratorio)
    {
        $this->pRespiratorio = $pRespiratorio;

        return $this;
    }

    /**
     * Get pRespiratorio
     *
     * @return string 
     */
    public function getPRespiratorio()
    {
        return $this->pRespiratorio;
    }

    /**
     * Set historialFamiliar
     *
     * @param string $historialFamiliar
     * @return Person
     */
    public function setHistorialFamiliar($historialFamiliar)
    {
        $this->historialFamiliar = $historialFamiliar;

        return $this;
    }

    /**
     * Get historialFamiliar
     *
     * @return string 
     */
    public function getHistorialFamiliar()
    {
        return $this->historialFamiliar;
    }
}
