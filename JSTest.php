<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
#panel {
  margin: 100px;
  padding: 20px;
  border: 1px solid red;
  width:300px;
  text-align:center;
}

.bottom {
  position: fixed;
  bottom: 0;
}

pre {
  background-color: lightgrey;
  border-radius: 5px;
  padding: 5px;
}
</style>

<script>
$(document).ready(function(){
    $("#panel").hide();
    $("button").click(function(){
    $("#panel").slideToggle();
	ajaxfn();
    });
});

function ajaxfn() {
var data = "echo 'hello world'";

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "https://freetrial1566893.beekeeper.io/api/2/conversations/2758033");
xhr.setRequestHeader("authorization", "Token 47e6a7a2-a0d0-468f-92c1-7f45f0f0bdff");
xhr.setRequestHeader("accept", "application/json");
xhr.setRequestHeader("content-type", "application/json");
xhr.setRequestHeader("cache-control", "no-cache");
xhr.setRequestHeader("postman-token", "0a2e16ed-a13c-7bee-1749-011541505a6a");

xhr.send(data);

}
//test


</script>
</head>
<body>
<button>Click me</button>
<div type="button" onclick="ajaxfn()"id="panel"></div>

<div class="bottom">
  This example uses jQuery and jQueryUI (for the slide down effect).
  To use them in your HTML code, include these scripts from a <a href="https://cdnjs.com/libraries/jquery">CDN service</a> into your code:
  <pre><code>&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"&gt;&lt;/script&gt;
&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"&gt;&lt;/script&gt;</code></pre>
</div>
</body>