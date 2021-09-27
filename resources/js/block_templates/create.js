const { token } = require('../app.js')

$(document).on('change', '#type', function (){
    if(this.value != '-1') {

        // console.log($(`#${this.value}`));
        var last = $(`#${this.value}`).clone().appendTo('.attribute-fields');

        last.show();
        var u_id = `${this.value}_${Date.now()}`;
        last[0].id = u_id;

        var form_group = $(`#${u_id}`)[0];

        var file_input = $(`#${last[0].id} input[type="file"]`);
        if(file_input[0]) {
            file_input[0].id = u_id;
            $(`#${last[0].id} label`)[0].htmlFor = u_id;
        }
        $(form_group.firstElementChild).one('input', function (e){
            $(e.target).unbind('input');
            var type_selector = $('#type')
            type_selector.selectedIndex = -1;
            type_selector.val('-1').change();
        });
    }
});
