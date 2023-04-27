$('#btn-obrisi').click(function(){
    console.log("Brisanje");

    const checked = $('input[name=cekiranje]:checked');

    req = $.ajax({
        url: 'handler/delete.php',
        type:'post',
        data: {'id':checked.val()}
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=='Success'){
           checked.closest('tr').remove();
           alert('Obrisan projekat');
           console.log('Obrisan');
        }else {
        console.log("Projekat nije obrisan "+res);
        alert("Projekat nije obrisan ");

        }
        console.log(res);
    });

});