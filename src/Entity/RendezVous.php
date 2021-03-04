<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RendezVousRepository::class)
 */
class RendezVous
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_medicin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $IdPatient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateRDV;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMedicin(): ?string
    {
        return $this->id_medicin;
    }

    public function setIdMedicin(string $id_medicin): self
    {
        $this->id_medicin = $id_medicin;

        return $this;
    }

    public function getIdPatient(): ?string
    {
        return $this->IdPatient;
    }

    public function setIdPatient(string $IdPatient): self
    {
        $this->IdPatient = $IdPatient;

        return $this;
    }

    public function getDateRDV(): ?string
    {
        return $this->dateRDV;
    }

    public function setDateRDV(string $dateRDV): self
    {
        $this->dateRDV = $dateRDV;

        return $this;
    }
}
