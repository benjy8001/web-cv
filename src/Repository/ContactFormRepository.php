<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\ContactForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ContactFormRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactForm::class);
    }

    /**
     * @param ContactForm $contactForm
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(ContactForm $contactForm): void
    {
        $this->_em->persist($contactForm);
        $this->_em->flush();
    }
}
