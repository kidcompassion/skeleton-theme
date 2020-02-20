jQuery( document ).ready(function( $ ) {

  // Function to add bg to nav on scroll, home page only
  const headerNavBgAnim = ()=>{
    const headerNav = document.querySelector('.primary');
    const addBg = 150;
    
    // On scroll, calculate whether to add the class or not
    window.addEventListener("scroll", function(e) {

      if(e.path[1].scrollY > addBg){
        headerNav.classList.add('bg-overlay');
      } else {
        headerNav.classList.remove('bg-overlay');
      }
    });
  }


  headerNavBgAnim();
  });
