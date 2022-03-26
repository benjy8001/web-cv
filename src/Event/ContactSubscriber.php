<?php

declare(strict_types=1);

namespace App\Event;

use App\Factory\ContactFormFactory;
use App\Repository\ContactFormRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ContactSubscriber implements EventSubscriberInterface
{
    private ContactFormFactory $contactFormFactory;
    private ContactFormRepository $contactFormRepository;

    public function __construct(ContactFormFactory $contactFormFactory, ContactFormRepository $contactFormRepository)
    {
        $this->contactFormFactory = $contactFormFactory;
        $this->contactFormRepository = $contactFormRepository;
    }

    public static function getSubscribedEvents()
    {
        return [
            ContactEvent::NAME => 'onContactSend',
        ];
    }

    /**
     * @param ContactEvent $event
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function onContactSend(ContactEvent $event)
    {
        $this->contactFormRepository->save($this->contactFormFactory->create($event->getData()));
    }
}
