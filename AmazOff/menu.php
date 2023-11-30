<ul>
			<li><a><?php 
				if(@$login) 
				echo "<br> Hola: " . $login . "<br>";
					?></a></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="productos.php?categoria=Libro">Compra Libros</a></li>
			<li><a href="productos.php?categoria=CD">Compra CDs</a></li>
			<li><a href="registroUsuario.php">Registro Usuario</a></li>
			<li><a href="index.php#about">About</a></li>
			<?php 
				if(@$login) 
					echo "<li><button><a href='destruirSesion.php'>Logout</a></button></li>";
					else
					echo "<li><button><a href='iniciarSesion.php'>Login</a></button></li>";
				?> 
		</ul>