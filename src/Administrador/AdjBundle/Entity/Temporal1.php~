<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Temporal1
 *
 * @ORM\Table(name="temporal1")
 * @ORM\Entity
 */
class Temporal1
{
    /**
     * @var integer $temporalId
     *
     * @ORM\Column(name="Temporal_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $temporalId;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="Descripcion", type="string", length=40, nullable=true)
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
     * @var Entidad
     *
     * @ORM\ManyToOne(targetEntity="Entidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Entidad_id", referencedColumnName="Entidad_id")
     * })
     */
    private $entidad;



    /**
     * Get temporalId
     *
     * @return integer 
     */
    public function getTemporalId()
    {
        return $this->temporalId;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Temporal1
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
     * @return Temporal1
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
     * @return Temporal1
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
     * @return Temporal1
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
     * @return Temporal1
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
     * @return Temporal1
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
     * Set entidad
     *
     * @param Administrador\AdjBundle\Entity\Entidad $entidad
     * @return Temporal1
     */
    public function setEntidad(\Administrador\AdjBundle\Entity\Entidad $entidad = null)
    {
        $this->entidad = $entidad;
    
        return $this;
    }

    /**
     * Get entidad
     *
     * @return Administrador\AdjBundle\Entity\Entidad 
     */
    public function getEntidad()
    {
        return $this->entidad;
    }
}