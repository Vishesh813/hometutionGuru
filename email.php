<html>


<form  method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>StudentClass</label>
                            <input type="text" name="classfor" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject to learn *</label>
                            <input type="text" name="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>City and Address *</label>
                            <input  name="address" class="form-control">
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit">Submit Message</button>
                        </div>
                    </div>
                </form>
</html>
