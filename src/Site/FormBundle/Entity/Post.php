<?php

namespace Site\FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\FormBundle\Entity\PostRepository")
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Sujet", type="string", length=255)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="Texte", type="text")
     */
    private $texte;

    /**
     * @var \DateTime
     *
     */
    private $publiéeà;


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
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Post
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Post
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Post
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set publiéeà
     *
     * @param \DateTime $publiéeà
     *
     * @return Post
     */
    public function setPubliéeà($publiéeà)
    {
        $this->publiéeà = $publiéeà;

        return $this;
    }

    /**
     * Get publiéeà
     *
     * @return \DateTime
     */
    public function getPubliéeà()
    {
        return $this->publiéeà;
    }
}
