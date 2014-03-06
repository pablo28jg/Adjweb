<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\DataTransformer\IntegerToLocalizedStringTransformer;

/**
 * @ORM\Table(name="atributo")
 * @ORM\Entity
 */
class Atributo
{
    /**
     * @var integer $atributoId
     *
     * @ORM\Column(name="Atributo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $atributo
     *
     * @ORM\Column(name="Atributo", type="string", length=100, nullable=true)
     */
    private $atributo;
    
    /**
     * @var integer $tipovista
     * @ORM\Column(name="TipoVista", type="integer", nullable=false)
     */
    //1-Lista 2-Detalle 3-LookUpLista 4-LookUpDetalle
    private $tipovista;
    
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
     * Get atributoId
     *
     * @return integer 
     */
    public function getAtributoId()
    {
        return $this->atributoId;
    }

    /**
     * Set atributo
     *
     * @param string $atributo
     * @return Atributo
     */
    public function setAtributo($atributo)
    {
        $this->atributo = $atributo;
    
        return $this;
    }

    /**
     * Get atributo
     *
     * @return string 
     */
    public function getAtributo()
    {
        return $this->atributo;
    }

    /**
     * Set tipoestado
     *
     * @param integer $tipoestado
     * @return Atributo
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
     * @return Atributo
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
     * @return Atributo
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
     * @return Atributo
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
     * @return Atributo
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
     * @return Atributo
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipovista
     *
     * @param integer $tipovista
     * @return Atributo
     */
    public function setTipovista($tipovista)
    {
        $this->tipovista = $tipovista;
    
        return $this;
    }

    /**
     * Get tipovista
     *
     * @return integer 
     */
    public function getTipovista()
    {
        return $this->tipovista;
    }
}