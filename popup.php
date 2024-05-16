<style>
    /**
 * Box model adjustments
 * `border-box`... ALL THE THINGS - http://cbrac.co/RQrDL5
 */

/* *,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
} */

/**
 * 1. Force a vertical scrollbar - http://cbrac.co/163MspB
 * NOTE: Use `text-rendering` with caution - http://cbrac.co/SJt8p1
 * NOTE: Avoid the webkit anti-aliasing trap - http://cbrac.co/TAdhbH
 * NOTE: IE for Windows Phone 8 ignores `-ms-text-size-adjust` if the
 *       viewport <meta> tag is used - http://cbrac.co/1cFrAvl
 */

html {
  font-size: 100%;
  overflow-y: scroll; /* 1 */
  min-height: 100%;
}

/**
 * 1. Inherits percentage declared on above <html> as base `font-size`
 * 2. Unitless `line-height`, which acts as multiple of base `font-size`
 */

body {
  font-family: "Helvetica Neue", Arial, sans-serif;
  font-size: 1em;   /* 1 */
  line-height: 1.5; /* 2 */
  color: #444;
}

/* Page wrapper */
.wrapper {
  width: 90%;
  max-width: 800px;
  margin: 4em auto;
  text-align: center;
}

/* Icons */
.icon {
  display: inline-block;
  width: 16px;
  height: 16px;
  vertical-align: middle;
  fill: currentcolor;
}

/* Headings */
h1,
h2,
h3,
h4,
h5,
h6 {
  color: #222;
  font-weight: 700;
  font-family: inherit;
  line-height: 1.333;
  text-rendering: optimizeLegibility;
}

/**
 * Modals ($modals)
 */

/* 1. Ensure this sits above everything when visible */
.modal {
    position: absolute;
    z-index: 10000; /* 1 */
    top: 0;
    left: 0;
    visibility: hidden;
    width: 100%;
    height: 100%;
}

.modal.is-visible {
    visibility: visible;
}

.modal-overlay {
  position: fixed;
  z-index: 10;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: hsla(0, 0%, 0%, 0.5);
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s linear 0.3s, opacity 0.3s;
}

.modal.is-visible .modal-overlay {
  opacity: 1;
  visibility: visible;
  transition-delay: 0s;
}

.modal-wrapper {
  position: absolute;
  z-index: 9999;
  top: 6em;
  left: 50%;
  width: 90%;
  margin-left: -43em;
  background-color: #fff;
  box-shadow: 0 0 1.5em hsla(0, 0%, 0%, 0.35);
}

.modal-transition {
  transition: all 0.3s 0.12s;
  transform: translateY(-10%);
  opacity: 0;
}

.modal.is-visible .modal-transition {
  transform: translateY(0);
  opacity: 1;
}

.modal-header,
.modal-content {
  padding: 1em;
}

.modal-header {
  position: relative;
  background-color: #fff;
  box-shadow: 0 1px 2px hsla(0, 0%, 0%, 0.06);
  border-bottom: 1px solid #e8e8e8;
}

.modal-close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 1em;
  color: #aaa;
  background: none;
  border: 0;
}

.modal-close:hover {
  color: #777;
}

.modal-heading {
  font-size: 1.125em;
  margin: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.modal-content > *:first-child {
  margin-top: 0;
}

.modal-content > *:last-child {
  margin-bottom: 0;
}
  
</style>
  <script src= 
        "https://code.jquery.com/jquery-3.5.1.min.js"> 
    </script> 
  <title>Simple jQuery Modal</title>
</head>
<body>
  <svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="768" height="800" viewBox="0 0 768 800"><defs><g id="icon-close"><path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path></g></defs></svg>
  
  <div class="wrapper">
    <h1>Simple jQuery Modal</h1>
    <button class="modal-toggle">Show modal</button>
  </div>
  
  <div class="modal">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header">
        <button class="modal-close modal-toggle"><svg class="icon-close icon" viewBox="0 0 32 32"><use xlink:href="#icon-close"></use></svg></button>
        <h2 class="modal-heading">This is a modal</h2>
      </div>
      
      <div class="modal-body">
        <div class="modal-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eum delectus, libero, accusantium dolores inventore obcaecati placeat cum sapiente vel laboriosam similique totam id ducimus aperiam, ratione fuga blanditiis maiores.</p>
          <button class="modal-toggle">Update</button>
        </div>
      </div>
    </div>
  </div>
  <style>
    .grid-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
}

.grid-item {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}
  </style>
  <ul class="grid-container">
  <li class="grid-item">Item 1</li>
  <li class="grid-item">Item 2</li>
  <li class="grid-item">Item 3</li>
  <li class="grid-item">Item 4</li>
  <li class="grid-item">Item 5</li>
  <li class="grid-item">Item 6</li>
</ul>
  <script>
    // Quick & dirty toggle to demonstrate modal toggle behavior
$('.modal-toggle').on('click', function(e) {
  e.preventDefault();
  $('.modal').toggleClass('is-visible');
});
  </script>