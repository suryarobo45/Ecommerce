// hamburger
// const hamburger = document.querySelector(".hamburger");
// const sideBar = document.querySelector(".sidebar")

// hamburger.addEventListener("click", () =>{
//     hamburger.classList.toggle("active");
//     sideBar.classList.toggle("active");
// })


// sticky navbar
window.onscroll = function () {
  stickyNavBar();
}

function stickyNavBar() {
  var navBar = document.querySelector(".nav-bar")
  var sticky = navBar.offsetTop;

  if (window.pageXOffset >= sticky) {
    navBar.classList.add('sticky');
  } else {
    navBar.classList.remove('sticky');
  }
}


// side bar product dropdown

// document.getElementById("drop-menu-btn").addEventListener("click", function() {
//   var menu = document.getElementById("drop-menu");
//   if (menu.style.display === "none") {
//     menu.style.display = "block";
//   } else {
//     menu.style.display = "none";
//   }
// });

// MODAL 


document.addEventListener("click", function () {
  var modal = document.getElementById("my-modal");
  var myBtn = document.getElementById("mybtn");
  var span = document.getElementsByClassName("close")[0];

  myBtn.onclick = function () {
    modal.style.display = "block";
  };

  span.onclick = function () {
    modal.style.display = "none";
  };

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };

  var editbtn = document.getElementById("edit-btn");
  var editModal = document.getElementById("edit-modal");
  var closeBtn = document.getElementsByClassName("edit-close")[0];

  editbtn.onclick = function () {
    editModal.style.display = "block";
  };

  closeBtn.onclick = function () {
    editModal.style.display = "none";
  };

  window.onclick = function (event) {
    if (event.target == editModal) {
      editModal.style.display = "none";
    }
  };
});


// // ImageUploading
// document.addEventListener("DOMContentLoaded", function () {
//   var imageUpload = document.getElementById("img-input");
//   var imagePreview = document.querySelector(".upload-img-container");

//   imageUpload.addEventListener("click", function () {
//     const file = this.files[0];
//     if (file) {
//       const reader = new FileReader();

//       reader.addEventListener('load', function () {
//         const image = new Image();

//         image.src = this.result;
//         image.addEventListener('load', function () {
//           const ratio = Math.min(
//             imagePreview.offsetWidth / this.width,
//             imagePreview.offsetHeight / this.height
//           );
//           this.width *= ratio;
//           this.height *= ratio;
//         });

//         // Clear previous images
//         while (imagePreview.firstChild) {
//           imagePreview.removeChild(imagePreview.firstChild);
//         }

//         imagePreview.appendChild(image);
//       });

//       reader.readAsDataURL(file);
//     }
//   });
// });

document.addEventListener("DOMContentLoaded", function () {
  var imageUpload = document.getElementById("img-input");
  var imagePreview = document.querySelector(".upload-img-container");

  imageUpload.addEventListener("change", function () { // Use 'change' event instead of 'click'
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();

      reader.addEventListener('load', function () {
        const image = new Image();

        image.src = this.result;
        image.addEventListener('load', function () {
          const ratio = Math.min(
            imagePreview.offsetWidth / this.width,
            imagePreview.offsetHeight / this.height
          );
          this.width *= ratio;
          this.height *= ratio;
        });

        // Clear previous images
        while (imagePreview.firstChild) {
          imagePreview.removeChild(imagePreview.firstChild);
        }

        imagePreview.appendChild(image);
      });

      reader.readAsDataURL(file);
    }
  });
});



// page redirect for category
// var category = document.querySelector("#redirect-btn");

// category.onclick = function(){
//   location.href = "mobile.html";
// }

// dark theme
var darkTheme = document.getElementById('dark-light');
var theme = document.querySelector(':root');
darkTheme.onclick = function(){
  darkTheme.classList.toggle('dark');
  theme.classList.toggle('dark-theme');
}