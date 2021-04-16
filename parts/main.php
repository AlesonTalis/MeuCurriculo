<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TITLE -->
  <title>Exemplo de Curriculo</title>
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/colors.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/profile-sidebar.css">
  <link rel="stylesheet" href="css/mainarea.css">
  <link rel="stylesheet" href="css/editmode.css">
  <!-- JAVASCRIPT -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/jquery.fittext.js"></script>
  <script src="js/jquery.fittext.js"></script>
</head>
<body class="theme-light" style=" --background-image: url('../img/background.png');">
  <img class="print-background" src="img/background.png"/>
  <div class="space">
    <div class="fl-left">
<?php 
  include_once(PARTS."profile-photo.php");// profile photo
  include_once(PARTS."profile-name.php");// profile name
  include_once(PARTS."profile-details.php");// profile details
  include_once(PARTS."profile-social.php");// profile social media
  ?>
      

    <div class="main">
<?php
  include_once(PARTS."detail-aboutme.php");
  include_once(PARTS."detail-education.php");
  include_once(PARTS."detail-works.php");
  include_once(PARTS."detail-skills.php");
  include_once(PARTS."detail-achivements.php");
?>


    </div>
  </div>

  <script>
    
    // $(document).ready(function(){
      $(".text-fit").fitText(0.6);
    // });
    // edit mode
    // $("body").keydown(function(evenData, handler){
    //   alert(evenData);
    // });

    var ctrlPressed = false; //Variable to check if the the first button is pressed at this exact moment
    $(document).keydown(function(e) {
      if (e.ctrlKey) { //If it's ctrl key
        ctrlPressed = true; //Set variable to true
      }
    }).keyup(function(e) { //If user releases ctrl button
      if (e.ctrlKey) {
        ctrlPressed = false; //Set it to false
      }
    }); //This way you know if ctrl key is pressed. You can change e.ctrlKey to any other key code you want

    $(document).keydown(function(e) { //For any other keypress event
      if (e.which == 32) { //Checking if it's space button
        if(ctrlPressed == true){ //If it's space, check if ctrl key is also pressed
          // alert("Combination"); //Do anything you want
          EnableEditMode();
          ctrlPressed = false; //Important! Set ctrlPressed variable to false. Otherwise the code will work everytime you press the space button again
        }
      }
    });

    var editMode = false;// set editMode as false for default
    function EnableEditMode()
    {
      editMode = !editMode;// invert the value of editMode

      if (editMode)// verify if edit mode is on
      {
        if (!$("body").hasClass("edit-mode"))// and if body doesn't have edit mode
          $("body").addClass("edit-mode");// ad edit mode to body class
      }
      else// other else
      {
        $("body").removeClass("edit-mode");// remove the edit mode from it
      }
    }
    $("body").on('load',function(e){
      EnableEditMode();
    })
    
    var runEditMode = false;
    $(".edit-mode-btn").click(function(e){
      // alert($(this).attr('aria-data'));
      if (runEditMode)
      {
        location.href = "?edit="+$(this).attr('aria-data');
      }
    });
  </script>
  <script>
    var autoSizeText;

    autoSizeText = function() {
      var el, elements, _i, _len, _results;
      elements = $('.resize');
      console.log(elements);
      if (elements.length < 0) {
        return;
      }
      _results = [];
      for (_i = 0, _len = elements.length; _i < _len; _i++) {
        el = elements[_i];
        _results.push((function(el) {
          var resizeText, _results1;
          resizeText = function() {
            var elNewFontSize;
            elNewFontSize = (parseInt($(el).css('font-size').slice(0, -2)) - 1) + 'px';
            return $(el).css('font-size', elNewFontSize);
          };
          _results1 = [];
          while (el.scrollHeight > el.offsetHeight) {
            _results1.push(resizeText());
          }
          return _results1;
        })(el));
      }
      return _results;
    };

    $(document).ready(function() {
      return autoSizeText();
    });
  </script>
</body>
</html>