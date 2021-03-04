<?php

namespace App\Entity;

use App\Repository\ReservationMedicamentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationMedicamentRepository::class)
 */
class ReservationMedicament
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
    private $idMedicament;

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

    public function getIdMedicament(): ?string
    {
        return $this->idMedicament;
    }

    public function setIdMedicament(string $idMedicament): self
    {
        $this->idMedicament = $idMedicament;

        return $this;
    }
}
