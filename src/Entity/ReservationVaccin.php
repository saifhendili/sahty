<?php

namespace App\Entity;

use App\Repository\ReservationVaccinRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationVaccinRepository::class)
 */
class ReservationVaccin
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
    private $idPatient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $idVaccin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPatient(): ?string
    {
        return $this->idPatient;
    }

    public function setIdPatient(string $idPatient): self
    {
        $this->idPatient = $idPatient;

        return $this;
    }

    public function getIdVaccin(): ?string
    {
        return $this->idVaccin;
    }

    public function setIdVaccin(string $idVaccin): self
    {
        $this->idVaccin = $idVaccin;

        return $this;
    }
}
