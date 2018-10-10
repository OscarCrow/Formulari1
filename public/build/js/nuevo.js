$(document).ready(function () {
    $('#terminar').click(function () {
        if ($('#descripcion').val() !== '') {
            $('#formulario').submit();
        } else {
            $('#descripcion').addClass('is-invalid');
        }
    });
    
    $('#descripcion').keypress(function(){
        $(this).removeClass('is-invalid');
    });

    //Format Currency
    $('#presupuesto').formatCurrency({
        colorize: false,
        negativeFormat: '-%s%n',
        roundToDecimalPlace: 0
    }).blur(function () {
        $(this).formatCurrency({
            colorize: true,
            negativeFormat: '-%s%n',
            roundToDecimalPlace: 0
        });
    }).keyup(function (e) {
        var objeto = $(this);
        var e = window.event || e;
        var keyUnicode = e.charCode || e.keyCode;
        if (e !== undefined) {
            switch (keyUnicode) {
                case 16:
                    break; // Shift
                case 27:
                    this.value = '';
                    break; // Esc: clear entry
                case 35:
                    break; // End
                case 36:
                    break; // Home
                case 37:
                    break; // cursor left
                case 38:
                    break; // cursor up
                case 39:
                    break; // cursor right
                case 40:
                    break; // cursor down
                case 78:
                    break; // N (Opera 9.63+ maps the "." from the number key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")
                case 110:
                    break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)
                case 190:
                    break; // .
                default:
                    if ((objeto.val()).indexOf("$ ") == -1) {
                        RE = /^-?([0-9])*[.]?[0-9]*$/;
                        if (!RE.test(objeto.val())) {
                            objeto.val('');
                        } else {
                            $(this).formatCurrency({
                                colorize: true,
                                negativeFormat: '-%s%n',
                                roundToDecimalPlace: -1,
                                eventOnDecimalsEntered: true
                            });
                            $('#valor').val($(this).asNumber({parseType: 'float'}));
                        }
                    } else {
                        $(this).formatCurrency({
                            colorize: true,
                            negativeFormat: '-%s%n',
                            roundToDecimalPlace: -1,
                            eventOnDecimalsEntered: true
                        });
                        $('#valor').val($(this).asNumber({parseType: 'float'}));
                    }
            }
        }
    });
});

