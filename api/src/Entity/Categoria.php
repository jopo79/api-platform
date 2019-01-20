<?php
// api/src/Entity/Categoryry.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A review of a book.
 *
 * @ORM\Entity
 * @ApiResource()
 */
class Categoria
{
    /**
     * @var int The id of this review.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The rating of this review (between 0 and 5).
     *
     * @ORM\Column(type="string")
     */
    public $name;
    

    /**
     * @var Anuncio The book this review is about.
     *
     * @ORM\ManyToOne(targetEntity="Anuncio", inversedBy="categorias")
     */
    public $anuncio;


    public function getId(): ?int
    {
        return $this->id;
    }
}

