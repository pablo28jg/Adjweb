<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Tipocalle
 *
 * @ORM\Table(name="tipocalle")
 * @ORM\Entity
 */
class Tipocalle
{
    /**
     * @var integer $tipocalleId
     *
     * @ORM\Column(name="TipoCalle_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipocalleId;

    /**
     * @var string $codigo
     *
     * @ORM\Column(name="Codigo", type="string", length=4, nullable=true)
     */
    private $codigo;

    /**
     * @var string $tipocalle
     *
     * @ORM\Column(name="TipoCalle", type="string", length=200, nullable=true)
     */
    private $tipocalle;

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
     * Get tipocalleId
     *
     * @return integer 
     */
    public function getTipocalleId()
    {
        return $this->tipocalleId;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Tipocalle
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
     * Set tipocalle
     *
     * @param string $tipocalle
     * @return Tipocalle
     */
    public function setTipocalle($tipocalle)
    {
        $this->tipocalle = $tipocalle;
    
        return $this;
    }

    /**
     * Get tipocalle
     *
     * @return string 
     */
    public function getTipocalle()
    {
        return $this->tipocalle;
    }

    /**
     * Set tipoestadoborrado
     *
     * @param boolean $tipoestadoborrado
     * @return Tipocalle
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
     * @return Tipocalle
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
     * @return Tipocalle
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
     * @return Tipocalle
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
     * @return Tipocalle
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