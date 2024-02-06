<?php 
$title="Add Info";
include '../layout/header.php'?>
<h2>User Form</h2>
    <form name="form1" method="post" action="">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name" required>
                </div>
                <div class="col">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
                </div>
                <div class="col">
                    <label for="groupId">Group ID:</label>
                    <select class="form-control" id="groupId" name="groupId">
                        <option value="BBCAP19">BBCAP19</option>
                        <option value="BBCAP20">BBCAP20</option>
                        <option value="BBCAP21">BBCAP21</option>
                        <option value="BBCAP22">BBCAP22</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
	include '../database/conn.php';
	include '../database/process.php';
    include '../layout/footer.php'
?>