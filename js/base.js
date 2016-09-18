$(document).ready(function(){

    $('.fancybox').fancybox();


    $('.lamina').each(function(){

        var lamina = $(this);

        $(this).contextPopup({
                title: 'Ações para essa lâmina',
                items: [
                    {label:'Visualizar',     icon:'icons/view.png', action:function() {
                        lamina.click();
                    } },
                    {label:'Baixar', icon:'icons/save.png',    action:function() {

                        var arquivo = lamina.attr('href');
                        window.open(arquivo, '_blank');

                    } }
                ]}
        );


    });


    $('#projetor').click(function(){

        var selecionados = '';

        $('.laminas_select').each(function(){

            if($(this).is(':checked')){

                if (selecionados != '')
                    selecionados += '|';

                selecionados += $(this).val();
            }

        });

        if(selecionados == ''){
            alert('Nenhuma lâmina selecionada para ser exibida');
        } else {
            window.open('projetor.php?laminas=' + selecionados, 'targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1024, height=768');
        }
    });

    $('#projecoes ul').cycle({
        timeout: 30000 /* exibe 30 segundos */,
        speed: 3000 /* 3 segundos para transição */

    });

});