<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Tipocolonia
 *
 * @ORM\Table(name="tipocolonia")
 * @ORM\Entity
 */
class Tipocolonia
{
    /**
     * @var integer $tipocoloniaId
     *
     * @ORM\Column(name="TipoColonia_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipocoloniaId;

    /**
     * @var string $codigo
     *
     * @ORM\Column(name="Codigo", type="string", length=4, nullable=true)
     */
    private $codigo;

    /**
     * @var string $tipocolonia
     *
     * @ORM\Column(name="TipoColonia", type="string", length=200, nullable=true)
     */
    private $tipocolonia;

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
     * Get tipocoloniaId
     *
     * @return integer 
     */
    public function getTipocoloniaId()
    {
        return $this->tipocoloniaId;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Tipocolonia
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set tipocolonia
     *
     * @param string $tipocolonia
     * @return Tipocolonia
     */
    public function setTipocolonia($tipocolonia)
    {
        $this->tipocolonia = $tipocolonia;
    
        return $this;
    }

    /**
     * Get tipocolonia
     *
     * @return string 
     */
    public function getTipocolonia()
    {
        return $this->tipocolonia;
    }

    /**
     * Set tipoestadoborrado
     *
     * @param boolean $tipoestadoborrado
     * @return Tipocolonia
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
     * @return Tipocolonia
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
     * @return Tipocolonia
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
     * @return Tipocolonia
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
     * @return Tipocolonia
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
}