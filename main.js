// function validate(){
// 	var username = document.getElementById("username").value;
// 	var password = document.getElementById("password").value;
// 	var mydata = JSON.parse(data);
// 	var count = 0;
// 	for (i = 0; i < mydata.length; i++) {
// 		if (username == mydata[i].username && password == mydata[i].password){
// 			alert("success");
// 			window.open('index.html', '_top');	
// 			break;
// 		} else{
// 			count = count + 1;
// 		}
// 	}
// 	if(count == mydata.length) {
// 		alert("Invalid username and password!");
// 	}
// 	return false;
// }
function saveKey(){
    $.ajax({
        url: 'userpage.php',
        data: {
            key: keyWords
        },
        success: function(html){
            document.getElementById('show').innerHTML = html;
        }
    });
}


// function validate() {
//     var username = document.getElementById('username').value;
//     var place = document.getElementById('password').value;
//     var contents = fs.readFileSync("admin.json");
//     var jsonContent = JSON.parse(contents);
//     if (username == "Qianwen Xie" && password == "010807771"){
// 		window.open('index.html', '_top');
// 		alert(obj.username);
// 	} else{
// 		alert("Invalid username and password!");
// 	}
// 	return false;
// }
	
    // var newObject = {
    //     "place": place,
    //     "username": username
    // };
    // info.push(newObject);

// function fnCheck(){
//     alert("in fnCheck()");
//     if(checkUP() == true){
//         alert("checkUP returned true! UserID and Password are correct");
//         if(checkAdmin() == true){
//             alert("checkAdmin() returned true! going to admin page now");
//             window.location = 'http://www.google.com';
//         }
//         else if(checkAdmin() == false){
//             alert("checkAdmin() returned false! going to userIndex page now");
//             window.location = 'http://www.yahoo.com';
//         }
//     }
//     else{
//         alert("checkUP() returned false. Creds are Invalid!");
//     }
// }

// function checkAdmin(){
//     alert("in checkAdmin()");
//     //var adminJSON = JSON.parse(Admins); 
//     //length = adminJSON.length;
//     x = document.forms["myForm"]["uid"].value;

//     for(var key in Admins){
//         var admin = Admins[key]
//         if(admin.Admin == x){
//             alert("Admin match found. Returning true!");
//             return true;
//         }
//         else{
//             alert("Admin match not found. Returning false");
//             return false;
//         }
//     }
// }

// function checkUP() {
//   var bool = false;
//   var x = document.forms["myForm"]["uid"].value;
//   var y = document.forms["myForm"]["pwd"].value;
//   console.log("In checkUP, value of x = " + x + " calue of y = " + y);

//   for (var key in UP) {
//     var user = UP[key]
//     if (x === user.username && y === user.password) {
//       console.log("user.username = " + user.username + "user.password = " + user.password + " User Id and password matched. Returning true now");
//       return true;
//     }
//   }
//   return bool;
// }