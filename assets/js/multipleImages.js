document.getElementById("multiImages").addEventListener("change", function (e) {
  const output = document.getElementById("output");
  const files = [...e.target.files];

  files.forEach((file) => {
    const img = document.createElement("img");
    img.src = URL.createObjectURL(file);
    img.height = 80;
    img.width = 80;

    const deleteBtn = document.createElement("button");
    deleteBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
      <path d="M6.0023 5.29325L8.47715 2.81836L9.18425 3.52546L6.7094 6.00035L9.18425 8.4752L8.47715 9.1823L6.0023 6.70745L3.52742 9.1823L2.82031 8.4752L5.2952 6.00035L2.82031 3.52546L3.52742 2.81836L6.0023 5.29325Z" fill="white"/></svg>`;
    deleteBtn.classList.add(
      "absolute",
      "-top-2",
      "-right-2",
      "bg-black",
      "rounded-full",
      "p-1"
    );
    deleteBtn.addEventListener("click", () => deleteBtn.parentElement.remove());

    const div = document.createElement("div");
    div.style.position = "relative";
    div.appendChild(img);
    div.appendChild(deleteBtn);

    output.appendChild(div);
  });
});
document.getElementById("addPackageBtn").addEventListener("click", function () {
  var daysInput = document.getElementById("daysInput").value;
  var accommodation = document.getElementById("accommodation").value;
  var images = document.getElementById("output").children;
  var packageList = document.getElementById("package-list");

  var imagesHTML = "";
  for (var i = 0; i < images.length; i++) {
    imagesHTML += images[i].outerHTML;
  }

  var packageHTML = `
      <div class=" my-2">
          <div class="flex gap-4 dark-blue">
              <p class="text-base font-bold">${daysInput}</p>
              <button class="flex gap-2 justify-center items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <path d="M12.75 4.5H16.5V6H15V15.75C15 16.1642 14.6642 16.5 14.25 16.5H3.75C3.33579 16.5 3 16.1642 3 15.75V6H1.5V4.5H5.25V2.25C5.25 1.83579 5.58579 1.5 6 1.5H12C12.4142 1.5 12.75 1.83579 12.75 2.25V4.5ZM6.75 8.25V12.75H8.25V8.25H6.75ZM9.75 8.25V12.75H11.25V8.25H9.75ZM6.75 3V4.5H11.25V3H6.75Z" fill="#91112B"/>
                  </svg> 
                  <span class="dark-red font-bold">Remove<span>
              </button>
          </div>
          <p class='text-xs mb-4'>${accommodation}</p>
          <div class="flex gap-4 flex-wrap mb-6">
              ${imagesHTML}
          </div>
      </div>
    `;

  packageList.innerHTML += packageHTML;

  // Clear form and output
  document.getElementById("daysInput").value = "";
  document.getElementById("accommodation").value = "";
  document.getElementById("output").innerHTML = "";

  // Attach event listener for newly created remove button
  var newlyAddedPackage = packageList.lastElementChild;
  var deleteButton = newlyAddedPackage.querySelector("button");
  deleteButton.addEventListener("click", function () {
    this.parentNode.parentNode.remove();
  });

  // Attach event listeners for image delete buttons (if needed)
  var imageButtons = newlyAddedPackage.querySelectorAll(
    ".image-delete-button-class"
  ); // replace with your image delete button class
  imageButtons.forEach((btn) => {
    btn.addEventListener("click", function () {
      this.parentNode.remove();
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  // Clear all changes
  const clearPackageBtn = document.getElementById("clearPackageBtn");
  clearPackageBtn.addEventListener("click", function () {
    // Clear all input fields
    const form = document.querySelector("#price form");
    form.reset();

    // Clear the packages list
    const packageList = document.getElementById("package-list");
    while (packageList.firstChild) {
      packageList.removeChild(packageList.firstChild);
    }

    // Clear the output images list if any
    const output = document.getElementById("output");
    while (output.firstChild) {
      output.removeChild(output.firstChild);
    }
  });

  // Save all changes (submit the form)
  const savePackageBtn = document.getElementById("savePackageBtn");
  savePackageBtn.addEventListener("click", function () {
    const form = document.querySelector("#price form");
    form.submit();
  });
});

document.querySelector("form").addEventListener("submit", function (event) {
  // Prevent the default form submission action
  event.preventDefault();

  // Create a FormData object to capture the form input values
  const formData = new FormData(event.target);

  // Log the data for inspection
  for (let [key, value] of formData.entries()) {
    console.log(key, value);
  }
});

document
  .getElementById("clearOverviewBtn")
  .addEventListener("click", function () {
    document.getElementById("classes").value = "";
    document.getElementById("transport").value = "";
    document.getElementById("accomodation").value = "";
    document.getElementById("food").value = "";
    document.getElementById("transfer").value = "";
  });
