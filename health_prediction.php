<?php
session_start();
include('connection.php');

$user_profile = $_SESSION['email'];
if ($user_profile == true) {
} else {
    header("location:login.php");
}
include('navbar.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fever</title>
</head>
<body id="formtitle" style="background-color: darkcyan">

<div class="container">
    <h1> Fill up the following form to know what disease you might have.</h1>
    <div class="row">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Symptoms related to your head:</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Select the symptoms you are experiencing</h6>
                    <form method="post">

                        <!--  Start:: example  -->

                        <input type="checkbox" id="headache" name="headache" value="37">
                        <label for="headache">Headache</label>  <br>
                        <input type="checkbox" id="headache_sinus" name="headache_sinus" value="37">
                        <label for="headache_sinus">Headache Sinus</label>  <br>

                        <input type="checkbox" id="nose_pain" name="nose_pain" value="16">
                        <label for="nose_pain"> Nose pain</label> <br>

                        <input type="checkbox" id="runny_nose" name="runny_nose" value="17">
                        <label for="runny_nose"> Runny nose</label> <br>

                        <input type="checkbox" id="stuffy_nose" name="stuffy_nose" value="28">
                        <label for="stuffy_nose"> Stuffy/Blocked nose</label> <br>

                        <input type="checkbox" id="difficulty_nose" name="difficulty_nose" value="19">
                        <label for="difficulty_nose"> Difficulty in breath through nose</label>  <br>

                        <!-- End:: example -->

                        <input type="checkbox" id="pain_nose_ear_forhead" name="pain_nose_ear_forhead" value="25" >
                        <label for="pain_nose_ear_forhead">Pain/Tenderness/Swelling around eyes, cheeks, nose, ear or forhead</label><br>

                        <input type="checkbox" id="jaw_ache" name="jaw_ache" value="6">
                        <label for="jaw_ache"> Jaw ache</label> <br>

                        <input type="checkbox" id="tooth_ache" name="tooth_ache" value="5">
                        <label for="tooth_ache"> Tooth ache</label> <br>

                        <input type="checkbox" id="headache_side" name="headache_side" value="47">
                        <label for="headache_side"> Headache one side or both side</label>  <br>

                        <input type="checkbox" id="throbbing_pain" name="throbbing_pain" value="15">
                        <label for="throbbing_pain"> Throbbing pain</label> <br>

                        <input type="checkbox" id="lightheadedness_dizziness" name="lightheadedness_dizziness" value="17">
                        <label for="lightheadedness_dizziness"> Lightheadedness or sudden dizziness</label> <br><br>


                        <h5 class="card-title">Symptoms related to your Chest</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Select the symptoms you are experiencing</h6>

                        <input type="checkbox" id="nausea_pain" name="nausea_pain" value="14">
                        <label for="nausea_pain">Nausea, indigestion, heartburn, or abdominal pain</label> <br>

                        <input type="checkbox" id="pressure" name="pressure" value="39">
                        <label for="pressure">Pressure, tightness, pain, or a squeezing or aching sensation in chest or arms that may spread to your neck, jaw, or back</label> <br>

                        <input type="checkbox" id="shortness_breath" name="shortness_breath" value="26">
                        <label for="shortness_breath">Shortness of Breath</label><br><br>


                        <h5 class="card-title">Symptoms in other parts of the body</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Select the symptoms you are experiencing</h6>


                        <input type="checkbox" id="nausea_vomiting" name="nausea_vomiting" value="20">
                        <label for="nausea_vomiting">Nausea and vomiting </label><br>

                        <input type="checkbox" id="tiredness" name="tiredness" value="8">
                        <label for="tiredness">Tiredness</label> <br>
                        <input type="checkbox" id="tiredness_sinus" name="tiredness_sinus" value="16">
                        <label for="tiredness_sinus">tiredness_sinus</label> <br>

                        <input type="checkbox" id="cold_sweat" name="cold_sweat" value="10">
                        <label for="cold_sweat">Cold Sweat</label> <br>

                        <input type="checkbox" id="sweating" name="sweating" value="30">
                        <label for="sweating">Sweating</label> <br>

                        <input type="checkbox" id="chills_shivering" name="chills_shivering" value="22">
                        <label for="chills_shivering">Chills and Shivering</label> <br>

                        <input type="checkbox" id="muscle_aches" name="muscle_aches" value="20">
                        <label for="muscle_aches">Muscle aches</label> <br>

                        <input type="checkbox" id="loss_appetite"  name="loss_appetite" value="24">
                        <label for="loss_appetite">Loss of appetite</label><br>

                        <input type="checkbox" id="dehydration" name="dehydration" value="16">
                        <label for="dehydration">Dehydration</label> <br>

                        <input type="checkbox" id="general_weakness" name="general_weakness" value="46">
                        <label for="general_weakness">General Weakness</label> <br>

                        <input type="checkbox" id="reduced_smell_taste" name="reduced_smell_taste" value="11">
                        <label for="reduced_smell_taste">Reduced sense of smell and taste</label> <br>

                        <input type="checkbox" id="cough_sore_throat" name="cough_sore_throat" value="14">
                        <label for="cough_sore_throat">Cough or sore throat</label> <br>

                        <input type="checkbox" id="bad_breath" name="bad_breath" value="8">
                        <label for="bad_breath">Bad breath</label> <br>

                        <input type="checkbox" id="sensitivity" name="sensitivity" value="24">
                        <label for="sensitivity">Sensitivity to light/sound/smell/touch</label> <br><br>

                        <input id="add" type="submit" name="submit" value="Submit"  class="btn btn-primary"/><br>
                    </form>
                </div>
            </div>
        </div>
        <?php
        $fever_sum =0;
        $sinus_sum =0;
        $heart_attack_sum =0;
        $migraine_sum =0;
            if(isset($_POST['submit'])){
                $sweating = $_POST['sweating'] ?? 0;
                $chills_shivering = $_POST['chills_shivering'] ?? 0;
                $headache = $_POST['headache'] ?? 0;
                $muscle_aches = $_POST['muscle_aches'] ?? 0;
                $loss_appetite = $_POST['loss_appetite'] ?? 0;
                $dehydration = $_POST['dehydration'] ?? 0;
                $general_weakness = $_POST['general_weakness'] ?? 0;
                $fever_sum = $sweating+$chills_shivering+$headache+$muscle_aches+$loss_appetite+$dehydration+$general_weakness;

                $headache_sinus = $_POST['headache_sinus'] ?? 0;
                $nose_pain = $_POST['nose_pain'] ?? 0;
                $runny_nose = $_POST['runny_nose'] ?? 0;
                $stuffy_nose = $_POST['stuffy_nose'] ?? 0;
                $difficulty_nose = $_POST['difficulty_nose'] ?? 0;
                $pain_nose_ear_forhead = $_POST['pain_nose_ear_forhead'] ?? 0;
                $jaw_ache = $_POST['jaw_ache'] ?? 0;
                $tooth_ache = $_POST['tooth_ache'] ?? 0;
                $tiredness_sinus = $_POST['tiredness_sinus'] ?? 0;
                $reduced_smell_taste = $_POST['reduced_smell_taste'] ?? 0;
                $cough_sore_throat  = $_POST['cough_sore_throat'] ?? 0;
                $bad_beath = $_POST['bad_beath'] ?? 0;
                $sinus_sum = $headache_sinus+$nose_pain+$runny_nose+$stuffy_nose+$difficulty_nose+$pain_nose_ear_forhead+$jaw_ache+$tooth_ache+$tiredness_sinus+$reduced_smell_taste +$cough_sore_throat+$bad_beath;

                $pressure = $_POST['pressure'] ?? 0;
                $nausea_pain  = $_POST['nausea_pain'] ?? 0;
                $shortness_breath = $_POST['shortness_breath'] ?? 0;
                $cold_sweat = $_POST['cold_sweat'] ?? 0;
                $tiredness = $_POST['tiredness'] ?? 0;
                $lightheadedness_dizziness = $_POST['lightheadedness_dizziness'] ?? 0;
                $heart_attack_sum = $pressure+$nausea_pain+$shortness_breath+$cold_sweat+$tiredness+$lightheadedness_dizziness;

                $headache_side  = $_POST['headache_side'] ?? 0;
                $throbbing_pain = $_POST['throbbing_pain'] ?? 0;
                $sensitivity = $_POST['sensitivity'] ?? 0;
                $nausea_vomiting = $_POST['nausea_vomiting'] ?? 0;
                $migraine_sum = $headache_side+$throbbing_pain+$sensitivity+$nausea_vomiting;

            }
        ?>
<!--
fever = 195
sinus = 202
migraine = 106
heart attack = 114
-->

        <div class="col-md-4">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">
                        Result:
                        <ul>
                        <?php
                            if ($fever_sum > 140){
                                echo '<li>Fever</li>';
                            }
                            if ($sinus_sum > 180){
                                echo '<li>Sinus</li>';

                            }
                            if ($migraine_sum > 90){
                                echo '<li>Migraine</li>';
                            }
                            if ($heart_attack_sum > 96){
                                echo '<li>Heart Attack</li>';
                            }

                            if ($fever_sum < 140 && $sinus_sum < 180 && $migraine_sum < 90 && $heart_attack_sum < 96){
                                echo '<li>You have no problem</li>';
                            }
                        ?>
                        </ul>
                    </h5>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>