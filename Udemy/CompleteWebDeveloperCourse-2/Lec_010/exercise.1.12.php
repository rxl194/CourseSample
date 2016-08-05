<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Coding exercise: 1.12 Forms      
    </title>

<script src="codemirror-5.12/lib/codemirror.js"></script>
<link rel="stylesheet" href="codemirror-5.12/lib/codemirror.css">
<script src="codemirror-5.12/mode/htmlmixed/htmlmixed.js"></script>

   
      <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
      <link href="assets/css/toolkit-minimal.css" rel="stylesheet">
      <link href="assets/css/application-minimal.css" rel="stylesheet">


    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      /* …curses ios, etc… */
      @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
        body {
          width: 1px;
          min-width: 100%;
          *width: 100%;
        }
        #stage {
          height: 1px;
          overflow: auto;
          min-height: 100vh;
          -webkit-overflow-scrolling: touch;
        }
      }
        
        .exercise-form {
            
            padding: 20px;
            background-color:aliceblue;
        }
        .rule {
            
            border: 1px solid grey;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
        }
        .app-block-footer {
            margin-top:150px;
        }
        
        #usercode {
            
            height: 300px;
            margin-bottom: 20px;
        }
    </style>
      
      
  </head>


<body>
  



<nav class="navbar navbar-default navbar-static-top navbar-padded text-uppercase app-navbar">
  <div class="container">
    <div class="navbar-header navbar-default">
      <button type="button" class="navbar-toggle collapsed p-x-0" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../">
        <span>Coding-exercises.com</span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapse">
        
        <a target=_blank href="/createexercise.php?clone=1&code=1.12" class="btn btn-success navbar-right" style="margin-left:10px; padding:2px 10px 3px 10px;">Clone this exercise</a>    </div><!--/.nav-collapse -->
  </div>
</nav>

    <div class="container"><h1>1.12 Forms</h1>
        
<div id="message"></div>
        
        <p>INSTRUCTIONS: Update the form to include any missing input tags and add blue as an option to the top of the favourite colour choices.</p>
        

<div id="notchrome" class="alert alert-danger" style="display:none;">For full functionality, please use Chrome to view Coding Exercises. Other browsers may not validate your HTML correctly.</div>

        <div class="exercise-form">
           
            <div>
   
                
    <div id="usercode">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
	    &lt;title&gt;Forms&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    	&lt;form&gt;
        	&lt;p&gt;Name: &lt;type =&quot;text&quot;&gt;&lt;/p&gt;
           		&lt;p&gt;Age: &lt;input type=&quot;number&quot;&gt;&lt;/p&gt;
        	&lt;p&gt;Favourite colour:
            	&lt;select&gt;
        			&lt;option&gt;red&lt;/option&gt;
            		&lt;option&gt;yellow&lt;/option&gt;
            		&lt;option&gt;green&gt;&lt;/option&gt;
             	&lt;/select&gt;
        	&lt;/p&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;</div>
  </div>
               
  
  <button class="btn btn-success" id="validate-code" data-loading-text="Processing...">Submit</button>
  <button class="btn btn-danger" style="float:right" id="view-correct-answer">View answer</button></form>
        
        <iframe id="resultiframe" class="hidden"></iframe>
   
    </div>
</div>


<div class="block app-block-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 m-b">
        <ul class="list-unstyled list-spaced">
          <li><h6 class="text-uppercase">Courses</h6></li>
          <li><a href="https://www.udemy.com/complete-web-developer-course/?couponCode=49">The Complete Web Developer Course</a></li>
          <li><a href="https://www.udemy.com/complete-ios-9-developer-course/?couponCode=49">The Complete iOS 9 Developer Course</a></li>
          <li><a href="https://www.udemy.com/complete-android-developer-course/?couponCode=49">The Complete Android Developer Course</a></li>
          
        </ul>
      </div>
      <div class="col-sm-6 m-b">
        <ul class="list-unstyled list-spaced">
          <li><h6 class="text-uppercase">About</h6></li>
          <p>This site was created to accompany the courses to the left, but is free for anyone to use to create and share coding challenges. Enjoy!</p>
      </div>
    </div>
  </div>
