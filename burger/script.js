function changeCategory(category) {
  var menuItems = document.querySelectorAll('#menu .col');
  switch (category) {
    case 'features':
      filterItems(menuItems, 'features');
      break;
    case 'promotion':
      filterItems(menuItems, 'promotion');
      break;
    case 'top-seller':
      filterItems(menuItems, 'top-seller');
      break;
    case 'top-rated':
      // Simulating top-rated items
      filterItems(menuItems, 'top-rated');
      break;
    case 'all':
      showAllItems(menuItems);
      break;
    default:
      break;
  }
}

function filterItems(menuItems, idName) {
  for (var i = 0; i < menuItems.length; i++) {
    if (menuItems[i].classList.contains(idName)) {
      menuItems[i].style.display = 'block';
    } else {
      menuItems[i].style.display = 'none';
    }
  }
}

function showAllItems(menuItems) {
  for (var i = 0; i < menuItems.length; i++) {
    menuItems[i].style.display = 'block';
  }
}



