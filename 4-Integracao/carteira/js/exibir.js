const carregarCarteira = () =>{
    fetch(`backend/carregarcarteira.php`, {
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
                    <h6 class="m-0 font-weight-bold text-primary">Carregamento da carteira</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Nome da carteira</th>
                            <th>Descrição Carteira</th>
                            <th>Data</th>
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
                            <td>${data[i].ctr_id}</td>
                            <td>${data[i].ctr_nome}</td>
                            <td>${data[i].ctr_desc}</td>
                            <td>${data[i].ctr_data}</td>
                            <td class="text-center">
                            <button class="btn btn-info btn-circle" data-toggle="modal" data-target="#modal" 
                            onclick="MontaModal(${JSON.stringify(data[i]).split('"').join("&quot;")})">
                                <i class="fas fa-eye"></i>
                            </button>
                            </td>
                            <td class="text-center">
                            <button class="btn btn-danger btn-circle"
                            onclick="DeletarCarteira(${JSON.stringify(data[i]).split('"').join("&quot;")})">
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
          <h5 class="modal-title" id="exampleModalLabel">Carteira</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nome:</label>
              <input type="text" class="form-control" id="alteracaoCarteira" value="${data.ctr_nome}">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Descrição:</label>
              <input type="text" class="form-control" id="alteracaoDescricao" value="${data.ctr_desc}">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Descrição:</label>
                <input type="text" class="form-control" id="alteracaoData" value="${data.ctr_data}">
          </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          <button type="button" onclick="salvarCarteira(${data.ctr_id})" class="btn btn-success">Salvar</button>
        </div>
      </div>
    </div>
  `
    $("#modal").html(modal)
    //PesquisarObsCurriculo(data.id)
  }
const salvarCarteira = (id) =>{
    let alteracaoCarteira = $("#alteracaoCarteira").val()
    let alteracaoDescricao = $("#alteracaoDescricao").val()
    let alteracaoData = $("#alteracaoData").val()

    // alert(alteracaoCarteira)
    // alert(alteracaoDescricao)

    if(alteracaoCarteira == ""){
        alert("Preecha o campo carteira!")
        return
    }
    if(alteracaoDescricao == ""){
        alert("Preencha o campo descrição!")
        return
    }
    if(alteracaoData == ""){
        alert("Preencha o campo data!")
        return
    }
    fetch(`backend/alteracaocarteira.php`, {
        credentials: 'same-origin',
        method: 'POST',
        body: `id=${id}&alteracaoCarteira=${alteracaoCarteira}&alteracaoDescricao=${alteracaoDescricao}&alteracaoData=${alteracaoData}`,
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        }
      }).then(function (response) {
        response.json().then(data => {
          if(data.RETORNO == "SUCESSO"){
            alert('Sucesso ao salvar')
          }else{
            alert('Erro ao salvar')
          }
        })
        }).catch(function (error) {
          SwalFire("error","Erro!","Sistema indisponível, tente novamente mais tarde!")
     
    
      })
}
const DeletarCarteira = (data) =>{
    // alert("olá")
    let id = data.ctr_id
    // alert (id)
    fetch(`backend/deletarcarteira.php`, {
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