<!DOCTYPE html>
<html lang="es-ES">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Esta descripción es la que aparece en los buscadores debajo de la URL" />
	<link href="practica7.css" rel="stylesheet" type="text/css" />
	<link href="formulario.css" rel="stylesheet" type="text/css" />
	<link href="resets.css" rel="stylesheet" type="text/css" />
	
	<title>Registro de candidato</title>
<body>

 
	<header>
		<img src="LOGOIHB.jpg">
		

	</header>

<main>
		<h1>¡Registro a examen para presentar en International House!</h1>

		<h1>Por favor captura tus datos <u>así aparecerá tu certificado</u> después sube tus documentos.</h1>
	


		<form method="post">

			<div class='field'>
				<label>Nombre(s) en mayuscula</label>
				<input name="name" type='text'  placeholder='Nombre(s) completos' required autocomplete />
			</div>



			<div class='field'>
				<label>Apellidos en mayuscula</label>
				<input name="apellidos" type='text'  placeholder="Apellidos completos" required autocomplete />
			</div>

            


			<div class='field'>
				<label>Fecha de nacimiento </label>
				<input type="date"name="fechana" title=" ejemplo:15/02/1980"  placeholder="ejemplo:12/02/1990"
       required autocomplete />
			</div>




<div class='field'>
				<label>correo electronico</label>
				<input name="email" type='email'  placeholder="email" required autocomplete />
			</div>

<div class='field'>
				<label>celular de contacto</label>
				<input name="celular" type='number'  placeholder="ingrese solo numeros" required autocomplete />
                			</div>

 <div class='field'>
 <label>Número de identificación</label>
 <input name="identifica" type='text'  placeholder="ver foto de referencia " required autocomplete />
 </div>
 <img src="inenum.jpg" width="200" height="150" />
 <img src="pasnum.jpg"width="460" height="150" />


 <div class='field'>
	
    <label>Gender</label>
   <label for "" gender:</label>
   <select required name="seccion"[]">
   <option value=""  > Gender</option>
   <option value="male"  > male</option>
   <option value="female" > female</option>
     </select>
                   
           </div>



			<div class='field'>
	
     <label>Examen</label>
    <label for "" examen:</label>
    <select required name="examen"[]">
    <option value=""  > Elija el examen</option>
    <option value="KET"  > KET</option>
    <option value="PET" > PET</option>
    <option value="FCE" > FCE</option> 
	<option value="IELTS" > IELTS</option>   
    </select>
					
			</div>


                         <div class='field'>


</div>   

     <div class='field'>
     <label>Escuela</label>	
    <label for "" escuela:</label>
    <select required name="escuela"[]">
     <option value=""  > Elija su campus</option>    
	<option value="HUMANITAS MADIN" > HUMANITAS MADIN</option>
	<option value="HUMANITAS SANTA FE"  > HUMANITAS SANTA FE</option>
	<option value="HUMANITAS REYES"  > HUMANITAS REYES</option>
	<option value="HUMANITAS VALLE"  > HUMANITAS VALLE</option>
 
           
</select>	</div>

</div>   



<div>
	
    <input type="checkbox" 
    <select  required name="version"[]"></select> <label>Mis datos estan correctos,así aparecerá en mi certificado,estoy enterado que para concluir la inscripción debo cubrir el costo total y subir mis documentos correctamente.</label>
 
</div>
<div>
	
    <input type="checkbox" 
    <select required name="acepto"[]"></select> <label>Acepto terminos y condiciones</label>
 
</div>
			
<div>
	<input type="submit" name="register" value="Enviar"> <br> Si te aparece  una barra verde con el texto "Datos registrados" quiere decir que tus datos se enviaron. Ahora sube tus documentos.
 
</div>

        </form>
	
<?php 
        include("registrohumanitas.php");
        ?>



		<h1>¡Sube tus documentos!</h1>

		<h4>
			1.-INE o pasaporte  2.-Pagos Completos. 3.-Carta de Terminos y condiciones 4.- Carta consentimiento COVID.
		</h4>

<h4><a href="https://www.dropbox.com/request/1HRS01VD54QOYb3otosJ" class="btn btn-green"><u>De click aquí para subir tus documentos</u> </a></h4>

<h4>1.-Ine o pasaporte legible a <u>color ambos lados</u> en<u> un solo archivo</u> 2.-pagos <u>legibles</u> 3 y 4.- cartas <u> llenadas y firmadas</u> </h4>
<H4>
<img src="INEOK.png"width="150" height="250" />
<img src="INEWRONG.png"width="150" height="250" />
</H4>


<h1>Descarga las cartas necesarias</h1>
	
<P><h4><a href="https://lvsihmx.github.io/certificadoih/img/terminosycondicioneshumanitas1.pdf" class="btn btn-green"><u>De click aquí para descargar carta de terminos y condiciones</u> </a></h4></p>	

	
	
	<P><h4><a href="https://lvsihmx.github.io/certificadoih/img/covidadul.docx" class="btn btn-green"><u>De click aquí para descargar carta consentimiento COVID</u> </a></h4></p>	


<section class='sctVentajas'>
			<h2>Aviso de Privacidad: Al momento de enviar sus datos acepta que sean utilizados unicamente para el proceso y comunicación en la inscripción al examen, </h2>
			
</section>

<section >
			<h2>  International House resguardará estos datos y al termino del proceso serán destruidos.</h2>
			
</section>

	</main>
</body>

</html>