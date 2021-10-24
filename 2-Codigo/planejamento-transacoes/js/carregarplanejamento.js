const carregarPlanejamentos = () =>{
    fetch(`backend/carregarplanejamentos.php`, {
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
                            <td>${data[i].planejamento}</td>
                            <td>${data[i].descricao}</td>
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
                      "url": "json/Portuguese-Brasil.json"
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
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Planejamentos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Planejamento:</label>
              <input type="text" class="form-control" id="alteracaoPlanejamento" value="${data.planejamento}">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Descrição:</label>
              <input type="text" class="form-control" id="alteracaoDescricao" value="${data.descricao}">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          <button type="button" onclick="salvarPlanejamento(${data.id})" class="btn btn-success">Salvar</button>
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

    // alert(alteracaoPlanejamento)
    // alert(alteracaoDescricao)

    if(alteracaoDescricao == ""){
        alert("Preecha o campo descrição!")
        return
    }
    if(alteracaoPlanejamento == ""){
        alert("Preencha o campo observação!")
        return
    }
    fetch(`backend/alteracaoplanejamento.php`, {
        credentials: 'same-origin',
        method: 'POST',
        body: `id=${id}&alteracaoDescricao=${alteracaoDescricao}&alteracaoPlanejameto=${alteracaoPlanejamento}`,
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        }
      }).then(function (response) {
        response.json().then(data => {
          if(data.RETORNO == "SUCESSO"){
            
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
    fetch(`backend/deletaplanejamento.php`, {
        credentials: 'same-origin',
        method: 'POST',
        body: `id=${id}`,
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        }
    }).then(function (response) {
        response.json().then(data => {
            if(data.RETORNO == "SUCESSO"){
                alert("Sucesso ao deletar")
            }else{
                alert("Erro ao deletar")
            }
    
        })
    }).catch(function (error) {
        SwalFire("error","Atenção","Sistema indisponivel no momento!")
     
    
    })
}