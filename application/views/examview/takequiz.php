<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/quizform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>QuizHub | Answer Quiz</title>
    </head>
        <body>
    <div class = "main">
    <nav>
            <img src="<?php echo base_url();?>assets/images/logo.png" class="logo">
            <ul>
                <li><a href="<?php echo site_url('Welcome/Home'); ?>">Home</a></li>
                <li><a href="<?php echo site_url('Welcome/Join');?>">Join Quiz</a></li>
                <li><a href="#">Quiz List</a></li>
                <li><a href="<?php echo site_url('Welcome/Study'); ?>">Study Tips</a></li>
                <li><a href="<?php echo site_url('Welcome/Profile'); ?>">Profile</a></li>
                <li><a href="<?php echo base_url('Welcome/LogoutController');?>">Logout</a></li>
            </ul>
        </nav>
        <p>
            <?php
            if(isset($msg)){
                echo $msg;
            }
            ?>
        </p>
        <div class = "container">
        <p><?php echo validation_errors(); ?> </p>
            <h1><?=$exam['exam_title']?></h1>
            <form method="POST" action="<?php echo base_url('ExamController/answerquiz/'.$exam['exam_id']);?>">
            <input type="hidden" name="exam_id" value="<?=$exam['exam_id']?>">
            <input type="hidden" name="username" value="<?=$user['username']?>">
            <?php 
            $index = 1;
            for($i=0;$i<count($questions);$i++){ ?>
                <input type="hidden" name="questions[<?=$i?>][question]" value="<?=$questions[$i]['question_id']?>">
                <br><br><label><?=$index?>.<?=$questions[$i]['questions']?> </label><br>
                <ol type="A">
                <?php $opt = 4;
                for($j = 0; $j < count($questions[$i]['options']); $j++) { ?>
                    <input type="radio" id="html" name="questions[<?=$i?>][useranswer]" value="<?=$questions[$i]['options'][$j]['optionid']?>">
                    <label for="option"><?=$questions[$i]['options'][$j]['options']?></label><br>
                <?php } ?><br>
                <?php $index++; } ?>
        </div>
            <div>
            <input type="submit" value="Submit Form">
            </div>
            </form>
    </div>
    </body>
</html>