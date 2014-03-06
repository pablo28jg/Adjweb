<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Expediente
 *
 * @ORM\Table(name="expediente")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Expediente
{
    /**
     * @var integer $expedienteId
     *
     * @ORM\Column(name="Expediente_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    public function __toString()
    {
    	return $this->nombre;
    }
    
    /** @ORM\prePersist */
    public function afterPersit()
    {
    	$this->creadoel = new \DateTime();
    	$this->tipoestadoborrado = false;
    }

    /**
     * @var string $numeroexpedienteKy
     *
     * @ORM\Column(name="NumeroExpediente_ky", type="string", length=30, nullable=true)
     */
    private $numeroexpedienteKy;

    /**
     * @var string $titulojuicio
     *
     * @ORM\Column(name="TituloJuicio", type="string", length=200, nullable=true)
     */
    private $titulojuicio;

    /**
     * @var string $estadoprocesal
     *
     * @ORM\Column(name="EstadoProcesal", type="string", length=200, nullable=true)
     */
    private $estadoprocesal;

    /**
     * @var \DateTime $fechainicio
     *
     * @ORM\Column(name="FechaInicio", type="datetime", nullable=true)
     */
    private $fechainicio;

    /**
     * @var \DateTime $fechatermino
     *
     * @ORM\Column(name="FechaTermino", type="datetime", nullable=true)
     */
    private $fechatermino;

    /**
     * @var integer $cuantia
     *
     * @ORM\Column(name="Cuantia", type="integer", nullable=true)
     */
    private $cuantia;

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
     * @var Entidad
     *
     * @ORM\ManyToOne(targetEntity="Entidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Abogado_id", referencedColumnName="Entidad_id")
     * })
     */
    private $abogado;

    /**
     * @var Entidad
     *
     * @ORM\ManyToOne(targetEntity="Entidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Cliente_id", referencedColumnName="Entidad_id")
     * })
     */
    private $cliente;

    /**
     * @var Entidad
     *
     * @ORM\ManyToOne(targetEntity="Entidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Contrario_id", referencedColumnName="Entidad_id")
     * })
     */
    private $contrario;

    /**
     * @var Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Empresa_id", referencedColumnName="Empresa_id")
     * })
     */
    private $empresa;

    /**
     * @var Entidad
     *
     * @ORM\ManyToOne(targetEntity="Entidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="InstanciaActual_id", referencedColumnName="Entidad_id")
     * })
     */
    private $instanciaactual;

    /**
     * @var Entidad
     *
     * @ORM\ManyToOne(targetEntity="Entidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Juzgado_id", referencedColumnName="Entidad_id")
     * })
     */
    private $juzgado;

    /**
     * @var Tipoexpediente
     *
     * @ORM\ManyToOne(targetEntity="Tipoexpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoExpediente_id", referencedColumnName="TipoExpediente_id")
     * })
     */
    private $tipoexpediente;

    /**
     * @var Tipojuicio
     *
     * @ORM\ManyToOne(targetEntity="Tipojuicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoJuicio_id", referencedColumnName="TipoJuicio_id")
     * })
     */
    private $tipojuicio;



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
     * Set numeroexpedienteKy
     *
     * @param string $numeroexpedienteKy
     * @return Expediente
     */
    public function setNumeroexpedienteKy($numeroexpedienteKy)
    {
        $this->numeroexpedienteKy = $numeroexpedienteKy;
    
        return $this;
    }

    /**
     * Get numeroexpedienteKy
     *
     * @return string 
     */
    public function getNumeroexpedienteKy()
    {
        return $this->numeroexpedienteKy;
    }

    /**
     * Set titulojuicio
     *
     * @param string $titulojuicio
     * @return Expediente
     */
    public function setTitulojuicio($titulojuicio)
    {
        $this->titulojuicio = $titulojuicio;
    
        return $this;
    }

    /**
     * Get titulojuicio
     *
     * @return string 
     */
    public function getTitulojuicio()
    {
        return $this->titulojuicio;
    }

    /**
     * Set estadoprocesal
     *
     * @param string $estadoprocesal
     * @return Expediente
     */
    public function setEstadoprocesal($estadoprocesal)
    {
        $this->estadoprocesal = $estadoprocesal;
    
        return $this;
    }

    /**
     * Get estadoprocesal
     *
     * @return string 
     */
    public function getEstadoprocesal()
    {
        return $this->estadoprocesal;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Expediente
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    
        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechatermino
     *
     * @param \DateTime $fechatermino
     * @return Expediente
     */
    public function setFechatermino($fechatermino)
    {
        $this->fechatermino = $fechatermino;
    
        return $this;
    }

    /**
     * Get fechatermino
     *
     * @return \DateTime 
     */
    public function getFechatermino()
    {
        return $this->fechatermino;
    }

    /**
     * Set cuantia
     *
     * @param integer $cuantia
     * @return Expediente
     */
    public function setCuantia($cuantia)
    {
        $this->cuantia = $cuantia;
    
        return $this;
    }

    /**
     * Get cuantia
     *
     * @return integer 
     */
    public function getCuantia()
    {
        return $this->cuantia;
    }

    /**
     * Set tipoestado
     *
     * @param integer $tipoestado
     * @return Expediente
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
     * @return Expediente
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
     * @return Expediente
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
     * @return Expediente
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
     * @return Expediente
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
     * @return Expediente
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
     * Set abogado
     *
     * @param Administrador\AdjBundle\Entity\Entidad $abogado
     * @return Expediente
     */
    public function setAbogado(\Administrador\AdjBundle\Entity\Entidad $abogado = null)
    {
        $this->abogado = $abogado;
    
        return $this;
    }

    /**
     * Get abogado
     *
     * @return Administrador\AdjBundle\Entity\Entidad 
     */
    public function getAbogado()
    {
        return $this->abogado;
    }

    /**
     * Set cliente
     *
     * @param Administrador\AdjBundle\Entity\Entidad $cliente
     * @return Expediente
     */
    public function setCliente(\Administrador\AdjBundle\Entity\Entidad $cliente = null)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return Administrador\AdjBundle\Entity\Entidad 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set contrario
     *
     * @param Administrador\AdjBundle\Entity\Entidad $contrario
     * @return Expediente
     */
    public function setContrario(\Administrador\AdjBundle\Entity\Entidad $contrario = null)
    {
        $this->contrario = $contrario;
    
        return $this;
    }

    /**
     * Get contrario
     *
     * @return Administrador\AdjBundle\Entity\Entidad 
     */
    public function getContrario()
    {
        return $this->contrario;
    }

    /**
     * Set empresa
     *
     * @param Administrador\AdjBundle\Entity\Empresa $empresa
     * @return Expediente
     */
    public function setEmpresa(\Administrador\AdjBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;
    
        return $this;
    }

    /**
     * Get empresa
     *
     * @return Administrador\AdjBundle\Entity\Empresa 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set instanciaactual
     *
     * @param Administrador\AdjBundle\Entity\Entidad $instanciaactual
     * @return Expediente
     */
    public function setInstanciaactual(\Administrador\AdjBundle\Entity\Entidad $instanciaactual = null)
    {
        $this->instanciaactual = $instanciaactual;
    
        return $this;
    }

    /**
     * Get instanciaactual
     *
     * @return Administrador\AdjBundle\Entity\Entidad 
     */
    public function getInstanciaactual()
    {
        return $this->instanciaactual;
    }

    /**
     * Set juzgado
     *
     * @param Administrador\AdjBundle\Entity\Entidad $juzgado
     * @return Expediente
     */
    public function setJuzgado(\Administrador\AdjBundle\Entity\Entidad $juzgado = null)
    {
        $this->juzgado = $juzgado;
    
        return $this;
    }

    /**
     * Get juzgado
     *
     * @return Administrador\AdjBundle\Entity\Entidad 
     */
    public function getJuzgado()
    {
        return $this->juzgado;
    }

    /**
     * Set tipoexpediente
     *
     * @param Administrador\AdjBundle\Entity\Tipoexpediente $tipoexpediente
     * @return Expediente
     */
    public function setTipoexpediente(\Administrador\AdjBundle\Entity\Tipoexpediente $tipoexpediente = null)
    {
        $this->tipoexpediente = $tipoexpediente;
    
        return $this;
    }

    /**
     * Get tipoexpediente
     *
     * @return Administrador\AdjBundle\Entity\Tipoexpediente 
     */
    public function getTipoexpediente()
    {
        return $this->tipoexpediente;
    }

    /**
     * Set tipojuicio
     *
     * @param Administrador\AdjBundle\Entity\Tipojuicio $tipojuicio
     * @return Expediente
     */
    public function setTipojuicio(\Administrador\AdjBundle\Entity\Tipojuicio $tipojuicio = null)
    {
        $this->tipojuicio = $tipojuicio;
    
        return $this;
    }

    /**
     * Get tipojuicio
     *
     * @return Administrador\AdjBundle\Entity\Tipojuicio 
     */
    public function getTipojuicio()
    {
        return $this->tipojuicio;
    }
}