<?php
global $objModulo;
switch($objModulo->getId()){
	case 'crespaldos':
		switch($objModulo->getAction()){
			case 'respaldar':
				$t = time();
		    	$dir = "temporal";
		    	$h = opendir($dir);
		    	while($file=readdir($h)){
		        	if(substr($file,0,3)=='tmp' && substr($file,-4)=='.sql'){
		            	$path = $dir.'/'.$file;
		            	if($t-filemtime($path)>3600)
		                	@unlink($path);
		        	}
		    	}
		    	closedir($h);
		    	
				$db = TBase::conectaDB();
				$db->SetFetchMode(ADODB_FETCH_NUM);
				$sql = "";
				
				$sql .= 'set SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";'.PHP_EOL;
				#primero las tablas
				$rsTablas = $db->Execute("show tables;");
				
				while (!$rsTablas->EOF){
					$db->SetFetchMode(ADODB_FETCH_NUM);
					$rsCreate = $db->Execute("show create table ".$rsTablas->fields[0].";");
					
					$sql .= $rsCreate->fields[1].";".PHP_EOL;
					$db->SetFetchMode(ADODB_FETCH_ASSOC);
					$rs = $db->Execute("select * from ".$rsTablas->fields[0]);
					
					while(!$rs->EOF){
						$keys = "";
						$vals = "";
						
						foreach($rs->fields as $key => $val){
							$keys .= ($keys == ""?"":", ")."'".$key."'";
							$vals .= ($vals == ""?"":", ")."'".$val."'";
						}
						
						$sql .= "insert into ".$rsTablas->fields[0]."(".$keys.") values (".$vals.");".PHP_EOL;
						
						$rs->moveNext();
					}
					
					$rsTablas->moveNext();
				}
				
				#ahora se crea el archivo
				$archivo = "temporal/respaldoBD_".date("Y-m-d_H:i:s").".sql";
				$fp = fopen($archivo, "w");
				$linea = fputs($fp, $sql);
				fclose($fp);
				echo json_encode(array("band" => true, "archivo" => $archivo));
			break;
		}
	break;
}