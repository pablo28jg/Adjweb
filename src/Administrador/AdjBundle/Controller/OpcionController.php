<?php

namespace Administrador\AdjBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Administrador\AdjBundle\Entity\Opcion;
use Administrador\AdjBundle\Form\OpcionType;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Column\ActionsColumn;
use APY\DataGridBundle\Grid\Column\BlankColumn;

/**
 * Opcion controller.
 *
 */
class OpcionController extends Controller
{
    /**
     * Lists all Opcion entities.
     *
     */
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdministradorAdjBundle:Opcion')->findAll();

        return $this->render('AdministradorAdjBundle:Opcion:index.html.twig', array(
            'entities' => $entities,
        ));*/
        $source = new Entity('AdministradorAdjBundle:Opcion');
        $grid = $this->get('grid');
        
        $grid->setSource($source);
        
        $grid->setId("id");
         
        $column = $grid->getColumn("id");
        $column->setTitle("No.");
        $column->setFilterable(false);
        
        $rowActionEdit = new RowAction('Mostrar', 'opcion_edit');
        $rowActionEdit->manipulateRender(
        		function ($action,$row)
        		{
        			$action->setTitle($row->getField('id'));
        			return  $action;
        		});
        $rowActionEdit->setRouteParameters(array('id'));
        		//$grid->addRowAction($rowActionEdit);
        $rowActionDelete = new RowAction('Eliminar', 'opcion_delete');
        $rowActionDelete->setRouteParameters(array('id'));
        		 
        $actionsColumn = new ActionsColumn('id', '',array($rowActionEdit,$rowActionDelete),' ');
        $grid->addColumn($actionsColumn, 2);
        		 
        		 
        $column = $grid->getColumn("opcion");
        $column->setTitle("Opcion");
        $column->setFilterable(false);
        
        $column = $grid->getColumn("function");
        $column->setTitle("Funcion");
        $column->setFilterable(false);
        
        $column = $grid->getColumn("parametros");
        $column->setTitle("Parametros");
        $column->setFilterable(false);
        
        $column = $grid->getColumn("orden");
        $column->setTitle("Orden");
        $column->setFilterable(false);
        
        $column = $grid->getColumn("tipoestado");
        $column->setTitle("Estado");
        $column->setFilterable(false);
        $column->manipulateRenderCell(
        		function($value, $row, $router) {
        			$tipoEstado = array(0 => 'Activo', 1 => 'Cancelado');
        			$value = ($value!= null) ? $value : 0;
        			return $tipoEstado[$value];
       			}
       	);
        		
        $column = $grid->getColumn("creadoel");
        $column->setTitle("Creado el");
        $column->setFilterable(false);
        
        $column = $grid->getColumn("actualizadoel");
        $column->setTitle("Actualizado el");
        $column->setFilterable(false);
        		 
        $grid->hideColumns(array(
        		'id',
        		'controller',
        		'tipoestadoborrado',
        		'creadoporId',
        		'actualizadoporId'
        ));
        if($this->getRequest()->isXmlHttpRequest())
        	return $grid->getGridResponse('AdministradorAdjBundle:Opcion:index_js.html.twig');
        else 
        	return $grid->getGridResponse('AdministradorAdjBundle:Opcion:index.html.twig');
    }

    public function listaAction($modulo_id)
    {
    	$em = $this->getDoctrine()->getManager();
    
    	$entities = $em->getRepository('AdministradorAdjBundle:Opcion')->findBy(
    			array('moduloId' => $modulo_id),
    			array('orden' => 'ASC')
    	);
    
    	return $this->render('AdministradorAdjBundle:Opcion:list_js.html.php', array(
    			'entities' => $entities,
    	));
    }
    /**
     * Finds and displays a Opcion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Opcion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Opcion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdministradorAdjBundle:Opcion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Opcion entity.
     *
     */
    public function newAction()
    {
        $entity = new Opcion();
        $form   = $this->createForm(new OpcionType(), $entity);

        return $this->render('AdministradorAdjBundle:Opcion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Opcion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Opcion();
        $form = $this->createForm(new OpcionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('opcion_show', array('id' => $entity->getId())));
        }

        return $this->render('AdministradorAdjBundle:Opcion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Opcion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Opcion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Opcion entity.');
        }

        $editForm = $this->createForm(new OpcionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdministradorAdjBundle:Opcion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Opcion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Opcion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Opcion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new OpcionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('opcion_edit', array('id' => $id)));
        }

        return $this->render('AdministradorAdjBundle:Opcion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Opcion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdministradorAdjBundle:Opcion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Opcion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('opcion'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
