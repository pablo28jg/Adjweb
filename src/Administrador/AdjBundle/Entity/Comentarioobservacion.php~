<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Comentarioobservacion
 *
 * @ORM\Table(name="comentarioobservacion")
 * @ORM\Entity
 */
class Comentarioobservacion
{
    /**
     * @var integer $comentarioobservacionId
     *
     * @ORM\Column(name="ComentarioObservacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comentarioobservacionId;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="Descripcion", type="string", length=4000, nullable=true)
     */
    private $descripcion;

    /**
     * @var boolean $tipo
     *
     * @ORM\Column(name="Tipo", type="boolean", nullable=false)
     */
    private $tipo;

    /**
     * @var integer $tipoestado
     *
     * @ORM\Column(name="TipoEstado", type="integer", nullable=true)
     */
    private $tipoestado;

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
     * @var Expediente
     *
     * @ORM\ManyToOne(targetEntity="Expediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Expediente_id", referencedColumnName="Expediente_id")
     * })
     */
    private $expediente;



    /**
     * Get comentarioobservacionId
     *
     * @return integer 
     */
    public function getComentarioobservacionId()
    {
        return $this->comentarioobservacionId;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Comentarioobservacion
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
     * Set tipo
     *
     * @param boolean $tipo
     * @return Comentarioobservacion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return boolean 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set tipoestado
     *
     * @param integer $tipoestado
     * @return Comentarioobservacion
     */
    public function setTipoestado($tipoestado)
    {
        $this->tipoestado = $tipoestado;
    
        return $this;
    }

    /**
     * Get tipoestado
     *
     * @return integer 
     */
    public function getTipoestado()
    {
        return $this->tipoestado;
    }

    /**
     * Set tipoestadoborrado
     *
     * @param boolean $tipoestadoborrado
     * @return Comentarioobservacion
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
     * @return Comentarioobservacion
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
     * @return Comentarioobservacion
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
     * @return Comentarioobservacion
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
     * @return Comentarioobservacion
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
     * Set expediente
     *
     * @param Administrador\AdjBundle\Entity\Expediente $expediente
     * @return Comentarioobservacion
     */
    public function setExpediente(\Administrador\AdjBundle\Entity\Expediente $expediente = null)
    {
        $this->expediente = $expediente;
    
        return $this;
    }

    /**
     * Get expediente
     *
     * @return Administrador\AdjBundle\Entity\Expediente 
     */
    public function getExpediente()
    {
        return $this->expediente;
    }
}