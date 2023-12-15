/**
 * JS File 
 */

function changeActiveClass(e) {
  if (document.querySelector('#menu_list li.active')) {
      document.querySelector('#menu_list li.active').classList.remove('active');
  }
  e.target.parentNode.className = "active";
}

const sections = document.querySelectorAll("")
