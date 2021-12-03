<!--Código bootstrap do formulário-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Album example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Formulário</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>
  <section class="py-5 container">
    <div class="row py-lg-5">
      <div class="col-lg-12 col-md-12 mx-auto">
        <h1 class="fw-light">Mine Horta Vale Verde</h1>
      </div>
    </div>
  </section>
  <form action="salva.php" method="post">
    <div class="container">
      <div class="row">
        <div class="col">
          <label class="form-label" for="id_numero"> N°: </label> 
          <input type="text" id="id_numero" class="form-control" name="numero">
        </div> 
        <div class="col">
          <label class="form-label" for="id_data">Data: </label> 
          <input type="date" id="id_data" class="form-control" name="data">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label class="form-label" for="id_firma"> Firma: </label> 
          <input type="text" id="id_firma" class="form-control" name="firma" size="55">
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <label class="form-label" for="id_endereco"> Endereço: </label> 
          <input type="text" id="id_endereco" class="form-control" name="endereco" size="27">
        </div>
        <div class="col-4">
          <label class="form-label" for="id_complemento"> Compl: </label> 
          <input type="text" id="id_complemento" class="form-control" name="complemento" size="5">      
        </div>
      </div> 
      <div class="row">
        <div class="col-6">
          <label class="form-label" for="id_bairro"> Bairro: </label> 
          <input type="text" id="id_bairro" class="form-control" name="bairro" size="18">
        </div>
        <div class="col-6">
          <label class="form-label" for="id_uf"> UF: </label>
          <select name="uf" id="id_uf" class="form-control">
            <option></option>
            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia">Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Distrito Federal">Distrito</option>
            <option value="Espirito Santo">Espirito</option>
            <option value="Goiás">Goiás</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Pará">Pará</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Paraná">Paraná</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Sergipe">Sergipe</option>
            <option value="Tocantins">Tocantins</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <label class="form-label" for="id_cep">CEP:</label>
          <input id="id_cep" type="text" class="form-control" name="cep" size="8">
        </div>
        <div class="col-4">
          <label class="form-label" for="id_cnpj"> CNPJ: </label>  
          <input type="text" id="id_cnpj" class="form-control" name="cnpj" size="8">
        </div>
        <div class="col-4">
          <label class="form-label" for="id_inscricao"> Inscr.: </label>
          <input type="text" id="id_inscricao" class="form-control" name="inscricao" size="8">
        </div>
      </div> 
      <div class="row">
        <div class="col">
          <label class="form-label" for="id_telefones">Tels:</label>
          <input type="text" id="id_telefones" class="form-control" name="telefones" size="20">
        </div>
        <div class="col">
          <label class="form-label" for="id_celular"> Cel: </label>
          <input type="text" id="id_celular" class="form-control" name="celular">
        </div>
      </div> 
      <div class="row">
        <div class="col">
          <label class="form-label" for="id_email"> E-mail: </label>
          <input type="text" id="id_email" class="form-control" name="email" size="50">
        </div>
      </div> 
      <div class="row">
        <div class="col">
          <label class="form-label" for="id_observacoes"> OBS: </label>
          <textarea rows="6" id="id_observacoes" class="form-control" cols="40" name="observacoes"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-check">
            <input type="radio" class ="form-check-input" name="termos" value="concordo" id="id_termos"> 
            <label for="id_termos" class="form-check-label">
              Concordo com os termos
            </label>
          </div>
          <div class="form-check">
            <input type="radio" class ="form-check-input" name="termos" value="discordo" id="id_termos"> 
            <label for="id_termos" class="form-check-label">
              Não concordo com os termos
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4"> 
          <label for="id_enviar"></label>
          <input type="submit" class="btn btn-info" id="id_enviar" name="enviar" value="Enviar"> 
        </div>
        <div class="col-8"> 
          <label for="id_redefinir"></label>
          <input type="reset" class="btn btn-info" id="id_redefinir" name="redefinir" value="Redefinir">
        </div>
      </div>
    </div>
  </form>
</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
