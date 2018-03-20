<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pedido;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pedido controller.
 *
 */
class PedidoController extends Controller
{
    /**
     * Lists all pedido entities.
     *
     */
       public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pedidos = $em->getRepository('AppBundle:Pedido')->findAll();
        $pizzapedidos = $em->getRepository('AppBundle:Pizzapedido')->findAll();
        $cliente = $em->getRepository('AppBundle:Cliente')->findAll();

        return $this->render('pedido/index.html.twig', array(
            'pedidos' => $pedidos,
            'pizzapedidos' => $pizzapedidos,
            'cliente'=> $cliente,
            
        ));
    }
    // public function indexAction()
    // {
    //     $em = $this->getDoctrine()->getManager();
    //     $user = $em->getRepository('AppBundle:User')->find($this->getUser()->getId());

    //     $user_repo= $em->getRepository("AppBundle:Cliente");
    //     $cliente=$user_repo->findOneByUser($user);

    //     $pedidos[0] = $em->getRepository('AppBundle:Pedido')->findAll();//findByIdcliente($cliente);
  


    //     $repository = $em->getRepository("AppBundle:Pizzapedido");

    //     $query = $repository->createQueryBuilder('p')
    //         ->select(array(
    //                 'p.idpizzapedido as pizzapedido',
    //                 'u.nombre as pizza',
    //                 'pf.idcliente as cliente',
    //                 'c.nombre as nombrecliente'
    //             )
    //         )
    //         ->innerJoin('AppBundle:Pizza', 'u', 'WITH', 'u.idpizza =  p.pizza')
    //         ->innerJoin('AppBundle:Pedido', 'pf', 'WITH', 'p.pedido = pf.idpedido')
    //         ->innerJoin('AppBundle:Cliente', 'c', 'WITH', 'c.idcliente = pf.idcliente')

    //         ->where('c.idcliente = :idcliente');
    //       //   ->setParameter('idcliente', intval(2));
  

    //     $pedidos=$query->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);



    //     return $this->render('pedido/index.html.twig', array(
    //         'pedidos' => $pedidos,
    //     ));
    // }


    /**
     * Creates a new pedido entity.
     *
     */
    public function newAction(Request $request)
    {
        $pedido = new Pedido();
        $form = $this->createForm('AppBundle\Form\PedidoType', $pedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pedido);
            $em->flush();

            return $this->redirectToRoute('pedido_show', array('idpedido' => $pedido->getIdpedido()));
        }

        return $this->render('pedido/new.html.twig', array(
            'pedido' => $pedido,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pedido entity.
     *
     */
    public function showAction(Pedido $pedido)
    {
        $deleteForm = $this->createDeleteForm($pedido);

        return $this->render('pedido/show.html.twig', array(
            'pedido' => $pedido,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pedido entity.
     *
     */
    public function editAction(Request $request, Pedido $pedido)
    {
        $deleteForm = $this->createDeleteForm($pedido);
        $editForm = $this->createForm('AppBundle\Form\PedidoType', $pedido);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pedido_edit', array('idpedido' => $pedido->getIdpedido()));
        }

        return $this->render('pedido/edit.html.twig', array(
            'pedido' => $pedido,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pedido entity.
     *
     */
    public function deleteAction(Request $request, Pedido $pedido)
    {
        $form = $this->createDeleteForm($pedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pedido);
            $em->flush();
        }

        return $this->redirectToRoute('pedido_index');
    }

    /**
     * Creates a form to delete a pedido entity.
     *
     * @param Pedido $pedido The pedido entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pedido $pedido)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pedido_delete', array('idpedido' => $pedido->getIdpedido())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}