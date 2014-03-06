<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Opcion
 *
 * @ORM\Table(name="opcion")
 * @ORM\Entity
 */
class Opcion
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="Opcion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $opcion
     *
     * @ORM\Column(name="Opcion", type="string", length=20, nullable=true)
     */
    private $opcion;

    /**
     * @var string $controller
     *
     * @ORM\Column(name="Controller", type="string", length=100, nullable=true)
     */
    private $controller;

    /**
     * @var string $function
     *
     * @ORM\Column(name="Function", type="string", length=100, nullable=true)
     */
    private $function;
    
    /**
     * @var string $parametros
     *
     * @ORM\Column(name="Parametros", type="string", length=130, nullable=true)
     */
    private $parametros;

    /**
     * @var integer $orden
     *
     * @ORM\Column(name="Orden", type="integer", nullable=true)
     */
    private $orden;

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
     * @var ModuloId
     *
     * @ORM\ManyToOne(targetEntity="Modulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Modulo_id", referencedColumnName="Modulo_id")
     * })
     */
    private $moduloId;



    /**
     * Get opcionId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set opcion
     *
     * @param string $opcion
     * @return Opcion
     */
    public function setOpcion($opcion)
    {
        $this->opcion = $opcion;
    
        return $this;
    }

    /**
     * Get opcion
     *
     * @return string 
     */
    public function getOpcion()
    {
        return $this->opcion;
    }

    /**
     * Set controller
     *
     * @param string $controller
     * @return Opcion
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    
        return $this;
    }

    /**
     * Get controller
     *
     * @return string 
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Set function
     *
     * @param string $function
     * @return Opcion
     */
    public function setFunction($function)
    {
        $this->function = $function;
    
        return $this;
    }

    /**
     * Get function
     *
     * @return string 
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Opcion
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
    
        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set tipoestado
     *
     * @param integer $tipoestado
     * @return Opcion
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
     * @return Opcion
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
     * @return Opcion
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
     * @return Opcion
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
     * @return Opcion
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
     * @return Opcion
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
     * Set moduloId
     *
     * @param Administrador\AdjBundle\Entity\Modulo $moduloId
     * @return Opcion
     */
    public function setModuloId(\Administrador\AdjBundle\Entity\Modulo $moduloId = null)
    {
        $this->moduloId = $moduloId;
    
        return $this;
    }

    /**
     * Get moduloId
     *
     * @return Administrador\AdjBundle\Entity\Modulo 
     */
    public function getModuloId()
    {
        return $this->moduloId;
    }

    /**
     * Set parametros
     *
     * @param string $parametros
     * @return Opcion
     */
    public function setParametros($parametros)
    {
        $this->parametros = $parametros;
    
        return $this;
    }

    /**
     * Get parametros
     *
     * @return string 
     */
    public function getParametros()
    {
        return $this->parametros;
    }
}