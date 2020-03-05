<?php 
	class Controller{
		public $load;
		public $model;

		public function __construct(){
			$this->load = new Load();
			$this->model = new Model();

			if(isset($_GET['method'])){
				if($_GET['method'] == "show"){
					$this->show($_GET['id']);
				}
				else if($_GET['method'] == "add"){
					$this->add();
				}
				else if($_GET['method'] == "edit"){
					$this->edit($_GET['id']);
				}
				else if($_GET['method'] == "delete"){
					$this->delete($_GET['id']);
				}
			}else if(isset($_POST['method'])){
				if($_POST['method'] == "store"){
					$this->store();
				}
				else if($_POST['method'] == "update"){
					$this->update();
				}
			}else{
				$this->welcome();
			}	
		}

		private function welcome(){
			$data = $this->model->listUsers();
			$this->load->view('welcome.php', $data);
		}

		private function show($id){
			$data = $this->model->showUsers($id);
			$this->load->view('show.php', $data);
		}

		private function add(){
			$this->load->view('add.php');
		}

		private function store(){
			if($this->model->addUsers()){
				header('Location: ./');
			}else{
				header('Location: ./');
			}
		}

		private function edit($id){
			$data = $this->model->showUsers($id);
			$this->load->view('edit.php', $data);
		}

		private function update(){
			if($this->model->updateUsers()){
				header('Location: ./');
			}else{
				header('Location: ./');
			}
		}

		private function delete($id){
			if($this->model->deleteUsers($id)){
				header('Location: ./');
			}else{
				//echo "<script>alert('¡No se puede eliminar el registro!, el usuario tiene notas agregadas'); window.location.replace('./'); </script>";
				header('Location: ./');
			}
		}
	}
?>