</div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/toolkit.js"></script>
    <script src="assets/js/application.js"></script>
    
     <script>
         
             
        
          $("#view-correct-answer").click(function() {

  if (confirm("Are you sure you want to view the correct answer? Your current answer will be overwritten.")) {
    editor.setValue("<!doctype html>\r\n<html>\r\n    <head>\r\n\t    <title>Forms<\/title>\r\n    <\/head>\r\n    <body>\r\n    \t<form>\r\n        \t<p>Name: <input type =\"text\"><\/p>\r\n           \t\t<p>Age: <input type=\"number\"><\/p>\r\n        \t<p>Favourite colour:\r\n            \t<select>\r\n            \t\t<option>blue<\/option>\r\n        \t\t\t<option>red<\/option>\r\n            \t\t<option>yellow<\/option>\r\n            \t\t<option>green><\/option>\r\n             \t<\/select>\r\n        \t<\/p>\r\n        <\/form>\r\n    <\/body>\r\n<\/html>", -1)
  }
});
         
         
         $("#validate-code").on("click", function() {
             
             $("#validate-code").button('loading');
             editor.focus();
             
             var error = "";
             
             var annotations = editor.getSession().getAnnotations();
             
             console.log(annotations);
             if (annotations.length > 0 && annotations[0]['type'] == "error") {
                 
                
                 
                 
                 error='Error message: '+annotations[0]['text'];
                 
                 
                 
             } 
           
    
var code = editor.getValue();
            
          var ifrm = document.getElementById('resultiframe');
ifrm = (ifrm.contentWindow) ? ifrm.contentWindow : (ifrm.contentDocument.document) ? ifrm.contentDocument.document : ifrm.contentDocument;
ifrm.document.open();
ifrm.document.write(code);
ifrm.document.close();
             
                 function arraysEqual(arr1, arr2) {
                    if(arr1.length !== arr2.length)
                    return false;
                for(var i = arr1.length; i--;) {
                if(arr1[i] !== arr2[i])
                    return false;
                }

                    return true;
                }

             if ($("iframe").contents().find("input").length == 2) {} else error = "You\'re missing an input tag, check the code again.";
    if ($("iframe").contents().find("option").length == 4) {} else error = "You\'ve got an option tag missing, have you added this?";
    if ($("iframe").contents().find("option").length > 0 && $("iframe").contents().find("option").html().toLowerCase().indexOf("blue".toLowerCase())  >= 0) {} else error = "I can\'t find blue as an option for favourite colour, have you added this?";
                 if (error == "") $("#message").html('<div class="alert alert-success">Right on! You got it right, congratulations!  <a target=_blank href="https://twitter.com/intent/tweet?url=http://www.coding-exercises.com/exercise.php?code=1.12&text=I completed this coding challenge - can you?"><img src="tweet.png" alt="Tweet"></a> <a target=_blank href="https://facebook.com/sharer.php?u=http://www.coding-exercises.com/exercise.php?code=1.12"><img src="facebook.png" alt="Facebook"></a></div>'); else $("#message").html('<div class="alert alert-danger"><strong>There was an error in your code</strong>:<br>'+error+'</div>');
             $("#validate-code").button('reset');
                  
              
         })
</script>
    <script src="ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("usercode");
    editor.getSession().setMode("ace/mode/html");
    editor.setBehavioursEnabled(false);
    editor.focus();
</script>


    
        
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74455641-1', 'auto');
  ga('send', 'pageview');

</script>
    
    <script>
     var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
if (!is_chrome) {
    $("#notchrome").show();
}
    
    
   
    </script>
    
  </body>
</html>

