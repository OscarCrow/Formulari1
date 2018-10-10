<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PcFormulario
 *
 * @ORM\Table(name="pc_formulario", uniqueConstraints={@ORM\UniqueConstraint(name="numeroproceso_UNIQUE", columns={"numeroproceso"})})
 * @ORM\Entity(repositoryClass="App\Repository\PcFormularioRepository")
 */
class PcFormulario
{
    /**
     * @var int
     *
     * @ORM\Column(name="idformulario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformulario;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroproceso", type="string", length=100, nullable=false)
     */
    private $numeroproceso;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=120, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacreacion", type="date", nullable=false)
     */
    private $fechacreacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sede", type="string", length=120, nullable=true)
     */
    private $sede;

    /**
     * @var string|null
     *
     * @ORM\Column(name="presupuesto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $presupuesto;

    public function getIdformulario(): ?int
    {
        return $this->idformulario;
    }

    public function getNumeroproceso(): ?string
    {
        return $this->numeroproceso;
    }

    public function setNumeroproceso(string $numeroproceso): self
    {
        $this->numeroproceso = $numeroproceso;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getFechacreacion(): ?\DateTimeInterface
    {
        return $this->fechacreacion;
    }

    public function setFechacreacion(\DateTimeInterface $fechacreacion): self
    {
        $this->fechacreacion = $fechacreacion;

        return $this;
    }

    public function getSede(): ?string
    {
        return $this->sede;
    }

    public function setSede(?string $sede): self
    {
        $this->sede = $sede;

        return $this;
    }

    public function getPresupuesto()
    {
        return $this->presupuesto;
    }

    public function setPresupuesto($presupuesto): self
    {
        $this->presupuesto = $presupuesto;

        return $this;
    }


}
