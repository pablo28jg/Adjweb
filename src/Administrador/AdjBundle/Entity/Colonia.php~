<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Colonia
 *
 * @ORM\Table(name="colonia")
 * @ORM\Entity
 */
class Colonia
{
    /**
     * @var integer $coloniaId
     *
     * @ORM\Column(name="Colonia_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coloniaId;

    /**
     * @var integer $ciudadId
     *
     * @ORM\Column(name="Ciudad_id", type="integer", nullable=true)
     */
    private $ciudadId;

    /**
     * @var string $colonia
     *
     * @ORM\Column(name="Colonia", type="string", length=200, nullable=true)
     */
    private $colonia;

    /**
     * @var string $codigopostal
     *
     * @ORM\Column(name="CodigoPostal", type="string", length=6, nullable=true)
     */
    private $codigopostal;

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
     * @var Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Municipio_id", referencedColumnName="Municipio_id")
     * })
     */
    private $municipio;

    /**
     * @var Tipocolonia
     *
     * @ORM\ManyToOne(targetEntity="Tipocolonia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoColonia_id", referencedColumnName="TipoColonia_id")
     * })
     */
    private $tipocolonia;



    /**
     * Get coloniaId
     *
     * @return integer 
     */
    public function getColoniaId()
    {
        return $this->coloniaId;
    }

    /**
     * Set ciudadId
     *
     * @param integer $ciudadId
     * @return Colonia
     */
    public function setCiudadId($ciudadId)
    {
        $this->ciudadId = $ciudadId;
    
        return $this;
    }

    /**
     * Get ciudadId
     *
     * @return integer 
     */
    public function getCiudadId()
    {
        return $this->ciudadId;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     * @return Colonia
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;
    
        return $this;
    }

    /**
     * Get colonia
     *
     * @return string 
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set codigopostal
     *
     * @param string $codigopostal
     * @return Colonia
     */
    public function setCodigopostal($codigopostal)
    {
        $this->codigopostal = $codigopostal;
    
        return $this;
    }

    /**
     * Get codigopostal
     *
     * @return string 
     */
    public function getCodigopostal()
    {
        return $this->codigopostal;
    }

    /**
     * Set tipoestadoborrado
     *
     * @param boolean $tipoestadoborrado
     * @return Colonia
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
     * @return Colonia
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
     * @return Colonia
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
     * @return Colonia
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
     * @return Colonia
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
     * Set municipio
     *
     * @param Administrador\AdjBundle\Entity\Municipio $municipio
     * @return Colonia
     */
    public function setMunicipio(\Administrador\AdjBundle\Entity\Municipio $municipio = null)
    {
        $this->municipio = $municipio;
    
        return $this;
    }

    /**
     * Get municipio
     *
     * @return Administrador\AdjBundle\Entity\Municipio 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set tipocolonia
     *
     * @param Administrador\AdjBundle\Entity\Tipocolonia $tipocolonia
     * @return Colonia
     */
    public function setTipocolonia(\Administrador\AdjBundle\Entity\Tipocolonia $tipocolonia = null)
    {
        $this->tipocolonia = $tipocolonia;
    
        return $this;
    }

    /**
     * Get tipocolonia
     *
     * @return Administrador\AdjBundle\Entity\Tipocolonia 
     */
    public function getTipocolonia()
    {
        return $this->tipocolonia;
    }
}