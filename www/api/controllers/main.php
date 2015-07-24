<?php
namespace API\Controllers {
	class Main {

		static public function run() {
			$data = \API\Data\Collector::instance();
			$model = $data->get('model');
			$model = '\\API\\Models\\' . $model;
			$model = new $model();
			$model->get();
		}
	}
}