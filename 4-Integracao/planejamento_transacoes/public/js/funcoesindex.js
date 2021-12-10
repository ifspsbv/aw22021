// const Verifica = () =>{
//     let tipo = $("#tipo").val()
//     if(tipo == 2){
//         $("#valor").attr('disabled',true)
//     }else{
//         $("#valor").attr('disabled',false)
//     }
    
// }
const verificaData = () =>{
    let data = $("#dataplanejamento").val()
    // alert(data)
    // if(data<Date.now()){
    //     alert("Coloque uma data válida!")
    //     return
    // }
}
const CadastrarPlanejamento = () =>{
    let planejameto = $("#planejamento").val()
    let descricaoplanejamento = $("#descricaoplanejamento").val()
    let tipo = $("#tipo").val()
    // alert(tipo)
    let data = $("#dataplanejamento").val()
    let valor =$("#valor").val()

    //alert(planejameto)
    //alert(descricaoplanejamento)

    if(planejameto == ""){
        Swal.fire({
            icon: 'error',
            title: 'Atenção',
            text: 'Campo nome obrigatório!',
          })
        return
    }
    if(descricaoplanejamento == ""){
        Swal.fire({
            icon: 'error',
            title: 'Atenção',
            text: 'Campo descrição obrigatório!',
          })
        return
    }
    if(data == ""){
        Swal.fire({
            icon: 'error',
            title: 'Atenção',
            text: 'Campo data obrigatório!',
          })
        return
    }
    if(valor == ""){
        Swal.fire({
            icon: 'error',
            title: 'Atenção',
            text: 'Campo valor obrigatório!',
          })
        return
    }


    fetch(`../public/backend/cadastraplanejamento.php`, {
        credentials: 'same-origin',
        method: 'POST',
        body: `planejamento=${planejameto}&descricaoplanejamento=${descricaoplanejamento}&data=${data}&valor=${valor}&tipo=${tipo}`,
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        }
    }).then(function (response) {
        response.json().then(data => {
            if(data.RETORNO == "SUCESSO"){
                // alert("Sucesso ao inserir")
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso!',
                    text: 'Cadastro efetuado com sucesso!',
                  })
                $("#form-planejamento")[0].reset()
            }else{
                alert("Erro ao inserir")
            }
     
    
    
        })
    }).catch(function (error) {
        SwalFire("error","Atenção","Sistema indisponivel no momento!")
     
    
    })
}