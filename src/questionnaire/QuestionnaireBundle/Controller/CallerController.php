<?php

namespace questionnaire\QuestionnaireBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use questionnaire\QuestionnaireBundle\Entity\Caller;
use questionnaire\QuestionnaireBundle\Form\CallerType;

/**
 * Caller controller.
 *
 */
class CallerController extends Controller
{

    /**
     * Lists all Caller entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('questionnaireQuestionnaireBundle:Caller')->findAll();

        return $this->render('questionnaireQuestionnaireBundle:Caller:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Caller entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Caller();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('caller_show', array('id' => $entity->getId())));
        }

        return $this->render('questionnaireQuestionnaireBundle:Caller:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Caller entity.
    *
    * @param Caller $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Caller $entity)
    {
        $form = $this->createForm(new CallerType(), $entity, array(
            'action' => $this->generateUrl('caller_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => "S'inscrire",'attr'=>array('class'=>'btn btn-warning')));

        return $form;
    }

    /**
     * Displays a form to create a new Caller entity.
     *
     */
    public function newAction()
    {
        $entity = new Caller();
        $form   = $this->createCreateForm($entity);

        return $this->render('questionnaireQuestionnaireBundle:Caller:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Caller entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('questionnaireQuestionnaireBundle:Caller')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caller entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('questionnaireQuestionnaireBundle:Caller:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Caller entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('questionnaireQuestionnaireBundle:Caller')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caller entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('questionnaireQuestionnaireBundle:Caller:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Caller entity.
    *
    * @param Caller $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Caller $entity)
    {
        $form = $this->createForm(new CallerType(), $entity, array(
            'action' => $this->generateUrl('caller_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update','attr'=>array('class'=>'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Caller entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('questionnaireQuestionnaireBundle:Caller')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caller entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('caller_edit', array('id' => $id)));
        }

        return $this->render('questionnaireQuestionnaireBundle:Caller:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Caller entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('questionnaireQuestionnaireBundle:Caller')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Caller entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('caller'));
    }

    /**
     * Creates a form to delete a Caller entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('caller_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
