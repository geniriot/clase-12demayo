<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h3>Estudiantes</h3>
<p>Con una consulta a <a href="http://dis.uchilefau.cl/datos-duros/ ">http://dis.uchilefau.cl/datos-duros/ </a>podemos saber los datos existentes acerca de los estudiantes que ingresan a la facultad de arquitectura y urbanismo.</p>

<img src="img/puntajsporaño.png" class="img-responsive">


<p>En el gráfico siguiente se muestra la diversidad de establecimientos educacionales de procedencia de los estudiantes que ingresan al primer año de la carrera de Diseño de la Universidad de Chile:  </p>

<img src="img/procedencia.png" class="img-responsive">

</section>
<footer>
<p>Mayo de 2017 &bull; Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a>.</p>
</footer>
</div><!--/col-sm-10 col-sm-offset-1-->
</div><!--/row-->
</div><!--/container-->
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
