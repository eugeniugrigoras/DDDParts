<?php
	//recupero i dati
	$idprovincia=$_REQUEST['idprovincia'];
	//creo la connessione
	$conn= new mysqli("localhost","root","",'my_dddparts'); // questo è per xamp
	//$conn= new mysqli("localhost","nome dominio altervista","",'nome database'); questo è per altervista

	//scrivo la query per estrarre tutto il database
	$comando="select * from comuni where comuni.idprovincia=$idprovincia"; //dati_utenti è il nome della tabella

	//eseguo la query
	$record=$conn->query($comando);
	echo "<paper-dropdown-menu label='City' style='width: 100%;'>";
	echo "<paper-listbox id='citylist' class='dropdown-content' style='width:200px!important'>";
	//scorro i dati per trovare una corrispondenza
	while ($riga=$record->fetch_assoc()) {
                                                
        echo "<paper-item id='";
        echo "$riga[id]";
        echo "'>";
        echo "$riga[nome]";
        echo "</paper-item>";
    }
    echo "</paper-listbox>";
    echo "</paper-dropdown-menu>";
	

	mysqli_close($conn);

?>