<?php

namespace Administrador\AdjBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Administrador\AdjBundle\Entity\Expediente;
use Administrador\AdjBundle\Form\ExpedienteType;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Column\ActionsColumn;
use APY\DataGridBundle\Grid\Column\BlankColumn;
use Doctrine\ORM\EntityRepository;
//use Symfony\Component\BrowserKit\Response;

/**
 * Expediente controller.
 *
 * @Route("/expediente")
 */
class ExpedienteController extends Controller
{
    /**
     * Lists all Expediente entities.
     *
     * @Route("/", name="expediente")
     * @Template()
     */
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdministradorAdjBundle:Expediente')->findAll();

        return array(
            'entities' => $entities,
        );*/
    	$source = new Entity('AdministradorAdjBundle:Expediente');
    	 
    	// Crear el datagrid y asociar los datos
    	$grid = $this->get('grid');
    	$grid->setSource($source);
    	$grid->setId("id");
    	 
    	$column = $grid->getColumn("id");
    	$column->setTitle("No.");
    	$column->setFilterable(false);
    	
    	$rowActionEdit = new RowAction('Mostrar', 'expediente_edit');
    	$rowActionEdit->manipulateRender(
    			function ($action,$row)
    			{
    				$action->setTitle($row->getField('id'));
    				return  $action;
    			});
    	$rowActionEdit->setRouteParameters(array('id'));
    			//$grid->addRowAction($rowActionEdit);
    	$rowActionDelete = new RowAction('Eliminar', 'expediente_delete');
    	$rowActionDelete->setRouteParameters(array('id'));
    			 
    	$actionsColumn = new ActionsColumn('id', '',array($rowActionEdit,$rowActionDelete),' ');
    	$grid->addColumn($actionsColumn, 2);
    	 
    	/*$column = $grid->getColumn("atributo");
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
    	else*/
    	if($this->getRequest()->isXmlHttpRequest())
    		return $grid->getGridResponse('AdministradorAdjBundle:Expediente:index_js.html.twig');
    	else
    		return $grid->getGridResponse('AdministradorAdjBundle:Expediente:index.html.twig');
    }

    /**
     * Finds and displays a Expediente entity.
     *
     * @Route("/{id}/show", name="expediente_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Expediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Expediente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Expediente entity.
     *
     * @Route("/new", name="expediente_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Expediente();
        $form   = $this->createEditForm($entity);

        if($this->getRequest()->isXmlHttpRequest())
        	return $this->render('AdministradorAdjBundle:Expediente:new_js.html.twig', array(
        			'entity' => $entity,
        			'form'   => $form->createView(),
        			'ruta'   => 'expediente_create',
        	));
        else
        	return $this->render('AdministradorAdjBundle:Expediente:new.html.twig', array(
        			'entity' => $entity,
        			'form'   => $form->createView(),
        			'ruta'   => 'expediente_create',
        	));
    }

    /**
     * Creates a new Expediente entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Expediente();
        $form = $this->createEditForm($entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('expediente_show', array('id' => $entity->getId())));
        }

        return $this->render('AdministradorAdjBundle:Expediente:new.html.twig',array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Expediente entity.
     *
     * @Route("/{id}/edit", name="expediente_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Expediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Expediente entity.');
        }

        $form = $form = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdministradorAdjBundle:Expediente:new.html.twig',array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Edits an existing Expediente entity.
     *
     * @Route("/{id}/update", name="expediente_update")
     * @Method("POST")
     * @Template("AdministradorAdjBundle:Expediente:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Expediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Expediente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ExpedienteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('expediente_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Expediente entity.
     *
     * @Route("/{id}/delete", name="expediente_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdministradorAdjBundle:Expediente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Expediente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('expediente'));
    }
    
    private function createEditForm($entity)
    {
    	return $this->createFormBuilder($entity)
    	->add('numeroexpedienteKy')
    	->add('titulojuicio')
    	->add('tipojuicio')
    	->add('abogado','entity',array(
    			'class' => 'Administrador\\AdjBundle\\Entity\\Entidad',
    			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('a')
    				->where('a.esabogado = 1')
    				->orderBy('a.nombre', 'ASC');
    			},
    	))
    	->add('estadoprocesal','entity',array(
    			'class' => 'Administrador\\AdjBundle\\Entity\\Entidad',
    			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('a')
    				->where('a.esinstancia = 1')
    				->orderBy('a.nombre', 'ASC');
    			},
    			'empty_value' => '',
    	))
    	->add('juzgado','entity',array(
    			'class' => 'Administrador\\AdjBundle\\Entity\\Entidad',
    			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('a')
    				->where('a.esinstancia = 1')
    				->orderBy('a.nombre', 'ASC');
    			},
    			'empty_value' => '',
    	))
    	->add('instanciaactual','entity',array(
    			'class' => 'Administrador\\AdjBundle\\Entity\\Entidad',
    			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('a')
    				->where('a.esinstancia = 1')
    				->orderBy('a.nombre', 'ASC');
    			},
    			'empty_value' => '',
    	))
    	->add('cliente','entity',array(
    			'class' => 'Administrador\\AdjBundle\\Entity\\Entidad',
    			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('a')
    				->where('a.escliente = 1')
    				->orderBy('a.nombre', 'ASC');
    			},
    	))
    	->add('tipoexpediente')
    	->add('cuantia')
    	->add('contrario','entity',array(
    			'class' => 'Administrador\\AdjBundle\\Entity\\Entidad',
    			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('a')
    				->where('a.escontrario = 1')
    				->orderBy('a.nombre', 'ASC');
    			},
    			'empty_value' => '',
    	))
    	->add('empresa')
    	->add('tipoestado')
    	->add('fechainicio')
    	->getForm()
    	;
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
