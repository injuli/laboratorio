<!doctype html>
<html lang="en">
<head>
<link rel="shortcut icon" href="univalle-rojopuro.gif"> 
<title>Préstamo Instrumentos</title>
<link rel='stylesheet' type='text/css' media='screen' href='estilos.css' />
	<meta charset="8">
	<style type="text/css">

	.login ul ul {
	display: none;
	}

    .login ul ul:before {
    position: absolute;
    top: -9px;
    left:38px;
    display: inline-block;
    border-right: 9px solid transparent;
    border-bottom: 9px solid  #BF3542;
    border-left: 9px solid transparent;
    content: '';
    }

	.login ul li:hover > ul {
		display: block;
	}

/*cambiar*/
	.login ul {

	list-style: none;
	position: relative;
	display: inline;
	}

	.login ul li a {
			display: block; 
			color: #757575; 
			text-decoration: none;
		}

	.login ul ul {
		background:  #BF3542;
		border-radius: 0px; 
		padding: 0;
		position: absolute; 
		top: 10%;
	}
	/*cambiar*/
		.login ul ul li {
			float: none; 
			border-top: 1px solid #6b727c;
			border-bottom: 1px solid #D4B2A2; position: relative;
		}
			.login ul ul li a {
				padding: 15px 40px;
				color: #fff;
			}	
				
		

	</style>
</head>
<body>
	<div class="header">
	<nav class="menu-fixed">
	<div class="row">
	<div class="col-s-10">
   <h1>PRÉSTAMO DE INSTRUMENTOS DEL LABORATORIO ELECTRÓNICA</h1>
    </div>
    <div class="col-s-1">
    <nav class="login">
    <ul>
    <li><picture>
    <source srcset="imagenes/monitor1.png" media="(max-width: 30px; )">
    <source srcset="imagenes/monitor1.png">
    <img src="imagenes/monitor1.png" alt="imagen usuario" style="width: auto; "></picture>
    <ul style="margin-top: 68px">
    <li><a href="#home" >Usuario</a></li>
    <li><a href="#about">Cerrar Sesión</a></li>
    </ul>
    </li>
    </ul>
    </nav>
    </div>
    </div>
    </nav>
    </div>

	
<div class="col-s-12 separador"></div>
	<div class="row">
	<div class="col-s-2">
	<ul class="breadcrumb alt">
	  <li><a href="#">Inicio</a></li>
	  <li>Registrar</li>
	</ul>
	</div>
	</div>

<div class="row">
	<div>
	
	<div class="col-s-3 menu">
	<div id="body">
			<div class="subapartado">
			<div class="titulo">
				<p class="titulo">Reservar</p>
			</div>

			<div class="info">
				<p class="info">	
				<li>Préstamo Interno</li>
				<li>Préstamo Externo</li></p>
			</div>


		</div>
		<br>
			<div class="subapartado">
			<div class="titulo">
				<p class="titulo">Consultar</p>
			</div>

			<div class="info">
				<p>	
				<li>Préstamo Interno</li>
				<li>Préstamo Externo</li></p>
			</div>

		</div>
		<br>
			<div class="subapartado">
			<div class="titulo">
				<p class="titulo">Registrar</p>
			</div>

			<div class="info">
				<p class="info">	
				<li>Crear</li>
				<li>Cosultar</li></p>
			</div>

		</div>
		<br>
			<div class="subapartado">
			<div class="titulo">
				<p class="titulo">Inventario</p>
			</div>

			<div class="info">
				<p class="info">	
				<li>Añadir instrumento</li>
				<li>Dar de baja</li></p>
			</div>

	</div>
		<br>
			<div class="subapartado">
			<div class="titulo">
				<p class="titulo">Cuenta</p>
			</div>

			<div class="info">
				<p class="info">	
				<li>Modificar</li>
				<li>Cambiar contraseña</li>
			</div>

		</div>
	</div>
	</div>

<div class="col-s-9 row">

    <div class="content">
     <h2>Registrar</h2>
	<form action="">
	<br>
     <input type="text" name="codigo"
     placeholder="Código o Número de cédula" class="input-100"></input>
     <input type="text" name="nombre"
     placeholder="Nombre completo" class="input-100"></input>

     <select name="tipousuario" class="input-100">
     <option value="estudiante">Estudiante</option>
     <option value="docente">Docente</option>
     <option value="estudiante">Jefe de dependencia</option>
     <option value="empleado">Otro</option>
     </select>
     <select name="genero" class="input-100">
     <option value="femenino">Femenino</option>
     <option value="masculino">Masculino</option>
     </select>
     <input type="text" name="correo"
     placeholder="Correo Electronico" class="input-100"></input>


     <input type="submit" value="Registrar">

     </form>

  </div>
  </div>


<div class="col-s-12 separador"></div>

<div class="col-s-12 footer">
<div class="row">
<div class="col-s-4"></div>
<div class="col-s-1 img" > </div>
<div class="col-s-4">  <p>Dirección De Nuevas Tecnologías y Educación Virtual-Dintev <br>
campusvirtual@correounivalle.edu.co
Telefonos: +57 2 318 2649 ó 321 2100 Ext. 2649
Edificio 317-CREE Ciudadela Universitaria Meléndez
Universidad Del Valle
Cali-Colombia</p></div>

  </div>
  </div>

</body>
</html>