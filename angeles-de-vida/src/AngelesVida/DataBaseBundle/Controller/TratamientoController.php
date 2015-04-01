<?php

namespace AngelesVida\DataBaseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AngelesVida\DataBaseBundle\Entity\Tratamiento;
use AngelesVida\DataBaseBundle\Form\TratamientoType;

/**
 * Tratamiento controller.
 *
 * @Route("/tratamiento")
 */
class TratamientoController extends Controller
{

    /**
     * Lists all Tratamiento entities.
     *
     * @Route("/", name="tratamiento")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DBBundle:Tratamiento')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Tratamiento entity.
     *
     * @Route("/", name="tratamiento_create")
     * @Method("POST")
     * @Template("DBBundle:Tratamiento:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Tratamiento();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->set(
                    'success', array(
                'title' => 'Nuevo!',
                'message' => 'Tratamiento creado con éxito.'
                    )
            );

            return $this->redirect($this->generateUrl('tratamiento'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Tratamiento entity.
     *
     * @param Tratamiento $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Tratamiento $entity)
    {
        $form = $this->createForm(new TratamientoType(), $entity, array(
            'action' => $this->generateUrl('tratamiento_create'),
            'method' => 'POST',
        ));

        $form->add('nombre', 'text', array('label' => 'Nombre:','attr'  => array ( 'class'  =>  'form-control' )));
        $form->add('decripcion', 'textarea', array('label' => 'Descripción:','attr'  => array ( 'class'  =>  'form-control', 'rows'  =>  '3', 'id'  =>  'comment')));
        $form->add('submit', 'submit', array('label' => 'Crear',  'attr'  => array ( 'class'  =>  'btn btn-success' )));
        

        return $form;
    }

    /**
     * Displays a form to create a new Tratamiento entity.
     *
     * @Route("/new", name="tratamiento_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Tratamiento();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Tratamiento entity.
     *
     * @Route("/{id}", name="tratamiento_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DBBundle:Tratamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tratamiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Tratamiento entity.
     *
     * @Route("/{id}/edit", name="tratamiento_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DBBundle:Tratamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tratamiento entity.');
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
    * Creates a form to edit a Tratamiento entity.
    *
    * @param Tratamiento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tratamiento $entity)
    {
        $form = $this->createForm(new TratamientoType(), $entity, array(
            'action' => $this->generateUrl('tratamiento_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('nombre', 'text', array('label' => 'Nombre:','attr'  => array ( 'class'  =>  'form-control' )));
        $form->add('decripcion', 'textarea', array('label' => 'Descripción:','attr'  => array ( 'class'  =>  'form-control', 'rows'  =>  '3', 'id'  =>  'comment')));
        $form->add('submit', 'submit', array('label' => 'Actualizar',  'attr'  => array ( 'class'  =>  'btn btn-success' )));

        return $form;
    }
    /**
     * Edits an existing Tratamiento entity.
     *
     * @Route("/{id}", name="tratamiento_update")
     * @Method("PUT")
     * @Template("DBBundle:Tratamiento:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DBBundle:Tratamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tratamiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            
            $this->get('session')->getFlashBag()->set(
                    'success', array(
                'title' => 'Actualizado!',
                'message' => 'Tratamiento actualizado con éxito.'
                    )
            );

            return $this->redirect($this->generateUrl('tratamiento_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Tratamiento entity.
     *
     * @Route("/{id}", name="tratamiento_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DBBundle:Tratamiento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tratamiento entity.');
            }

            $em->remove($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->set(
                    'success', array(
                'title' => 'Eliminado!',
                'message' => 'Tratamiento eliminado con éxito.'
                    )
            );
        }

        return $this->redirect($this->generateUrl('tratamiento'));
    }

    /**
     * Creates a form to delete a Tratamiento entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tratamiento_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar', 'attr'  => array ( 'class'  =>  'btn btn-danger' )))
            ->getForm()
        ;
    }
}
