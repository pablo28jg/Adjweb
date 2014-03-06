<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Atributolenguaje
 *
 * @ORM\Table(name="atributolenguaje")
 * @ORM\Entity
 */
class Atributolenguaje
{
    /**
     * @var integer $atributolenguajeId
     *
     * @ORM\Column(name="AtributoLenguaje_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atributolenguajeId;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="Descripcion", type="string", length=100, nullable=true)
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
     * @var Atributo
     *
     * @ORM\ManyToOne(targetEntity="Atributo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Atributo_id", referencedColumnName="Atributo_id")
     * })
     */
    private $atributo;

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
     * Get atributolenguajeId
     *
     * @return integer 
     */
    public function getAtributolenguajeId()
    {
        return $this->atributolenguajeId;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Atributolenguaje
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
     * @return Atributolenguaje
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
     * @return Atributolenguaje
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
     * @return Atributolenguaje
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
     * @return Atributolenguaje
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
     * @return Atributolenguaje
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
     * Set atributo
     *
     * @param Administrador\AdjBundle\Entity\Atributo $atributo
     * @return Atributolenguaje
     */
    public function setAtributo(\Administrador\AdjBundle\Entity\Atributo $atributo = null)
    {
        $this->atributo = $atributo;
    
        return $this;
    }

    /**
     * Get atributo
     *
     * @return Administrador\AdjBundle\Entity\Atributo 
     */
    public function getAtributo()
    {
        return $this->atributo;
    }

    /**
     * Set lenguaje
     *
     * @param Administrador\AdjBundle\Entity\Lenguaje $lenguaje
     * @return Atributolenguaje
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
}