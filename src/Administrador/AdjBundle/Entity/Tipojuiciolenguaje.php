<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Tipojuiciolenguaje
 *
 * @ORM\Table(name="tipojuiciolenguaje")
 * @ORM\Entity
 */
class Tipojuiciolenguaje
{
    /**
     * @var integer $tipojuiciolenguajeId
     *
     * @ORM\Column(name="TipoJuicioLenguaje_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipojuiciolenguajeId;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="Descripcion", type="string", length=300, nullable=true)
     */
    private $descripcion;

    /**
     * @var boolean $tipoestadoborrado
     *
     * @ORM\Column(name="TipoEstadoBorrado", type="boolean", nullable=false)
     */
    private $tipoestadoborrado;

    /**
     * @var integer $creadoporId
     *
     * @ORM\Column(name="CreadoPor_id", type="integer", nullable=true)
     */
    private $creadoporId;

    /**
     * @var \DateTime $creadoel
     *
     * @ORM\Column(name="CreadoEl", type="datetime", nullable=true)
     */
    private $creadoel;

    /**
     * @var integer $actualizadoporId
     *
     * @ORM\Column(name="ActualizadoPor_id", type="integer", nullable=true)
     */
    private $actualizadoporId;

    /**
     * @var \DateTime $actualizadoel
     *
     * @ORM\Column(name="ActualizadoEl", type="datetime", nullable=true)
     */
    private $actualizadoel;

    /**
     * @var Lenguaje
     *
     * @ORM\ManyToOne(targetEntity="Lenguaje")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Lenguaje_id", referencedColumnName="Lenguaje_id")
     * })
     */
    private $lenguaje;

    /**
     * @var Tipojuicio
     *
     * @ORM\ManyToOne(targetEntity="Tipojuicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoJuicio_id", referencedColumnName="TipoJuicio_id")
     * })
     */
    private $tipojuicio;



    /**
     * Get tipojuiciolenguajeId
     *
     * @return integer 
     */
    public function getTipojuiciolenguajeId()
    {
        return $this->tipojuiciolenguajeId;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tipojuiciolenguaje
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set tipoestadoborrado
     *
     * @param boolean $tipoestadoborrado
     * @return Tipojuiciolenguaje
     */
    public function setTipoestadoborrado($tipoestadoborrado)
    {
        $this->tipoestadoborrado = $tipoestadoborrado;
    
        return $this;
    }

    /**
     * Get tipoestadoborrado
     *
     * @return boolean 
     */
    public function getTipoestadoborrado()
    {
        return $this->tipoestadoborrado;
    }

    /**
     * Set creadoporId
     *
     * @param integer $creadoporId
     * @return Tipojuiciolenguaje
     */
    public function setCreadoporId($creadoporId)
    {
        $this->creadoporId = $creadoporId;
    
        return $this;
    }

    /**
     * Get creadoporId
     *
     * @return integer 
     */
    public function getCreadoporId()
    {
        return $this->creadoporId;
    }

    /**
     * Set creadoel
     *
     * @param \DateTime $creadoel
     * @return Tipojuiciolenguaje
     */
    public function setCreadoel($creadoel)
    {
        $this->creadoel = $creadoel;
    
        return $this;
    }

    /**
     * Get creadoel
     *
     * @return \DateTime 
     */
    public function getCreadoel()
    {
        return $this->creadoel;
    }

    /**
     * Set actualizadoporId
     *
     * @param integer $actualizadoporId
     * @return Tipojuiciolenguaje
     */
    public function setActualizadoporId($actualizadoporId)
    {
        $this->actualizadoporId = $actualizadoporId;
    
        return $this;
    }

    /**
     * Get actualizadoporId
     *
     * @return integer 
     */
    public function getActualizadoporId()
    {
        return $this->actualizadoporId;
    }

    /**
     * Set actualizadoel
     *
     * @param \DateTime $actualizadoel
     * @return Tipojuiciolenguaje
     */
    public function setActualizadoel($actualizadoel)
    {
        $this->actualizadoel = $actualizadoel;
    
        return $this;
    }

    /**
     * Get actualizadoel
     *
     * @return \DateTime 
     */
    public function getActualizadoel()
    {
        return $this->actualizadoel;
    }

    /**
     * Set lenguaje
     *
     * @param Administrador\AdjBundle\Entity\Lenguaje $lenguaje
     * @return Tipojuiciolenguaje
     */
    public function setLenguaje(\Administrador\AdjBundle\Entity\Lenguaje $lenguaje = null)
    {
        $this->lenguaje = $lenguaje;
    
        return $this;
    }

    /**
     * Get lenguaje
     *
     * @return Administrador\AdjBundle\Entity\Lenguaje 
     */
    public function getLenguaje()
    {
        return $this->lenguaje;
    }

    /**
     * Set tipojuicio
     *
     * @param Administrador\AdjBundle\Entity\Tipojuicio $tipojuicio
     * @return Tipojuiciolenguaje
     */
    public function setTipojuicio(\Administrador\AdjBundle\Entity\Tipojuicio $tipojuicio = null)
    {
        $this->tipojuicio = $tipojuicio;
    
        return $this;
    }

    /**
     * Get tipojuicio
     *
     * @return Administrador\AdjBundle\Entity\Tipojuicio 
     */
    public function getTipojuicio()
    {
        return $this->tipojuicio;
    }
}