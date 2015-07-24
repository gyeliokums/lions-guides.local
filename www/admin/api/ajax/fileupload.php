<?php
$file = uniqid() . basename($_FILES['uploadfile']['name']);
$ext = substr($_FILES['uploadfile']['name'], strpos($_FILES['uploadfile']['name'], '.'), strlen($_FILES['uploadfile']['name'])-1);
$filetypes = array('.jpg','.gif','.bmp','.png','.JPG','.BMP','.GIF','.PNG','.jpeg','.JPEG');
if(!in_array($ext, $filetypes)) {
	echo json_encode(array('error' => '<p>Данный формат файлов не поддерживается</p>'));
} else {
	if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadDir . $file)) {
		$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
		$table = _makeTableName(\API\Config\Parameters::$tablePrefix, 'cityphotogallery');
		$model = $_REQUEST['model'];
		$parentID = $_REQUEST['parent_id'];
		$sql = 'insert into `' . $table . '` (`parent_id`, `name`, `position`) values (?, ?, 1);';
		if (null === ($res = $db->query($sql, $parentID, $file))) {
			unlink($uploadDir . $file);
			$arr = array('error' => '<p>Ошибка добавления информации в таблицу: ' . $db->showQuery($sql, $parentID, $file) . '</p>');
			echo json_encode($arr);
		}
		$id = $db->lastInsertID();
		$arr = array('error' => '', 'id' => $id, 'name' => $file);
		echo json_encode($arr);
	} else {
		$arr = array('error' => 'Ошибка копирования файла.');
		echo json_encode($arr);
		//echo "error";
	}
}
?>