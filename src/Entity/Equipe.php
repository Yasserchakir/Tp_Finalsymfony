<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipeRepository::class)]
class Equipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Localisation = null;

    #[ORM\Column(length: 255)]
    private ?string $Stade_domiciel = null;

    #[ORM\Column(length: 255)]
    private ?string $Entraineur = null;

    #[ORM\Column(length: 255)]
    private ?string $Capitaine = null;

    #[ORM\Column]
    private ?int $Formation = null;

    #[ORM\Column(length: 255)]
    private ?string $Style_jeu = null;

    #[ORM\Column(length: 255)]
    private ?string $Taille_equipe = null;

    #[ORM\Column(length: 255)]
    private ?string $Lique = null;

    #[ORM\Column]
    private ?int $Budget = null;

    #[ORM\Column(length: 255)]
    private ?string $Realisations = null;

    /**
     * @var Collection<int, Joueur>
     */
    #[ORM\OneToMany(targetEntity: Joueur::class, mappedBy: 'relationavecEquipe')]
    private Collection $joueurs;

    public function __construct()
    {
        $this->joueurs = new ArrayCollection();
    }

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

    public function getLocalisation(): ?string
    {
        return $this->Localisation;
    }

    public function setLocalisation(string $Localisation): static
    {
        $this->Localisation = $Localisation;

        return $this;
    }

    public function getStadeDomiciel(): ?string
    {
        return $this->Stade_domiciel;
    }

    public function setStadeDomiciel(string $Stade_domiciel): static
    {
        $this->Stade_domiciel = $Stade_domiciel;

        return $this;
    }

    public function getEntraineur(): ?string
    {
        return $this->Entraineur;
    }

    public function setEntraineur(string $Entraineur): static
    {
        $this->Entraineur = $Entraineur;

        return $this;
    }

    public function getCapitaine(): ?string
    {
        return $this->Capitaine;
    }

    public function setCapitaine(string $Capitaine): static
    {
        $this->Capitaine = $Capitaine;

        return $this;
    }

    public function getFormation(): ?int
    {
        return $this->Formation;
    }

    public function setFormation(int $Formation): static
    {
        $this->Formation = $Formation;

        return $this;
    }

    public function getStyleJeu(): ?string
    {
        return $this->Style_jeu;
    }

    public function setStyleJeu(string $Style_jeu): static
    {
        $this->Style_jeu = $Style_jeu;

        return $this;
    }

    public function getTailleEquipe(): ?string
    {
        return $this->Taille_equipe;
    }

    public function setTailleEquipe(string $Taille_equipe): static
    {
        $this->Taille_equipe = $Taille_equipe;

        return $this;
    }

    public function getLique(): ?string
    {
        return $this->Lique;
    }

    public function setLique(string $Lique): static
    {
        $this->Lique = $Lique;

        return $this;
    }

    public function getBudget(): ?int
    {
        return $this->Budget;
    }

    public function setBudget(int $Budget): static
    {
        $this->Budget = $Budget;

        return $this;
    }

    public function getRealisations(): ?string
    {
        return $this->Realisations;
    }

    public function setRealisations(string $Realisations): static
    {
        $this->Realisations = $Realisations;

        return $this;
    }

    /**
     * @return Collection<int, Joueur>
     */
    public function getJoueurs(): Collection
    {
        return $this->joueurs;
    }

    public function addJoueur(Joueur $joueur): static
    {
        if (!$this->joueurs->contains($joueur)) {
            $this->joueurs->add($joueur);
            $joueur->setRelationavecEquipe($this);
        }

        return $this;
    }

    public function removeJoueur(Joueur $joueur): static
    {
        if ($this->joueurs->removeElement($joueur)) {
            // set the owning side to null (unless already changed)
            if ($joueur->getRelationavecEquipe() === $this) {
                $joueur->setRelationavecEquipe(null);
            }
        }

        return $this;
    }
}
