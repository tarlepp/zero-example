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
        // Comment out these to get initial data
        /*
        $signer1 = new Signer();
        $signer1->setName('signer 1');

        $signer2 = new Signer();
        $signer2->setName('signer 2');

        $invitation1 = new Invitation();
        $invitation1->setSigner($signer1);
        $invitation1->setSentAt(new \DateTimeImmutable());

        $invitation2 = new Invitation();
        $invitation2->setSigner($signer1);
        $invitation2->setSentAt(new \DateTimeImmutable('2021-01-28'));

        $invitation3 = new Invitation();
        $invitation3->setSigner($signer1);
        $invitation3->setSentAt(new \DateTimeImmutable('2021-01-29'));

        $invitation21 = new Invitation();
        $invitation21->setSigner($signer2);
        $invitation21->setSentAt(new \DateTimeImmutable('2021-02-01'));

        $invitation22 = new Invitation();
        $invitation22->setSigner($signer2);
        $invitation22->setSentAt(new \DateTimeImmutable('2021-01-28'));

        $invitation23 = new Invitation();
        $invitation23->setSigner($signer2);
        $invitation23->setSentAt(new \DateTimeImmutable('2021-01-29'));

        $em = $repository->getEntityManager();

        $em->persist($signer1);
        $em->persist($signer2);
        $em->persist($invitation1);
        $em->persist($invitation2);
        $em->persist($invitation3);
        $em->persist($invitation21);
        $em->persist($invitation22);
        $em->persist($invitation23);
        $em->flush();
        */

        dd($repository->latestInvitations());

        return new Response('foobar');
    }
}
