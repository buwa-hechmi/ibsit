<?php

namespace questionnaire\QuestionnaireBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use questionnaire\QuestionnaireBundle\Entity\Call;
use questionnaire\QuestionnaireBundle\Form\CallType;

/**
 * Call controller.
 *
 */
class CallController extends Controller
{

    /**
     * Lists all Call entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('questionnaireQuestionnaireBundle:Call')->findAll();

        return $this->render('questionnaireQuestionnaireBundle:Call:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Call entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Call();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('call_show', array('id' => $entity->getId())));
        }

        return $this->render('questionnaireQuestionnaireBundle:Call:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Call entity.
    *
    * @param Call $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Call $entity)
    {
        $form = $this->createForm(new CallType(), $entity, array(
            'action' => $this->generateUrl('call_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Call entity.
     *
     */
    public function newAction()
    {
        $entity = new Call();
        $form   = $this->createCreateForm($entity);

        return $this->render('questionnaireQuestionnaireBundle:Call:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Call entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('questionnaireQuestionnaireBundle:Call')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Call entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('questionnaireQuestionnaireBundle:Call:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Call entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('questionnaireQuestionnaireBundle:Call')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Call entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('questionnaireQuestionnaireBundle:Call:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Call entity.
    *
    * @param Call $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Call $entity)
    {
        $form = $this->createForm(new CallType(), $entity, array(
            'action' => $this->generateUrl('call_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Call entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('questionnaireQuestionnaireBundle:Call')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Call entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('call_edit', array('id' => $id)));
        }

        return $this->render('questionnaireQuestionnaireBundle:Call:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Call entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('questionnaireQuestionnaireBundle:Call')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Call entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('call'));
    }

    /**
     * Creates a form to delete a Call entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('call_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
