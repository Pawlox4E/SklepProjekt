$(function() {
    $('.galeria').on('click', 'ul.galeria-mala a', function(e) {
        e.preventDefault();
        var galeriaduza = $(e.delegateTarget).children('.galeria-duza'),
            imageSrc    = $(this).attr('href'),
            imageTitle  = $(this).attr('title') || 'Brum brum bip bip';
        galeriaduza.children('img').attr(
            {
                'src': imageSrc,
                'alt': imageTitle
            }
        );
        galeriaduza.children('h1').html(imageTitle);
        $(this).parents('ul.galeria-mala').find('img').removeClass('active');
        $(this).children('img').addClass('active');
    });
});