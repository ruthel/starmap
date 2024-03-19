// worker.js
self.onmessage = function(e) {
  var data = e.data;
  console.log('je suis ici');

  console.log(e.data);

  let db  = data.db;
  let html2canvas  = data.html2canvas;
  let document  = data.document;

  html2canvas(document.querySelector("#custom-card-canvas2"), {
    scale: 8,
    allowTaint: true,
    useCORS: true
  }).then(canvas => {

    db.images.clear();
    let data_10 = canvas.toDataURL('image/jpg', 1);

    db.images.bulkPut([
      {key: 'image', value: data_10},
    ]).then(() => {
      generatedMap = true;
      $('#myform').submit();
    });

  });

  self.postMessage("result");
};