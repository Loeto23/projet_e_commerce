<?php

namespace Jeremy\ReductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reduction
 *
 * @ORM\Table(name="reduction")
 * @ORM\Entity(repositoryClass="Jeremy\ReductionBundle\Repository\ReductionRepository")
 */
class Reduction
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50, unique=true)
     */
    private $code;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="bigint")
     */
    private $montant;

    /**
     * @ORM\ManyToOne(targetEntity="Jeremy\PanierBundle\Entity\Panier", cascade={"persist"})
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
     * Set code
     *
     * @param string $code
     *
     * @return Reduction
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Reduction
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set panier
     *
     * @param \Jeremy\PanierBundle\Entity\Panier $panier
     *
     * @return Reduction
     */
    public function setPanier(\Jeremy\PanierBundle\Entity\Panier $panier = null)
    {
        $this->panier = $panier;
    
        return $this;
    }

    /**
     * Get panier
     *
     * @return \Jeremy\PanierBundle\Entity\Panier
     */
    public function getPanier()
    {
        return $this->panier;
    }
}
