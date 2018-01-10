<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence")
 * @ORM\Entity
 */
class Competence
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=25, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content1", type="text", nullable=false)
     */
    private $content1;

    /**
     * @var string
     *
     * @ORM\Column(name="content2", type="text", nullable=false)
     */
    private $content2;

    /**
     * @var string
     *
     * @ORM\Column(name="content3", type="text", nullable=false)
     */
    private $content3;

    /**
     * @var string
     *
     * @ORM\Column(name="content4", type="text", nullable=false)
     */
    private $content4;

    /**
     * @var string
     *
     * @ORM\Column(name="content5", type="text", nullable=false)
     */
    private $content5;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_competence", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompetence;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return Competence
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Competence
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Get idCompetence
     *
     * @return integer
     */
    public function getIdCompetence()
    {
        return $this->idCompetence;
    }
}
