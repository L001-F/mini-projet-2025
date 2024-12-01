document.addEventListener("DOMContentLoaded", () => {
    const clubCards = document.querySelectorAll(".club-card");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");
    let currentIndex = 0;
    let isAnimating = false; // Prevent spamming navigation during animation
  
    // Function to animate the sliding effect
    function slideToIndex(index) {
      if (isAnimating) return; // Block interaction while animating
      isAnimating = true;
  
      clubCards.forEach((card, i) => {
        const offset = i - index;
        card.style.transition = `transform 0.9s cubic-bezier(0.25, 0.1, 0.25, 1), opacity 0.7s ease`;
        card.style.transform = `translateX(${offset * 100}%) scale(${offset === 0 ? 1 : 0.85})`;
        card.style.opacity = offset === 0 ? 1 : 0.5;
        card.style.zIndex = -Math.abs(offset) + clubCards.length;
      });
  
      // Allow interactions again after animation ends
      setTimeout(() => {
        isAnimating = false;
      }, 900);
    }
  
    // Navigate to previous club
    prevBtn.addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + clubCards.length) % clubCards.length;
      slideToIndex(currentIndex);
    });
  
    // Navigate to next club
    nextBtn.addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % clubCards.length;
      slideToIndex(currentIndex);
    });
  
    // Add swipe gesture for touch devices
    let startX = 0;
    let endX = 0;
  
    const clubContainer = document.querySelector(".club-container");
    clubContainer.addEventListener("touchstart", (e) => {
      startX = e.touches[0].clientX;
    });
  
    clubContainer.addEventListener("touchend", (e) => {
      endX = e.changedTouches[0].clientX;
      const swipeDistance = endX - startX;
  
      if (swipeDistance > 50) {
        prevBtn.click();
      } else if (swipeDistance < -50) {
        nextBtn.click();
      }
    });
  
    // Initialize the first active card
    slideToIndex(currentIndex);
  });
  