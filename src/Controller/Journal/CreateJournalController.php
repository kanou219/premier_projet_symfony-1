<?php

namespace App\Controller\Journal;

use App\Entity\Journal;
use App\Form\JournalType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateJournalController extends AbstractController
{
    /**
     * @Route("/journal/creer", name="creer_journal")
     */
    public function index(Request $request,EntityManagerInterface $em): Response
    {
        $journal = new Journal();

        $form = $this->createForm(JournalType::class,$journal);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($journal);

            $em->flush();

            $this->addFlash('success','Le journal a bien été enregistré.');

            return $this->redirectToRoute('creer_journal');
        }

        return $this->render('journal/creer.html.twig',[
            'formJournal' => $form->createView()
        ]);
    }
}
