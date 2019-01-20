<?php
// api/src/Entity/Ad.php
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
class Ad
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
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    public $title = '';

    /**
     * @var string The description of  ad.
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @var string Url of ad
     *
     * @ORM\Column(type="text")
     */
    public $url;


    /**
     * @var string Url of ad
     *
     * @ORM\Column(type="text")
     */
    public $secondaryUrl;

    /**
     * @var string Type of ad (offer / demand)
     *
     * @ORM\Column(type="string")
     */
    public $type;


    /**
     * @var string Type of ad (profesional / amateur)
     *
     * @ORM\Column(type="string")
     */
    public $typeOd;

    /**
     * @var float The meters of flat/house
     *
     * @ORM\Column(type="float")
     */
    public $meters;

    /**
     * @var integer The number of rooms
     *
     * @ORM\Column(type="integer")
     */
    public $rooms;


    /**
     * @var integer   The number of baths
     *
     * @ORM\Column(type="integer")
     */
    public $baths;

    /**
     * @var integer The price for meter
     *
     * @ORM\Column(type="integer")
     */
    public $priceMeter;

    /**
     * @var bool Show if process by employee nosolopiso.com
     *
     * @ORM\Column(type="boolean")
     */
    public $process;

    /**
     * @var string Name of person who public the ad
     *
     * @ORM\Column(type="string")
     */
    public $contactName;

    /**
     * @var string Phone of person who public the ad
     *
     * @ORM\Column(type="string")
     */
    public $contactPhone;

    /**
     * @var string  Email of person who public the ad
     *
     * @ORM\Column(type="string")
     */
    public $contactEmail;

    /**
     * @var string Aditional data add by nosolopiso.com employee.
     *
     * @ORM\Column(type="text")
     */
    public $additionalDataByEmployee;

    /**
     * @var \DateTimeInterface Publication date of this ad.
     *
     * @ORM\Column(type="date")
     */
    public $publicationAddDate;

    /**
     * @var \DateTimeInterface Publication date of this ad on Ma
     *
     * @ORM\Column(type="datetime")
     */
    public $publicationMaDate;

    /**
     * @var \DateTimeInterface Publication date of process by employee
     *
     * @ORM\Column(type="datetime")
     */
    public $dateProcess;


    /**
     * @var Category[] Available categories for this ad.
     *
     * @ORM\OneToMany(targetEntity="Category", mappedBy="ad")
     */
    public $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }




}
