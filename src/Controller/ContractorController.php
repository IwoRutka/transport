<?php

namespace App\Controller;

use App\Entity\Contractor;
use App\Form\Contractor1Type;
use App\Repository\ContractorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/contractor")
 */
class ContractorController extends AbstractController
{
    /**
     * @Route("/", name="contractor_index", methods={"GET"})
     */
    public function index(ContractorRepository $contractorRepository): Response
    {
        return $this->render('contractor/index.html.twig', [
            'contractors' => $contractorRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="contractor_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $contractor = new Contractor();
        $form = $this->createForm(Contractor1Type::class, $contractor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contractor);
            $entityManager->flush();

            return $this->redirectToRoute('contractor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contractor/new.html.twig', [
            'contractor' => $contractor,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="contractor_show", methods={"GET"})
     */
    public function show(Contractor $contractor): Response
    {
        return $this->render('contractor/show.html.twig', [
            'contractor' => $contractor,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="contractor_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Contractor $contractor): Response
    {
        $form = $this->createForm(Contractor1Type::class, $contractor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contractor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contractor/edit.html.twig', [
            'contractor' => $contractor,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="contractor_delete", methods={"POST"})
     */
    public function delete(Request $request, Contractor $contractor): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contractor->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contractor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('contractor_index', [], Response::HTTP_SEE_OTHER);
    }
}
