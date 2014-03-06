<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Perfildetalle
 *
 * @ORM\Table(name="perfildetalle")
 * @ORM\Entity
 */
class Perfildetalle
{
    /**
     * @var integer $perfildetalleId
     *
     * @ORM\Column(name="PerfilDetalle_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $perfildetalleId;

    /**
     * @var integer $opcionId
     *
     * @ORM\Column(name="Opcion_id", type="integer", nullable=true)
     */
    private $opcionId;

    /**
     * @var integer $tipoacceso
     *
     * @ORM\Column(name="TipoAcceso", type="integer", nullable=false)
     */
    private $tipoacceso;

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
     * @var Modulo
     *
     * @ORM\ManyToOne(targetEntity="Modulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Modulo_id", referencedColumnName="Modulo_id")
     * })
     */
    private $modulo;

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
     * Get perfildetalleId
     *
     * @return integer 
     */
    public function getPerfildetalleId()
    {
        return $this->perfildetalleId;
    }

    /**
     * Set opcionId
     *
     * @param integer $opcionId
     * @return Perfildetalle
     */
    public function setOpcionId($opcionId)
    {
        $this->opcionId = $opcionId;
    
        return $this;
    }

    /**
     * Get opcionId
     *
     * @return integer 
     */
    public function getOpcionId()
    {
        return $this->opcionId;
    }

    /**
     * Set tipoacceso
     *
     * @param integer $tipoacceso
     * @return Perfildetalle
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
     * Set tipoestadoborrado
     *
     * @param boolean $tipoestadoborrado
     * @return Perfildetalle
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
     * @return Perfildetalle
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
     * @return Perfildetalle
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
     * @return Perfildetalle
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
     * @return Perfildetalle
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
     * Set modulo
     *
     * @param Administrador\AdjBundle\Entity\Modulo $modulo
     * @return Perfildetalle
     */
    public function setModulo(\Administrador\AdjBundle\Entity\Modulo $modulo = null)
    {
        $this->modulo = $modulo;
    
        return $this;
    }

    /**
     * Get modulo
     *
     * @return Administrador\AdjBundle\Entity\Modulo 
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * Set perfil
     *
     * @param Administrador\AdjBundle\Entity\Perfil $perfil
     * @return Perfildetalle
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