<script src="<?= base_url('resources/js/form-validator/jquery.form-validator.min.js'); ?>"></script>
<script>
    var myLanguage = {
        errorTitle: 'Gagal simpan data!',
        requiredFields: 'Wajib diisi!',
        badTime: 'You have not given a correct time',
        badEmail: 'You have not given a correct e-mail address',
        badTelephone: 'You have not given a correct phone number',
        badSecurityAnswer: 'You have not given a correct answer to the security question',
        badDate: 'You have not given a correct date',
        lengthBadStart: 'Nilai antara  ',
        lengthBadEnd: '',
        lengthTooLongStart: 'You have given an answer longer than ',
        lengthTooShortStart: 'You have given an answer shorter than ',
        notConfirmed: 'Values could not be confirmed',
        badDomain: 'Incorrect domain value',
        badUrl: 'The answer you gave was not a correct URL',
        badCustomVal: 'You gave an incorrect answer',
        badInt: 'The answer you gave was not a correct number',
        badSecurityNumber: 'Your social security number was incorrect',
        badUKVatAnswer: 'Incorrect UK VAT Number',
        badStrength: 'The password isn\'t strong enough',
        badNumberOfSelectedOptionsStart: 'You have to choose at least ',
        badNumberOfSelectedOptionsEnd: ' answers',
        badAlphaNumeric: 'The answer you gave must contain only alphanumeric characters ',
        badAlphaNumericExtra: ' and ',
        wrongFileSize: 'The file you are trying to upload is too large',
        wrongFileType: 'The file you are trying to upload is of wrong type',
        groupCheckedRangeStart: 'Please choose between ',
        groupCheckedTooFewStart: 'Please choose at least ',
        groupCheckedTooManyStart: 'Please choose a maximum of ',
        groupCheckedEnd: ' item(s)'
    };

    $.validate({
        language: myLanguage
    });

    $('#sekolah').click(function() {
        var sekolah_id = $('#sekolah').val();
        if (sekolah_id === '4') {
            $('#sekolah_lain').removeClass('collapse');
        }
        else {
            $('#sekolah_lain').addClass('collapse');
        }
    });
</script>