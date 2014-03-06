<?php

namespace Administrador\AdjBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Administrador\AdjBundle\Entity\Entidad;
use Administrador\AdjBundle\Form\EntidadType;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Column\ActionsColumn;
use APY\DataGridBundle\Grid\Column\BlankColumn;
use Doctrine\ORM\EntityRepository;

/**
 * Entidad controller.
 *
 */
class EntidadController extends Controller
{
    /**
     * Lists all Entidad entities.
     *
     */
	private $tipoEntidad;
    public function indexAction($tipoEntidad)
    {
    	$this->tipoEntidad = $tipoEntidad;
        $source = new Entity('AdministradorAdjBundle:Entidad');
    	
    	// Crear el datagrid y asociar los datos
    	$grid = $this->get('grid');
    	$tableAlias = $source->getTableAlias();

		$source->manipulateQuery(
		    function ($query) use ($tableAlias)
		    {
		        $query->andWhere($tableAlias . '.es' . $this->tipoEntidad . ' = 1');		    		
		    }
		);
		
		$grid->setSource($source);
		
    	$grid->setId("id");
    	
    	$column = $grid->getColumn("id");
    	$column->setTitle("No.");
    	$column->setFilterable(false);
    	    	
    	$rowActionEdit = new RowAction('Mostrar', 'entidad_edit');
    	$rowActionEdit->manipulateRender(
    		function ($action,$row)
    		{
    			$action->setTitle($row->getField('id'));
    			return  $action;
    		});
    	$rowActionEdit->setRouteParameters(array('id','tipoEntidad' => $this->tipoEntidad));
    	//$grid->addRowAction($rowActionEdit);
    	$rowActionDelete = new RowAction('Eliminar', 'entidad_delete');
    	$rowActionDelete->setRouteParameters(array('id','tipoEntidad' => $this->tipoEntidad));
    	
    	$rowActionNew = new RowAction('Nuevo', 'entidad_new');
    	$rowActionNew->setRouteParameters(array('id','tipoEntidad' => $this->tipoEntidad));
    	
    	$actionsColumn = new ActionsColumn('id', '',array($rowActionEdit,$rowActionDelete,$rowActionNew),' ');
    	$grid->addColumn($actionsColumn, 2);
    	
    	
    	$column = $grid->getColumn("nombre");
    	$column->setTitle("Nombre");
    	$column->manipulateRenderCell(
    			function($value, $row, $router) {
    				if($value == "")
    					return "";
    				else
    					return $value.' '.$row->getField('apellidopaterno').' '.$row->getField('apellidomaterno');
    			}
    	);
    	    	
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
    	/*$column = $grid->getColumn("creadoporId");
    	$column->setTitle("Creado por");
    	$column->setFilterable(false);
    	$column->manipulateRenderCell(
    			function($value, $row, $router) {
    				if($value == 0)
    					return "";
    				else
    				{
    					$creadoporId = $this->getDoctrine()
	    					->getRepository('AdministradorAdjBundle:Entidad')
	    					->find($value);
    					return $creadoporId->__tostring();
    				}
    			}
    	);*/
    	$column = $grid->getColumn("creadoel");
    	$column->setTitle("Creado el");
    	$column->setFilterable(false);
    	/*$column = $grid->getColumn("actualizadoporId");
    	$column->setTitle("Actualizado por");
    	$column->setFilterable(false);
    	$column->manipulateRenderCell(
    			function($value, $row, $router) {
    				if($value == 0)
    					return "";
    				else
    				{
    					$actualizadoporId = $this->getDoctrine()
	    					->getRepository('AdministradorAdjBundle:Entidad')
	    					->find($value);
    					return $actualizadoporId->getUsuario();
    				}
    			}
    	);*/
    	$column = $grid->getColumn("actualizadoel");
    	$column->setTitle("Actualizado el");
    	$column->setFilterable(false);    	
    	
    	$grid->hideColumns(array(
    		'id',
    		'apellidopaterno',
    		'apellidomaterno',
    		'tipoestadoborrado',
    		'esusuario',
    		'esabogado',
    		'escliente',
    		'escontrario',
    		'esinstancia',
    		'esotro',
    		'esrepresentante',
    		'direccionId',
	  		'perfilId',
    		'tipopersona',
    		'telefono1',
    		'telefono2',
    		'telefono3',
    		'usuario',
    		'rfc',
    		'curp'
    	));
    	//$MyColumn = new BlankColumn(array('id' => 'atributo', 'title' => 'Column', 'size' => '54', 'source' => true));
    	//$grid->addColumn($MyColumn);
    	// Configurar el grid
    	// leer la documentación para conocer las decenas de opciones disponibles
    	if($this->getRequest()->isXmlHttpRequest())
    		return $grid->getGridResponse('AdministradorAdjBundle:Entidad:index_js.html.twig', array(
    				'tipoEntidad' => $tipoEntidad,
    		));
    	else
    		return $grid->getGridResponse('AdministradorAdjBundle:Entidad:index.html.twig', array(
    			'tipoEntidad' => $tipoEntidad
    		));
    }

