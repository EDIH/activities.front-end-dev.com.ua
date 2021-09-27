const { token } = require('../app.js')

// ************
// ************
// REMOVE BLOCK
// ************
// ************

$(document).on('click', '.remove-block', function () {
    var delete_button = $('#deleteBlock')[0];
    delete_button.dataset.url = this.dataset.url;
    delete_button.dataset.block_id = this.dataset.block_id
})


$('#deleteBlock').on('click', function () {
    var block_id = this.dataset.block_id;
    $.ajax({
        method: 'POST',
        url: this.dataset.url,
        data: {
            _token: token
        },
        success: function (data) {
            $('#confirmDeleteBlock').modal('hide');
            $(`#${block_id}`).remove();
            $(document).Toasts('create', {
                class: 'bg-danger',
                title: 'Статус',
                subtitle: 'OK',
                body: 'Блок удален',
                autohide: true,
                delay: 2e3,
            })
        }
    })
})

// ************
// ************
// EDIT BLOCK CONTENT
// ************
// ************

$(document).on('click', '.edit-content', function (e) {
    // console.log(e);
    // console.log(this.dataset.url);
    // return false;
    $.ajax({
        method: 'get',
        url: this.dataset.url,
        // data: method == 'post' ? {'_token': token} : {},
        success: function (data) {
            $('#modal_body')[0].innerHTML = data.form;
            // $('#contentList')[0].innerHTML = data.content;
        }
    })
})

$(document).on('click', '#saveContent', function (e) {
    var form = $('#contentForm')[0];

    var formData = new FormData(form);
    formData.append('_token', token)
    $.ajax({
        method: 'POST',
        url: form.action,
        data: formData,
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            // console.log(data);
            if(data.errors) {

                // alert.show()
                // $.each(data.errors, function (key,value) {
                //     alert.append(`<p>${value}</p>`);
                // })
            } else if(data.status) {
                $('#contentFormModal').modal('toggle');
                $(document).Toasts('create', {
                    class: data.toasts.class,
                    title: data.toasts.title,
                    body: data.toasts.body,
                    position: 'bottomRight',
                })
                // form.reset()
                // if(exit) $('#contentFormModal').modal('toggle');
                // $(document).Toasts('create', createBlockData)
                // $(`#${data.block_id} .contents`)[0].innerHTML = data.content;
                // loadForm(form.action, form.method)
            }
        }
    })
    // e.preventDefault();
    // return false;
})

// ************
// ************
// SORT AND DRAG BLOCK
// ************
// ************

function refreshSortable() {
    $( "#blockList" ).sortable({
        revert: true,
        update: function( event, ui ) {
            var sortedIDs = $( "#blockList" ).sortable( "toArray" );
            $.ajax({
                method: 'POST',
                url: '/admin/pages/content/reorder',
                data: {
                    _token: token,
                    sequence: sortedIDs
                },
                success: function (data) {
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Статус',
                        subtitle: 'OK',
                        body: 'Последовательность блоков на странице успешно изменена',
                        autohide: true,
                        delay: 2e3,
                    })
                }
            })
        }
    }).disableSelection();
}
refreshSortable()

$( ".template-item" ).draggable({
    connectToSortable: "#blockList",
    helper: "clone",
    stop: function( event, ui ) {
        $.ajax({
            method: 'POST',
            url: $('#blockCreateForm')[0].action,
            data: {
                _token: token,
                enabled: 1,
                block_template_id: event.target.dataset.template_id
            },
            success: function (data) {
                if(data.errors) {

                } else if(data.status) {
                    $('#blockList').sortable('destroy');
                    $('#blockList')[0].outerHTML = data.html;
                    refreshSortable();
                }
            }
        })
    }
});
