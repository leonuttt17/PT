<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Year Project Evaluation Form</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <img src="psp.png" alt="logo psp" style="display: block; margin: 0 auto;">
    <header style="color: white; background-color: purple; text-align: center; padding: 15px;">
        <h1>Final Year Project Evaluation Form</h1>
    </header>

    <form action="process.php" method="post">
        <table style="text-align: left; width: 100%; border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black; padding: 8px;"><label for="id">Project ID</label></th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="text" id="id" name="id" required></td>
            </tr>
            <tr style="background-color: grey;">
                <th style="border: 1px solid black; padding: 8px;"><label for="title">Project Title</label></th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="text" id="title" name="title" required style="width:80%"></td>
            </tr>
            <tr>
                <th style="border: 1px solid black; padding: 8px;"><label for="department">Department</label></th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;">
                    <select id="department" name="department" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="JTMK">JTMK</option>
                        <option value="JKE">JKE</option>
                        <option value="JKM">JKM</option>
                        <option value="JP">JP</option>
                    </select>
                </td>
            </tr>
            <tr style="background-color: grey;">
                <th style="border: 1px solid black; padding: 8px;"><label for="svname">Supervisor’s Name</label></th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="text" id="svname" name="svname" required pattern="[a-zA-Z\s]+" title="Supervisor’s Name must only contain letters and whitespace." style="width:50%"></td>
            </tr>
            <tr>
                <th style="border: 1px solid black; padding: 8px;"><label for="juryname">Jury’s Name</label></th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="text" id="juryname" name="juryname" required pattern="[a-zA-Z\s]+" title="Jury’s Name must only contain letters and whitespace." style="width:50%"></td>
            </tr>
            <tr style="background-color: grey;">
                <th style="border: 1px solid black; padding: 8px;"><label for="date">Date</label></th>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">:</td>
                <td style="border: 1px solid black; padding: 8px;"><input type="date" id="date" name="date" required min="2023-01-01" max="2030-12-31"></td>
            </tr>
        </table>
        <br><br><br>
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black; padding: 8px; background-color: purple; color: white; text-align: center;">Evaluation Criteria</th>
                <th style="border: 1px solid black; padding: 8px; background-color: purple; color: white; text-align: center;">Full Marks</th>
                <th style="border: 1px solid black; padding: 8px; background-color: purple; color: white; text-align: center;">Given Marks</th>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 8px;">1. Novelty and Design</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">(/5)*25%</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">
                    <input type="radio" id="novelty1" name="novelty" value="1" required>1
                    <input type="radio" id="novelty2" name="novelty" value="2" required>2
                    <input type="radio" id="novelty3" name="novelty" value="3" required>3
                    <input type="radio" id="novelty4" name="novelty" value="4" required>4
                    <input type="radio" id="novelty5" name="novelty" value="5" required>5
                </td>
            </tr>
            <tr style="background-color: grey;">
                <td style="border: 1px solid black; padding: 8px;">2. Practicality and Usability</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">(/5)*25%</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">
                    <input type="radio" id="practicality1" name="practicality" value="1" required>1
                    <input type="radio" id="practicality2" name="practicality" value="2" required>2
                    <input type="radio" id="practicality3" name="practicality" value="3" required>3
                    <input type="radio" id="practicality4" name="practicality" value="4" required>4
                    <input type="radio" id="practicality5" name="practicality" value="5" required>5
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 8px;">3. Impact</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">(/5)*20%</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">
                    <input type="radio" id="impact1" name="impact" value="1" required>1
                    <input type="radio" id="impact2" name="impact" value="2" required>2
                    <input type="radio" id="impact3" name="impact" value="3" required>3
                    <input type="radio" id="impact4" name="impact" value="4" required>4
                    <input type="radio" id="impact5" name="impact" value="5" required>5
                </td>
            </tr>
            <tr style="background-color: grey;">
                <td style="border: 1px solid black; padding: 8px;">4. Presentation</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">(/5)*15%</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">
                    <input type="radio" id="presentation1" name="presentation" value="1" required>1
                    <input type="radio" id="presentation2" name="presentation" value="2" required>2
                    <input type="radio" id="presentation3" name="presentation" value="3" required>3
                    <input type="radio" id="presentation4" name="presentation" value="4" required>4
                    <input type="radio" id="presentation5" name="presentation" value="5" required>5
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 8px;">5. Video</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">(/5)*15%</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">
                    <input type="radio" id="video1" name="video" value="1" required>1
                    <input type="radio" id="video2" name="video" value="2" required>2
                    <input type="radio" id="video3" name="video" value="3" required>3
                    <input type="radio" id="video4" name="video" value="4" required>4
                    <input type="radio" id="video5" name="video" value="5" required>5
                </td>
            </tr>
        </table>
        <br><br>
        
        <div class="button-container" style="text-align: center;">
        <button type="submit" style="display: inline-block; background-color: purple; color: white; padding: 10px 20px; border: none; cursor: pointer;">Submit</button>
        <button type="reset" style="display: inline-block; background-color: purple; color: white; padding: 10px 20px; border: none; cursor: pointer;">Clear</button>
    </div>
</form>

</body>
</html>