'use strict';
    document.addEventListener('DOMContentLoaded', function () {
        // Select all quantity input fields
        var quantityInputs = document.querySelectorAll('.quantity-input');

        // Add event listener to each quantity input field
        quantityInputs.forEach(function (input) {
            input.addEventListener('input', function () {
                // Get the parent row of the input field
                var parentRow = input.closest('tr');

                // Get the price, quantity, and update the subtotal
                var price = parseFloat(parentRow.querySelector('.price-cell').innerText.replace('IDR', '').replace(',', '').trim());
                var quantity = parseFloat(input.value);
                var subtotal = price * quantity;

                // Update the subtotal cell
                parentRow.querySelector('.subtotal-cell').innerText = 'IDR ' + subtotal.toLocaleString(undefined, { minimumFractionDigits: 2 });
            });
        });
    });

document.addEventListener('DOMContentLoaded', function () {

  var removeFileBtn = document.getElementById('removeFile');
  var inputFile = document.getElementById('image');
  removeFileBtn.addEventListener('click', function (e) {
      e.preventDefault();
      inputFile.value = ''; 
  });
});


const header = document.getElementsByClassName('header-sticky')[0];

function handleScroll() {
    if (window.scrollY > 0) {
        header.classList.add('active');
    } else {
        header.classList.remove('active');
    }
}
window.addEventListener('scroll', handleScroll);



const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
const accordion = document.querySelectorAll('[data-accordion]');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

    const clickedBtn = this.nextElementSibling.classList.contains('active');

    for (let i = 0; i < accordion.length; i++) {

      if (clickedBtn) break;

      if (accordion[i].classList.contains('active')) {

        accordion[i].classList.remove('active');
        accordionBtn[i].classList.remove('active');
      }
    }

    this.nextElementSibling.classList.toggle('active');
    this.classList.toggle('active');

  });

}


const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]'),
  mobileMenu = document.querySelectorAll('[data-mobile-menu]'),
  mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]'),
  overlayEl = document.querySelector('[data-overlay]');

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {
  const mobileMenuCloseFunc = () => {
    mobileMenu[i].classList.remove('active');
    overlayEl.classList.remove('active');
  }

  mobileMenuOpenBtn[i].addEventListener("click", () => {
    mobileMenu[i].classList.add('active');
    overlayEl.classList.add('active');
  });

  mobileMenuCloseBtn[i].addEventListener("click", mobileMenuCloseFunc);
  overlayEl.addEventListener("click", mobileMenuCloseFunc);
};


const modal = document.querySelector('[data-modal]'),
  modalCloseBtn = document.querySelector('[data-modal-close]'),
  modalCloseOverlay = document.querySelector('[data-modal-overlay]');

const modalCloseFunction = () => {
  modal.classList.add('closed')
}

modalCloseOverlay.addEventListener('click', modalCloseFunction);
modalCloseBtn.addEventListener('click', modalCloseFunction);

const notif = document.querySelector('[data-toast]'),
  notifCloseBtn = document.querySelector('[data-toast-close]');

notifCloseBtn.addEventListener('click', () => {
  notif.classList.add('closed');
});

// const btnSlide = document.querySelectorAll(".btn-slide");
// const cardContent = document.querySelectorAll(".testimonial-card-content")
// const slideContainer = document.querySelector(".testimonial-wrapper")

// for (let i = 0; i < btnSlide.length; i++) {
//   btnSlide[i].addEventListener("click", () => {
//     console.log("checked")
//     alert("button" + i)
//   })
// }

// let btnIndex = 1;
// setInterval(() => {
//     document.getElementById('btn-slide' + btnIndex).checked = true;
//     btnIndex++

//     for (let y = 0; y < cardContent.length; y++) {
//       let elWidth = cardContent[y].clientWidth
//       slideContainer.scrollLeft += elWidth;
//     }

//     if (btnIndex>6) {
//       btnIndex = 1;
//       slideContainer.scrollLeft = 0;
//     }

// }, 5000);


const detailBtn = document.querySelectorAll('.details-btn'),
  popupClose = document.querySelector('[details-popup-close]'),
  productDetailsPopup = document.querySelector('.display-details'),
  productName = document.querySelector('.product-title'),
  productPrice = document.querySelector('.price-now'),
  productDelPrice = document.querySelector('.del-price'),
  productColor = document.getElementById('item-color'),
  productimage = document.querySelector('.detail-product-img');


function closeEl () {
  productDetailsPopup.style.display = 'none';
  overlayEl.classList.remove('active')
};

popupClose.addEventListener('click', closeEl);
overlayEl.addEventListener('click', closeEl);






// let xhttp = new XMLHttpRequest();
// xhttp.onreadystatechange = function () {
//   if (this.readyState == 4 && this.status == 200) {
//     let data = JSON.parse(this.responseText);
//     for (let i = 0; i < detailBtn.length; i++) {
//       detailBtn[i].addEventListener('click', () => {
//         productDetailsPopup.style.display = 'inline';
//         overlayEl.classList.add('active');
//         productName.innerText = data[i].name;
//         productColor.innerText = data[i].color;
//         productimage.src = data[i].img;
//         productPrice.innerText = data[i].price;
//         productDelPrice.innerText = data[i].delprice;
        
//       })
//     }
//   }
// }

// xhttp.open("GET", "http://manhh.dinus.ac.id/ecommerce/src/data/products.json", true);
// xhttp.send();






















































