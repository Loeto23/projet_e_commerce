<?php

namespace Jeremy\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="Jeremy\ProduitBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", unique=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=70)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=150, unique=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=12)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=2)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=5, scale=2)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="stock", type="string", length=12)
     */
    private $stock;

    /**
     * @ORM\ManyToMany(targetEntity="Jeremy\PanierBundle\Entity\Panier", cascade={"persist"})
     */
    private $panier;


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
     * Set reference
     *
     * @param integer $reference
     *
     * @return Produit
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Produit
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Produit
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Produit
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return Produit
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Produit
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set stock
     *
     * @param string $stock
     *
     * @return Produit
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return string
     */
    public function getStock()
    {
        return $this->stock;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->panier = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add panier
     *
     * @param \Jeremy\PanierBundle\Entity\Panier $panier
     *
     * @return Produit
     */
    public function addPanier(\Jeremy\PanierBundle\Entity\Panier $panier)
    {
        $this->panier[] = $panier;

        return $this;
    }

    /**
     * Remove panier
     *
     * @param \Jeremy\PanierBundle\Entity\Panier $panier
     */
    public function removePanier(\Jeremy\PanierBundle\Entity\Panier $panier)
    {
        $this->panier->removeElement($panier);
    }

    /**
     * Get panier
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPanier()
    {
        return $this->panier;
    }
}
