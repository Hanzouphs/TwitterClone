<?php

	namespace MF\Model;

	use App\Connection;

	class Container {

		public static function getModel($model) {

			//Retonar o modelo já instanciado e com a conexão já estabelecida
			$class = "\\App\\Models\\".ucfirst($model);
			$conn = Connection::getDb();

			return new $class($conn);
		}
	}


?>