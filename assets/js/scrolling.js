// Callback function to handle intersection changes
function handleIntersection(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fade-in-animation', 'fade-out-animation', 'slide-in-animation');
        observer.unobserve(entry.target);
      }
    });
  }
  
  // Create a new Intersection Observer
  const observer = new IntersectionObserver(handleIntersection, { threshold: 0.5 });
  
  // Select the element to observe
  const wrapper = document.querySelector('.wrapper');
  const h1 = document.querySelector('.h1');
  const imglog = document.querySelector('.imglog');
  const simple = document.querySelector('.simple');

  
  // Start observing the element
  observer.observe(wrapper);
  observer.observe(h1);
  observer.observe(imglog);
  observer.observe(simple);


  