jQuery( document ).ready(function( $ ) {
  
  // Sets up the mobile nav toggle on and off
  const mobileNavAnim = ()=>{  
    $('.hamburger').on('click', (e)=>{
        $('.primary--nav, .hamburger').toggleClass('expand');
    });
  }
  mobileNavAnim();
});
