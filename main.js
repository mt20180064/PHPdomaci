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
           alert('Obrisana rezervacija');
           console.log('Obrisan');
        }else {
        console.log("Rezervac nije obrisan "+res);
        alert("Rezervacija nije obrisana ");

        }
        console.log(res);
    });

});

$('#dodajForm').submit(function(){
    event.preventDefault();
    console.log("Dodavanje");
    const $form =$(this);
    const $input = $form.find('input, select, button, textarea');

    const serijalizacija = $form.serialize();
    console.log(serijalizacija);

    $input.prop('disabled', true);

    request = $.ajax({
        url: 'handler/add.php',
        type:'post',
        data: serijalizacija
    });

    request.done(function(response, textStatus, jqXHR){
        
            alert("Rezervacija uspesno dodata");
            console.log("Uspesna rezervacija");
            location.reload(true);
      
    });

    request.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });
});


$('#btnUnesi').submit(function () {
    $('#prikaziModal').modal('toggle');
    return false;
});




