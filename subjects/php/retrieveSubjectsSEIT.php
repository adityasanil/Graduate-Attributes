<?php
include "../../connection.php";
include "../../connectToSubs.php";

$sqlRetrieve = "Select SubjectsSEIT from SEIT";
$queryRetrieve = mysqli_query($connectsubs, $sqlRetrieve );
$i = 0;

$sqlRetrieveProf = "Select Name from ProfessorTable";
$queryRetrieveProf = mysqli_query($connect, $sqlRetrieveProf);

$selectOptions = "";
while ($rowRetrieveProf = mysqli_fetch_array($queryRetrieveProf)) {
  $selectOptions = $selectOptions."<option>" .$rowRetrieveProf['Name']."</option>";
}
echo '<form class="">';
while($rowRetrieve = mysqli_fetch_array($queryRetrieve))
{
  ++$i;
?>
  <div class="form-inline">
    <p for="Subject" class="mr-5" name="subject">
      <input type="hidden" name="<?php echo 'subject' .$i; ?>" value="<?php echo $rowRetrieve['SubjectsSEIT'];?>">
      <!-- <input type="hidden" name="<?php echo $rowRetrieve['SubjectsSEIT'];?>" value=""> -->

      <?php echo $i .") "; echo $rowRetrieve['SubjectsSEIT']; echo ": "; ?>
    </p>
      <select class="form-control mb-3" name="<?php echo 'profSubj' .$i;  ?>" value="" style="width: 60%;">
        <option value="">Select Professor from the list</option>
        <?php echo $selectOptions; ?>
      </select>
  </div>
<?php
}
echo '</div>';
echo '</form>';
?>
