let instructors = [];
let editingIndex = null;

function updateHiddenInput() {
  const instructorsDataInput = document.getElementById("instructorsData");
  instructorsDataInput.value = JSON.stringify(instructors);
}
const buttonContainer = document.getElementById("button-container");

function toggleButtonContainerVisibility() {
  if (instructors.length > 0) {
    buttonContainer.style.display = "flex";
  } else {
    buttonContainer.style.display = "none";
  }
}

toggleButtonContainerVisibility();

function updateInstructors() {
  const instructorsDiv = document.getElementById("instructors-list");
  instructorsDiv.innerHTML = "";

  instructors.forEach((instructor, index) => {
    const div = document.createElement("div");

    div.innerHTML = `
        <div class='flex gap-6 w-full mb-6'>
            <div class='flex gap-6 bg-blue p-8 w-[80%] rounded-md'>
                <div class='h-[72px] w-[72px] '>
                    <img class='w-full h-full object-cover rounded-full' 
                        src="${
                          instructor.image
                            ? URL.createObjectURL(instructor.image)
                            : "../../assets/icons/avatar.png"
                        }">
                </div>
                <div class='w-[80%]'>
                    <div class='text-base font-bold flex gap-2 items-center'>${
                      instructor.name
                    }
                        <button class='editBtn'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M5.43198 13.4974H2.25V10.3155L10.8263 1.7392C11.1192 1.44631 11.594 1.44631 11.8869 1.7392L14.0083 3.86052C14.3012 4.15341 14.3012 4.62829 14.0083 4.92118L5.43198 13.4974ZM2.25 14.9974H15.75V16.4974H2.25V14.9974Z" fill="black"/>
                            </svg>
                        </button>
                    </div>
                    <p>${instructor.about}</p>
                </div>
            </div>
            <button class='flex gap-2 justify-center items-center removeBtn'>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M12.75 4.5H16.5V6H15V15.75C15 16.1642 14.6642 16.5 14.25 16.5H3.75C3.33579 16.5 3 16.1642 3 15.75V6H1.5V4.5H5.25V2.25C5.25 1.83579 5.58579 1.5 6 1.5H12C12.4142 1.5 12.75 1.83579 12.75 2.25V4.5ZM6.75 8.25V12.75H8.25V8.25H6.75ZM9.75 8.25V12.75H11.25V8.25H9.75ZM6.75 3V4.5H11.25V3H6.75Z" fill="#91112B"/>
                </svg>
                <span class='text-dark-red ml-2'>Remove</span>

            </button>
        </div>
        `;

    div.querySelector(".editBtn").addEventListener("click", () => {
      document.getElementById("addBtn").innerText = "Edit Instructor";
      editingIndex = index;
      document.getElementById("nameInput").value = instructor.name;
      document.getElementById("aboutInput").value = instructor.about;
      // Note: You can't set the value of a file input for security reasons
      document.getElementById("default-modal").classList.remove("hidden");
      document.getElementById("default-modal").classList.add("flex");
    });

    div.querySelector(".removeBtn").addEventListener("click", () => {
      instructors.splice(index, 1); // Remove the instructor at the given index
      updateInstructors(); // Update the instructors list on the page
      updateHiddenInput(); // Update the hidden input field
    });

    instructorsDiv.appendChild(div);
    toggleButtonContainerVisibility();
  });
}

document.getElementById("addBtn").addEventListener("click", () => {
  const name = document.getElementById("nameInput").value;
  const about = document.getElementById("aboutInput").value;
  const image = document.getElementById("dropzone-file").files[0];
  console.log("image", image);

  if (editingIndex !== null) {
    instructors[editingIndex] = { name, about, image };
  } else {
    instructors.push({ name, about, image });
  }

  updateInstructors();
  updateHiddenInput();

  document.getElementById("default-modal").classList.add("hidden");
});

document.getElementById("saveInstructorsBtn").addEventListener("click", () => {
  updateHiddenInput();

  document.getElementById("instructorsForm").submit();
});

document.getElementById("addInstructorBtn").addEventListener("click", () => {
  editingIndex = null;
  document.getElementById("default-modal").classList.remove("hidden");
});

document.getElementById("cancelBtn").addEventListener("click", () => {
  document.getElementById("default-modal").classList.add("hidden");
});

document.getElementById("clearInstructorsBtn").addEventListener("click", () => {
  instructors = [];
  updateInstructors();
  updateHiddenInput();
  toggleButtonContainerVisibility();
});

updateInstructors();

// show added image
const fileInput = document.getElementById("dropzone-file");

const imgElement = document.getElementById("selected-image");
fileInput.addEventListener("change", function (event) {
  if (fileInput.files.length > 0) {
    const selectedFile = fileInput.files[0];

    imgElement.src = URL.createObjectURL(selectedFile);

    imgElement.alt = selectedFile.name;
    imgElement.style.display = "block";
  } else {
    imgElement.src = "";
    imgElement.alt = "Selected Image";
    imgElement.style.display = "none";
  }
});
