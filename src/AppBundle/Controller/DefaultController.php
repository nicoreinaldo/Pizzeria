<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }
    /**
	 * @Route("/enviar", name="Envio")
	 */
	public function sendEmail(Request $request)
	{

	    $desde=$request->request->get("desde");
	    //$cuerpo=$request->request->get("mensaje");
	    $titulo=$request->request->get("nombre");
	    $mensaje=$request->request->get("mensaje");

	    $message = \Swift_Message::newInstance()
	        ->setSubject("Nueva consulta de ". $titulo)
	        ->setFrom($desde)
	        ->setTo("f.reinaldo@itecriocuarto.org.ar")
	        ->setBody($mensaje.' Responder a: '.$desde)
	    ;
	    $this->get('mailer')->send($message);
	    return $this->render('base.html.twig',[
	            'base_dir'=> realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
	    ]);
	}
}
