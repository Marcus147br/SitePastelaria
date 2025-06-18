// pasteltonhao.js
const PastelTonhao = (function() {
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    }

    function renderCardapio(items, containerSelector) {
        const container = document.querySelector(containerSelector);
        if (!container) return;

        container.innerHTML = '';
        items.forEach(item => {
            const card = document.createElement('div');
            card.className = 'item';
            card.innerHTML = `
                <img src="${item.imagem}" alt="${item.nome}">
                <div class="info">
                    <h3>${item.nome}</h3>
                    <p>${item.descricao}</p>
                   <span class="preco">
    <a href="https://wa.me/5535984715000?text=Olá%20Gostaria%20de%20fazer%20um%20pedido%20de%20)" target="_blank">
        
    </a>
</span>


                </div>
            `;
            container.appendChild(card);
        });
    }

    function init() {
        initSmoothScroll();
    }

    return {
        init,
        renderCardapio
    };
})();

document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.item');
    items.forEach((item, index) => {
        setTimeout(() => {
            item.style.opacity = 1;
            item.style.transform = 'translateY(0)';
        }, index * 400); // Animação de entrada a cada 200ms
    });
});
function criarBotaoWhatsapp(numero, mensagem) {
    const link = `https://wa.me/${numero.replace(/\D/g, '')}?text=${encodeURIComponent(mensagem)}`;
    const botao = document.getElementById('whatsapp-button');
    if (botao) {
        botao.href = link;
    }
}
function init() {
    initSmoothScroll();
    criarBotaoWhatsapp('5535984715000', 'Olá! Gostaria de fazer um pedido.'); 
}
function ativarAcessibilidade() {
    document.body.classList.toggle('modo-acessivel');
}

