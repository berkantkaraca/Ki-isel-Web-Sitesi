window.addEventListener('DOMContentLoaded', function() {
    var popUp = document.createElement('div');
    popUp.setAttribute('id', 'popUp');
    popUp.style.position = 'fixed';
    popUp.style.top = '50%';
    popUp.style.left = '50%';
    popUp.style.transform = 'translate(-50%, -50%)';
    popUp.style.backgroundColor = 'white';
    popUp.style.padding = '20px';
    popUp.style.border = '1px solid black';
    popUp.style.borderRadius = '5px';
    popUp.style.width = '300px'; // Genişlik ayarı
    popUp.style.height = '150px'; // Yükseklik ayarı
    popUp.style.zIndex = '9999';

    var textElement = document.createElement('p');
    textElement.innerHTML = 'Hoşgeldiniz! Bu sayfada benimle alakalı bilgilere erişebilirisiniz.';
    popUp.appendChild(textElement);

    var closeBtn = document.createElement('button');
    closeBtn.innerHTML = 'Kapat';
    closeBtn.style.position = 'absolute';
    closeBtn.style.bottom = '10px'; // Kapat düğmesinin alt ayarı
    closeBtn.style.right = '10px'; // Kapat düğmesinin sağ ayarı
    closeBtn.style.padding = '5px 10px';
    closeBtn.style.border = 'none';
    closeBtn.style.backgroundColor = '#ccc';
    closeBtn.style.cursor = 'pointer';

    closeBtn.addEventListener('click', function() {
        popUp.parentNode.removeChild(popUp);
    });

    popUp.appendChild(closeBtn);
    document.body.appendChild(popUp);

    var kapanmaSuresi = 5000; // 5 saniye sonra kapanır(ms)

    setTimeout(function() {
        if (popUp.parentNode) {
            popUp.parentNode.removeChild(popUp);
        }
    }, kapanmaSuresi);
});

