// JavaScript Document


	function ValidaFormulario()
	{
		var partida,chegada;
		var datapartida, datachegada;
		var classe,tipoViagem;
		var codacesso, pessAdultas, criancas;
		var resultDate, resultDateII;
		var text;
		var itemPartidaSelec;
		var itemChegadaSelec
	
		partida = document.getElementById("selectDeparture").value;
		chegada = document.getElementById("selectArrival").value;
		datapartida = document.getElementById("example1").value;
		datachegada = document.getElementById("example2").value;
		tipoViagem = document.getElementById("selecttype").value;
		pessoasAdultas = document-getElementById("numeroAdultos").value;
		codacesso = document.getElementById("codAcessoEspecial").value;
		resultDate = (datapartida instanceof Date);
		resultDateII = (datachegada instanceof Date);

		itemPartidaSelec = partida.options[partida.selectedIndex].text;
		itemChegadaSelec = chegada.options[chegada.selectedIndex].text;


		if (resultDate=="false"||resultDateII == "false")
		{
				text="Data inválida";
		}
		if()



	}



