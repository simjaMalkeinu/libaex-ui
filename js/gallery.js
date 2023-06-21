const imgs = [
  [
    "public/playground_assets/placeholderimage2803-j5qd-500w.png",
    "public/playground_assets/placeholderimage2803-h8ce-500w.png",
  ],
  [
    "public/playground_assets/placeholderimage2803-a48-300h.png",
    "public/playground_assets/placeholderimage2803-6gmd-500h.png",
    "public/playground_assets/placeholderimage2803-5ge6-500w.png",
  ],
  [
    "public/playground_assets/placeholderimage2803-5kth-500w.png",
    "public/playground_assets/placeholderimage2803-137-500h.png",
  ],
];

const titles = [
  [1, 2],
  [3, 4, 5],
  [6, 7],
];

const descriptions = [
  [1, 2],
  [3, 4, 5],
  [6, 7],
];

console.log(imgs);

const title = document.getElementById("exampleModalLabel");
const img = document.getElementById("modalImage");
const desc = document.getElementById("description");

const clickImage = (column, id) => {
  console.log(imgs[column][id]);
  img.src = imgs[column][id];
  title.innerHTML = 'Titulo de la obra: ' + titles[column][id];
  desc.innerHTML = 'Descripcion: ' + descriptions[column][id]
};

