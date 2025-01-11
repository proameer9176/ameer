const quizData = [
    {
      question: "What is the capital of France?",
      options: ["Paris", "London", "Berlin", "Madrid"],
      answer: "Paris"
    },
    {
      question: "What is 5 + 3?",
      options: ["5", "8", "7", "10"],
      answer: "8"
    },
    {
      question: "Who wrote 'Romeo and Juliet'?",
      options: ["Charles Dickens", "J.K. Rowling", "William Shakespeare", "Mark Twain"],
      answer: "William Shakespeare"
    }
  ];
  
  const quizContainer = document.getElementById("quiz");
  const submitButton = document.getElementById("submit");
  const resultContainer = document.getElementById("result");
  
  // Generate Quiz
  function loadQuiz() {
    quizData.forEach((item, index) => {
      const quizItem = document.createElement("div");
      quizItem.innerHTML = `
        <h3>${index + 1}. ${item.question}</h3>
        ${item.options.map(option => `
          <label>
            <input type="radio" name="question${index}" value="${option}">
            ${option}
          </label>
        `).join("")}
      `;
      quizContainer.appendChild(quizItem);
    });
  }
  
  // Check Answers
  function checkAnswers() {
    let score = 0;
    quizData.forEach((item, index) => {
      const selectedOption = document.querySelector(input[name="question${index}"]:checked);
      if (selectedOption && selectedOption.value === item.answer) {
        score++;
      }
    });
    resultContainer.textContent = You scored ${score} out of ${quizData.length};
  }
  
  // Event Listeners
  submitButton.addEventListener("click", checkAnswers);
  
  // Load Quiz on Page Load
  loadQuiz();