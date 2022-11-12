<?php
// DATOS GENERALES
$totalrecibo=$_REQUEST['total'];
$khwtotal=$_REQUEST['totalkwh'];

// PISO N 01
$lectanterior1=$_REQUEST['anterior1'];
$lectactual1=$_REQUEST['actual1'];


$consumo1=$lectactual1-$lectanterior1;
$costo1kWh1=$totalrecibo/$khwtotal;
$totalpagar1=$consumo1*$costo1kWh1;
$truncardecimal1=bcadd(sprintf('%F', $totalpagar1), '0', 2);


// PISO N 02
$lectanterior2=$_REQUEST['anterior2'];
$lectactual2=$_REQUEST['actual2'];


$consumo2=$lectactual2-$lectanterior2;
$costo1kWh2=$totalrecibo/$khwtotal;
$totalpagar2=$consumo2*$costo1kWh2;
$truncardecimal2=bcadd(sprintf('%F', $totalpagar2), '0', 2);

// PISO N 03
$precio3=$totalrecibo-($truncardecimal1+$truncardecimal2);
$truncardecimal3=bcadd(sprintf('%F', $precio3), '0', 2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Consumo Medidor Eléctrico</title>
</head>
<body>

<div style="text-align:center;">
<a href="https://prueba-php-recoger.herokuapp.com/" id="Anyadir-Rutina-btn" target="_blank"> Volver</a>
</div>
<div style="text-align:center;">
<input type="button" value="Imprimir Recibos" onclick="window.print()">
</div>

<table class="default" align="center" width="100%">
		<tr>
			<td align="left" colspan="2"><img class="electro" width="150px" src="img/ElectroCalude.png"></td>
            <td align="left" colspan="1"><img width="70px" align="right" src="img/Recuerda.png"></td>
            <td align="left" colspan="3"><p class="frase" size="2" face="Arial">Nada desmotiva tanto como los clientes morosos. <br> Hacen que sea difícil disfrutar de los negocios.</p></td>
		</tr>
		<tr bgcolor="#EEEEEE">
			<td class="nombre" colspan="3"><font size="5" face="Arial Black">CALZADA COLLAZOS, Catylee Daysi</font><br>Jr. Tarapaca 00S/N<br>Pblo PILCOMAYO<br>Pilcomayo, Huancayo - Junin<br><br></td>
			<td align= "center "colspan="2">TOTAL A PAGAR:<br><font size="6" face="Arial Black"><?php echo $truncardecimal1 ?></font></td>
		</tr>
		<tr bgcolor="#EEEEEE">
			<td class="nombre" colspan="3"><font size="2" face="Arial Black">RECIBO Nº  :</font> 811920400327<br><font size="2" face="Arial Black"></font>20129646099</td>
			<td colspan="2"><font size="2" face="Arial Black">Recibo por Consumo del:  </font>26/11/2022 - 26/12/2022 </td>
		</tr>
		<tr bgcolor="#EEEEEE">
			<td><font size="2" face="Arial Black">Consumo Total:</font> <?php echo $khwtotal ?> </td> 
			<td><font size="2" face="Arial Black">Suministro:</font> 69038870 </td>
			<td><font size="2" face="Arial Black">Inicio Contrato: </font>04/11/2022</td>
			<td><font size="2" face="Arial Black">Fecha de Vencimiento: 14/01/2023 </font></td>
			<td><font size="2" face="Arial Black">Corte del Servicio:<br>15/01/2023 </font></td>
		</tr>
	</table>



    <table class="default" align="center" width="50%">
            <tr>
                <td align="left" colspan="2"><img class="electro" width="150px" src="img/ElectroCalude.png"></td>
                <td align="left" colspan="1"><img width="70px" align="right" src="img/Recuerda.png"></td>
                <td align="center" colspan="3"><p class="frase" size="2" face="Arial">Nada desmotiva tanto como los clientes morosos. <br> Hacen que sea difícil disfrutar de los negocios.</p></td>
            </tr>
            <tr bgcolor="#EEEEEE">
                <td class="nombre" colspan="3"><font size="5" face="Arial Black">CALZADA COLLAZOS, Leslie Lucero</font><br>Jr. Tarapaca 00S/N<br>Pblo PILCOMAYO<br>Pilcomayo, Huancayo - Junin<br><br></td>
                <td align= "center "colspan="2">TOTAL A PAGAR:<br><font size="6" face="Arial Black"><?php echo $truncardecimal2 ?></font></td>
            </tr>
            <tr bgcolor="#EEEEEE">
                <td colspan="3"><font size="2" face="Arial Black">RECIBO Nº  :</font> 811920400327<br><font size="2" face="Arial Black"></font>20129646099</td>
                <td colspan="2"><font size="2" face="Arial Black">Recibo por Consumo del:  </font>26/11/2022 - 26/12/2022 </td>
            </tr>
            <tr bgcolor="#EEEEEE">
                <td><font size="2" face="Arial Black">Consumo Total:</font> <?php echo $khwtotal ?> </td> 
                <td><font size="2" face="Arial Black">Suministro:</font> 69038870 </td>
                <td><font size="2" face="Arial Black">Inicio Contrato: </font>04/11/2022</td>
                <td><font size="2" face="Arial Black">Fecha de Vencimiento: 14/01/2023 </font></td>
                <td><font size="2" face="Arial Black">Corte del Servicio:<br>15/01/2023 </font></td>
            </tr>
	</table>


    

    <table class="default" align="center" width="50%">
            <tr>
                <td align="left" colspan="2"><img class="electro" width="150px" src="img/ElectroCalude.png"></td>
                <td align="left" colspan="1"><img width="70px" align="right" src="img/Recuerda.png"></td>
                <td align="center" colspan="3"><p class="frase" size="2" face="Arial">Nada desmotiva tanto como los clientes morosos. <br> Hacen que sea difícil disfrutar de los negocios.</p></td>
            </tr>
            <tr bgcolor="#EEEEEE">
                <td class="nombre" colspan="3"><font size="5" face="Arial Black">CALZADA COLLAZOS, Deyvid Alejandro</font><br>Jr. Tarapaca 00S/N<br>Pblo PILCOMAYO<br>Pilcomayo, Huancayo - Junin<br><br></td>
                <td align= "center "colspan="2">TOTAL A PAGAR:<br><font size="6" face="Arial Black"><?php echo $truncardecimal3 ?></font></td>
            </tr>
            <tr bgcolor="#EEEEEE">
                <td colspan="3"><font size="2" face="Arial Black">RECIBO Nº  :</font> 811920400327<br><font size="2" face="Arial Black"></font>20129646099</td>
                <td colspan="2"><font size="2" face="Arial Black">Recibo por Consumo del:  </font>26/11/2022 - 26/12/2022 </td>
            </tr>
            <tr bgcolor="#EEEEEE">
                <td><font size="2" face="Arial Black">Consumo Total:</font> <?php echo $khwtotal ?> </td> 
                <td><font size="2" face="Arial Black">Suministro:</font> 69038870 </td>
                <td><font size="2" face="Arial Black">Inicio Contrato: </font>04/11/2022</td>
                <td><font size="2" face="Arial Black">Fecha de Vencimiento: 14/01/2023 </font></td>
                <td><font size="2" face="Arial Black">Corte del Servicio:<br>15/01/2023 </font></td>
            </tr>
	</table>
    
</body>
</html>