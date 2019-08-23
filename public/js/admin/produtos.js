$('.visualizaModal').click(function(){
    console.log($(this));
    $('#nomeView').html($(this).data('nome'));
    $('#precoVIew').html($(this).data('preco'));
    $('#descricaoView').html($(this).data('descricao'));
});

