$(document).ready(function() {
    $("#bo_date_of_birth").datepicker({
        dateFormat: "yy-mm-dd",
        maxDate:'0'
    });

    $("#inv_date_of_birth").datepicker({
        dateFormat: "yy-mm-dd",
        maxDate:'0'
    });
    $("#bo_registration_year").datepicker({
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy',
        maxDate:'0',
        onClose: function (dateText, inst) {
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, 1));
        }
    });
    $("#bo_registration_year").focus(function () {
        $(".ui-datepicker-month").hide();
        $(".ui-datepicker-calendar").hide();
    });

    $("#bo_next_step3").attr('disabled', 'disabled');
    $("#bo_agree_terms, #bo_agree_fees").change(function () {
        if ($("#bo_agree_terms").is(':checked') && $("#bo_agree_fees").is(':checked')) {
            $("#bo_next_step3").attr('disabled', false);
        } else {
            $("#bo_next_step3").attr('disabled', true);
        }
    });
    $("#inv_next_step1").attr('disabled', 'disabled');
    $("#inv_agree_terms").change(function () {
        if ($("#inv_agree_terms").is(':checked')) {
            $("#inv_next_step1").attr('disabled', false)
        } else {
            $("#inv_next_step1").attr('disabled', true);
        }
    });
    // $('.btn-circle').on('click',function(){
    //     $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
    //     $(this).addClass('btn-info').removeClass('btn-default').blur();
    // });
    jQuery.validator.addMethod("alpha", function (value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
    }, "Please enter alphabets only");

    $('.next-step, .prev-step').on('click', function (e) {
        var $activeTab = $('.tab-pane.active');
        var form = $("#bo_application");
        form.validate({
            errorElement: 'span',
            errorClass: 'help-block',
            highlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').addClass("has-error");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass("has-error");
            },
            rules: {
                bo_first_name: {required: true, alpha: true,},
                bo_last_name: {required: true, alpha: true,},
                bo_identification_card_number: {required: true,},
                bo_date_of_birth: {required: true,},
                bo_gender: {required: true,},
                bo_personal_street: {required: true,},
                bo_personal_city: {required: true, alpha: true,},
                bo_personal_state: {required: true, alpha: true,},
                bo_personal_zipcode: {required: true, number: true,},
                bo_personal_country: {required: true, alpha: true,},
                bo_personal_phonenumber: {required: true, number: true,},
                bo_upload_IC: {required: true,},
                bo_business_street: {required: true,},
                bo_business_city: {required: true, alpha: true,},
                bo_business_state: {required: true, alpha: true,},
                bo_business_zipcode: {required: true, number: true,},
                bo_business_country: {required: true, alpha: true,},
                bo_business_phonenumber: {required: true, number: true,},
                bo_industry: {required: true,},
                //bo_type: {required: true,},
                bo_legal_entity: {required: true,},
                bo_registration_number: {required: true,}, //alpha_num: true,//
                bo_registration_year: {required: true, number: true,},
                bo_court_judgement: {required: true,},
                bo_business_license: {required: true,},
                bo_entity_type: {required: true,},
                bo_CTOS: {required: true,},
                bo_bank_name: {required: true,},
                bo_bank_account: {required: true, number: true,},
                bo_audited_statements: {required: true,},
                bo_operating_statements: {required: true,},
                bo_tax_returns: {required: true,}
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
                top.location.href = '#top';
            }
            else {
                var prevTab = $activeTab.prev('.tab-pane').attr('id');
                $('[href="#' + prevTab + '"]').addClass('btn-info').removeClass('btn-default');
                $('[href="#' + prevTab + '"]').tab('show');
                top.location.href = '#top';
            }
        }

    });

    $('.next-step1, .prev-step1').on('click', function (e) {
        var $activeTab = $('.tab-pane.active');
        var form1 = $("#inv_application");
        form1.validate({
            errorElement: 'span',
            errorClass: 'help-block',
            highlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').addClass("has-error");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass("has-error");
            },
            rules: {
                inv_first_name: {required: true, alpha: true,},
                inv_last_name: {required: true, alpha: true,},
                inv_identification_card_number: {required: true,},
                inv_date_of_birth: {required: true,},
                inv_gender: {required: true,},
                inv_street: {required: true,},
                inv_city: {required: true, alpha: true,},
                inv_state: {required: true, alpha: true,},
                inv_zipcode: {required: true, number: true,},
                inv_country: {required: true, alpha: true,},
                inv_phonenumber: {required: true, number: true,},
                inv_identity: {required: true,},
                inv_income: {required: true,},
                inv_agree_terms: {required: true,},
                inv_net_worth: {required: true,},
                inv_liquid_asset: {required: true,},
                inv_estimated_p2p: {required: true, number:true,min:1,},
                inv_risk_tolerance: {required: true,},
                inv_stock_market: {required: true,},
                inv_bonds_notes: {required: true,},
                inv_mutual_funds: {required: true,},
                inv_sme_business: {required: true,},
                inv_p2p_lending: {required: true,},
                inv_income_slip: {required: true,},
                inv_bank_statements: {required: true,},
                inv_financial_statements: {required: true,}
                // // bo_agree_terms: {required: true,},
                // // bo_agree_fees: {required: true,}
            }
        });

        if (form1.valid() === true) {
            $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
            if ($(e.target).hasClass('next-step1')) {
                var nextTab = $activeTab.next('.tab-pane').attr('id');
                $('[href="#' + nextTab + '"]').addClass('btn-info').removeClass('btn-default');
                $('[href="#' + nextTab + '"]').tab('show');
                top.location.href = '#top';
            }
            else {
                var prevTab = $activeTab.prev('.tab-pane').attr('id');
                $('[href="#' + prevTab + '"]').addClass('btn-info').removeClass('btn-default');
                $('[href="#' + prevTab + '"]').tab('show');
                top.location.href = '#top';
            }
        }

    });
    $('#loan_reset').click(function(){
        $('#loan_application').reset();
    });
    $('#loan_est_reset').click(function(){
        $('#loandata').reset();
    });
    $('#myloans_dt1').dataTable();
    $('#myloans_dt2').dataTable();
    $('#lrc1').dataTable();
    $('#lrc2').dataTable();
});
function calculate() {
    // Get the user's input from the form. Assume it is all valid.
    // Convert interest from a percentage to a decimal, and convert from
    // an annual rate to a monthly rate. Convert payment period in years
    // to the number of monthly payments.
    var principal = document.loandata.principal.value;
    var interest = document.loandata.interest.value / 100 / 12;
    var payments = document.loandata.years.value;

    // Now compute the monthly payment figure, using esoteric math.
    var x = Math.pow(1 + interest, payments);
    var monthly = (principal*x*interest)/(x-1);

    // Check that the result is a finite number. If so, display the results
    if (!isNaN(monthly) &&
        (monthly != Number.POSITIVE_INFINITY) &&
        (monthly != Number.NEGATIVE_INFINITY)) {

        document.loandata.payment.value = round(monthly);
        document.loandata.total.value = round(monthly * payments);
        document.loandata.totalinterest.value =
            round((monthly * payments) - principal);
    }
    // Otherwise, the user's input was probably invalid, so don't
    // display anything.
    else {
        document.loandata.payment.value = "";
        document.loandata.total.value = "";
        document.loandata.totalinterest.value = "";
    }
}

// This simple method rounds a number to two decimal places.
function round(x) {
    return Math.round(x*100)/100;
}