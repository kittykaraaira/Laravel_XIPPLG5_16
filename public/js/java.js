// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) target.scrollIntoView({ behavior: 'smooth' });
  });
});

// Horizontal gallery scroll
const gallery = document.querySelector('.gallery-scroll');
let isDown = false;
let startX, scrollLeft;

gallery.addEventListener('mousedown', e => {
  isDown = true;
  gallery.classList.add('active');
  startX = e.pageX - gallery.offsetLeft;
  scrollLeft = gallery.scrollLeft;
});
gallery.addEventListener('mouseleave', () => {
  isDown = false;
  gallery.classList.remove('active');
});
gallery.addEventListener('mouseup', () => {
  isDown = false;
  gallery.classList.remove('active');
});
gallery.addEventListener('mousemove', e => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - gallery.offsetLeft;
  const walk = (x - startX) * 2;
  gallery.scrollLeft = scrollLeft - walk;
});

// Send order to WhatsApp
function sendToWhatsApp(event) {
  event.preventDefault();

  const name = document.getElementById("name").value;
  const menu = document.getElementById("menu").value;
  const quantity = document.getElementById("quantity").value;
  const note = document.getElementById("note").value;

  const phone = "6281326798544"; // Ganti dengan nomor WA tujuan (tanpa +)
  const message = `Hello! I'd like to order:\n\n👤 Name: ${name}\n🍰 Menu: ${menu}\n🔢 Quantity: ${quantity}\n📝 Notes: ${note || '-'}\n\nThank you!`;

  const url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
  window.open(url, '_blank');
}

// Product Preview Modal Logic
const modal = document.getElementById('product-modal');
const modalImage = document.getElementById('modal-image');
const modalTitle = document.getElementById('modal-title');
const modalDescription = document.getElementById('modal-description');
const closeBtn = document.querySelector('.close');

document.querySelectorAll('.product-item').forEach(item => {
  item.addEventListener('click', () => {
    const imgSrc = item.querySelector('img').src;
    const title = item.querySelector('span').textContent;
    const description = item.getAttribute('data-description');

    modalImage.src = imgSrc;
    modalTitle.textContent = title;
    modalDescription.textContent = description;

    modal.style.display = 'block';
  });
});

closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

window.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});