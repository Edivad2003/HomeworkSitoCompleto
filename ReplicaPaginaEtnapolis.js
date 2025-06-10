document.addEventListener("DOMContentLoaded", () => {
  // Tooltip Management
  const tooltip = document.createElement("div");
  tooltip.classList.add("tooltip");
  document.body.appendChild(tooltip);

  const buttons = document.querySelectorAll(".col");

  buttons.forEach(button => {
    button.addEventListener("mouseover", (e) => {
      const text = button.dataset.tooltip;
      tooltip.textContent = text;
      tooltip.classList.add("show");
    });

    button.addEventListener("mousemove", (e) => {
      tooltip.style.left = e.pageX + 10 + "px";
      tooltip.style.top = e.pageY + 10 + "px";
    });

    button.addEventListener("mouseout", () => {
      tooltip.classList.remove("show");
    });
  });

  // HOME BUTTON
  const homeButton = document.getElementById('home-btn');
  if (homeButton) {
    homeButton.addEventListener('click', () => {
      setTimeout(() => {
        window.location.href = window.location.href;
      }, 2000);
    });
  }
});

// INFO
const infoButtons = document.querySelectorAll('.info-btn');
infoButtons.forEach(button => {
  button.addEventListener('click', () => {
    window.location.href = 'info.html';
  });
});

// NEGOZI
document.querySelectorAll("button").forEach(button => {
  if (button.textContent.trim().toUpperCase() === "NEGOZI") {
    button.addEventListener("click", () => {
      window.location.href = "negozi.html";
    });
  }
});
