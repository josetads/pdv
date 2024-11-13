<?php 

namespace Config;

class Controller{

	public function loadView($viewName, $viewData = array()){
        extract($viewData);

        require 'app/Views/pages/'.$viewName.'.php';

	}

	public function loadTemplate($viewName, $viewData = array()){
        extract($viewData);

        require 'app/Views/template/header.php';
        require 'app/Views/pages/'.$pasta.'/'.$viewName.'.php';
        require 'app/Views/template/footer.php';

	}


}