    /**
     * Finds and displays a Entidad entity.
     *
     */
    public function showAction($id,$tipoEntidad)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Entidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entidad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        /*return $this->render('AdministradorAdjBundle:Entidad:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        	'tipoEntidad' => $tipoEntidad,
                ));*/
        if($this->getRequest()->isXmlHttpRequest())
        	return $this->render('AdministradorAdjBundle:Entidad:new_js.html.twig', array(
        			'entity' => $entity,
        			'form'   => $deleteForm->createView(),
        			'tipoEntidad' => $tipoEntidad,
        	));
        else
        	return $this->render('AdministradorAdjBundle:Entidad:new.html.twig', array(
        			'entity' => $entity,
        			'form'   => $deleteForm->createView(),
        			'tipoEntidad' => $tipoEntidad,
        	));
    }

    /**
     * Displays a form to create a new Entidad entity.
     *
     */
    public function newAction($tipoEntidad)
    {
        $entity = new Entidad();
        $form   = $this->createEditForm($entity);        
        if($this->getRequest()->isXmlHttpRequest())
        	return $this->render('AdministradorAdjBundle:Entidad:new_js.html.twig', array(
        		'entity' => $entity,
	            'form'   => $form->createView(),
	        	'tipoEntidad' => $tipoEntidad,
        		'ruta'   => 'entidad_create',
        	));
        else
	        return $this->render('AdministradorAdjBundle:Entidad:new.html.twig', array(
	            'entity' => $entity,
	            'form'   => $form->createView(),
	        	'tipoEntidad' => $tipoEntidad,
	        	'ruta'   => 'entidad_create',
	        ));
    }

    /**
     * Creates a new Entidad entity.
     *
     */
    public function createAction(Request $request, $tipoEntidad)
    {
        $entity  = new Entidad();
        $form   = $this->createEditForm($entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            /*return $this->redirect($this->generateUrl('entidad_show', array(
            		'id' => $entity->getId(),
            		'tipoEntidad' => $tipoEntidad
            )));*/
        }
        if($this->getRequest()->isXmlHttpRequest())
        	return $this->render('AdministradorAdjBundle:Entidad:new_js.html.twig', array(
        		'entity' => $entity,
	            'form'   => $form->createView(),
        		'tipoEntidad' => $tipoEntidad,
        		'ruta'   => 'entidad_create',
        	));
        else
	        return $this->render('AdministradorAdjBundle:Entidad:new.html.twig', array(
	            'entity' => $entity,
	            'form'   => $form->createView(),   
	        	'tipoEntidad' => $tipoEntidad,
	        	'ruta'   => 'entidad_create',
	        ));
    }

    /**
     * Displays a form to edit an existing Entidad entity.
     *
     */
    public function editAction($id,$tipoEntidad)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Entidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entidad entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
		
        if($this->getRequest()->isXmlHttpRequest())
        	return $this->render('AdministradorAdjBundle:Entidad:new_js.html.twig', array(
        			'entity' => $entity,
        			'form'   => $editForm->createView(),
        			'tipoEntidad' => $tipoEntidad,
        			'ruta'   => 'entidad_create',
        	));
        else
	        return $this->render('AdministradorAdjBundle:Entidad:new.html.twig', array(
	            'entity'      => $entity,
	            'form'   => $editForm->createView(),
	            'delete_form' => $deleteForm->createView(),
	        	'tipoEntidad' => $tipoEntidad,
	        	'ruta'		  => 'entidad_update',
	        ));
    }

    /**
     * Edits an existing Entidad entity.
     *
     */
    public function updateAction(Request $request, $id, $tipoEntidad)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministradorAdjBundle:Entidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entidad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('entidad_edit', array('id' => $id)));
        }

        if($this->getRequest()->isXmlHttpRequest())
        	return $this->render('AdministradorAdjBundle:Entidad:new_js.html.twig', array(
        			'entity' => $entity,
        			'form'   => $editForm->createView(),
        			'tipoEntidad' => $tipoEntidad,
        			'ruta'   => 'entidad_create',
        	));
        else
	        return $this->render('AdministradorAdjBundle:Entidad:new.html.twig', array(
		            'entity'      => $entity,
		            'form'   => $editForm->createView(),
		            'delete_form' => $deleteForm->createView(),
		        	'tipoEntidad' => $tipoEntidad,
		        	'ruta'		  => 'entidad_update',
	        ));
    }

    /**
     * Deletes a Entidad entity.
     *
     */
    public function deleteAction($id, $tipoEntidad)
    {
        /*$form = $this->createDeleteForm($id);
        $form->bind($request);*/

        //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdministradorAdjBundle:Entidad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Entidad entity.');
            }

            $em->remove($entity);
            $em->flush();
        //}

        return $this->redirect($this->generateUrl('entidad', 
        		array(
        				'tipoEntidad' => $tipoEntidad,
        				'ruta' => 'entidad_update'
        		)
        ));
    }

    private function createEditForm($entity)
    {
    	return $this->createFormBuilder($entity)
    	->add('nombre')
    	->add('apellidopaterno')
    	->add('apellidomaterno')
    	->add('email')
    	->add('telefono1')
    	->add('telefono2')
    	->add('telefono3')
    	->add('usuario')
    	->add('esusuario')
    	->add('escliente')
    	->add('esabogado')
    	->add('escontrario')
    	->add('esinstancia')
    	->add('esotro')
    	->add('direccionId')
    	->add('perfilId','entity',array(
    			'class' => 'Administrador\\AdjBundle\\Entity\\Perfil'))
    	->add('lenguaje','entity',array('class' => 'Administrador\\AdjBundle\\Entity\\Lenguaje'))
    	->add('esrepresentante')
    	->add('tipopersona','choice',array(
    			'choices' => array(0 => 'Moral', 1 => 'Fisica')
    	))
    	->add('rfc')
    	->add('curp')
    	->add('tipoestado','choice',array(
    			'choices' => array(0 => 'Activo', 1 => 'Cancelado')
    	))
    	->getForm()
    	;
    }
    private function createDeleteForm($id = 0)
    {
    	return $this->createFormBuilder(array('id' => $id))
    	->add('id', 'hidden')    	
    	->getForm()
    	;
    }
}
