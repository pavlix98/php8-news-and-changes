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
     * @Column(type="string", nullable=true)
     */
    protected $name;
    /**
     * @ORM\ManyToOne(targetEntity="Agent", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="alternative_agent_id", columnDefinition="alternative_agent_id", nullable=true)
     */
    protected $alternativeAgent;
    /**
     * @Column(type="string", nullable=true)
     */
    protected $alternativeName;
    /**
     * @Column(type="string", unique=true)
     */
    protected $shortcut;
    /**
     * @Column(type="string", nullable=true)
     */
    protected $address;
    /**
     * @Column(type="string", nullable=true)
     */
    protected $town;
    /**
     * @Column(type="string", nullable=true)
     */
    protected $zipCode;
    /**
     * @Column(type="string", nullable=true)
     */
    protected $note;
    /**
     * @Column(type="string", nullable=true)
     */
    protected $country;
    /**
     * @Column(type="boolean", nullable=true)
     */
    protected $kdi = false;
    /**
     * @Column(type="boolean", options={"default": false})
     */
    protected $published = false;
    /**
     * @Column(type="boolean", options={"default": false})
     */
    protected $hotelInfo = false;
    /**
     * @Column(type="boolean", options={"default": false})
     */
    protected $travellersInfo = false;
    /**
     * @ORM\OneToMany(targetEntity="AgentTranslated", mappedBy="agent")
     */
    protected $translations;
    /**
     * @ORM\OneToMany(targetEntity="AgentFile", mappedBy="agent")
     */
    protected $files;
    /**
     * @Column(type="string", nullable=true)
     */
    protected $taxNumber;
    /**
     * @Column(type="string", nullable=true, unique=true)
     */
    protected $url;
    /**
     * @Column(type="boolean", options={"default": true})
     */
    protected $travelAgency = true;
    /**
     * @ORM\ManyToMany(targetEntity="\App\Entities\Tour\TourAdditionalBenefit", mappedBy="agents", fetch="EXTRA_LAZY")
     */
    protected $tourAdditionalBenefits;
    /**
     * @Column(type="string", nullable=true)
     */
    protected $insurance;
    /**
     * @Column(type="string", nullable=true)
     */
    protected $insuranceAddress;
    /**
     * @Column(type="string", options={"default": "ibe"})
     */
    protected $dataProvider;
    /**
     * @Column(type="string", nullable=true)
     */
    protected $reservationSystemUrl;
    /**
     * @Column(name="disabled_card_payment", type="boolean", options={"default": false})
     */
    protected $disabledCardPayment = false;
    /**
     * @Column(type="boolean", options={"default": true})
     */
    protected $isSelfVerificationAllowed = true;
}
