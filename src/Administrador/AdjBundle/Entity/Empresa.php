<?php

namespace Administrador\AdjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador\AdjBundle\Entity\Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var integer $empresaId
     *
     * @ORM\Column(name="Empresa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $empresaId;

    /**
     * @var string $empresa
     *
     * @ORM\Column(name="Empresa", type="string", length=200, nullable=true)
     */
    private $empresa;

    /**
     * @var integer $direccionId
     *
     * @ORM\Column(name="Direccion_id", type="integer", nullable=true)
     */
    
    public function __toString()
    {
    	return $this->empresa;
    }
    
    private $direccionId;

    /**
     * @var string $email
     *
     * @ORM\Column(name="Email", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var string $telefono1
     *
     * @ORM\Column(name="Telefono_1", type="string", length=200, nullable=true)
     */
    private $telefono1;

    /**
     * @var string $telefono2
     *
     * @ORM\Column(name="Telefono_2", type="string", length=200, nullable=true)
     */
    private $telefono2;

    /**
     * @var string $telefono3
     *
     * @ORM\Column(name="Telefono_3", type="string", length=200, nullable=true)
     */
    private $telefono3;

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
     * @var Lenguaje
     *
     * @ORM\ManyToOne(targetEntity="Lenguaje")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Lenguaje_id", referencedColumnName="Lenguaje_id")
     * })
     */
    private $lenguaje;



    /**
     * Get empresaId
     *
     * @return integer 
     */
    public function getEmpresaId()
    {
        return $this->empresaId;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return Empresa
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    
        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set direccionId
     *
     * @param integer $direccionId
     * @return Empresa
     */
    public function setDireccionId($direccionId)
    {
        $this->direccionId = $direccionId;
    
        return $this;
    }

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
     * Set email
     *
     * @param string $email
     * @return Empresa
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     * @return Empresa
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;
    
        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string 
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     * @return Empresa
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;
    
        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set telefono3
     *
     * @param string $telefono3
     * @return Empresa
     */
    public function setTelefono3($telefono3)
    {
        $this->telefono3 = $telefono3;
    
        return $this;
    }

    /**
     * Get telefono3
     *
     * @return string 
     */
    public function getTelefono3()
    {
        return $this->telefono3;
    }

    /**
     * Set tipoestado
     *
     * @param integer $tipoestado
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * Set lenguaje
     *
     * @param Administrador\AdjBundle\Entity\Lenguaje $lenguaje
     * @return Empresa
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