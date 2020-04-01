<?php  
	function MaskCPF($cpf)
	{
  		$cpfOK = ereg_replace("[^a-zA-Z0-9_]", "", strtr($cpf, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC"));

  		return $cpfOK;
	}

?>