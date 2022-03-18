    //     var firebaseConfig = {
    //     apiKey: "AIzaSyC0P4S4FYXxlVAmfmf3sv_2xn7YqgXaFFw",
    //     authDomain: "contact-collection-clg.firebaseapp.com",
    //     projectId: "contact-collection-clg",
    //     storageBucket: "contact-collection-clg.appspot.com",
    //     messagingSenderId: "707306552713",
    //     appId: "1:707306552713:web:8dccef8d752ae61aabf558",
    //     measurementId: "G-5VJDPSNJKZ"
    //   };


    
       
    var firebaseConfig = {
        apiKey: "AIzaSyDkHA631nw2cOm7-3BHry1C0KVEPxBK3pY",
        authDomain: "flutterchatapp-b1e8b.firebaseapp.com",
        databaseURL: "https://flutterchatapp-b1e8b-default-rtdb.firebaseio.com",
        projectId: "flutterchatapp-b1e8b",
        storageBucket: "flutterchatapp-b1e8b.appspot.com",
        messagingSenderId: "136681032201",
        appId: "1:136681032201:web:e9ad8267e6d482232d46d8",
        measurementId: "G-D9RET76V9W"
      };
    // Initialize Firebase
          firebase.initializeApp(firebaseConfig);



window.onload=function () {
  render();
};
function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}
function phoneAuth() {
    //get the number
    var number=document.getElementById('number').value;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult=confirmationResult;
        coderesult=confirmationResult;
        console.log(coderesult);
        alert("Message sent");
    }).catch(function (error) {
        alert(error.message);
    });
}
function codeverify() {
    var code=document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function (result) {
        alert("Successfully registered");
        var user=result.user;
        console.log(user);
    }).catch(function (error) {
        alert(error.message);
    });
}