const quizData = [
  {
    question: "1. Who is the father of Computers?",
    a: "James Gosling",
    b: "Charles Babbage",
    c: "Dennis Ritchie",
    d: "Bjarne Stroustrup",
    correct: "b",
  },
  {
    question: "2. Which of the following is the correct abbreviation of COMPUTER?",
    a: "Commonly Occupied Machines Used in Technical and Educational Research",
    b: "Commonly Operated Machines Used in Technical and Environmental Research",
    c: "Commonly Oriented Machines Used in Technical and Educational Research",
    d: "Commonly Operated Machines Used in Technical and Educational Research",
    correct: "d",
  },
  {
    question: "3. Which of the following is not a characteristic of a computer?",
    a: "Versatility",
    b: "Accuracy",
    c: "Diligence",
    d: "IQ",
    correct: "d",
  },
  {
    question:
      "4. Which of the following is the smallest unit of data in a computer?",
    a: "Bit",
    b: "KB",
    c: "Nibble",
    d: "Byte",
    correct: "a",
  },
  {
    question:
      "5. Which of the following can access the server?",
    a: "Web Client",
    b: "User",
    c: "Web Browser",
    d: "Web Server",
    correct: "a",
  },
];

const quiz = document.getElementById("quiz");
const question = document.getElementById("question");
const answerEls = document.querySelectorAll(".q");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
const c_text = document.getElementById("c_text");
const d_text = document.getElementById("d_text");
const btn = document.getElementById("btn");

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz() {
  deselectAnswers();

  const currentQuizData = quizData[currentQuiz];

  question.innerHTML = currentQuizData.question;
  a_text.innerHTML = currentQuizData.a;
  b_text.innerHTML = currentQuizData.b;
  c_text.innerHTML = currentQuizData.c;
  d_text.innerHTML = currentQuizData.d;
}

function deselectAnswers() {
  answerEls.forEach((answerEl) => (answerEl.checked = false));
}

function getSelected() {
  let answer;

  answerEls.forEach((answerEl) => {
    if (answerEl.checked) {
      answer = answerEl.id;
    }
  });
  return answer;
}

btn.addEventListener("click", () => {
  const answer = getSelected();
  console.log(answer);
  if (answer) {
    if (answer === quizData[currentQuiz].correct) {
      score++;
    }
    currentQuiz++;
    console.log(currentQuiz);
    if (currentQuiz < quizData.length) {
      loadQuiz();
    } else {
      quiz.innerHTML = `<h2> You answered ${score}/${quizData.length} questions correctly </h2>
      <button onclick="location.reload()" class="btn">Reload</button>
      `;
    }
  }
});
