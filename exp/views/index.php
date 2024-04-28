<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Persona</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center p-5">
        <div class="col-sm-6">
          <h5>Formulario para crear Expediente</h5>
          <hr />
          <form action="javascript:void(0);" onsubmit="app.save()">
            <input type="hidden" id="id" />
            <label for="dnte">Denunciante</label>
            <input
              type="text"
              class="form-control"
              id="dnte"
              placeholder="Denunciante"
              autofocus
              required
            />
            <input type="hidden" id="id" />
            <label for="dndo">Denunciado</label>
            <input
              type="text"
              class="form-control"
              id="dndo"
              placeholder="Denunciado"
              autofocus
              required
            />
            <label for="ofen">Ofendido</label>
            <input
              type="text"
              class="form-control"
              id="ofen"
              placeholder="Ofendido"
              required
            />
            <label for="desch">Descripcion de los hechos</label>
            <input
            type="text"
            class="form-control"
            id="desch"
            placeholder="Descripcion"
            required
          />
          <label for="fden">Fecha de la denuncia</label>
            <input
            type="text"
            class="form-control"
            id="fden"
            placeholder="Fecha de la denuncia"
            required
          />
          <label for="fsuc">Fecha del suceso</label>
            <input
            type="text"
            class="form-control"
            id="fsuc"
            placeholder="Fecha del suceso"
            required
          />
            <br />
            <div>
              <button type="submit" class="btn btn-primary">Guardar</button>
              <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
          </form>
          <br />
          <h5>Listado</h5>
          <hr />
          <table class="table">
            <thead>
              <tr>
                <th>idExpediente</th>
                <th>Denunciante</th>
                <th>Denunciado</th>
                <th>Ofendido</th>
                <th>Descripcion de los hechos</th>
                <th>Fecha de la denuncia</th>
                <th>Fecha del suceso</th>
              </tr>
            </thead>
            <tbody id="tbody"></tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="../assets/code.js">
      
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
