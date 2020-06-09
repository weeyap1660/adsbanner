var grid;
initGrid();

function saveBtn() {
  saveLayout(grid);
  alert("Layout saved!");
}

function resetBtn() {
  window.localStorage.removeItem("layout");
  alert("Layout resetted!");
  location.reload();
}

function initGrid() {
  grid = new Muuri(".grid", {
    dragEnabled: true,
    fillGaps: true,
    layoutOnInit: false,
  });

  var layout = window.localStorage.getItem("layout");
  if (layout) {
    loadLayout(grid, layout);
  } else {
    grid.layout(true);
  }
}

function serializeLayout(grid) {
  var itemIds = grid.getItems().map(function (item) {
    return item.getElement().getAttribute("data-id");
  });
  var classes = grid.getItems().map(function (item) {
    return item.getElement().getAttribute("class");
  });
  console.log(classes);
  return JSON.stringify(itemIds);
}

function saveLayout(grid) {
  var layout = serializeLayout(grid);
  console.log(layout);
  window.localStorage.setItem("layout", layout);
}

function loadLayout(grid, serializedLayout) {
  var layout = JSON.parse(serializedLayout);
  var currentItems = grid.getItems();
  console.log(currentItems);
  var currentItemIds = currentItems.map(function (item) {
    return item.getElement().getAttribute("data-id");
  });
  var newItems = [];
  var itemId;
  var itemIndex;

  for (var i = 0; i < layout.length; i++) {
    itemId = layout[i];
    itemIndex = currentItemIds.indexOf(itemId);
    if (itemIndex > -1) {
      newItems.push(currentItems[itemIndex]);
    }
  }
  console.log(currentItems[0]);

  grid.sort(newItems, { layout: "instant" });
}
