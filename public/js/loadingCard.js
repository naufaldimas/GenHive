document.addEventListener('DOMContentLoaded', () => {
    const cards = [
        document.getElementById('card1'),
        document.getElementById('card2'),
        document.getElementById('card3'),
        document.getElementById('card4')
    ];

    let moveCount = 0;

    function openCards() {
        cards.forEach((card, index) => {
            card.classList.remove('card-reset');
            if (index === 0) card.classList.add('card1-open');
            if (index === 1) card.classList.add('card2-open');
            if (index === 2) card.classList.add('card3-open');
            if (index === 3) card.classList.add('card4-open');
        });
        setTimeout(moveCards, 550);
    }

    function moveCards() {
        if (moveCount < 4) {
            cards[0].style.zIndex = 5;
            cards[0].classList.add('card1-move');

            setTimeout(() => {
                const firstCard = cards.shift();
                cards.push(firstCard);
                resetCards();
                moveCount++;
                openCards();
            }, 550);
        } else {
            setTimeout(closeCards, 50);
        }
    }

    function resetCards() {
        cards.forEach((card, index) => {
            card.classList.remove('card1-open', 'card2-open', 'card3-open', 'card4-open', 'card1-move');
            card.style.zIndex = 4 - index;
        });
    }

    function closeCards() {
        cards.forEach(card => {
            card.classList.remove('card1-open', 'card2-open', 'card3-open', 'card4-open', 'card1-move');
            card.classList.add('card-reset');
        });
        moveCount = 0;
        setTimeout(() => {
            openCards();
        }, 550);
    }

    openCards();
});
