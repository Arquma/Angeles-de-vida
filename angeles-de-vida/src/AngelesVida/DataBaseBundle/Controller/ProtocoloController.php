<?php

namespace AngelesVida\DataBaseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AngelesVida\DataBaseBundle\Entity\Protocolo;
use AngelesVida\DataBaseBundle\Form\ProtocoloType;

/**
 * Protocolo controller.
 *
 * @Route("/protocolo")
 */
class ProtocoloController extends Controller
{

    /**
     * Lists all Protocolo entities.
     *
     * @Route("/", name="protocolo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DBBundle:Protocolo')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Protocolo entity.
     *
     * @Route("/", name="protocolo_create")
     * @Method("POST")
     * @Template("DBBundle:Protocolo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Protocolo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
                    
            $this->get('session')->getFlashBag()->set(
                    'success', array(
                'title' => 'Nuevo!',
                'message' => 'Protocolo creado con éxito.'
                    )
            );       

            return $this->redirect($this->generateUrl('protocolo'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Protocolo entity.
     *
     * @param Protocolo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Protocolo $entity)
    {
        $form = $this->createForm(new ProtocoloType(), $entity, array(
            'action' => $this->generateUrl('protocolo_create'),
            'method' => 'POST',
        ));

        $form->add('nombre', 'text', array('label' => 'Nombre:','attr'  => array ( 'class'  =>  'form-control' )));
        $form->add('descripcion', 'textarea', array('label' => 'Descripción:','attr'  => array ( 'class'  =>  'form-control', 'rows'  =>  '3', 'id'  =>  'comment')));
        $form->add('submit', 'submit', array('label' => 'Crear',  'attr'  => array ( 'class'  =>  'btn btn-success' )));

        return $form;
    }

    /**
     * Displays a form to create a new Protocolo entity.
     *
     * @Route("/new", name="protocolo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Protocolo();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Protocolo entity.
     *
     * @Route("/{id}", name="protocolo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DBBundle:Protocolo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Protocolo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Protocolo entity.
     *
     * @Route("/{id}/edit", name="protocolo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DBBundle:Protocolo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Protocolo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Protocolo entity.
    *
    * @param Protocolo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Protocolo $entity)
    {
        $form = $this->createForm(new ProtocoloType(), $entity, array(
            'action' => $this->generateUrl('protocolo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('nombre', 'text', array('label' => 'Nombre:','attr'  => array ( 'class'  =>  'form-control' )));
        $form->add('descripcion', 'textarea', array('label' => 'Descripción:','attr'  => array ( 'class'  =>  'form-control', 'rows'  =>  '3', 'id'  =>  'comment')));
        $form->add('submit', 'submit', array('label' => 'Actualizar',  'attr'  => array ( 'class'  =>  'btn btn-success' )));

        return $form;
    }
    /**
     * Edits an existing Protocolo entity.
     *
     * @Route("/{id}", name="protocolo_update")
     * @Method("PUT")
     * @Template("DBBundle:Protocolo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DBBundle:Protocolo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Protocolo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            
            $this->get('session')->getFlashBag()->set(
                    'success', array(
                'title' => 'Actualizado!',
                'message' => 'Protocolo actualizado con éxito.'
                    )
            );

            return $this->redirect($this->generateUrl('protocolo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Protocolo entity.
     *
     * @Route("/{id}", name="protocolo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DBBundle:Protocolo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Protocolo entity.');
            }

            $em->remove($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->set(
                    'success', array(
                'title' => 'Eliminado!',
                'message' => 'Protocolo eliminado con éxito.'
                    )
            );
        }

        return $this->redirect($this->generateUrl('protocolo'));
    }

    /**
     * Creates a form to delete a Protocolo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('protocolo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar', 'attr'  => array ( 'class'  =>  'btn btn-danger' )))
            ->getForm()
        ;
    }
}
