<?php
//carregando img
$images = scandir("images");

$data = array();

foreach ($images as $img) {
	if (!in_array($img, array(".", ".."))) {

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		$info['size'] = filesize($filename);//tamanho do arquivo
		$info['modified'] = date("d/m/Y H:i:s", filemtime($filename));//ultima modificação do arquivo
		$info['url'] = "http://localhost/curso-PHP-7/13-manipulando-Arquivos/01-lendo-manipulando-pasta-diretorios/". str_replace("\\", "/", $filename);//local na url

		array_push($data, $info);

	}
}
//tranforma em json
echo json_encode($data);

?>