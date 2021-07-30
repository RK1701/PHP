
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyC_vbkE0Xv5T3FJ4fxhbaeHtPkwZFzO7Bo",
    authDomain: "society-maintenance-9ac0a.firebaseapp.com",
    databaseURL: "https://society-maintenance-9ac0a.firebaseio.com",
    projectId: "society-maintenance-9ac0a",
    storageBucket: "society-maintenance-9ac0a.appspot.com",
    messagingSenderId: "263869923053",
    appId: "1:263869923053:web:bd64bbfc12185854ae56e4",
    measurementId: "G-3RWGBGRPMZ"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();


  var contactRef = firebase.database().ref().child("contactForm1");

  document.getElementById('contactForm').addEventListener('submit', submitForm);

  function suubmitForm(e){
    e.preventDefault();

    var Name = getInputVal('Name');
    var Email = getINputVal('Email');
    var Message = getINputVal('Message');


    saveForm(Name,Email,Message);

    document.getElementById('contactForm').requestFullscreen();

  }

function getInputVal(id){
  return document.getElementById(id).value;
}  

function saveForm(Name,Email,Message){
  
  var newContactRef = contactRef.push();
  newContactRef.set({

    Name : Name,
    Email : Email,
    Message : Message

  });


}