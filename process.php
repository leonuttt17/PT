<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Year Project Evaluation Details</title>
</head>
<body style="font-family: Arial, sans-serif;">
    
    <img src="psp.png" alt="logo psp" style="display: block; margin: 0 auto;">
    <header style="color: white; background-color: purple; text-align: center; padding: 15px;">
        <h1>Final Year Project Evaluation Form</h1>
    </header>

    <form action="save.php" method="post">
        <?php
        // Retrieve and sanitize form inputs
        $projectId = htmlspecialchars($_POST['id']);
        $projectTitle = htmlspecialchars($_POST['title']);
        $department = htmlspecialchars($_POST['department']);
        $supervisorName = htmlspecialchars($_POST['svname']);
        $juryName = htmlspecialchars($_POST['juryname']);
        $evaluationDate = htmlspecialchars($_POST['date']);
        
        // Convert date to 'd-m-Y' format
        $dateFormatted = date('d-m-Y', strtotime($evaluationDate));

        // Retrieve marks and calculate given marks
        $novelty = htmlspecialchars($_POST['novelty']);
        $practicality = htmlspecialchars($_POST['practicality']);
        $impact = htmlspecialchars($_POST['impact']);
        $presentation = htmlspecialchars($_POST['presentation']);
        $video = htmlspecialchars($_POST['video']);

        $givenMark1 = ($novelty / 5) * 25;
        $givenMark2 = ($practicality / 5) * 25;
        $givenMark3 = ($impact / 5) * 20;
        $givenMark4 = ($presentation / 5) * 15;
        $givenMark5 = ($video / 5) * 15;

        $totalMarks = $givenMark1 + $givenMark2 + $givenMark3 + $givenMark4 + $givenMark5;

        // Determine grade
        if ($totalMarks >= 80) {
            $grade = 'Grade A';
        } elseif ($totalMarks >= 60) {
            $grade = 'Grade B';
        } elseif ($totalMarks >= 47) {
            $grade = 'Grade C';
        } elseif ($totalMarks >= 40) {
            $grade = 'Grade D';
        } else {
            $grade = 'Fail';
        }
        ?>

        <table style="width: 100%; margin: 0 auto; border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black; padding: 8px; text-align: left;">Project ID</th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="text" name="projectId" value="<?php echo $projectId; ?>" readonly></td>
            </tr>
            <tr style="background-color: grey;">
                <th style="border: 1px solid black; padding: 8px; text-align: left;">Project Title</th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="text" name="projectTitle" style="width:80%" value="<?php echo $projectTitle; ?>" readonly></td>
            </tr>
            <tr>
                <th style="border: 1px solid black; padding: 8px; text-align: left;">Department</th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="text" name="department" value="<?php echo $department; ?>" readonly></td>
            </tr>
            <tr style="background-color: grey;">
                <th style="border: 1px solid black; padding: 8px; text-align: left;">Supervisor’s Name</th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="text" name="supervisorName" style="width:50%" value="<?php echo $supervisorName; ?>" readonly></td>
            </tr>
            <tr>
                <th style="border: 1px solid black; padding: 8px; text-align: left;">Jury’s Name</th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="text" name="juryName" style="width:50%" value="<?php echo $juryName; ?>" readonly></td>
            </tr>
            <tr style="background-color: grey;">
                <th style="border: 1px solid black; padding: 8px; text-align: left;">Evaluation Date</th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="text" name="evaluationDate" value="<?php echo $dateFormatted; ?>" readonly></td>
            </tr>
        </table>
        <br><br><br>

        <table style="width: 100%; margin: 0 auto; border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black; padding: 8px; background-color: purple; color: white; text-align: center;">Evaluation Criteria</th>
                <th style="border: 1px solid black; padding: 8px; background-color: purple; color: white; text-align: center;">Full Marks</th>
                <th style="border: 1px solid black; padding: 8px; background-color: purple; color: white; text-align: center;">Given Marks</th>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 8px;">Novelty and Design</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">25%</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;"><input type="text" name="givenMark1" style="width:5%" value="<?php echo $givenMark1; ?>" readonly>%</td>
            </tr>
            <tr style="background-color: grey;">
                <td style="border: 1px solid black; padding: 8px;">Practicality and Usability</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">25%</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;"><input type="text" name="givenMark2" style="width:5%" value="<?php echo $givenMark2; ?>" readonly>%</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 8px;">Impact</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">20%</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;"><input type="text" name="givenMark3" style="width:5%" value="<?php echo $givenMark3; ?>" readonly>%</td>
            </tr>
            <tr style="background-color: grey;">
                <td style="border: 1px solid black; padding: 8px;">Presentation</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">15%</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;"><input type="text" name="givenMark4" style="width:5%" value="<?php echo $givenMark4; ?>" readonly>%</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 8px;">Video</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">15%</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;"><input type="text" name="givenMark5" style="width:5%" value="<?php echo $givenMark5; ?>" readonly>%</td>
            </tr>
        </table>

        <h2 style="color: white; background-color: purple; text-align: center; padding: 15px;">Result</h2>
        <table style="width: 100%; margin: 0 auto; border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black; padding: 8px; text-align: center;">Total Marks:  <input type="text" name="totalMarks" style="width:5%; text-align:center; color:blue" value="<?php echo $totalMarks; ?>" readonly>%</th>
                <th style="border: 1px solid black; padding: 8px; text-align: center;">Status:  <input type="text" name="grade" style="width:10%; text-align: center" value="<?php echo $grade; ?>" readonly></th>
            </tr>
        </table>

        <div class="button-container" style="text-align: center; margin-top: 20px;">
            <button type="submit" style="background-color: purple; color: white; padding: 10px 20px; border: none; cursor: pointer;">Save</button>
        </div>
    </form>
</body>
</html>