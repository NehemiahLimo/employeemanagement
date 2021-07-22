<template>
  <div>
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employee</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                      <p class="">Create Employee</p>
                      <router-link :to="{name:'EmployeesIndex'}" class="float-right" >Back</router-link>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="">
                            

                            <div class="form-group row">
                                <label for="country_code"
                                    class="col-md-4 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <select class="form-control" id="country_id"
                                       name="country_id" value="" required
                                        aria-label="Default select example">
                                        <option selected>--Select Country--</option>
                                        
                                            <option value=""></option>
                                        
                                    </select>
                                     
                                    
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>
                                   
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="first_name"
                                    class="col-md-4 col-form-label text-md-right">First Name</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control"
                                        required />                                
                                        
                                  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle_name"
                                    class="col-md-4 col-form-label text-md-right">Middle Name</label>

                                <div class="col-md-6">
                                    <input id="middle_name" type="text" class="form-control"
                                        required />                                
                                        
                                  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_name"
                                    class="col-md-4 col-form-label text-md-right">last Name</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control"
                                        required />                                
                                        
                                  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">Address</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control"
                                        required />                                
                                        
                                  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="zipcode"
                                    class="col-md-4 col-form-label text-md-right">Zip Code</label>

                                <div class="col-md-6">
                                    <input id="zipcode" type="text" class="form-control"
                                        required />                                
                                        
                                  
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>