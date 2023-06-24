
    @csrf
    <label for="codPrograma">Código de Programa:</label>
    <input type="text" id="codPrograma" name="codPrograma" value="{{ isset($programa->codPrograma)?$programa->codPrograma:''}}" required><br><br>

    <label for="nomPrograma">Nombre de Programa:</label>
    <input type="text" id="nomPrograma" name="nomPrograma"  value="{{ isset($programa->nomPrograma)?$programa->nomPrograma:''}}"  required><br><br>

    <label for="facultad">Facultad:</label>
    <input type="text" id="facultad" name="facultad"  value="{{ isset($programa->facultad)?$programa->facultad:''}}" required><br><br>

    <button class="btn btn-success" type="submit" >Guardar</button>
    <a class="btn btn-success" href="/programas/listado/">Regresar</a>