function rentCar(carName) {
    alert(`Anda telah memilih untuk menyewa ${carName}. Silakan hubungi kami untuk informasi lebih lanjut.`);
}

document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    alert(`Terima kasih, ${name}. Pesan Anda telah diterima. Kami akan menghubungi Anda melalui email: ${email}.`);
    
    // Reset formulir setelah submit
    document.getElementById('contactForm').reset();
});
