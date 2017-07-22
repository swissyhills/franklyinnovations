<?php include 'header.php';?>
<section class="contact-details">
    <div class="content-block">
        <div class=" text-center">
            <h2>Let us collaborate!</h2>
            <p>Before we start, Please answer a couple of short queires about you and your project...</p>
        </div>
        <br /><br />
        <form>
            <h4 class="text-center">About You</h4>
            <div class="row">
              <div class="form-group col">
                <input type="name" class="form-control" id="clientName" placeholder="Firstname Lastname">
              </div>
            </div>
            <div class="row">
              <div class="form-group col">
                <input type="email" class="form-control" id="clientEmail" aria-describedby="emailHelp" placeholder="Eg: username@domain.com">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group col">
                <input type="tel" class="form-control" id="clientPhone" aria-describedby="phoneHelp" placeholder="Eg: +91 xxx xxx xxxx">
                <small id="phoneHelp" class="form-text text-muted">We'll never share your Phone No. with anyone else.</small>
              </div>
            </div>
            <div class="row">
              <div class="form-group col">
                <textarea class="form-control" id="clientCompany" rows="3" placeholder="Tell us about your company/organization"></textarea>
              </div>
            </div>
            <br /><br />
            <h4 class="text-center">Your Project</h4>
            <div class="row">
              <div class="form-group col">
                <textarea class="form-control" id="clientProject" rows="3" placeholder="Tell us about your project or requirement, so we could better assist you."></textarea>
              </div>
            </div>
            <div class="row">
              <div class="form-group col">
                <input type="name" class="form-control" id="clientDeadline" placeholder="Enter Deadlines">
              </div>
            </div>
            <div class="row">
              <div class="form-group col">
                <input type="name" class="form-control" id="clientAudience" placeholder="Enter the target audience for your project">
              </div>
            </div>
            <div class="row">
              <div class="form-group col">
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Attach any documents that would help us better understand you requirement</small>
              </div>
            </div>
            <br/>
            <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
        </form>
    </div>
    <footer>
     <section class="copyright">
            <div class="content-block">
                <p>© 2017 Frankly Innovations.</p>
            </div>
        </section>
    </footer>
</section>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="js/scripts.js" type="text/javascript"></script>
</body>
</html>
