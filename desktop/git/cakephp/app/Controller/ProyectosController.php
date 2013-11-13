<?
class ProyectosController extends AppController {
	public function index() {
	}
	public function Listado() {
	
		$this->set('proyectos', $this->Product->find('all'));
	}
}

?>
