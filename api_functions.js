function suspenduser(){
  var data = JSON.stringify({
  "name": "test_user1",
  "suspended": true,
  "custom_fields": [
    {
      "key": "firstname",
      "value": "Test"
    },
    {
      "key": "lastname",
      "value": "Test"
    }
  ]
});

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("PUT", "https://joelmora-test.us.beekeeper.io/api/2//users/57d3fc5c-0fc3-4e7f-89bf-39114379f8ac?custom_fields.max_visibility=admin");
xhr.setRequestHeader("authorization", "Token 18707b2f-1bcb-43c0-9e91-3d26bed81c46");
xhr.setRequestHeader("accept", "application/json");
xhr.setRequestHeader("content-type", "application/json");
xhr.setRequestHeader("cache-control", "no-cache");
xhr.setRequestHeader("postman-token", "62ceb782-c4c8-e292-ea03-bb2d22751e78");

xhr.send(data);
}
// will eventually change the value of the notification preference
  function changenotificationdaily(){
    var data = JSON.stringify({
  "name": "test_user1",
  "notifications_public": "daily",
  "custom_fields": [
    {
      "key": "firstname",
      "value": "Test"
    },
    {
      "key": "lastname",
      "value": "Test"
    }
  ]
});

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("PUT", "https://joelmora-test.us.beekeeper.io/api/2//users/57d3fc5c-0fc3-4e7f-89bf-39114379f8ac?custom_fields.max_visibility=admin");
xhr.setRequestHeader("authorization", "Token 18707b2f-1bcb-43c0-9e91-3d26bed81c46");
xhr.setRequestHeader("accept", "application/json");
xhr.setRequestHeader("content-type", "application/json");
xhr.setRequestHeader("cache-control", "no-cache");
xhr.setRequestHeader("postman-token", "62ceb782-c4c8-e292-ea03-bb2d22751e78");

xhr.send(data);
}




function activateuser(){
  var data = JSON.stringify({
  "name": "test_user1",
  "suspended": false,
  "custom_fields": [
    {
      "key": "firstname",
      "value": "Test"
    },
    {
      "key": "lastname",
      "value": "Test"
    }
  ]
});

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("PUT", "https://joelmora-test.us.beekeeper.io/api/2//users/57d3fc5c-0fc3-4e7f-89bf-39114379f8ac?custom_fields.max_visibility=admin");
xhr.setRequestHeader("authorization", "Token 18707b2f-1bcb-43c0-9e91-3d26bed81c46");
xhr.setRequestHeader("accept", "application/json");
xhr.setRequestHeader("content-type", "application/json");
xhr.setRequestHeader("cache-control", "no-cache");
xhr.setRequestHeader("postman-token", "62ceb782-c4c8-e292-ea03-bb2d22751e78");

xhr.send(data);
}
// will eventually change the value of the notification preference
  function changenotificationdaily(){
    var data = JSON.stringify({
  "name": "test_user1",
  "notifications_public": "daily",
  "custom_fields": [
    {
      "key": "firstname",
      "value": "Test"
    },
    {
      "key": "lastname",
      "value": "Test"
    }
  ]
});

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("PUT", "https://joelmora-test.us.beekeeper.io/api/2//users/57d3fc5c-0fc3-4e7f-89bf-39114379f8ac?custom_fields.max_visibility=admin");
xhr.setRequestHeader("authorization", "Token 18707b2f-1bcb-43c0-9e91-3d26bed81c46");
xhr.setRequestHeader("accept", "application/json");
xhr.setRequestHeader("content-type", "application/json");
xhr.setRequestHeader("cache-control", "no-cache");
xhr.setRequestHeader("postman-token", "62ceb782-c4c8-e292-ea03-bb2d22751e78");

xhr.send(data);
}



}
//todo need to embed functions into processing script
