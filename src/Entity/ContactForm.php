<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\ContactFormRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass=ContactFormRepository::class)
 */
class ContactForm
{
    use TimestampableEntity;

    /**
     * @ORM\Column(type="string", length=128)
     */
    public string $name;

    /**
     * @ORM\Column(type="string", length=128)
     */
    public string $email;

    /**
     * @ORM\Column(type="string", length=128)
     */
    public string $subject;

    /**
     * @ORM\Column(type="text")
     */
    public string $message;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
