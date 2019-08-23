$('.visualizaModal').click(function(){
    console.log($(this));
    $('#nomeView').html($(this).data('nome'));
    $('#precoVIew').html($(this).data('preco'));
    $('#descricaoView').html($(this).data('descricao'));
});

$('#submitCreate').click(function(){
    $.ajax({
        type : 'POST',
        url : 'addProduto' ,
        data : {
            '_token' : $('input[name=_token]').val(),
            'nome' : $('input[name=inputNome]').val(),
            'preco' : $('input[name=inputPreco]').val(),
            'descricao' : $('input[name=inputDescricao]').val()
        }, sucess: function(data) {
            console.log('mensagem de sucesso');
            console.log(data);

        }
    })
})
