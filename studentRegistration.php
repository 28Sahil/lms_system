

    <!-- regertration form -->


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade " id="sturegmodelcenter" tabindex="-1" aria-labelledby="sturegmodelcenterLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sturegmodelcenterLabel">Student registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">







                    <form  method="">


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label font-weight-bold"> <i
                                    class="fa-solid fa-user "></i> Name</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" for="stuname"
                                id="stuname" name="stuname" placeholder="Enter your name">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label  font-weight-bold"> <i
                                    class="fa-solid fa-envelope "></i> Email address</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" for="stuemail"
                                id="stuemail" name="stuemail" placeholder="Enter your E-mail">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label  font-weight-bold"><i
                                    class="fa-solid fa-key "></i> New Password</label>
                            <input type="password" class="form-control" for="stupass" id="stupass" name="stupass"
                                placeholder="Enter your password">
                                
                        </div>

                       
                    </form>












                </div>
                <div class="modal-footer">
                    <span id="sucessMsg"></span>
                <button type="button"  onclick="addStu()"  class="btn btn-primary" >Sign In</button>
                    <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
                   
                </div>
            </div>
        </div>
    </div>




    <!-- regertration form -->




