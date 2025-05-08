// complete the missing parts of the code

const photos = JSON.parse(content); // reads information from the JSON file into an array

const parent = document.querySelector('#parent');

for (let ph of photos) {	// loops over all pictures in the array 'photos'
   let figure = document.createElement('_____');
   figure.appendChild( createImage(ph) );
   figure.appendChild( createCaption(ph) );
   parent.appendChild(figure);
}

function createImage(photo) {
   let image = document.createElement('_____');
   image.setAttribute("_____", `images/${photo.______}`);
   image.setAttribute("_____", `${photo.______}`);
   return image;
}

function createCaption(photo) {
   let caption = document.createElement('________');

   caption.appendChild( createHeader(photo) );
   caption.appendChild( createParagraph(photo) );

   createColorScheme(caption, photo);
   return caption;
}

function createColorScheme(caption, photo) {
   for (let c of photo.colors) {
      let span = document.createElement('span');
      span.style.backgroundColor = c.hex;
      caption.appendChild(_____);
   } 
}

function createHeader(photo) {
   let h2 = document.createElement('h2');
   let h2Text = document.createTextNode(photo.title);
   h2.appendChild(_____);
   return h2;
}

function createParagraph(photo) {
   let p = document.createElement('p');
   let pText = document.createTextNode(photo.description);
   p.appendChild(______);
   return p;
}