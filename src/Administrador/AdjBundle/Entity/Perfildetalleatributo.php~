<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Perfildetalleatributo
 *
 * @ORM\Table(name="perfildetalleatributo")
 * @ORM\Entity
 */
class Perfildetalleatributo
{
    /**
     * @var integer $perfildetalleatributoId
     *
     * @ORM\Column(name="PerfilDetalleAtributo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $perfildetalleatributoId;

    /**
     * @var integer $tipoacceso
     *
     * @ORM\Column(name="TipoAcceso", type="integer", nullable=false)
     */
    private $tipoacceso;

    /**
     * @var string $funcion
     *
     * @ORM\Column(name="Funcion", type="string", length=30, nullable=false)
     */
    private $funcion;

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
     * @var Perfildetalle
     *
     * @ORM\ManyToOne(targetEntity="Perfildetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PerfilDetalle_id", referencedColumnName="PerfilDetalle_id")
     * })
     */
    private $perfildetalle;

    /**
     * @var Perfil
     *
     * @ORM\ManyToOne(targetEntity="Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Perfil_id", referencedColumnName="Perfil_id")
     * })
     */
    private $perfil;



    /**
     * Get perfildetalleatributoId
     *
     * @return integer 
     */
    public function getPerfildetalleatributoId()
    {
        return $this->perfildetalleatributoId;
    }

    /**
     * Set tipoacceso
     *
     * @param integer $tipoacceso
     * @return Perfildetalleatributo
     */
    public function setTipoacceso($tipoacceso)
    {
        $this->tipoacceso = $tipoacceso;
    
        return $this;
    }

    /**
     * Get tipoacceso
     *
     * @return integer 
     */
    public function getTipoacceso()
    {
        return $this->tipoacceso;
    }

    /**
     * Set funcion
     *
     * @param string $funcion
     * @return Perfildetalleatributo
     */
    public function setFuncion($funcion)
    {
        $this->funcion = $funcion;
    
        return $this;
    }

    /**
     * Get funcion
     *
     * @return string 
     */
    public function getFuncion()
    {
        return $this->funcion;
    }

    /**
     * Set tipoestadoborrado
     *
     * @param boolean $tipoestadoborrado
     * @return Perfildetalleatributo
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
     * @return Perfildetalleatributo
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
     * @return Perfildetalleatributo
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
     * @return Perfildetalleatributo
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
     * @return Perfildetalleatributo
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
     * @return Perfildetalleatributo
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
     * Set perfildetalle
     *
     * @param Administrador\AdjBundle\Entity\Perfildetalle $perfildetalle
     * @return Perfildetalleatributo
     */
    public function setPerfildetalle(\Administrador\AdjBundle\Entity\Perfildetalle $perfildetalle = null)
    {
        $this->perfildetalle = $perfildetalle;
    
        return $this;
    }

    /**
     * Get perfildetalle
     *
     * @return Administrador\AdjBundle\Entity\Perfildetalle 
     */
    public function getPerfildetalle()
    {
        return $this->perfildetalle;
    }

    /**
     * Set perfil
     *
     * @param Administrador\AdjBundle\Entity\Perfil $perfil
     * @return Perfildetalleatributo
     */
    public function setPerfil(\Administrador\AdjBundle\Entity\Perfil $perfil = null)
    {
        $this->perfil = $perfil;
    
        return $this;
    }

    /**
     * Get perfil
     *
     * @return Administrador\AdjBundle\Entity\Perfil 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }
}