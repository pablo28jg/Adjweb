<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Perfil
 *
 * @ORM\Table(name="perfil")
 * @ORM\Entity
 */
class Perfil
{
    /**
     * @var integer $perfilId
     *
     * @ORM\Column(name="Perfil_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $perfilId;
    
    public function __toString()
    {
    	return $this->perfil;
    }

    /**
     * @var string $perfil
     *
     * @ORM\Column(name="Perfil", type="string", length=100, nullable=true)
     */
    private $perfil;

    /**
     * @var integer $tipoperfil
     *
     * @ORM\Column(name="TipoPerfil", type="integer", nullable=false)
     */
    private $tipoperfil;

    /**
     * @var integer $tipoestado
     *
     * @ORM\Column(name="TipoEstado", type="integer", nullable=true)
     */
    private $tipoestado;

    /**
     * @var boolean $permitirborrar
     *
     * @ORM\Column(name="PermitirBorrar", type="boolean", nullable=false)
     */
    private $permitirborrar;

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
     * Get perfilId
     *
     * @return integer 
     */
    public function getPerfilId()
    {
        return $this->perfilId;
    }

    /**
     * Set perfil
     *
     * @param string $perfil
     * @return Perfil
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    
        return $this;
    }

    /**
     * Get perfil
     *
     * @return string 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set tipoperfil
     *
     * @param integer $tipoperfil
     * @return Perfil
     */
    public function setTipoperfil($tipoperfil)
    {
        $this->tipoperfil = $tipoperfil;
    
        return $this;
    }

    /**
     * Get tipoperfil
     *
     * @return integer 
     */
    public function getTipoperfil()
    {
        return $this->tipoperfil;
    }

    /**
     * Set tipoestado
     *
     * @param integer $tipoestado
     * @return Perfil
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
     * Set permitirborrar
     *
     * @param boolean $permitirborrar
     * @return Perfil
     */
    public function setPermitirborrar($permitirborrar)
    {
        $this->permitirborrar = $permitirborrar;
    
        return $this;
    }

    /**
     * Get permitirborrar
     *
     * @return boolean 
     */
    public function getPermitirborrar()
    {
        return $this->permitirborrar;
    }

    /**
     * Set tipoestadoborrado
     *
     * @param boolean $tipoestadoborrado
     * @return Perfil
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
     * @return Perfil
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
     * @return Perfil
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
     * @return Perfil
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
     * @return Perfil
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