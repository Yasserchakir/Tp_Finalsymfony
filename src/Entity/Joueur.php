<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JoueurRepository::class)]
class Joueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column]
    private ?int $Age = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date_naissance = null;

    #[ORM\Column(length: 255)]
    private ?string $Nationalite = null;

    #[ORM\Column(length: 255)]
    private ?string $Position = null;

    #[ORM\Column]
    private ?int $Numero_maillot = null;

    #[ORM\Column(length: 255)]
    private ?string $Pied = null;

    #[ORM\Column(length: 255)]
    private ?string $Statut_contrat = null;

    #[ORM\Column]
    private ?int $Niveau_competence = null;

    #[ORM\ManyToOne(inversedBy: 'joueurs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Equipe $relationavecEquipe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(int $Age): static
    {
        $this->Age = $Age;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->Date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $Date_naissance): static
    {
        $this->Date_naissance = $Date_naissance;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->Nationalite;
    }

    public function setNationalite(string $Nationalite): static
    {
        $this->Nationalite = $Nationalite;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->Position;
    }

    public function setPosition(string $Position): static
    {
        $this->Position = $Position;

        return $this;
    }

    public function getNumeroMaillot(): ?int
    {
        return $this->Numero_maillot;
    }

    public function setNumeroMaillot(int $Numero_maillot): static
    {
        $this->Numero_maillot = $Numero_maillot;

        return $this;
    }

    public function getPied(): ?string
    {
        return $this->Pied;
    }

    public function setPied(string $Pied): static
    {
        $this->Pied = $Pied;

        return $this;
    }

    public function getStatutContrat(): ?string
    {
        return $this->Statut_contrat;
    }

    public function setStatutContrat(string $Statut_contrat): static
    {
        $this->Statut_contrat = $Statut_contrat;

        return $this;
    }

    public function getNiveauCompetence(): ?int
    {
        return $this->Niveau_competence;
    }

    public function setNiveauCompetence(int $Niveau_competence): static
    {
        $this->Niveau_competence = $Niveau_competence;

        return $this;
    }

    public function getRelationavecEquipe(): ?Equipe
    {
        return $this->relationavecEquipe;
    }

    public function setRelationavecEquipe(?Equipe $relationavecEquipe): static
    {
        $this->relationavecEquipe = $relationavecEquipe;

        return $this;
    }
}
