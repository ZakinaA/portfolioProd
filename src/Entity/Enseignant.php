<?php

namespace App\Entity;

use App\Repository\EnseignantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnseignantRepository::class)
 */
class Enseignant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\OneToMany(targetEntity=RP::class, mappedBy="enseignant")
     */
    private $rPs;

    /**
     * @ORM\ManyToOne(targetEntity=Matiere::class, inversedBy="enseignants")
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity=Niveau::class, inversedBy="enseignants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $niveau;

    public function __construct()
    {
        $this->rPs = new ArrayCollection();
    }

  
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }


    /**
     * @return Collection|RP[]
     */
    public function getRPs(): Collection
    {
        return $this->rPs;
    }

    public function addRP(RP $rP): self
    {
        if (!$this->rPs->contains($rP)) {
            $this->rPs[] = $rP;
            $rP->setEnseignant($this);
        }

        return $this;
    }

    public function removeRP(RP $rP): self
    {
        if ($this->rPs->removeElement($rP)) {
            // set the owning side to null (unless already changed)
            if ($rP->getEnseignant() === $this) {
                $rP->setEnseignant(null);
            }
        }

        return $this;
    }

    public function getMatiere(): ?Matiere
    {
        return $this->matiere;
    }

    public function setMatiere(?Matiere $matiere): self
    {
        $this->matiere = $matiere;

        return $this;
    }

    public function getNiveau(): ?Niveau
    {
        return $this->niveau;
    }

    public function setNiveau(?Niveau $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }


}
