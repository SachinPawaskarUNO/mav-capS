$(document).ready(function(){
    $( "#bo_date_of_birth" ).datepicker({ dateFormat: "yy-mm-dd"}).val();

    $("#bo_next_step3").attr('disabled','disabled');
    $("#bo_agree_terms, #bo_agree_fees").change(function () {
        if ($("#bo_agree_terms").is(':checked') && $("#bo_agree_fees").is(':checked') ) {
            $("#bo_next_step3").attr('disabled', false);
        } else {
            $("#bo_next_step3").attr('disabled', true);
        }
    });

    // $('.btn-circle').on('click',function(){
    //     $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
    //     $(this).addClass('btn-info').removeClass('btn-default').blur();
    // });
    jQuery.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
    }, "Please enter alphabets only");

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
                bo_first_name: {required: true, alpha:true,},
                bo_last_name: {required: true, alpha:true,},
                bo_identification_card_number: {required: true,},
                bo_date_of_birth: {required: true,},
                bo_gender: {required: true,},
                bo_personal_street: {required: true,},
                bo_personal_city: {required: true, alpha:true,},
                bo_personal_state: {required: true, alpha:true,},
                bo_personal_zipcode: {required: true, number:true,},
                bo_personal_country: {required: true, alpha:true,},
                bo_personal_phonenumber: {required: true, number:true,},
                //bo_upload_IC: {required: true,},
                bo_business_street: {required: true,},
                bo_business_city: {required: true, alpha:true,},
                bo_business_state: {required: true, alpha:true,},
                bo_business_zipcode: {required: true, number:true,},
                bo_business_country: {required: true, alpha:true,},
                bo_business_phonenumber: {required: true, number:true,},
                bo_industry: {required: true,},
                bo_type: {required: true,},
                bo_legal_entity: {required: true,},
                bo_registration_number: {required: true,},
                bo_registration_year: {required: true, number:true,},
                bo_court_judgement: {required: true,},
                //bo_business_license: {required: true,},
                //bo_entity_type: {required: true,},
                //bo_CTOS: {required: true,},
                bo_bank_name: {required: true,},
                bo_bank_account: {required: true,}
                // bo_audited_statements: {required: true,},
                // bo_operating_statements: {required: true,},
                // bo_tax_returns: {required: true,}
                // bo_agree_terms: {required: true,},
                // bo_agree_fees: {required: true,}
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