<?php

declare(strict_types=1);

namespace App\Controller;

use App\Event\ContactEvent;
use App\Form\Type\ContactType;
use App\Service\Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultControler extends AbstractController
{
    /**
     * @Route("/", name="index")
     *
     * @param Request                  $request
     * @param Mailer                   $mailer
     * @param EventDispatcherInterface $dispatcher
     *
     * @return Response
     */
    public function index(Request $request, Mailer $mailer, EventDispatcherInterface $dispatcher): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event = new ContactEvent($form->getData());
            $dispatcher->dispatch($event, ContactEvent::NAME);

            if ($mailer->sendEmail($form->getData())) {
                $this->addFlash('contact', 'Merci! Votre message à bien été envoyé.');
            } else {
                $this->addFlash('echec', 'Un problème a eu lieu durant l\'envoi, veuillez ré-essayer plus tard');
            }
        }

        return $this->render('cv.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
