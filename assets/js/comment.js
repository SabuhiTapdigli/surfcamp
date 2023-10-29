const commentInput = document.getElementById("comment-input");
const commentButton = document.getElementById("comment-button");
const cancelButton = document.getElementById("cancel-button");
const commentsContainer = document.getElementById("comments");

let comments = [];

commentButton.addEventListener("click", () => {
  const commentText = commentInput.value;
  if (commentText.trim() !== "") {
    const comment = { text: commentText, helpful: false, replies: [] };
    comments.push(comment);
    renderComments();
    commentInput.value = "";
  }
});

cancelButton.addEventListener("click", () => {
  commentInput.value = "";
});

function renderComments() {
  commentsContainer.innerHTML = "";
  comments.forEach((comment, index) => {
    const commentDiv = document.createElement("div");
    commentDiv.className = "bg-gray-100 p-4 rounded";
    commentDiv.innerHTML = `
            <div class="flex mb-2">
                <img src="../../assets/icons/profile2.jpeg" class="w-8 h-8 rounded-full mr-2" alt="Avatar">
                <div>
                    <p class="font-bold">John Doe</p>
                    <p class="text-xs font-normal mb-4">${comment.text}</p>
                    <div class='flex gap-6'>
                        <button class="helpful-button flex items-center justify-center gap-1" data-index="${index}">
                            ${
                              comment.helpful
                                ? `<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="green">
                                    <path d="M9.12488 4.99984H13.125C13.8154 4.99984 14.375 5.55948 14.375 6.24982V7.56507C14.375 7.72832 14.343 7.89001 14.2809 8.04101L12.3469 12.7378C12.2504 12.972 12.0222 13.1248 11.7689 13.1248H1.25C0.904825 13.1248 0.625 12.845 0.625 12.4998V6.24982C0.625 5.90466 0.904825 5.62484 1.25 5.62484H3.42615C3.62923 5.62484 3.81964 5.52617 3.93676 5.36027L7.34513 0.531731C7.43419 0.405563 7.60206 0.36337 7.74019 0.432436L8.874 0.999328C9.53125 1.32797 9.87069 2.07021 9.68944 2.78235L9.12488 4.99984Z"/>
                                </svg>
                                <span class='text-xs'> It was Helpful!</span>`
                                : `
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <path d="M9.12488 4.99984H13.125C13.8154 4.99984 14.375 5.55948 14.375 6.24982V7.56507C14.375 7.72832 14.343 7.89001 14.2809 8.04101L12.3469 12.7378C12.2504 12.972 12.0222 13.1248 11.7689 13.1248H1.25C0.904825 13.1248 0.625 12.845 0.625 12.4998V6.24982C0.625 5.90466 0.904825 5.62484 1.25 5.62484H3.42615C3.62923 5.62484 3.81964 5.52617 3.93676 5.36027L7.34513 0.531731C7.43419 0.405563 7.60206 0.36337 7.74019 0.432436L8.874 0.999328C9.53125 1.32797 9.87069 2.07021 9.68944 2.78235L9.12488 4.99984ZM4.375 6.61701V11.8748H11.3504L13.125 7.56507V6.24982H9.12488C8.30944 6.24982 7.71238 5.48168 7.9135 4.69145L8.47806 2.47397C8.51431 2.33154 8.44644 2.18309 8.31494 2.11737L7.90175 1.91076L4.95797 6.08112C4.80178 6.30238 4.60213 6.48376 4.375 6.61701ZM3.125 6.87482H1.875V11.8748H3.125V6.87482Z" fill="black"/>
                                </svg> 
                                <span class='text-xs'>It was Helpful?</span>`
                            }
                        </button>
                        <button class="reply-button flex items-center justify-center gap-1" data-index="${index}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <path d="M3.40909 9.375L0.625 11.5625V1.875C0.625 1.52983 0.904825 1.25 1.25 1.25H10.625C10.9702 1.25 11.25 1.52983 11.25 1.875V9.375H3.40909ZM2.97676 8.125H10V2.5H1.875V8.99069L2.97676 8.125ZM5 10.625H11.3982L12.5 11.4907V5H13.125C13.4702 5 13.75 5.27983 13.75 5.625V14.0625L10.9659 11.875H5.625C5.27983 11.875 5 11.5952 5 11.25V10.625Z" fill="black"/>
                            </svg> 
                            <span class='text-xs'> Reply </span>
                        </button>
                    </div>
                </div>
            </div>
            
        `;
    const helpfulButton = commentDiv.querySelector(".helpful-button");
    helpfulButton.addEventListener("click", () => {
      comment.helpful = !comment.helpful;
      renderComments();
    });
    commentsContainer.appendChild(commentDiv);

    const replyButton = commentDiv.querySelector(".reply-button");
    replyButton.addEventListener("click", () => {
      const replyContainer = document.createElement("div");
      replyContainer.className = "ml-4 mt-2";
      replyContainer.innerHTML = `
                <input type="text" class="w-full p-2 rounded border" placeholder="Reply to this comment">
                <button class="reply-submit-button bg-blue-500 text-white px-4 py-2 rounded mt-2" data-index="${index}">Submit</button>
            `;
      commentDiv.appendChild(replyContainer);

      const replyInput = replyContainer.querySelector("input");
      const replySubmitButton = replyContainer.querySelector(
        ".reply-submit-button"
      );

      replySubmitButton.addEventListener("click", () => {
        const replyText = replyInput.value;
        if (replyText.trim() !== "") {
          comment.replies.push({ text: replyText, helpful: false });
          renderComments();
        }
      });

      // Add event listener for the "Thumbs Up" button in the reply section
      const replyHelpfulButton =
        replyContainer.querySelector(".helpful-button");
      replyHelpfulButton.addEventListener("click", () => {
        comment.replies[comment.replies.length - 1].helpful =
          !comment.replies[comment.replies.length - 1].helpful;
        renderComments();
      });
    });

    if (comment.replies.length > 0) {
      const replyContainer = document.createElement("div");
      replyContainer.className = "ml-4";
      comment.replies.forEach((reply, replyIndex) => {
        replyContainer.innerHTML += `
                    <div class="bg-gray-200 p-2 rounded">
                        <div class="flex items-center mb-2">
                            <img src="../../assets/icons/profile.jpeg" class="w-8 h-8 rounded-full mr-2" alt="Avatar">
                            <div>
                                <p class="font-bold">Jane Smith</p>
                                <p class="text-xs font-normal mb-4">${
                                  reply.text
                                }</p>
                            </div>
                        </div>
                        <button class="helpful-button flex items-center justify-center gap-1" data-index="${index}" data-reply-index="${replyIndex}">
                            ${
                              reply.helpful
                                ? `<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="green">
                              <path d="M9.12488 4.99984H13.125C13.8154 4.99984 14.375 5.55948 14.375 6.24982V7.56507C14.375 7.72832 14.343 7.89001 14.2809 8.04101L12.3469 12.7378C12.2504 12.972 12.0222 13.1248 11.7689 13.1248H1.25C0.904825 13.1248 0.625 12.845 0.625 12.4998V6.24982C0.625 5.90466 0.904825 5.62484 1.25 5.62484H3.42615C3.62923 5.62484 3.81964 5.52617 3.93676 5.36027L7.34513 0.531731C7.43419 0.405563 7.60206 0.36337 7.74019 0.432436L8.874 0.999328C9.53125 1.32797 9.87069 2.07021 9.68944 2.78235L9.12488 4.99984Z"/>
                          </svg>
                          <span class='text-xs'> It was Helpful!</span>`
                                : `
                          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path d="M9.12488 4.99984H13.125C13.8154 4.99984 14.375 5.55948 14.375 6.24982V7.56507C14.375 7.72832 14.343 7.89001 14.2809 8.04101L12.3469 12.7378C12.2504 12.972 12.0222 13.1248 11.7689 13.1248H1.25C0.904825 13.1248 0.625 12.845 0.625 12.4998V6.24982C0.625 5.90466 0.904825 5.62484 1.25 5.62484H3.42615C3.62923 5.62484 3.81964 5.52617 3.93676 5.36027L7.34513 0.531731C7.43419 0.405563 7.60206 0.36337 7.74019 0.432436L8.874 0.999328C9.53125 1.32797 9.87069 2.07021 9.68944 2.78235L9.12488 4.99984ZM4.375 6.61701V11.8748H11.3504L13.125 7.56507V6.24982H9.12488C8.30944 6.24982 7.71238 5.48168 7.9135 4.69145L8.47806 2.47397C8.51431 2.33154 8.44644 2.18309 8.31494 2.11737L7.90175 1.91076L4.95797 6.08112C4.80178 6.30238 4.60213 6.48376 4.375 6.61701ZM3.125 6.87482H1.875V11.8748H3.125V6.87482Z" fill="black"/>
                          </svg> 
                          <span class='text-xs'>It was Helpful?</span>`
                            }
                        </button>
                    </div>
                `;
      });

      commentDiv.appendChild(replyContainer);

      // Add event listener for the "Thumbs Up" button in the reply section
      const replyHelpfulButtons =
        replyContainer.querySelectorAll(".helpful-button");
      replyHelpfulButtons.forEach((button, replyIndex) => {
        button.addEventListener("click", () => {
          comment.replies[replyIndex].helpful =
            !comment.replies[replyIndex].helpful;
          renderComments();
        });
      });
    }
  });
}

renderComments();
