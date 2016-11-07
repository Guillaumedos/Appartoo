<?php


namespace AppBundle\Controller;

use AppBundle\Entity\AfficheCA;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\AfficheCAType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AfficheCAController extends Controller
{
	
	/**
	*
	* @Route("/add", name="addAfficheCA")
	*
	* @return \Symfony\Component\HttpFoundation\Response
	*/
	
	public function addAction(Request $request)
	{
		$carnet = new AfficheCA();
		
		$form = $this->createForm(AfficheCAType::class,$carnet);
		
		$form->handleRequest($request);
		
		if($form->isSubmitted()){
			
		$em = $this->getDoctrine()->getManager();
		$em->persist($carnet);
		$em->flush();
		
		return new Response("Contact ajouté !");
		}
		
		$formView = $form->createView();
		
		return $this->render('carnetAdd.html.twig', array('form'=>$formView));
		
	}
	
	/**
		* @Route("/contacts", name="contact_list")
		*
		* @return Response
		*/
	
	
	public function contact_listAction()
	{
		$repository = $this->getDoctrine()->getRepository('AppBundle:AfficheCA');
		
		$listcontact = $repository->findAll();
		
		return $this->render('contactList.html.twig', array('listcontact'=>$listcontact));
	
	}
	
	/**
		* @return Response
		*
		* @Route("/edit/{id}", name="contact_edit")
		*
		*/
		
	public function editAction(Request $request, AfficheCA $carnet)
	{
	
		
		$form = $this->createForm(AfficheCAType::class,$carnet);
		
		$form->handleRequest($request);
		
		if($form->isSubmitted())
		{
			
		$em = $this->getDoctrine()->getManager();
//		$em->persist($carnet);
		$em->flush();
		
		return new Response("Contact modifié !");
		
		}
		$formView = $form->createView();
		
		return $this->render('carnetAdd.html.twig', array('form'=>$formView));
		
	}
	
	/**
		*
		* @Route("/delete/{id}", name="contact_delete")
		*
		* @return Response
		*/
		
	public function deleteAction(AfficheCA $carnet)
	{
	
		$em = $this->getDoctrine()->getManager();
		$em->remove($carnet);
		$em->flush();
		
		return new Response("Contact supprimé !");

	}	
}	