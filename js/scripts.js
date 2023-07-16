// require("./src/customizer");
require("./src/navigation");
require("./src/scrollEvents");
require("./src/swipers");
// require("./src/customizer");

// Add padding to hero container to offset header
const heroContainer = document.querySelector("#hero .container");
const header = document.querySelector(".site-header");

headerHeight = header.clientHeight + header.offsetTop;

// heroContainer.style.paddingTop = `${headerHeight}px`;
