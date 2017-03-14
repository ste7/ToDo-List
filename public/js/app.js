$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function () {


    $('.frm').on('submit', function (e) {
        e.preventDefault();
        $('#myModal').modal('hide');

        $.post('create',  {name: $('#name').val()},  function (data) {
            $('#name').val('');
            $('.list').append('<tr id="'+data.id+'"><td>'+data.id+'</td><td>'+data.name+'</td><td>'+data.created+'</td>' +
                '<td><a class="btn btn-success done" id="'+data.id+'" href="#">Complete</a></td></tr>');
        });
    });

    $('body').on('click', '.done', function () {
        var id = $(this).attr('id'),
            remove = "#" + id;

        $.post('complete', {id: id}, function (data) {
            $(remove).fadeOut(300, function () {
                $(this).remove();
            });
        });
    });
});