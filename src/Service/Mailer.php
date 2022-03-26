<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Twig\Environment;

class Mailer
{
    private Environment $twig;
    private \Swift_Mailer $mailer;
    private ContainerBagInterface $params;

    /**
     * @param Environment           $twig
     * @param \Swift_Mailer         $mailer
     * @param ContainerBagInterface $params
     */
    public function __construct(Environment $twig, \Swift_Mailer $mailer, ContainerBagInterface $params)
    {
        $this->twig = $twig;
        $this->mailer = $mailer;
        $this->params = $params;
    }

    /**
     * @param $data
     *
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     *
     * @return bool
     */
    public function sendEmail($data): bool
    {
        $mail = new \Swift_Message();
        $mail
            ->setSubject($data['subject'])
            ->setFrom($data['email'])
            ->setTo($this->params->get('app.mail.sendto'))
            ->setBody(
                $this->twig->render('emails/contact.html.twig', [
                    'data' => $data,
                ]), 'text/html'
            )
        ;

        return 0 !== $this->mailer->send($mail);
    }
}
