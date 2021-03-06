<!DOCTYPE html>
    
    <html>
        
        <head>
            
            <title>Guess the capitals of all 50 states!</title>
            
                 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                
                <script>
                
                 $(document).ready(function() {
                    
                    $('#captureUserAnswer').submit(function(e){
                 
                        e.preventDefault();
                        $("capitalAnswer").val = ("");                 
                        
                          var righty = 0;
                          var wrongy = 0;
                            
                          var correctAnswer = $("#stateCapitalName").val();
                          var userAnswer = $("#capitalAnswer").val();
                     
                          //$("#feedback").text("The correct answer is " + correctAnswer + "and the user entered: " + userAnswer);  
                     
                       if (userAnswer == correctAnswer) {
                        
                            righty += 1; 
                            $("#feedback").text("Ding, ding, ding! Correctomundo, mi amigo! You have a streak of " + righty + "correct answers.");
                            
                            
                            
                                            
                       } else {
                        
                            wrongy += 1;
                        
                            $("#feedback").text("Go hit the books, ya bum! You have a streak of " + wrongy + "wrong  answers.");
                        
                       }                                               
                    })
                    
                    $('#playAgain').click(function(){
                       
                        location.reload();

                        
                    })
                 });
                                  
                 </script>
            
        </head>
        
        <body>
            
            <h1>Guess the capitals of all 50 states!</h1>
            
            <?php
            
            // set up an array with the names of the states
            
            $stateNames = array (
"Alabama",
"Alaska",
"Arizona",
"Arkansas",
"California",
"Colorado",
"Connecticut",
"Delaware",
"Florida",
"Georgia",
"Hawaii",
"Idaho",
"Illinois",
"Indiana",
"Iowa",
"Kansas",
"Kentucky",
"Louisiana",
"Maryland",
"Massachusetts",
"Michigan",
"Minnesota",
"Mississippi",
"Missouri",
"Montana",
"Nebraska",
"Nevada",
"New Hampshire",
"New Jersey",
"New York",
"North Carolina",
"North Dakota",
"Ohio",
"Oklahoma",
"Oregon",
"Pennsylvania",
"Rhode Island",
"South Carolina",
"South Dakota",
"Tennessee",
"Texas",
"Utah",
"Vermont",
"Virginia",
"Washington",
"West Virginia",
"Wisconsin",
"Wyoming",
);

            // set up an array with the names of the capitals

$stateCapitalNames = array (
  "Montgomery",
  "Juneau",
  "Little Rock",
  "Phoenix",
  "Sacramento",
  "Denver",
  "Hartford",
  "Dover",
  "Tallahassee",
  "Atlanta",
  "Honolulu",
  "Boise",
  "Springfield",
  "Indianapolis",
  "Des Moines",
  "Topeka",
  "Frankfort",
  "Baton Rouge",
  "Annapolis",
  "Boston",
  "Lansing",
  "Saint Paul",
  "Jackson",
  "Jefferson City",
  "Helena",
  "Lincoln",
  "Carson City",
  "Concord",
  "Trenton",
  "Albany",
  "Raleigh",
  "Bismarck",
  "Columbus",
  "Oklahoma City",
  "Salem",
  "Harrisburg",
  "Providence",
  "Columbia",
  "Pierre",
  "Nashville",
  "Austin",
  "Salt Lake City",
  "Montpellier",
  "Richmond",
  "Olympia",
  "Charleston",
  "Madison",
  "Cheyenne",
);

                // Ask the computer to generate a random number from 1 to 48
                
                $stateNum = rand(0, 47);
                
                // Use this number to choose a random state, then the user needs to guess the capital. Both arrays are equal in length,
                // so we can use the random number as the index for the random state and its capital, too.
                
                $randomState = $stateNames[$stateNum];
                
                //Set up a form that tells the user the name of the random state and prompts her for the name of the capital
                
            	?>

                
                <h2>The name of the state is <?php print $randomState ?>. What is the name of the capital?</h2>
                
                    <form id ="captureUserAnswer" action = "" method = "post">
                    <fieldset>
                
                	<label>Enter the name of the capital of <?php print $randomState ?>.</label>
                	<input type = "text" name = "capitalAnswer" id = "capitalAnswer" />
                    <input type = "hidden" value = "<?php print $stateCapitalNames[$stateNum] ?>" id ="stateCapitalName" />
                	<button type = "submit">Submit</button>
                    <button type = "reset" id = "playAgain">Play Again</button>
	
                    </fieldset>
                <div id = "feedback"></div>

                
               
        
           
            
        </body>
        
        
        
    </html>