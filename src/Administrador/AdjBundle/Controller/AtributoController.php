<?php

namespace Administrador\AdjBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Administrador\AdjBundle\Entity\Atributo;
use Administrador\AdjBundle\Form\AtributoType;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Column\BlankColumn;

/**
 * Atributo controller.
 *
 * @Route("/atributo")
 */
class AtributoController extends Controller
{
    /**
     * Lists all Atributo entities.
     *
     * @Route("/", name="atributo")
     * @Template()
     */
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdministradorAdjBundle:Atributo')->findAll();

        return array(
            'entities' => $entities,
        );*/
    	$source = new Entity('AdministradorAdjBundle:Atributo');
    	
    	// Crear el datagrid y asociar los datos
    	$grid = $this->get('grid');
    	$grid->setSource($source);
    	$grid->setId("id");
    	
    	$column = $grid->getColumn("id");
    	$column->setTitle("No.");
    	$column->setFilterable(false);
    	
    	$column = $grid->getColumn("atributo");
    	$column->setTitle("Atributo");
    	$column = $grid->getColumn("tipoestado");
    	$column->setTitle("Estado");
    	$column->setFilterable(false);    	
    	$column = $grid->getColumn("creadoporId");
    	$column->setTitle("Creado por");
    	$column->setFilterable(false);
    	$column->manipulateRenderCell(
    			function($value, $row, $router) {
    				if($value == 0)
    					return "";
    				else
    					return $value;
    			}
    	);
    	$column = $grid->getColumn("creadoel");
    	$column->setTitle("Creado el");
    	$column->setFilterable(false);
    	$column = $grid->getColumn("actualizadoporId");
    	$column->setTitle("Actualizado por");
    	$column->setFilterable(false);
    	$column->manipulateRenderCell(
    			function($value, $row, $router) {
    				if($value == 0)
    					return "";
    				else
    					return $value;
    			}
    	);
    	$column = $grid->getColumn("actualizadoel");
    	$column->setTitle("Actualizado el");
    	$column->setFilterable(false);
    	
    	
    	$grid->hideColumns('tipoestadoborrado');
    	//$MyColumn = new BlankColumn(array('id' => 'atributo', 'title' => 'Column', 'size' => '54', 'source' => true));
    	//$grid->addColumn($MyColumn);
    	// Configurar el grid
    	// leer la documentación para conocer las decenas de opciones disponibles
    	if($this->getRequest()->isXmlHttpRequest())
    		return $grid->getGridResponse('AdministradorAdjBundle:Atributo:index_js.html.twig');
    	else
    		return $grid->getGridResponse('AdministradorAdjBundle:Atributo:index.html.twig');
    }

    /**
     * Finds and displays a Atributo entity.
     *
     * @Route("/{id}/show", name="atributo_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Atributo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Atributo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Atributo entity.
     *
     * @Route("/new", name="atributo_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Atributo();
        $form   = $this->createForm(new AtributoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Atributo entity.
     *
     * @Route("/create", name="atributo_create")
     * @Method("POST")
     * @Template("AdministradorAdjBundle:Atributo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Atributo();
        $form = $this->createForm(new AtributoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('atributo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Atributo entity.
     *
     * @Route("/{id}/edit", name="atributo_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Atributo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Atributo entity.');
        }

        $editForm = $this->createForm(new AtributoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Atributo entity.
     *
     * @Route("/{id}/update", name="atributo_update")
     * @Method("POST")
     * @Template("AdministradorAdjBundle:Atributo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Atributo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Atributo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AtributoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('atributo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Atributo entity.
     *
     * @Route("/{id}/delete", name="atributo_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdministradorAdjBundle:Atributo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Atributo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('atributo'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
