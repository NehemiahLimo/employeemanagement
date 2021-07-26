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
                                <label for="country"
                                    class="col-md-4 col-form-label text-md-right">Country</label>

                                <div class="col-md-6">
                                    <select v-model="form.country_id" class="form-control" id="country"
                                       name="country" value="" required
                                        aria-label="Default select example">
                                        <option selected  v-for="country in countries" :key="country.id" :value="country.id" >{{ country.name }}</option>
                                        
                                            
                                        
                                    </select>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="state"
                                    class="col-md-4 col-form-label text-md-right">State</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="state"
                                       name="state" value="" required
                                        aria-label="Default select example">
                                        <option selected>--Select State--</option>
                                        
                                            <option value=""></option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="department"
                                    class="col-md-4 col-form-label text-md-right">Department</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="department"
                                       name="department" value="" required
                                        aria-label="Default select example">
                                        <option selected>--Select department--</option>
                                        
                                            <option value=""></option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city"
                                    class="col-md-4 col-form-label text-md-right">City</label>

                                <div class="col-md-6">
                                    <select  class="form-control" id="city"
                                       name="city" value="" required
                                        aria-label="Default select example">
                                        <option selected>--Select city--</option>
                                        
                                            <option value=""></option>
                                        
                                    </select>
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
                            <div class="form-group row mt-2">
                                <label for="zipcode"
                                    class="col-md-4 col-form-label text-md-right">Birth Date</label>

                                <div class="col-md-6">
                                    <datepicker input-class="form-control" ></datepicker>
                                  
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="zipcode"
                                    class="col-md-4 col-form-label text-md-right"> Date Hired</label>

                                <div class="col-md-6">
                                    <datepicker input-class="form-control" ></datepicker>
                                  
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
import Datepicker from 'vuejs-datepicker';

export default {
components: {
    Datepicker
  },
  data(){
   return {
    countries: [],
    states: [],
    cities: [],
    departments: [],
    form: {
        first_name:'',
        middle_name:'',
        last_name:'',
        
        address:'',
        country_id: '',
        state_id: '',
        city_id: '',
        department_id: '',
        zipcode: '',        
        birth_date: null,
        hired_date: null 
    }
   }
  },

  created(){
    this.getCountries();
  },

  
  methods:{
    getCountries(){
      axios.get('/api/employees/nchi').then(res =>{
        this.countries = res.data
        //console.log(res.data)
      }).catch(error =>{
        //console.log(error)
      })
    }
  }
}
</script>

<style>

</style>