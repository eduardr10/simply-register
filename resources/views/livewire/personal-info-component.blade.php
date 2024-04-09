<div class="container">
  <h2>Formulario</h2>

  <form>
    <div class="form-group">
      <label for="id_card">Cédula de identidad</label>
      <input type="text" id="id_card" class="form-control">
    </div>
    <div class="form-group">
      <label for="rank">Rango</label>
      <select id="rank" class="form-control">
        <option value="">Seleccione un rango</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="TN">TN</option>
      </select>
    </div>
    <div class="form-group">
      <label for="last_name">Apellido</label>
      <input type="text" id="last_name" class="form-control">
    </div>
    <div class="form-group">
      <label for="first_name">Nombre</label>
      <input type="text" id="first_name" class="form-control">
    </div>
    <div class="form-group">
      <label for="observation">Observación</label>
      <textarea id="observation" class="form-control"></textarea>
    </div>
    <button type="submit" class="mt-3">Guardar</button>
  </form>

  <h2>Listado</h2>

  <table>
    <thead>
      <tr>
        <th>Cédula</th>
        <th>Rango</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Observación</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>123456789</td>
        <td>S1</td>
        <td>Pérez</td>
        <td>Juan</td>
        <td>Lorem ipsum dolor sit amet.</td>
      </tr>
      <tr>
        <td>987654321</td>
        <td>S2</td>
        <td>Gómez</td>
        <td>Ana</td>
        <td>Consectetur adipiscing elit.</td>
      </tr>
    </tbody>
  </table>
</div>
