<label for="codEstudiante">Código del Estudiante:</label>
<input type="text" id="codEstudiante" name="codEstudiante" value="{{ isset($estudiante->codEstudiante)?$estudiante->codEstudiante:''}}" required><br><br>

<label for="nomEstudiante">Nombre del Estudiante:</label>
<input type="text" id="nomEstudiante" name="nomEstudiante" value="{{ isset($estudiante->nomEstudiante)?$estudiante->nomEstudiante:''}}" required><br><br>

<label for="edadEstudiante">Edad del Estudiante:</label>
<input type="text" id="edadEstudiante" name="edadEstudiante" value="{{ isset($estudiante->edadEstudiante)?$estudiante->edadEstudiante:''}}" required><br><br>

<label for="fechaEstudiante">Fecha del Estudiante:</label>
<input type="date" id="fechaEstudiante" name="fechaEstudiante" value="{{ isset($estudiante->fechaEstudiante)?$estudiante->fechaEstudiante:''}}" required><br><br>

<label for="sexEstudiante">Sexo del Estudiante:</label>
<input type="text" id="sexEstudiante" name="sexEstudiante" value="{{ isset($estudiante->sexEstudiante)?$estudiante->sexEstudiante:''}}" required><br><br>

<label for="ciudad">Ciudad:</label>
<input type="text" id="ciudad" name="ciudad" value="{{ isset($estudiante->ciudad)?$estudiante->ciudad:''}}" required><br><br>

<label for="barrio">Barrio:</label>
<input type="text" id="barrio" name="barrio" value="{{ isset($estudiante->barrio)?$estudiante->barrio:''}}" required><br><br>

<label for="programa">Programa:</label>
<input type="text" id="programa" name="programa"  value="{{ isset($estudiante->programa)?$estudiante->programa:''}}"  required><br><br>

<button class="btn btn-success" type="submit" >Guardar</button>
<a class="btn btn-success" href="/estudiantes/listado/">Regresar</a>