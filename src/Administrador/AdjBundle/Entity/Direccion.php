<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Direccion
 *
 * @ORM\Table(name="direccion")
 * @ORM\Entity
 */
class Direccion
{
    /**
     * @var integer $direccionId
     *
     * @ORM\Column(name="Direccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $direccionId;

    /**
     * @var integer $ciudadId
     *
     * @ORM\Column(name="Ciudad_id", type="integer", nullable=true)
     */
    private $ciudadId;

    /**
     * @var string $calle
     *
     * @ORM\Column(name="Calle", type="string", length=200, nullable=true)
     */
    private $calle;

    /**
     * @var string $codigopostal
     *
     * @ORM\Column(name="CodigoPostal", type="string", length=6, nullable=true)
     */
    private $codigopostal;

    /**
     * @var string $numeroexterior
     *
     * @ORM\Column(name="NumeroExterior", type="string", length=30, nullable=true)
     */
    private $numeroexterior;

    /**
     * @var string $numerointerior
     *
     * @ORM\Column(name="NumeroInterior", type="string", length=30, nullable=true)
     */
    private $numerointerior;

    /**
     * @var string $referencia
     *
     * @ORM\Column(name="Referencia", type="string", length=200, nullable=true)
     */
    private $referencia;

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
     * @var Colonia
     *
     * @ORM\ManyToOne(targetEntity="Colonia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Colonia_id", referencedColumnName="Colonia_id")
     * })
     */
    private $colonia;

    /**
     * @var Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Estado_id", referencedColumnName="Estado_id")
     * })
     */
    private $estado;

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
     * @var Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Pais_id", referencedColumnName="Pais_id")
     * })
     */
    private $pais;

    /**
     * @var Tipocalle
     *
     * @ORM\ManyToOne(targetEntity="Tipocalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoCalle_id", referencedColumnName="TipoCalle_id")
     * })
     */
    private $tipocalle;

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
     * Get direccionId
     *
     * @return integer 
     */
    public function getDireccionId()
    {
        return $this->direccionId;
    }

    /**
     * Set ciudadId
     *
     * @param integer $ciudadId
     * @return Direccion
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
     * Set calle
     *
     * @param string $calle
     * @return Direccion
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
    
        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set codigopostal
     *
     * @param string $codigopostal
     * @return Direccion
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
     * Set numeroexterior
     *
     * @param string $numeroexterior
     * @return Direccion
     */
    public function setNumeroexterior($numeroexterior)
    {
        $this->numeroexterior = $numeroexterior;
    
        return $this;
    }

    /**
     * Get numeroexterior
     *
     * @return string 
     */
    public function getNumeroexterior()
    {
        return $this->numeroexterior;
    }

    /**
     * Set numerointerior
     *
     * @param string $numerointerior
     * @return Direccion
     */
    public function setNumerointerior($numerointerior)
    {
        $this->numerointerior = $numerointerior;
    
        return $this;
    }

    /**
     * Get numerointerior
     *
     * @return string 
     */
    public function getNumerointerior()
    {
        return $this->numerointerior;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return Direccion
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    
        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set tipoestado
     *
     * @param integer $tipoestado
     * @return Direccion
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
     * @return Direccion
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
     * @return Direccion
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
     * @return Direccion
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
     * @return Direccion
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
     * @return Direccion
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
     * Set colonia
     *
     * @param Administrador\AdjBundle\Entity\Colonia $colonia
     * @return Direccion
     */
    public function setColonia(\Administrador\AdjBundle\Entity\Colonia $colonia = null)
    {
        $this->colonia = $colonia;
    
        return $this;
    }

    /**
     * Get colonia
     *
     * @return Administrador\AdjBundle\Entity\Colonia 
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set estado
     *
     * @param Administrador\AdjBundle\Entity\Estado $estado
     * @return Direccion
     */
    public function setEstado(\Administrador\AdjBundle\Entity\Estado $estado = null)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return Administrador\AdjBundle\Entity\Estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set municipio
     *
     * @param Administrador\AdjBundle\Entity\Municipio $municipio
     * @return Direccion
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
     * Set pais
     *
     * @param Administrador\AdjBundle\Entity\Pais $pais
     * @return Direccion
     */
    public function setPais(\Administrador\AdjBundle\Entity\Pais $pais = null)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return Administrador\AdjBundle\Entity\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set tipocalle
     *
     * @param Administrador\AdjBundle\Entity\Tipocalle $tipocalle
     * @return Direccion
     */
    public function setTipocalle(\Administrador\AdjBundle\Entity\Tipocalle $tipocalle = null)
    {
        $this->tipocalle = $tipocalle;
    
        return $this;
    }

    /**
     * Get tipocalle
     *
     * @return Administrador\AdjBundle\Entity\Tipocalle 
     */
    public function getTipocalle()
    {
        return $this->tipocalle;
    }

    /**
     * Set tipocolonia
     *
     * @param Administrador\AdjBundle\Entity\Tipocolonia $tipocolonia
     * @return Direccion
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