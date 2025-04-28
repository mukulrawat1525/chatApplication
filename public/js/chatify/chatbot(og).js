(function() {
    // Insert CSS styles into the document
    var styles = `
      .open-modal-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 15px;
        border-radius: 50%;
        background-color: green;
        color: white;
        border: none;
        font-size: 16px;
        cursor: pointer;
      }
      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        padding-top: 60px;
      }
      .modal-content {
        background-color: white;
        margin: 5% auto;
        padding: 20px;
        border-radius: 10px;
        width: 50%;
        text-align: center;
      }
      .close {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        top: 10px;
        right: 25px;
        font-family: Arial, Helvetica, sans-serif;
      }
      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }
    `;
    var styleSheet = document.createElement("style");
    styleSheet.type = "text/css";
    styleSheet.innerText = styles;
    document.head.appendChild(styleSheet);
  
    // Insert HTML for the button and modal
    var modalHTML = `
      <button id="openModalButton" class="open-modal-btn"><i class="fa-solid fa-clock"></i></button>
      <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <p id="greetingMessage"></p>
          <p id="currentTime"></p>
        </div>
      </div>
    `;
    document.body.insertAdjacentHTML('beforeend', modalHTML);
  
    // JavaScript to handle modal behavior
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModalButton");
    var span = document.getElementsByClassName("close")[0];
  
    function updateGreeting() {
      var currentDate = new Date();
      var hours = currentDate.getHours();
      var greeting = "";
  
      if (hours < 12) {
        greeting = "Good Morning!";
      } else if (hours < 18) {
        greeting = "Good Afternoon!";
      } else {
        greeting = "Good Evening!";
      }
  
      document.getElementById("greetingMessage").innerHTML = greeting;
      document.getElementById("currentTime").innerHTML = "Current time: " + currentDate.toLocaleTimeString();
    }
  
    btn.onclick = function() {
      modal.style.display = "block";
      updateGreeting();
    }
  
    span.onclick = function() {
      modal.style.display = "none";
    }
  
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  })();
  