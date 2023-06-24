<label for="codProfesor">Código del Profesor:</label>
<input type="text" id="codProfesor" name="codProfesor" value="{{ isset($profesor->codProfesor)?$profesor->codProfesor:''}}" required><br><br>

<label for="nomProfesor">Nombre del Profesor:</label>
<input type="text" id="nomProfesor" name="nomProfesor"  value="{{ isset($profesor->nomProfesor)?$profesor->nomProfesor:''}}"  required><br><br>

<label for="catProfesor">Categoria Profesor:</label>
<input type="text" id="catProfesor" name="catProfesor"  value="{{ isset($profesor->catProfesor)?$profesor->catProfesor:''}}" required><br><br>

<button class="btn btn-success" type="submit" >Guardar</button>
<a class="btn btn-success" href="/profesores/listado/">Regresar</a>