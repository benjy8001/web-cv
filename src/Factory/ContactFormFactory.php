<?php

declare(strict_types=1);

namespace App\Factory;

use App\Entity\ContactForm;

class ContactFormFactory
{
    /**
     * @param array $datas
     *
     * @return ContactForm
     */
    public function create(array $datas): ContactForm
    {
        $contactForm = new ContactForm();
        $contactForm->subject = $datas['subject'];
        $contactForm->email = $datas['email'];
        $contactForm->message = $datas['message'];
        $contactForm->name = $datas['name'];

        return $contactForm;
    }
}
