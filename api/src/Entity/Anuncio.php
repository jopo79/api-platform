<?php
// api/src/Entity/Anuncio.phpo.php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ApiResource
+
 */
class Anuncio
{
    /**
     * @var int The id of this ad.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string A Unique web Ma reference
     *
     * @Assert\NotBlank
     * @ORM\Column(type="string")
     */
    public $reference;

    /**
     * @var string title of ad
     * @Assert\NotBlank
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    public $title = '';

    /**
     * @var string The description of  ad.
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    public $description;

    /**
     * @var string Url of ad
     * @Assert\Url
     * @ORM\Column(type="text")
     */
    public $url;


    /**
     * @var string Url of ad
     * @Assert\Url
     * @ORM\Column(type="text")
     */
    public $secondaryUrl;

    /**
     * @var string Type of ad (offer / demand)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    public $type;


    /**
     * @var string Type of ad (profesional / amateur)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    public $typeOd;

    /**
     * @var float The meters of flat/house
     *
     * @ORM\Column(type="float", nullable=true)
     */
    public $meters;

    /**
     * @var integer The number of rooms
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    public $rooms;


    /**
     * @var integer   The number of baths
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    public $baths;

    /**
     * @var integer The price for meter
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    public $priceMeter;

    /**
     * @var bool Show if process by employee nosolopiso.com
     *
     * @ORM\Column(type="boolean")
     */
    public $process=false;

    /**
     * @var string Name of person who public the ad
     *
     * @ORM\Column(type="string", nullable=true)
     */
    public $contactName;

    /**
     * @var string Phone of person who public the ad
     *
     * @ORM\Column(type="string", nullable=true)
     */
    public $contactPhone;

    /**
     * @var string  Email of person who public the ad
     *
     * @ORM\Column(type="string", nullable=true)
     */
    public $contactEmail;

    /**
     * @var string Aditional data add by nosolopiso.com employee.
     *
     * @ORM\Column(type="text", nullable=true)
     */
    public $additionalDataByEmployee;

    /**
     * @var \DateTimeInterface Publication date of this ad.
     *
     * @ORM\Column(type="date", nullable=true)
     */
    public $publicationAddDate;

    /**
     * @var \DateTimeInterface Publication date of this ad on Ma
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    public $publicationMaDate;

    /**
     * @var \DateTimeInterface Publication date of process by employee
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    public $dateProcess;


    /**
     * @var Categoria[] Available categories for this ad.
     *
     * @ORM\OneToMany(targetEntity="Categoria", mappedBy="anuncio")
     */
    public $categorias;

    public function __construct()
    {
        $this->categorias = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }




}
