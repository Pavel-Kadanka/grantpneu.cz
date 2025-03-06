export function initFlipCards() {
    const cardFlipDuration = 500;

    // Set initial heights for all cards
    $('.js-flip-card').each(function() {
        const $card = $(this);
        const frontHeight = $card.find('.service-card__face:first').outerHeight();
        const backHeight = $card.find('.service-card__face:last').outerHeight();
        const maxHeight = Math.max(frontHeight, backHeight);
        
        $card.height(maxHeight);
    });

    $('.flip-trigger').click(function(e) {
        const $card = $(this).closest('.js-flip-card');
        if ($card.data('flipping')) {
            return false;
        }
        $card.data('flipping', true);
        
        $card.toggleClass('is-flipped');
        window.setTimeout(function() {
            $card.children().children().toggleClass('is-visible');
            $card.data('flipping', false);
        }, cardFlipDuration / 2);
    });

    // Update heights on window resize
    $(window).on('resize', function() {
        $('.js-flip-card').each(function() {
            const $card = $(this);
            const frontHeight = $card.find('.service-card__face:first').outerHeight();
            const backHeight = $card.find('.service-card__face:last').outerHeight();
            const maxHeight = Math.max(frontHeight, backHeight);
            
            $card.height(maxHeight);
        });
    });
}