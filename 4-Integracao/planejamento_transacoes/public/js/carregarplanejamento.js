const carregarPlanejamentos = () =>{
    fetch(`../public/backend/carregarplanejamentos.php`, {
        credentials: 'same-origin',
        method: 'POST',
        body: ``,
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        }
    }).then(function (response) {
        response.json().then(data => {
            if(data.RETORNO == "ERRO"){
                // Aqui trata o erro da requisição
                let alerta = `
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;Atenção!</strong> Não foi possivel encontrar registros!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              `
              $("#retorno").html(alerta)
            }else{
                // Aqui trata o sucesso
                // Monta a Tabela
                let tabela = `
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Carregamento dos Planejamentos</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Nome do Planejamento</th>
                            <th>Descrição Planejamento</th>
                            <th>Data do Planejamento</th>
                            <th>Valor do Planejameto</th>
                            <th>Vizualizar</th>
                            <th>Excluir</th>
                          </tr>
                        </thead>
                        <tbody>`
                        // Aqui iremos trazer a tabela dinamicamente do PHP
                        // data.length = quantidade de registros retornados da cosulta
                        for(let i=0;i<data.length;i++){
                          tabela +=`
                          <tr>
                            <td>${data[i].id}</td>
                            <td>${data[i].nome}</td>
                            <td>${data[i].descricao}</td>
                            <td>${data[i].data}</td>
                            <td>${data[i].valor}</td>
                            <td class="text-center">
                            <button class="btn btn-info btn-circle" data-toggle="modal" data-target="#modal" 
                            onclick="MontaModal(${JSON.stringify(data[i]).split('"').join("&quot;")})">
                                <i class="fas fa-eye"></i>
                            </button>
                            </td>
                            <td class="text-center">
                            <button class="btn btn-danger btn-circle"
                            onclick="DeletarPlanejamento(${JSON.stringify(data[i]).split('"').join("&quot;")})">
                                <i class="fas fa-trash"></i>
                            </button>
                            </td>
                          </tr>
                          `
                        }
                        tabela +=`
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                `
                let coluna = 0
                let ordem = "desc"
                $("#retorno").html(tabela)
                // inicializa a tabela em formato DataTable em pt-br
                $('#dataTable').DataTable({
                  "language": {
                      // "url": "json/Portuguese-Brasil.json"
                  },
                  // Faz a tabela vim do ultimo registro para o primeiro
                  "order": [[ coluna, ordem ]]
                })
            }
        })
    }).catch(function (error) {

    })
}
const carregarTransacoes = () =>{
  fetch(`../public/backend/carregartransacoes.php`, {
      credentials: 'same-origin',
      method: 'POST',
      body: ``,
      headers: {
          'Content-type': 'application/x-www-form-urlencoded'
      }
  }).then(function (response) {
      response.json().then(data => {
          if(data.RETORNO == "ERRO"){
              // Aqui trata o erro da requisição
              let alerta = `
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;Atenção!</strong> Não foi possivel encontrar registros!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            `
            $("#retorno").html(alerta)
          }else{
              // Aqui trata o sucesso
              // Monta a Tabela
              let tabela = `
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Carregamento dos Planejamentos</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nome da Transação</th>
                          <th>Descrição Transação</th>
                          <th>Data do Transação</th>
                          <th>Valor da Transação</th>
                          <th>Vizualizar</th>
                          <th>Excluir</th>
                        </tr>
                      </thead>
                      <tbody>`
                      // Aqui iremos trazer a tabela dinamicamente do PHP
                      // data.length = quantidade de registros retornados da cosulta
                      for(let i=0;i<data.length;i++){
                        tabela +=`
                        <tr>
                          <td>${data[i].id}</td>
                          <td>${data[i].nome}</td>
                          <td>${data[i].descricao}</td>
                          <td>${data[i].data}</td>
                          <td>${data[i].valor}</td>
                          <td class="text-center">
                          <button class="btn btn-info btn-circle" data-toggle="modal" data-target="#modal" 
                          onclick="MontaModal(${JSON.stringify(data[i]).split('"').join("&quot;")})">
                              <i class="fas fa-eye"></i>
                          </button>
                          </td>
                          <td class="text-center">
                          <button class="btn btn-danger btn-circle"
                          onclick="DeletarPlanejamento(${JSON.stringify(data[i]).split('"').join("&quot;")})">
                              <i class="fas fa-trash"></i>
                          </button>
                          </td>
                        </tr>
                        `
                      }
                      tabela +=`
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              `
              let coluna = 0
              let ordem = "desc"
              $("#retorno").html(tabela)
              // inicializa a tabela em formato DataTable em pt-br
              $('#dataTable').DataTable({
                "language": {
                    // "url": "json/Portuguese-Brasil.json"
                },
                // Faz a tabela vim do ultimo registro para o primeiro
                "order": [[ coluna, ordem ]]
              })
          }
      })
  }).catch(function (error) {

  })
}
const MontaModal = (data) =>{
    // console.log(data)
    let modal = `
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Alterar Planejamentos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="alteracaoPlanejamento" class="col-form-label">Nome:</label>
                <input type="text" class="form-control" id="alteracaoPlanejamento" value="${data.nome}">
              </div>
              <div class="form-group">
                <label for="alteracaoDescricao" class="col-form-label">Descrição:</label>
                <input type="text" class="form-control" id="alteracaoDescricao" value="${data.descricao}">
              </div>
              <div class="form-group">
                <label for="alteracaoData" class="col-form-label">Data:</label>
                <input type="text" class="form-control" id="alteracaoData" value="${data.data}">
              </div>
              <div class="form-group">
                <label for="alteracaoValor" class="col-form-label">Valor:</label>
                <input type="text" class="form-control" id="alteracaoValor" value="${data.valor}">
            </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-success" onclick="salvarPlanejamento(${data.id})">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  `
    $("#modal").html(modal)
    //PesquisarObsCurriculo(data.id)
  }
