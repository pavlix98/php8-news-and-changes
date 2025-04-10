<?php

// vendor/bin/rector process

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;


/**
 * @Entity()
 */
class Entity
{
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $name;
    /**
     * @var Agent|null
     * @ORM\ManyToOne(targetEntity="Agent", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="alternative_agent_id", columnDefinition="alternative_agent_id", nullable=true)
     */
    protected $alternativeAgent;
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $alternativeName;
    /**
     * @var string
     * @Column(type="string", unique=true)
     */
    protected $shortcut;
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $address;
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $town;
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $zipCode;
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $note;
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $country;
    /**
     * @var bool
     * @Column(type="boolean", nullable=true)
     */
    protected $kdi = false;
    /**
     * Show on Homepage's footer
     * @var boolean
     * @Column(type="boolean", options={"default": false})
     */
    protected $published = false;
    /**
     * Show info from Agent
     * @var boolean
     * @Column(type="boolean", options={"default": false})
     */
    protected $hotelInfo = false;
    /**
     * Show agent on travellers info page
     * @var boolean
     * @Column(type="boolean", options={"default": false})
     */
    protected $travellersInfo = false;
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AgentTranslated", mappedBy="agent")
     */
    protected $translations;
    /**
     * @var ArrayCollection<int, AgentFile>
     * @ORM\OneToMany(targetEntity="AgentFile", mappedBy="agent")
     */
    protected $files;
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $taxNumber;
    /**
     * @var string
     * @Column(type="string", nullable=true, unique=true)
     */
    protected $url;
    /**
     * @var bool
     * @Column(type="boolean", options={"default": true})
     */
    protected $travelAgency = true;
    /**
     * @var ArrayCollection|TourAdditionalBenefit[]
     * @ORM\ManyToMany(targetEntity="\App\Entities\Tour\TourAdditionalBenefit", mappedBy="agents", fetch="EXTRA_LAZY")
     */
    protected $tourAdditionalBenefits;
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $insurance;
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $insuranceAddress;
    /**
     * @var string
     * @Column(type="string", options={"default": "ibe"})
     */
    protected $dataProvider;
    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $reservationSystemUrl;
    /**
     * @Column(name="disabled_card_payment", type="boolean", options={"default": false})
     * @var bool
     */
    protected $disabledCardPayment = false;
    /**
     * @Column(type="boolean", options={"default": true})
     * @var bool
     */
    protected $isSelfVerificationAllowed = true;

}
