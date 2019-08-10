
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("../media/sectionone-parallax.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("../media/sectiontwo-parallax.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("../media/sectionthree-parallax.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }
}
</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
  <span class="border">insert lunardo logo</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">section one</h3>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in hendrerit leo, venenatis placerat nulla. 
    Suspendisse dapibus enim enim, et viverra arcu eleifend in. Aenean in magna risus. Mauris tincidunt
    ligula volutpat lacinia ornare. Phasellus tristique sodales semper. 
    Maecenas finibus, nibh in placerat suscipit, nisl diam sollicitudin tellus, ultrices sodales elit metus sit amet arcu. 
    Ut semper purus quis justo placerat semper. Sed eget lacus nec felis ultricies tempus at nec risus. 
    Mauris ornare aliquet felis ac tempor. Curabitur neque arcu, accumsan id semper at, dapibus non augue. 
    Nulla facilisi. Integer et ex dignissim, vestibulum odio et, dignissim urna. 
    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
    Phasellus sagittis rhoncus libero, eu venenatis tellus vehicula quis.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
  <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">section two</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in hendrerit leo, venenatis placerat nulla. 
    Suspendisse dapibus enim enim, et viverra arcu eleifend in. Aenean in magna risus. Mauris tincidunt
    ligula volutpat lacinia ornare. Phasellus tristique sodales semper.</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
  <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Section Three</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in hendrerit leo, venenatis placerat nulla. 
    Suspendisse dapibus enim enim, et viverra arcu eleifend in. Aenean in magna risus. Mauris tincidunt
    ligula volutpat lacinia ornare. Phasellus tristique sodales semper.</p>
  </div>
</div>

<div class="bgimg-1">
  <div class="caption">
  <span class="border">Footer</span>
  </div>
</div>

</body>
</html>