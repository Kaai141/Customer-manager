
    <div class="container">
            <h3 class="text-center">Create New Customer</h3>
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form method="POST" action="/customers/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="full_name">
                        @error('name')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="full_name">
                        @error('address')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="typeSelect">Type</label>
                        <select class="form-control" name="type" id="typeSelect">
                            <option value="Individual">Individual</option>
                            <option value="Company">Company</option>
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Individual" name="type" value="Individual" class="custom-control-input" />
                            <label class="custom-control-label" for="Individual">Individual</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Company" name="type" value="Company" class="custom-control-input" />
                            <label class="custom-control-label" for="Company">Company</label>
                        </div>
                    </div> --}}
                    
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="male" name="gender" value="M" class="custom-control-input" />
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="female" name="gender" value="F" class="custom-control-input" />
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" id="dob">
                    </div>
                  
                 
                    
                    <div class="form-group">
                        <div class="custom-file">    
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Upload Image</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                </form>
            </div>
        </div>
    </div>
    