<?php

namespace App\Controller;

use App\Entity\Invitation;
use App\Entity\Signer;
use App\Repository\InvitationRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
    /**
     * @Route(path="/");
     */
    public function index(InvitationRepository $repository): Response
    {
        /*
        $signer = new Signer();
        $signer->setName('foo bar');

        $invitation = new Invitation();
        $invitation->addSigner($signer);
        $invitation->setSentAt(new \DateTimeImmutable());

        $em = $repository->getEntityManager();

        $em->persist($signer);
        $em->persist($invitation);
        $em->flush();
        */

        dd($repository->latestInvitations());

        return new Response('foobar');
    }
}
