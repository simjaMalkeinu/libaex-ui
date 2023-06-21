const imgs = [
  [
    "public/gallery/carlos.png",
    "public/gallery/ela.png",
    "public/gallery/tbs.png",
  ],
  [
    "public/gallery/ela2.png",
    "public/gallery/issac.png",
    "public/gallery/ivan.png",
  ],
  [
    "public/gallery/malesonpointe.png",
    "public/gallery/tonatiuh.png",
    "public/gallery/menonpointe.png",
  ],
];

const titles = [
  ["carlosquezadaofficial", "rossi.elaagrest", "cpyballet"],
  ["rossi.elaagrest", "chapulo7", "ivan_felix"],
  ["malesonpointe", "tonatiuhgomezoficial", "jamesbwhiteside"],
];

const descriptions = [
  ["https://www.instagram.com/carlosquezadaofficial/", "https://www.instagram.com/rossi.elaagrest/", "https://www.instagram.com/cpyballet/"],
  ["https://www.instagram.com/rossi.elaagrest/", "https://www.instagram.com/chapulo7/", "https://www.instagram.com/ivan_felix/"],
  ["https://www.instagram.com/malesonpointe/", "https://www.instagram.com/tonatiuhgomezoficial/", "https://www.instagram.com/jamesbwhiteside/"],
];

console.log(imgs);

const title = document.getElementById("exampleModalLabel");
const img = document.getElementById("modalImage");
const desc = document.getElementById("description");

const clickImage = (column, id) => {
  console.log(imgs[column][id]);
  img.src = imgs[column][id];
  title.innerHTML = "Artista: " + titles[column][id];
  desc.innerHTML = "Instagram";
  desc.setAttribute("href", descriptions[column][id]);
};
