const $btn = document.getElementById('btnTopPage');

document.getElementById('root').addEventListener('scroll', (e) => {
    const root = e.target;
    $btn.classList.toggle('invisible', root.scrollTop < 300);
    $btn.classList.toggle('visible', root.scrollTop > 299);
});

$btn.addEventListener('click', () => {
    document.getElementById('root').scrollTo({
        top: 0,
        behavior: 'smooth',
        inline: 'nearest'
    });
}
);
