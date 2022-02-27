<?php 

namespace Api\Controller;

interface FileUploadInterface{

	public function upload();
}


final class FileUploadController implements FileUploadInterface
{
	
	private $data = [];
	private $fileName;
	private $destination = "../../uploads/images/";
	private $source;
	private $fileExt;
	private $fileFieldName;

	private $validExtensions = array("jpg","jpeg","png");

	public function __construct(string $fileFieldName='file', array $fileData){

		if(!empty($fileData)){

			$this->fileFieldName = $fileFieldName;
			$this->fileName = $fileData[$this->fileFieldName]['name'];
			$this->fileExt = strtolower(pathinfo($this->fileName,PATHINFO_EXTENSION));
			$this->source = $fileData[$this->fileFieldName]['tmp_name'];
		}
		
	}

	public function upload(){

		if(isset($this->fileName) && in_array($this->fileExt,$this->validExtensions)){
			if(move_uploaded_file($this->source,$this->destination.$this->fileName)){
				return $this->fileName;
			}
		}
	}
	
}