const salvarPlanejamento = (id) =>{
    let alteracaoDescricao = $("#alteracaoDescricao").val()
    let alteracaoPlanejamento = $("#alteracaoPlanejamento").val()
    let alteracaoData = $("#alteracaoData").val()
    let alteracaoValor = $("#alteracaoValor").val()
    // alert(alteracaoPlanejamento)
    // alert(alteracaoDescricao)

    if(alteracaoDescricao == ""){
      Swal.fire({
        icon: 'error',
        title: 'Atenção',
        text: 'Campo Descrição obrigatório!',
      })
        return
    }
    if(alteracaoPlanejamento == ""){
      Swal.fire({
        icon: 'error',
        title: 'Atenção',
        text: 'Campo Nome obrigatório!',
      })
        return
    }
    if(alteracaoData == ""){
      Swal.fire({
        icon: 'error',
        title: 'Atenção',
        text: 'Campo data obrigatório!',
      })
      return
    }
    if(alteracaoValor == ""){
      Swal.fire({
        icon: 'error',
        title: 'Atenção',
        text: 'Campo valor obrigatório!',
      })
      return
    }
    fetch(`../public/backend/alteracaoplanejamento.php`, {
        credentials: 'same-origin',
        method: 'POST',
        body: `id=${id}&alteracaoDescricao=${alteracaoDescricao}&alteracaoPlanejamento=${alteracaoPlanejamento}&alteracaoData=${alteracaoData}&alteracaoValor=${alteracaoValor}`,
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        }
      }).then(function (response) {
        response.json().then(data => {
          if(data.RETORNO == "SUCESSO"){
            Swal.fire({
              icon: 'success',
              title: "Sucesso!",
              text: "Planejamento alterado com sucesso!"
              }).then(function(){
                  window.location.href = "carregarPlanejamentos.html"                 
              })
          }else{
            SwalFire("error","Erro!","Erro ao cadastradar!")
          }
        })
        }).catch(function (error) {
          SwalFire("error","Erro!","Sistema indisponível, tente novamente mais tarde!")
     
    
      })
}
const DeletarPlanejamento = (data) =>{
    // alert("olá")
    let id = data.id
    // alert (id)
    fetch(`../public/backend/deletaplanejamento.php`, {
        credentials: 'same-origin',
        method: 'POST',
        body: `id=${id}`,
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        }
    }).then(function (response) {
        response.json().then(data => {
            if(data.RETORNO == "SUCESSO"){
                Swal.fire({
                icon: 'success',
                title: "Sucesso!",
                text: "Planejamento deletado com sucesso!"
                }).then(function(){
                    window.location.href = "carregarPlanejamentos.html"                 
                })
            }else{
                alert("Erro ao deletar")
            }
    
        })
    }).catch(function (error) {
        SwalFire("error","Atenção","Sistema indisponivel no momento!")
     
    
    })
}
