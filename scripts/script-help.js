var topicsId = document.getElementById('topics-id');
var gettingStartedId = document.getElementById('getting-started-id');
var usingKTId = document.getElementById('using-kazitap-id');
var accountsId = document.getElementById('account-id');
var safetyId = document.getElementById('safety-id');

var mainList = document.getElementById('main-list');
var gettingStartedList = document.getElementById('getting-started-topic-list');
var usingKTList = document.getElementById('usingKt-list');
var accountsList = document.getElementById('accounts-list');
var safetyList = document.getElementById('safety-list');



topicsId.addEventListener("click", function(){
    //mainList.classList.toggle('active-display');
    if(mainList.style.display === "none" || mainList.style.display === ""){
        mainList.style.display = "block"
        topicsId.childNodes[3].style.rotate ='180deg';
    }else{
        mainList.style.display = "none"
        topicsId.childNodes[3].style.rotate = '0deg';
    }
});
gettingStartedId.addEventListener("click", function(){
    if (gettingStartedList.style.display === "none" || gettingStartedList.style.display === "") {
        gettingStartedList.style.display = "block";
        //    rotate: 180deg;
        gettingStartedId.childNodes[3].style.rotate = '180deg';

      } else {
        gettingStartedList.style.display = "none";
        gettingStartedId.childNodes[3].style.rotate = '0deg'
      }
});    
usingKTId.addEventListener("click", function(){
    if (usingKTList.style.display === "none" || usingKTList.style.display === "") {
        usingKTList.style.display = "block";
        usingKTId.childNodes[3].style.rotate = '180deg';
      } else {
        usingKTList.style.display = "none";
        usingKTId.childNodes[3].style.rotate = '0deg';
      }
});
accountsId.addEventListener("click", function(){
    if (accountsList.style.display === "none" || accountsList.style.display === "") {
        accountsList.style.display = "block";
        accountsId.childNodes[3].style.rotate = '180deg';
      } else {
        accountsList.style.display = "none";
        accountsId.childNodes[3].style.rotate = '0deg';
      }
});
safetyId.addEventListener("click", function(){
    if (safetyList.style.display === "none" || safetyList.style.display === "") {
        safetyList.style.display = "block";
        safetyId.childNodes[3].style.rotate = '180deg';
      } else {
        safetyList.style.display = "none";
        safetyId.childNodes[3].style.rotate = '0deg';
      }
});