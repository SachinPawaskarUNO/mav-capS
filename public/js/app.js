$(document).ready(function(){
    $( "#bo_date_of_birth" ).datepicker();

    // $('.btn-circle').on('click',function(){
    //     $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
    //     $(this).addClass('btn-info').removeClass('btn-default').blur();
    // });

    $('.next-step, .prev-step').on('click', function (e){
        var $activeTab = $('.tab-pane.active');
        var form = $("#bo_application");
        form.validate({
            errorElement: 'span',
            errorClass: 'help-block',
            highlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').addClass("has-error");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass("has-error");
            },
            rules: {
                bo_first_name: {required: true,},
                bo_last_name: {required: true,},
                bo_identification_card_number: {required: true,},
                bo_date_of_birth: {required: true,},
                bo_gender: {required: true,}
            }
        });

        if (form.valid() === true) {
            $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
            if ($(e.target).hasClass('next-step')) {
                var nextTab = $activeTab.next('.tab-pane').attr('id');
                $('[href="#' + nextTab + '"]').addClass('btn-info').removeClass('btn-default');
                $('[href="#' + nextTab + '"]').tab('show');
            }
            else {
                var prevTab = $activeTab.prev('.tab-pane').attr('id');
                $('[href="#' + prevTab + '"]').addClass('btn-info').removeClass('btn-default');
                $('[href="#' + prevTab + '"]').tab('show');
            }
        }
    });
});