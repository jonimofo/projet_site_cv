<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;



    /**
     * @var string
     *
     * @ORM\Column(name="year_start", type="string", length=25, nullable=false)
     */
    private $year_start;

    /**
     * @var string
     *
     * @ORM\Column(name="year_end", type="string", length=25, nullable=false)
     */
    private $year_end;



    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;



    /**
     * @var integer
     *
     * @ORM\Column(name="id_formation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormation;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return Formation
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
     * Set year
     *
     * @param \DateTime $year
     *
     * @return Formation
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Formation
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
     * Get idFormation
     *
     * @return integer
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set yearStart
     *
     * @param string $yearStart
     *
     * @return Formation
     */
    public function setYearStart($yearStart)
    {
        $this->year_start = $yearStart;

        return $this;
    }

    /**
     * Get yearStart
     *
     * @return string
     */
    public function getYearStart()
    {
        return $this->year_start;
    }

    /**
     * Set yearEnd
     *
     * @param string $yearEnd
     *
     * @return Formation
     */
    public function setYearEnd($yearEnd)
    {
        $this->year_end = $yearEnd;

        return $this;
    }

    /**
     * Get yearEnd
     *
     * @return string
     */
    public function getYearEnd()
    {
        return $this->year_end;
    }
}
