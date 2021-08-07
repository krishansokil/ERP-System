
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="style.css">
    <title>Responsive Contact Form HTML | CSS</title>
  </head>
  <style>
  @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  outline: none;
  font-family: "Poppins", sans-serif;
}

body {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  background: #f2f2f2;
}
.contact-form{
  width:80vw;
  display:flex;
  justify-content:space-between;
  background:#fff;
  margin:30px 0;
}
.contact-form > * {
  width:50%;
}
.contact-form .first-container{
  background:linear-gradient(45deg, rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url("images/bg.jpg") center center/cover no-repeat;
  display:flex;
  justify-content:center;
  align-items:center;
}
.contact-form .first-container .info-container div{
  margin:24px 0;
}
.contact-form .first-container .info-container div h3{
  color:#fff;
  font-size:18px;
  font-weight: 400;
  line-height: 1.2;
  padding-bottom: 10px;
}
.contact-form .first-container .info-container div p{
  font-size: 16px;
  line-height: 1.6;
  color:#00ad5f;
}
.contact-form .first-container .info-container div:first-of-type p{
  max-width:260px;
  color:#999;
}
.contact-form .second-container{
  padding:30px;
}
.contact-form .second-container form{
  display:flex;
  flex-direction: column;
}
.contact-form .second-container h2{
  font-size:30px;
  font-weight:400;
  color:#333;
  line-height: 1.2;
  text-align: center;
  margin-bottom:20px;
} 
.contact-form .second-container form .form-group{
  margin-bottom:10px;
}
.contact-form .second-container form .form-group *{
   min-height: 55px;
   border:1px solid #e6e6e6;
   padding:0 20px;
}
.contact-form .second-container form .form-group label{
  display:flex;
  align-items:center;
  width:100%;
  border:1px solid #e6e6e6;
  font-size:16px;
  color:#333;
  text-transform: uppercase;
  margin-top:-1px;
}
.contact-form .second-container form .form-group:first-of-type input{
  width:50.1%;
  margin-right:-5px;
}
.contact-form .second-container form .form-group input{
  width:100%;
  font-size:15px;
  margin-top:-2px;
}
.contact-form .second-container form .form-group input::placeholder,
.contact-form .second-container form .form-group .textarea::placeholder{
  color:#999;
}
.contact-form .second-container form .form-group .textarea{
  width:100%;
  min-height: 80px;
  resize:none;
  padding:10px 20px;
  margin-top:-1px;
}
.contact-form .second-container form .btn{
  width:200px;
  height:50px;
  background:#00ad5f;
  color:#fff;
  font-size:17px;
  font-weight: 600;
  text-transform: uppercase;
  border:0;
  position:relative;
  left:calc(50% - 100px);
  cursor:pointer;
}
.contact-form .second-container form .btn:hover{
  background:#333;
}
@media screen and (max-width:800px){
  .contact-form{
    width:90vw;
  }
}
@media screen and (max-width:700px){
  .contact-form{
    flex-direction: column-reverse;
  }
  .contact-form > *{
    width:100%;
  }
  .contact-form .first-container{
    padding:40px 0;
  }
}
  </style>
  <body>
     <div class="contact-form">
       <div class="first-container">
        <div class="info-container">
          <div> 
            <h3>Address</h3>
            <p>H-block, Street no-17, New Delhi- 110001, India</p>
          </div>
          <div> 
            <h3>Lets Talk</h3>
            <p>+1 800 1236879</p>
          </div>
          <div> 
            <h3>General Support</h3>
            <p>contact@example.com</p>
          </div>
        </div>
       </div>
       <div class="second-container">
         <h2>Send Us A Message</h2>
         <form>
           <div class="form-group">
             <label for="name-input">Tell us your name*</label>
             <input id="name-input" type="text" placeholder="First name" required="">
             <input type="text" placeholder="Last name" required="">
           </div>
           <div class="form-group">
             <label for="email-input">Enter your email</label>
             <input id="email-input" type="text" placeholder="Eg. example@gmail.com" required="">
           </div>
           <div class="form-group">
             <label for="phone-input">Enter phone number</label>
             <input id="phone-input" type="text" placeholder="Eg. _1800 000000" required="">
           </div>
           <div class="form-group">
             <label for="message-textarea">Message</label>
             <input class="textarea" id="message-textarea" placeholder="Write us a message"></input>
           </div>
           <a class="btn">Send message</button>
         </form>
       </div>
     </div>
  </body>
</html>

