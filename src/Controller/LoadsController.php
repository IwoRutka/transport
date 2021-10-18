<?php

namespace App\Controller;

use App\Entity\Loads;
use App\Form\LoadsType;
use App\Repository\LoadsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/loads")
 */
class LoadsController extends AbstractController
{
    /**
     * @Route("/", name="loads_index", methods={"GET"})
     */
    public function index(LoadsRepository $loadsRepository): Response
    {
      
        return $this->render('loads/index.html.twig', [
            'loads' => $loadsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="loads_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $load = new Loads();
        $form = $this->createForm(LoadsType::class, $load);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($load);
            $entityManager->flush();

            return $this->redirectToRoute('loads_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('loads/new.html.twig', [
            'load' => $load,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="loads_show", methods={"GET"})
     */
    public function show(Loads $load): Response
    {
       

        return $this->render('loads/show.html.twig', [
            'load' => $load,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="loads_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Loads $load): Response
    {
        $form = $this->createForm(LoadsType::class, $load);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('loads_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('loads/edit.html.twig', [
            'load' => $load,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="loads_delete", methods={"POST"})
     */
    public function delete(Request $request, Loads $load): Response
    {
        if ($this->isCsrfTokenValid('delete'.$load->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($load);
            $entityManager->flush();
        }

        return $this->redirectToRoute('loads_index', [], Response::HTTP_SEE_OTHER);
    }
}
