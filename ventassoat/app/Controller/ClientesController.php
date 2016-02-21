<?php
class ClientesController extends AppController
{
	public $helpers = array('Html', 'Form', 'Time','js');
	


	public $components = array('RequestHandler','Session');

	public $paginate = array (
		'limit' => 10,
		'order' =>array(
			'Cliente.id'=> 'asc'
			)
);
	public function index()
	{
		
		$this->Cliente->recursive = 0;
		$this->paginate['Cliente']['limit'] = 3;
		//$this->paginate['Mesero']['conditions'] = array('Mesero.dni' => "34343");
		$this->paginate['Cliente']['order'] = array('Cliente.id' => 'asc');
 		//$this->Paginator->settings = $this->paginate;
		$this->set('clientes', $this->paginate());
		//$this->set('clientes', $this->Cliente->find('all'));
		
	}

// clientes=variable
// Cliente = Controlador


	public function view($id = null)
	{
		if (!$id)
		{
			throw new NotFoundException('Datos Invalidos');
		}
		$cliente = $this->Cliente->findById($id);

		if (!$cliente)
		{
			throw new NotFoundException('El cliente no existe');
		}

		$this->set('cliente', $cliente);
	}

	public function add()
	{
		if ($this->request->is('post'))
		{
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data))
			{
				$this->Session->setFlash('El Cliente ha sido creado', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));

			}

			$this->Session->setFlash('No se pudo crear el Cliente');
		}
	}

	public function edit($id = null)
	{
		if(!$id)
		{
			throw new NotFoundException("Datos Invalidos");

		}

		$cliente = $this->Cliente->findById($id);
		if(!$cliente)
		{
			throw new NotFoundException("El Cliente no ha sido encontrado");
		}

		if($this->request->is(array('post', 'put')))
		{
			$this->Cliente->id = $id;

			if($this->Cliente->save($this->request->data))
			{
				$this->Session->setFlash('El cliente ha sido modificado', $element = 'default', $params = array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('El registro no pudo ser modificado.');
		}

		if(!$this->request->data)
		{
			$this->request->data = $cliente;
		}
	}

	public function eliminar($id)
	{
		if($this->request->is('get'))
		{
			throw new MethodNotAllowedException('INCORRECTO');
		}
		if($this->Cliente->delete($id))
		{
			$this->Session->setFlash('El cliente ha sido eliminado', $element = 'default', $params = array('class' => 'success'));
			return $this->redirect(array('action' => 'index'));
		}
	}
}
?>