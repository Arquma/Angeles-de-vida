<?php

namespace AngelesVida\DataBaseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AngelesVida\DataBaseBundle\Entity\Enfermedad;
use AngelesVida\DataBaseBundle\Form\EnfermedadType;

/**
 * Enfermedad controller.
 *
 * @Route("/enfermedad")
 */
class EnfermedadController extends Controller
{

    /**
     * Lists all Enfermedad entities.
     *
     * @Route("/", name="enfermedad")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DBBundle:Enfermedad')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Enfermedad entity.
     *
     * @Route("/", name="enfermedad_create")
     * @Method("POST")
     * @Template("DBBundle:Enfermedad:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Enfermedad();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->set(
                    'success', array(
                'title' => 'Nuevo!',
                'message' => 'Enfermedad creada con éxito.'
                    )
            );

            return $this->redirect($this->generateUrl('enfermedad'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Enfermedad entity.
     *
     * @param Enfermedad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Enfermedad $entity)
    {
        $form = $this->createForm(new EnfermedadType(), $entity, array(
            'action' => $this->generateUrl('enfermedad_create'),
            'method' => 'POST',
        ));

        $form->add('nombre', 'text', array('label' => 'Nombre:','attr'  => array ( 'class'  =>  'form-control' )));
        $form->add('descripcion', 'textarea', array('label' => 'Descripción:','attr'  => array ('class'  =>  'form-control', 'rows'  =>  '3', 'id'  =>  'comment')));
        $form->add('submit', 'submit', array('label' => 'Crear',  'attr'  => array ( 'class'  =>  'btn btn-success' )));

        return $form;
    }

    /**
     * Displays a form to create a new Enfermedad entity.
     *
     * @Route("/new", name="enfermedad_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Enfermedad();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Enfermedad entity.
     *
     * @Route("/{id}", name="enfermedad_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DBBundle:Enfermedad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Enfermedad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Enfermedad entity.
     *
     * @Route("/{id}/edit", name="enfermedad_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DBBundle:Enfermedad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Enfermedad entity.');
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
    * Creates a form to edit a Enfermedad entity.
    *
    * @param Enfermedad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Enfermedad $entity)
    {
        $form = $this->createForm(new EnfermedadType(), $entity, array(
            'action' => $this->generateUrl('enfermedad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('nombre', 'text', array('label' => 'Nombre:','attr'  => array ( 'class'  =>  'form-control' )));
        $form->add('descripcion', 'textarea', array('label' => 'Descripción:','attr'  => array ( 'class'  =>  'form-control', 'rows'  =>  '3', 'id'  =>  'comment')));
        $form->add('submit', 'submit', array('label' => 'Crear',  'attr'  => array ( 'class'  =>  'btn btn-success' )));

        return $form;
    }
    /**
     * Edits an existing Enfermedad entity.
     *
     * @Route("/{id}", name="enfermedad_update")
     * @Method("PUT")
     * @Template("DBBundle:Enfermedad:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DBBundle:Enfermedad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Enfermedad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            
            $this->get('session')->getFlashBag()->set(
                    'success', array(
                'title' => 'Actualizado!',
                'message' => 'Enfermedad actualizada con éxito.'
                    )
            );

            return $this->redirect($this->generateUrl('enfermedad_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Enfermedad entity.
     *
     * @Route("/{id}", name="enfermedad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DBBundle:Enfermedad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Enfermedad entity.');
            }

            $em->remove($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->set(
                    'success', array(
                'title' => 'Eliminado!',
                'message' => 'Enfermedad eliminada con éxito.'
                    )
            );
        }

        return $this->redirect($this->generateUrl('enfermedad'));
    }

    /**
     * Creates a form to delete a Enfermedad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('enfermedad_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar', 'attr'  => array ( 'class'  =>  'btn btn-danger' )))
            ->getForm()
        ;
    }
}
