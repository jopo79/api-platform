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
class Category
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
     * @var int The rating of this review (between 0 and 5).
     *
     * @ORM\Column(type="string")
     */
    public $name;


    /**
     * @var \DateTimeInterface The date of publication of this review.
     *
     * @ORM\Column(type="datetime_immutable")
     */
    public $publicationDate;


    /**
     * @var Ad The book this review is about.
     *
     * @ORM\ManyToOne(targetEntity="Ad", inversedBy="categories")
     */
    public $ad;


    public function getId(): ?int
    {
        return $this->id;
    }
}

