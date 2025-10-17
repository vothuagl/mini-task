

//tab

document.addEventListener('DOMContentLoaded', function () {
  const tabs = document.querySelectorAll(".tab");
  const contents = document.querySelectorAll(".spot__wrapper");
  tabs.forEach(tab => {
    tab.addEventListener("click", function () {
      tabs.forEach(el => el.classList.remove('is-active'));
      const value = tab.getAttribute('data-tab');

      contents.forEach(content => {
        content.classList.remove("is-open");
      })

      tab.classList.add('is-active');
      document.querySelector(`#${value}`).classList.add("is-open");
    });
  })
});


//modal + modal1 click next button to modal2,3.

document.addEventListener('DOMContentLoaded', function () {
  const modalTabs = document.querySelectorAll(".modal-tab");
  const overlay = document.querySelector(".overlay");
  const closeBtns = document.querySelectorAll(".close");
  const nextBtns = document.querySelectorAll(".next");
  let currentModal = null;

  modalTabs.forEach(item => {
    item.addEventListener('click', () => {
      const modalId = item.getAttribute('data-modal');
      currentModal = document.getElementById(modalId);
      overlay.classList.remove("hidden");
      currentModal.classList.remove("hidden");
    })
  })

  overlay.addEventListener('click', () => {
    overlay.classList.add("hidden");
    currentModal.classList.add("hidden");
  })

  closeBtns.forEach(function (closeBtn) {
    closeBtn.addEventListener('click', () => {
      overlay.classList.add("hidden");
      closeBtn.closest('.modal').classList.add("hidden");
    })
  })

  // next button
  nextBtns.forEach(function (nextBtn) {
    nextBtn.addEventListener('click', function () {
      const current = nextBtn.closest('.modal');
      const nextId = Number(current.id) + 1;
      const nextModal = document.getElementById(nextId);
      current.classList.add('hidden');
      if (nextModal) {
        nextModal.classList.remove("hidden");
        currentModal = nextModal;
      }
    })
  })

});

//faq
document.addEventListener('DOMContentLoaded', () => {

  //click faq-tab
  const faqTabs = document.querySelectorAll('.tab-faq');
  const faqSections = document.querySelectorAll('.faq_section');
  faqTabs.forEach(function (faqTab) {
    faqTab.addEventListener('click', () => {
      const currentFaq = faqTab.getAttribute('data-faq');
      faqSections.forEach(el => el.classList.add("hidden"));
      document.querySelector(`#${currentFaq}`).classList.remove("hidden");
    })
  });

  //open answer
  const questions = document.querySelectorAll('.faq_question');
  questions.forEach(function (question) {
    const faqContent = question.closest('.faq_content');
    const answer = faqContent.querySelector('.faq_answer');
    const faqIcon = faqContent.querySelector('.faq_icon');
    $(question).on('click', function () {
      $(answer).slideToggle(1000);
      $(faqIcon).toggleClass('is-active');
    });
  })
});


// todo list

document.addEventListener("DOMContentLoaded", function () {
  const todoInput = document.querySelector('#todoInput');
  const closeItems = document.querySelectorAll(".todo_itemClose");
  const todoList = document.querySelector(".todo_list");
  const todoItems = document.querySelectorAll(".todo_item");

  let todos = [];
  let currentFilter = "all";
  const updateCount = () => {
    const activeArr = todos.filter(item => item.status === "active");
    document.querySelector(".todo_number").innerText = activeArr.length;
  }

  const updateUI = (value, status) => {
    console.log(value, status);
    const todoItem = document.createElement('p');
    todoItem.classList.add('todo_item');

    //text
    const textNode = document.createTextNode(value);

    //icon
    const closeIcon = document.createElement('span');
    const textIcon = document.createTextNode("x");
    const check = document.createElement('input');
    check.type = "checkbox";

    check.checked = status === "completed";
    closeIcon.classList.add('todo_itemClose');
    todoItem.appendChild(check);
    closeIcon.appendChild(textIcon);
    todoItem.appendChild(textNode);
    todoItem.appendChild(closeIcon);
    todoList.appendChild(todoItem);
  }

  const renderTodos = () => {
    todoList.innerHTML = "";
    let filter = [];
    if (currentFilter === "active") {
      filter = todos.filter(item => item.status === "active");
    } else if (currentFilter === "completed") {
      filter = todos.filter(item => item.status === "completed");
    } else {
      filter = todos;
    }
    filter.forEach(item => updateUI(item.value, item.status));
  }


  todoInput.addEventListener("keydown", (e) => {
    if (e.key === "Enter" && todoInput.value.trim() !== "") {
      let value = todoInput.value.trim();
      todos.push({ value, status: "active" });
      updateUI(value, "active");
      updateCount();
      todoInput.value = "";
    }
  })

  todoList.addEventListener("click", (e) => {
    const parentItem = e.target.parentElement;
    const text = parentItem.childNodes[1].textContent.trim();
    if (e.target.classList.contains('todo_itemClose')) {
      parentItem.remove();

      todos = todos.filter(todo => todo.value !== text);
    }

    if (e.target.type === "checkbox") {
      todos = todos.map(todo =>
        todo.value === text
          ? { ...todo, status: e.target.checked ? "completed" : "active" }
          : todo
      );

      if (e.target.checked) {
        parentItem.style.textDecoration = "line-through";
      }

    }

    updateCount();

  });

  // click button

  document.querySelector(".btn-all").addEventListener('click', () => {
    currentFilter = "all";
    renderTodos();
  })

  document.querySelector(".btn-active").addEventListener('click', () => {
    currentFilter = "active";
    renderTodos();
  })

  document.querySelector(".btn-completed").addEventListener('click', () => {
    currentFilter = "completed";
    renderTodos();
  })

  document.querySelector(".btn-clear").addEventListener('click', () => {
    todos = todos.filter(todo => todo.status !== "completed");
    renderTodos();
  })
})


document.addEventListener('DOMContentLoaded', () => {
  const arr = [1, 2, 5, 6, 1, 4, 1];

  function myFunc(total, num) {
    return total + num;
  }

  const arrObj = arr.reduce(myFunc, 0);
  console.log(arrObj);

})
